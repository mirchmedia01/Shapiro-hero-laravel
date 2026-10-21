@props(['post'])

<article class="card blog-card" style="padding: 0; overflow: hidden; height: 100%; display: flex; flex-direction: column;">
    {{-- Card Thumbnail Container --}}
    <div style="position: relative; overflow: hidden; aspect-ratio: 16/10; min-height: 230px; background-color: #f1f5f9;">
        <a href="{{ route('blog.show', $post->slug) }}" style="display: block; width: 100%; height: 100%;">
            @if($post->featured_image)
                <img loading="lazy" decoding="async" src="{{ asset(ltrim($post->featured_image, '/')) }}" alt="{{ $post->featured_image_alt ?? $post->title }}" style="width: 100%; height: 100%; object-fit: cover; object-position: center top; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'" onerror="this.onerror=null;this.src='{{ asset('assets/media/branding/shapiro-logo.png') }}';this.style.objectFit='contain';this.style.background='#0b1b3d';this.style.padding='2rem';">
            @else
                <img loading="lazy" decoding="async" src="{{ asset('assets/media/branding/shapiro-logo.png') }}" alt="{{ $post->title }}" style="width: 100%; height: 100%; object-fit: contain; padding: 2rem; background: #0b1b3d;">
            @endif
        </a>
        @if($post->tags->isNotEmpty())
            <span class="badge badge-blue" style="position: absolute; top: 1rem; left: 1rem; backdrop-filter: blur(8px); background: rgba(255,255,255,0.95);">
                {{ $post->tags->first()->name }}
            </span>
        @endif
    </div>

    {{-- Card Body --}}
    <div class="blog-card-body" style="padding: 1.65rem 1.45rem; display: flex; flex-direction: column; flex-grow: 1;">
        <div style="display: flex; align-items: center; gap: 0.75rem; font-size: 0.8125rem; color: var(--color-text-muted); margin-bottom: 0.75rem;">
            <span>{{ $post->published_at ? $post->published_at->format('M d, Y') : 'Recent' }}</span>
            <span>&bull;</span>
            <span>{{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min read</span>
        </div>

        <h3 style="font-size: 1.3rem; font-weight: 800; line-height: 1.35; margin-bottom: 0.75rem; color: var(--color-primary);">
            <a href="{{ route('blog.show', $post->slug) }}" style="color: inherit;" onmouseover="this.style.color='var(--color-primary-blue)'" onmouseout="this.style.color='var(--color-primary)'">
                {{ $post->title }}
            </a>
        </h3>

        <p style="font-size: 0.95rem; color: #475569; line-height: 1.65; margin-bottom: 1.5rem; flex-grow: 1;">
            {{ \Illuminate\Support\Str::limit(strip_tags($post->excerpt ?: $post->content), 140) }}
        </p>

        {{-- Card Action / Centered Read Article Button --}}
        <div class="blog-card-action" style="margin-top: auto; display: flex; align-items: center; justify-content: center; width: 100%;">
            <a href="{{ route('blog.show', $post->slug) }}" class="blog-read-btn" aria-label="Read Article: {{ $post->title }}">
                <span>Read Article</span>
                <svg class="blog-btn-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14m-7-7 7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</article>
