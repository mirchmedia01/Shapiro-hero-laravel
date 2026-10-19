<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\Tag;
use Tests\TestCase;

class SiteTest extends TestCase
{
    public function test_homepage_is_accessible_and_contains_core_elements(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Adam L. Shapiro');
        $response->assertSee('shapiro-law-firm-reel.mp4');
        $response->assertSee('modern-theme.css');
        $response->assertDontSee('elementor-');
        $response->assertDontSee('elementorFrontendConfig');
    }

    public function test_practice_and_main_pages_are_accessible_and_modern(): void
    {
        $routes = [
            '/about-us/',
            '/services/',
            '/personal-injury-lawyer-new-york/',
            '/any-motor-vehicle/',
            '/slip-trip-fall/',
            '/workers-compensation/',
            '/medical-malpractice/',
            '/wrongful-death/',
            '/construction-accident/',
            '/electrical-bicycle-scooter/',
            '/high-profiles-cases/',
            '/career/',
            '/awards/',
            '/references-recommendations/',
            '/disclaimer/',
            '/privacy-policy/',
            '/terms-conditions/',
            '/attorney-advertising/',
        ];

        foreach ($routes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200, "Failed asserting that {$route} is accessible.");
            $response->assertDontSee('elementor-', false, "Found Elementor class in {$route}");
            $response->assertDontSee('data-elementor', false, "Found data-elementor attribute in {$route}");
            $response->assertSee('class="container"', false, "Missing .container in {$route}");
        }
    }

    public function test_awards_page_is_accessible_and_contains_accolades(): void
    {
        $response = $this->get('/awards/');

        $response->assertStatus(200);
        $response->assertSee('Tactical Excellence');
        $response->assertSee('Accolades');
        $response->assertSee('Award-Winning Legal Representation You Can Trust');
        $response->assertSee('Top 100 Trial Lawyers');
        $response->assertSee('Best Attorneys of America');
        $response->assertSee('AVVO Client\'s Choice', false);
        $response->assertDontSee('elementor-');
    }

    public function test_blog_index_displays_dynamic_posts(): void
    {
        $response = $this->get('/blog/');

        $response->assertStatus(200);
        $response->assertSee('The Evidence Room');
        $response->assertSee('Legal Strategy');
        $response->assertDontSee('elementor-');

        $post = Post::published()->first();
        if ($post) {
            $response->assertSee($post->title);
        }
    }

    public function test_blog_index_has_modern_structure_and_zero_elementor(): void
    {
        $response = $this->get('/blog/');

        $response->assertStatus(200);
        $response->assertSee('The Evidence Room');
        $response->assertSee('class="container"', false);

        // Verify zero legacy Elementor styles, containers, and classes
        $response->assertDontSee('post-4584.css', false);
        $response->assertDontSee('elementor-4584', false);
        $response->assertDontSee('elementor-element', false);
        $response->assertDontSee('e-con-boxed', false);
        $response->assertDontSee('elementor-widget', false);
    }

    public function test_blog_search_and_tag_filtering(): void
    {
        // 1. Search Query
        $response = $this->get('/blog/?s=accident');
        $response->assertStatus(200);
        $response->assertSee('Search results for:', false);

        // 2. Tag Filter
        $tag = Tag::has('posts')->first();
        if ($tag) {
            $tagResponse = $this->get("/blog/tag/{$tag->slug}/");
            $tagResponse->assertStatus(200);
            $tagResponse->assertSee($tag->name);
            $tagResponse->assertSee('Showing articles tagged:', false);
        }
    }

    public function test_single_blog_post_displays_content_and_seo(): void
    {
        $post = Post::published()->first();
        $this->assertNotNull($post);

        $response = $this->get("/blog/{$post->slug}/");

        $response->assertStatus(200);
        $response->assertSee($post->title);
        $response->assertSee('Adam L. Shapiro &amp; Associates', false);
        $response->assertSee('schema.org');
        $response->assertDontSee('wp-content/', false);
        $response->assertDontSee('wp-includes/', false);
        $response->assertDontSee('elementor-');
    }

    public function test_contact_page_renders_with_form_and_map(): void
    {
        $response = $this->get('/contact-us/');

        $response->assertStatus(200);
        $response->assertSee('Get Your Free Case Evaluation');
        $response->assertSee('name="phone"', false);
        $response->assertSee('(970) 742-7476');
        $response->assertSee('Forest Hills, NY');
        $response->assertDontSee('elementor-');
    }

    public function test_contact_form_submission_stores_in_database(): void
    {
        $payload = [
            'name' => 'John Doe Test',
            'phone' => '970-555-0199',
            'email' => 'john.doe@test.com',
            'case_type' => 'Motor Vehicle Accident',
            'message' => 'I was injured in a car crash on the Long Island Expressway and need legal assistance.',
        ];

        $response = $this->post('/contact-us', $payload);

        $response->assertRedirect('/contact-us/');
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_submissions', [
            'name' => 'John Doe Test',
            'phone' => '970-555-0199',
            'email' => 'john.doe@test.com',
            'case_type' => 'Motor Vehicle Accident',
        ]);
    }

    public function test_contact_form_honeypot_rejects_bots(): void
    {
        $payload = [
            'name' => 'Bot Spammer',
            'phone' => '123-456-7890',
            'message' => 'Spam message',
            'website_hp' => 'http://spam.com',
        ];

        $response = $this->post('/contact-us', $payload);
        $response->assertSessionHasErrors('website_hp');
    }

    public function test_contact_form_validates_required_fields(): void
    {
        $response = $this->post('/contact-us', [
            'name' => '',
            'phone' => '',
            'message' => '',
        ]);

        $response->assertSessionHasErrors(['name', 'phone', 'message']);
    }

    public function test_awards_and_references_pages_contain_integrated_contact_form(): void
    {
        $awardsResponse = $this->get('/awards/');
        $awardsResponse->assertStatus(200);
        $awardsResponse->assertSee('contact-form-card', false);
        $awardsResponse->assertSee('Book A Free Consultation');
        $awardsResponse->assertSee('name="website_hp"', false);

        $refResponse = $this->get('/references-recommendations/');
        $refResponse->assertStatus(200);
        $refResponse->assertSee('contact-form-card', false);
        $refResponse->assertSee('Book A Free Consultation');
        $refResponse->assertSee('name="website_hp"', false);
    }

    public function test_sitemap_xml_generates_valid_xml(): void
    {
        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
        $this->assertStringContainsString('text/xml', $response->headers->get('Content-Type'));
        $response->assertSee('<urlset', false);
        $response->assertSee('/personal-injury-lawyer-new-york');

        $post = Post::published()->first();
        if ($post) {
            $response->assertSee('/blog/'.$post->slug);
        }
    }

    public function test_modern_styles_and_zero_elementor_runtimes(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('modern-theme.css', false);
        $response->assertDontSee('elementorFrontendConfig', false);
        $response->assertDontSee('elementor-pro-frontend-js', false);
        $response->assertDontSee('elementor-css', false);
        $response->assertDontSee('widget-nested-carousel-css', false);
    }

    public function test_no_broken_image_paths_in_rendered_views(): void
    {
        $pages = [
            '/',
            '/about-us/',
            '/services/',
            '/contact-us/',
            '/blog/',
            '/high-profiles-cases/',
            '/personal-injury-lawyer-new-york/',
            '/any-motor-vehicle/',
            '/slip-trip-fall/',
            '/workers-compensation/',
            '/medical-malpractice/',
            '/wrongful-death/',
            '/construction-accident/',
            '/electrical-bicycle-scooter/',
        ];

        foreach ($pages as $url) {
            $response = $this->get($url);
            $response->assertStatus(200);
            $response->assertDontSee('wp-content/', false, "Found wp-content in {$url}");
            $response->assertDontSee('wp-includes/', false, "Found wp-includes in {$url}");
            $response->assertSee('assets/', false);
        }
    }

    public function test_legacy_asset_routes_and_contact_email(): void
    {
        // 1. Verify clean mailto email on contact page
        $contactResponse = $this->get('/contact-us/');
        $contactResponse->assertStatus(200);
        $contactResponse->assertSee('mailto:adam@shapirolawoffice.com', false);
        $contactResponse->assertDontSee('__cf_email__', false);
        $contactResponse->assertDontSee('cdn-cgi/l/email-protection', false);

        // 2. Verify backward-compatibility asset fallback route
        $assetResponse = $this->get('/wp-content/uploads/2025/04/shapiro-logo-1.png');
        $this->assertContains($assetResponse->getStatusCode(), [200, 301]);
    }

    public function test_seo_301_redirects(): void
    {
        $redirects = [
            '/practice-areas' => '/services/',
            '/terms-and-conditions' => '/terms-conditions/',
            '/practice-areas/personal-injury-lawyer' => '/personal-injury-lawyer-new-york/',
        ];

        foreach ($redirects as $from => $to) {
            $response = $this->get($from);
            $response->assertRedirect($to);
            $this->assertEquals(301, $response->getStatusCode());
        }
    }

    public function test_footer_structure_and_awards_ribbon(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        // Consultation Banner
        $response->assertSee('Book Consultation Now');

        // Awards Ribbon
        $response->assertSee('Award-Winning Legal Representation');

        // Footer Body & Details
        $response->assertSee('adam@shapirolawoffice.com');
        $response->assertSee('742-7476');
        $response->assertSee('The Law Offices of Adam L. Shapiro &amp; Associates, P.C.', false);

        // Copyright Bar
        $response->assertSee('Mirchmedia');

        // Zero Elementor classes
        $response->assertDontSee('elementor-');
    }

    public function test_recognition_and_statistics_on_homepage(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response->assertSee('$100M+');
        $response->assertSee('25+ Years');
        $response->assertSee('Our Superpower Is Results');
        $response->assertSee('Our Practice Areas');
    }

    public function test_instagram_reels_and_responsive_media(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('ig-reels-section');
        $response->assertSee('Official Instagram Reels');
        $response->assertSee('shapirothehero');
        $response->assertSee('ig-reel-card');
        $response->assertSee('ig-play-trigger');

        // Verify Career page has centered badge
        $career = $this->get('/career/');
        $career->assertStatus(200);
        $career->assertSee('Direct Recruitment');
        $career->assertSee('badge-gold');

        // Verify Blog page has valid images without missing paths
        $blog = $this->get('/blog/');
        $blog->assertStatus(200);
        $blog->assertDontSee('workers-compensation-1.jpg');
        $blog->assertDontSee('medical-coverage-related.png');
        $blog->assertDontSee('services-we-provide.png');
    }

    public function test_press_archives_and_blog_single_layout(): void
    {
        // 1. High Profile Cases Press Archives
        $response = $this->get('/high-profiles-cases/');
        $response->assertStatus(200);
        $response->assertSee('press-archive-grid');
        $response->assertSee('press-filter-nav');
        $response->assertSee('data-filter="all"', false);
        $response->assertSee('data-category="celebrity"', false);
        $response->assertSee('data-category="transit"', false);
        $response->assertSee('data-category="catastrophic"', false);

        // 2. Blog Single Page Layout & Image Bounds
        $post = Post::published()->first();
        if ($post) {
            $blogPostResponse = $this->get("/blog/{$post->slug}/");
            $blogPostResponse->assertStatus(200);
            $blogPostResponse->assertSee('blog-single-layout');
            $blogPostResponse->assertDontSee('display: grid; grid-template-columns: 2fr 1fr', false);
            // Ensure no 404 images from 2026 uploads
            $blogPostResponse->assertDontSee('/assets/uploads/2026/02/');
        }
    }

    public function test_practice_pages_images_and_faq_spacing(): void
    {
        // 1. Personal Injury Page - No broken images
        $pi = $this->get('/personal-injury-lawyer-new-york/');
        $pi->assertStatus(200);
        $pi->assertDontSee('ebike-scooter-accident-lawyer.jpg');
        $pi->assertSee('adam-shapiro-portrait.png');
        $pi->assertSee('class="faq-list"', false);
        $pi->assertSee('class="faq-item"', false);

        // 2. Motor Vehicle Page - No broken images
        $mv = $this->get('/any-motor-vehicle/');
        $mv->assertStatus(200);
        $mv->assertDontSee('ebike-scooter-accident-lawyer.jpg');
        $mv->assertSee('motor-vehicle-accident-lawyer.jpg');

        // 3. Pre-Footer Banner and 24/7 Rapid Response Badge (logo removed per user request)
        $home = $this->get('/');
        $home->assertStatus(200);
        $home->assertSee('pre-footer-banner');
        $home->assertDontSee('pre-footer-logo');
        $home->assertSee('24/7 Rapid Response');
        $home->assertSee('Searching For A Professional Law Firm?');
        $home->assertSee('Book Consultation Now');
    }

    public function test_video_width_practice_card_image_and_banner_redesign(): void
    {
        $home = $this->get('/');
        $home->assertStatus(200);

        // 1. Video caption, autoplay, and badge removal
        $home->assertSee('Adam L. Shapiro in Action');
        $home->assertDontSee('The Shapiro Shield &bull; Official Reel', false);
        $home->assertSee('autoplay', false);
        $home->assertSee('muted', false);

        // 2. Personal injury card uses courthouse photo without cut-off text and single arrow
        $home->assertSee('assets/media/practice-areas/personal-injury-lawyer.jpg');
        $home->assertDontSee('assets/media/practice-areas/personal-injury-banner.png');
        $home->assertDontSee('<span>LEARN MORE &rarr;</span>', false);
        $home->assertSee('<span>LEARN MORE</span>', false);

        // 3. Services directory practice card also uses the clean courthouse photo
        $services = $this->get('/services/');
        $services->assertStatus(200);
        $services->assertSee('assets/media/practice-areas/personal-injury-lawyer.jpg');

        // 4. Pre-footer consultation banner redesign elements
        $home->assertSee('pre-footer-trust-pills');
        $home->assertSee('100% Free Consultation');
        $home->assertSee('pre-footer-actions');
        $home->assertSee('pre-footer-phone-link');
        $home->assertSee('(970) SHAPIRO / 970 742-7476');

        // 5. Workers' compensation deadlines card has no yellow border
        $wc = $this->get(route('practice.workers-compensation'));
        $wc->assertStatus(200);
        $wc->assertDontSee('border: 2px solid var(--color-accent-light);', false);
    }

    public function test_clients_carousel_and_blog_inner_page_redesign_and_site_links(): void
    {
        // 1. Homepage: "What Our Clients Say" Testimonials Slider Section
        $home = $this->get('/');
        $home->assertStatus(200);
        $home->assertSee('What Our');
        $home->assertSee('Clients');
        $home->assertSee('Say');
        $home->assertSee('Real Reviews From Real New Yorkers');
        $home->assertSee('client-reviews-track');
        $home->assertSee('client-review-card');
        $home->assertSee('James Anderson');
        $home->assertSee('Eric Rosenbaum');
        $home->assertSee('Lance Becker');
        $home->assertSee('APNAN AHMED');
        $home->assertSee('assets/media/clients/lance-becker.png');
        $home->assertSee('assets/media/clients/apnan-ahmed.jpg');
        $home->assertSee('assets/media/clients/james-anderson.jpg');
        $home->assertSee('assets/media/clients/eric-rosenbaum.jpg');
        $home->assertSee('assets/media/clients/philip-k.jpg');
        $home->assertSee('assets/media/clients/maria-gonzalez.jpg');
        $home->assertSee('assets/media/clients/google-icon.png');
        $home->assertSee('client-prev-btn');
        $home->assertSee('client-next-btn');
        $home->assertSee('client-pagination-dots');

        // 2. Blog Inner Page: Visit Main Website Link Fixed (no naked "/")
        $blogPost = $this->get('/blog/what-to-do-after-an-e-bike-or-electric-scooter-accident-in-new-york/');
        $blogPost->assertStatus(200);
        $blogPost->assertSee('Visit the main website');
        $blogPost->assertSee('https://shapirothehero.com');
        $blogPost->assertDontSee('<a href="/">/</a>', false);

        // 3. Blog Inner Page: Redesigned Editorial Layout & Author Profile Box
        $blogPost->assertSee('article-main-card');
        $blogPost->assertSee('blog-author-box');
        $blogPost->assertSee('Lead Trial Counsel');
        $blogPost->assertSee('blog-author-avatar');
        $blogPost->assertSee('blog-tag-pill');
        $blogPost->assertSee('(970) SHAPIRO');
    }

    public function test_trailing_slash_enforcement_and_redirection(): void
    {
        $urls = [
            '/about-us' => '/about-us/',
            '/services' => '/services/',
            '/blog' => '/blog/',
            '/contact-us' => '/contact-us/',
            '/career' => '/career/',
            '/awards' => '/awards/',
        ];

        foreach ($urls as $noSlash => $withSlash) {
            $response = $this->get($noSlash);
            $response->assertStatus(301);
            $response->assertRedirect($withSlash);
        }
    }

    public function test_all_pages_have_hero_banner_and_proper_background_styles(): void
    {
        // 1. Homepage has hero section and no 'HD • Full Audio'
        $home = $this->get('/');
        $home->assertStatus(200);
        $home->assertSee('hero-section');
        $home->assertDontSee('HD &bull; Full Audio', false);

        // 2. References page has hero section
        $references = $this->get('/references-recommendations/');
        $references->assertStatus(200);
        $references->assertSee('hero-section');
        $references->assertSee('References &amp;', false);
        $references->assertSee('Recommendations');

        // 3. About page has hero section
        $about = $this->get('/about-us/');
        $about->assertStatus(200);
        $about->assertSee('hero-section');

        // 4. CSS contains proper hero styling
        $css = file_get_contents(public_path('assets/css/modern-theme.css'));
        $this->assertStringContainsString('.hero-section', $css);
        $this->assertFileExists(public_path('assets/media/branding/hero-bg-court.jpg'));

        // 5. Footer social buttons are circular with dedicated styling
        $home->assertSee('footer-social-btn');
        $this->assertStringContainsString('.footer-social-btn', $css);
    }
}
