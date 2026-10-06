<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

#[Signature('app:import-wordpress {--base=https://shapirothehero.com : WordPress site base URL} {--fresh-media : Re-download featured images even if they exist}')]
#[Description('Import all blogs (posts, categories, tags, featured images, SEO) from the WordPress site into the local database')]
class ImportWordPress extends Command
{
    /** @var array<int, string> */
    protected array $authorCache = [];

    public function handle(): int
    {
        /** @var string $base */
        $base = rtrim((string) $this->option('base'), '/');
        $freshMedia = (bool) $this->option('fresh-media');

        $this->info("Importing WordPress content from {$base}");

        $categoriesByWpId = $this->importCategories($base);
        $tagsByWpId = $this->importTags($base);
        $imported = $this->importPosts($base, $categoriesByWpId, $tagsByWpId, $freshMedia);

        $this->newLine();
        $this->info('Done. Categories: '.count($categoriesByWpId).', Tags: '.count($tagsByWpId).", Posts: {$imported}.");

        return self::SUCCESS;
    }

    /**
     * @return array<int, Category>
     */
    protected function importCategories(string $base): array
    {
        $this->info('Fetching categories...');
        $items = $this->fetchAll("{$base}/wp-json/wp/v2/categories", ['per_page' => 100]);

        $map = [];
        foreach ($items as $item) {
            $category = Category::updateOrCreate(
                ['wp_id' => $item['id']],
                [
                    'name' => html_entity_decode(strip_tags($item['name'] ?? '')),
                    'slug' => $item['slug'] ?? Str::slug($item['name'] ?? ''),
                    'description' => isset($item['description']) ? trim(strip_tags($item['description'])) ?: null : null,
                ]
            );
            $map[(int) $item['id']] = $category;
        }

        $this->info('Categories imported: '.count($map));

        return $map;
    }

    /**
     * @return array<int, Tag>
     */
    protected function importTags(string $base): array
    {
        $this->info('Fetching tags...');
        $items = $this->fetchAll("{$base}/wp-json/wp/v2/tags", ['per_page' => 100]);

        $map = [];
        foreach ($items as $item) {
            $tag = Tag::updateOrCreate(
                ['wp_id' => $item['id']],
                [
                    'name' => html_entity_decode(strip_tags($item['name'] ?? '')),
                    'slug' => $item['slug'] ?? Str::slug($item['name'] ?? ''),
                ]
            );
            $map[(int) $item['id']] = $tag;
        }

        $this->info('Tags imported: '.count($map));

        return $map;
    }

    /**
     * @param  array<int, Category>  $categoriesByWpId
     * @param  array<int, Tag>  $tagsByWpId
     */
    protected function importPosts(string $base, array $categoriesByWpId, array $tagsByWpId, bool $freshMedia): int
    {
        $this->info('Fetching posts...');
        $items = $this->fetchAll("{$base}/wp-json/wp/v2/posts", ['per_page' => 100, '_embed' => 1]);

        $bar = $this->output->createProgressBar(count($items));
        $bar->start();

        $count = 0;
        foreach ($items as $item) {
            $this->importSinglePost($base, $item, $categoriesByWpId, $tagsByWpId, $freshMedia);
            $count++;
            $bar->advance();
        }

        $bar->finish();

        return $count;
    }

    /**
     * @param  array<string, mixed>  $item
     * @param  array<int, Category>  $categoriesByWpId
     * @param  array<int, Tag>  $tagsByWpId
     */
    protected function importSinglePost(string $base, array $item, array $categoriesByWpId, array $tagsByWpId, bool $freshMedia): void
    {
        $title = html_entity_decode(strip_tags($item['title']['rendered'] ?? 'Untitled'));
        $slug = $item['slug'] ?? Str::slug($title);
        $content = (string) ($item['content']['rendered'] ?? '');
        $excerptRaw = (string) ($item['excerpt']['rendered'] ?? '');
        $excerpt = Str::limit(trim(preg_replace('/\s+/', ' ', strip_tags(html_entity_decode($excerptRaw))) ?? ''), 500, '...');
        $authorName = $this->resolveAuthorName($base, (int) ($item['author'] ?? 0));

        $publishedAt = $this->parseDate($item['date_gmt'] ?? $item['date'] ?? null);
        $updatedAt = $this->parseDate($item['modified_gmt'] ?? $item['modified'] ?? null);

        /** @var array<string, mixed> $yoast */
        $yoast = $item['yoast_head_json'] ?? [];
        $metaTitle = $yoast['title'] ?? $title;
        $metaDescription = $yoast['description'] ?? ($excerpt ?: null);
        $canonical = $yoast['canonical'] ?? ($item['link'] ?? null);
        $metaKeywords = isset($yoast['schema']['@graph'][0]['keywords'])
            ? (is_array($yoast['schema']['@graph'][0]['keywords']) ? implode(', ', $yoast['schema']['@graph'][0]['keywords']) : (string) $yoast['schema']['@graph'][0]['keywords'])
            : null;
        if (! $metaKeywords && ! empty($item['_embedded']['wp:term'][1])) {
            $names = collect($item['_embedded']['wp:term'][1])->pluck('name')->filter()->take(10)->all();
            $metaKeywords = $names ? implode(', ', $names) : null;
        }

        [$featuredImage, $featuredImageAlt] = $this->resolveFeaturedImage($base, $item, $slug, $freshMedia);

        $post = Post::updateOrCreate(
            ['wp_id' => $item['id']],
            [
                'title' => $title,
                'slug' => $slug,
                'excerpt' => $excerpt ?: null,
                'content' => $content,
                'featured_image' => $featuredImage,
                'featured_image_alt' => $featuredImageAlt,
                'author_name' => $authorName,
                'meta_title' => Str::limit((string) $metaTitle, 255),
                'meta_description' => $metaDescription,
                'meta_keywords' => $metaKeywords ? Str::limit($metaKeywords, 255) : null,
                'canonical_url' => $canonical,
                'seo_metadata' => $yoast ? ['yoast' => $yoast] : null,
                'is_published' => ($item['status'] ?? 'publish') === 'publish',
                'published_at' => $publishedAt,
            ]
        );

        // Preserve WP modified timestamp.
        if ($updatedAt) {
            $post->forceFill(['updated_at' => $updatedAt])->saveQuietly();
        }

        // Sync categories / tags (skip uncategorized).
        $categoryIds = collect($item['categories'] ?? [])
            ->map(fn ($id) => $categoriesByWpId[(int) $id] ?? null)
            ->filter()
            ->reject(fn (Category $c) => $c->slug === 'uncategorized')
            ->map(fn (Category $c) => $c->id)
            ->all();
        $post->categories()->sync($categoryIds);

        $tagIds = collect($item['tags'] ?? [])
            ->map(fn ($id) => $tagsByWpId[(int) $id] ?? null)
            ->filter()
            ->map(fn (Tag $t) => $t->id)
            ->all();
        $post->tags()->sync($tagIds);
    }

    protected function resolveAuthorName(string $base, int $authorId): string
    {
        if ($authorId <= 0) {
            return 'admin';
        }

        if (isset($this->authorCache[$authorId])) {
            return $this->authorCache[$authorId];
        }

        try {
            $response = Http::timeout(20)->get("{$base}/wp-json/wp/v2/users/{$authorId}");
            if ($response->successful()) {
                $name = (string) ($response->json('name') ?? $response->json('slug') ?? 'admin');

                return $this->authorCache[$authorId] = $name ?: 'admin';
            }
        } catch (\Throwable) {
            // fall through to default
        }

        return $this->authorCache[$authorId] = 'admin';
    }

    /**
     * @param  array<string, mixed>  $item
     * @return array{0: ?string, 1: ?string}
     */
    protected function resolveFeaturedImage(string $base, array $item, string $slug, bool $freshMedia): array
    {
        $media = $item['_embedded']['wp:featuredmedia'][0] ?? null;
        if (! is_array($media)) {
            // Fall back to a direct media lookup when _embed missed it.
            $mediaId = (int) ($item['featured_media'] ?? 0);
            if ($mediaId > 0) {
                try {
                    $response = Http::timeout(20)->get("{$base}/wp-json/wp/v2/media/{$mediaId}");
                    if ($response->successful()) {
                        $media = $response->json();
                    }
                } catch (\Throwable) {
                    $media = null;
                }
            }
        }

        if (! is_array($media) || empty($media['source_url'])) {
            return [null, null];
        }

        $sourceUrl = (string) $media['source_url'];
        $alt = isset($media['alt_text']) && $media['alt_text'] !== ''
            ? (string) $media['alt_text']
            : (html_entity_decode(strip_tags($item['title']['rendered'] ?? '')) ?: null);

        $extension = strtolower(pathinfo(parse_url($sourceUrl, PHP_URL_PATH) ?? '', PATHINFO_EXTENSION));
        if (! in_array($extension, ['jpg', 'jpeg', 'png', 'webp', 'gif'], true)) {
            $extension = 'jpg';
        }

        $relativePath = "assets/uploads/blog/{$slug}.{$extension}";
        $absolutePath = public_path($relativePath);

        if (! $freshMedia && file_exists($absolutePath)) {
            return [$relativePath, $alt];
        }

        try {
            @mkdir(dirname($absolutePath), 0755, true);
            $response = Http::timeout(60)->get($sourceUrl);
            if ($response->successful() && $response->body() !== '') {
                file_put_contents($absolutePath, $response->body());

                return [$relativePath, $alt];
            }
        } catch (\Throwable $e) {
            $this->warn("Image download failed for {$slug}: {$e->getMessage()}");
        }

        // Download failed — leave null so views fall back to the logo.
        return [null, $alt];
    }

    protected function parseDate(?string $value): ?Carbon
    {
        if (! $value) {
            return null;
        }

        try {
            return Carbon::parse($value);
        } catch (\Throwable) {
            return null;
        }
    }

    /**
     * @param  array<string, mixed>  $params
     * @return array<int, array<string, mixed>>
     */
    protected function fetchAll(string $url, array $params): array
    {
        $page = 1;
        $all = [];

        do {
            $response = Http::timeout(60)->get($url, array_merge($params, ['page' => $page]));
            if ($response->status() === 400 && $page > 1) {
                break; // WP returns 400 when page exceeds total pages.
            }
            $response->throw();
            $items = $response->json();
            if (! is_array($items) || $items === []) {
                break;
            }
            $all = array_merge($all, $items);
            $totalPages = (int) $response->header('X-WP-TotalPages', 1);
            $page++;
        } while ($page <= max($totalPages, 1));

        return $all;
    }
}
