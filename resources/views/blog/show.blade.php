@extends('layouts.app')

@push('styles')
<style>
    .article-content {
        font-size: 1.1rem;
        line-height: 1.85;
        color: var(--color-gray-800);
    }
    .article-content h2 {
        font-size: 1.75rem;
        font-weight: 800;
        color: var(--color-navy);
        margin: 2.5rem 0 1rem;
        line-height: 1.3;
    }
    .article-content h3 {
        font-size: 1.4rem;
        font-weight: 700;
        color: var(--color-navy);
        margin: 2rem 0 0.75rem;
        line-height: 1.35;
    }
    .article-content p {
        margin-bottom: 1.5rem;
    }
    .article-content ul, .article-content ol {
        margin: 1.5rem 0;
        padding-left: 1.75rem;
    }
    .article-content li {
        margin-bottom: 0.6rem;
    }
    .article-content img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        margin: 2rem 0;
        box-shadow: var(--shadow-md);
    }
    .article-content a {
        color: var(--color-red);
        text-decoration: underline;
        font-weight: 600;
    }
    .article-content a:hover {
        color: var(--color-navy);
    }
    .article-content blockquote {
        border-left: 4px solid var(--color-red);
        background: var(--color-gray-50);
        padding: 1.25rem 1.75rem;
        margin: 2rem 0;
        border-radius: 0 12px 12px 0;
        font-style: italic;
        color: var(--color-gray-700);
    }
    .blog-single-layout {
        display: grid;
        grid-template-columns: minmax(0, 1fr) 360px;
        gap: 3.5rem;
        align-items: start;
        width: 100%;
        max-width: 100%;
    }
    .blog-single-layout article {
        min-width: 0;
        max-width: 100%;
        overflow: hidden;
    }
    .blog-single-layout aside {
        min-width: 0;
        width: 100%;
        max-width: 360px;
    }
    .article-content {
        min-width: 0;
        max-width: 100%;
        word-wrap: break-word;
        overflow-wrap: break-word;
    }
    .article-content * {
        box-sizing: border-box;
    }
    .article-content img {
        max-width: 100% !important;
        height: auto !important;
        border-radius: 12px;
        margin: 2rem 0;
        box-shadow: var(--shadow-md);
        display: block;
    }
    .article-content table {
        width: 100% !important;
        max-width: 100% !important;
        display: block;
        overflow-x: auto;
    }
    .article-content iframe,
    .article-content embed,
    .article-content video {
        max-width: 100% !important;
        height: auto !important;
    }
    @media (max-width: 1024px) {
        .blog-single-layout {
            grid-template-columns: 1fr !important;
            gap: 2.5rem !important;
        }
        .blog-single-layout aside {
            max-width: 100% !important;
        }
    }
</style>
@endpush

@section('content')
{{-- Breadcrumb Navigation --}}
    <div style="background: #f8fafc; border-bottom: 1px solid #e2e8f0; padding: 0.875rem 0;">
        <div class="container">
            <nav aria-label="breadcrumb" style="font-size: 0.875rem; color: #64748b; display: flex; align-items: center; gap: 0.5rem; flex-wrap: wrap;">
                <a href="{{ route('home') }}" style="color: var(--color-primary-blue); text-decoration: none; font-weight: 600;">Home</a>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
                <a href="{{ route('blog.index') }}" style="color: var(--color-primary-blue); text-decoration: none; font-weight: 600;">Legal Blog</a>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
                <span style="color: #0f172a; font-weight: 600;">{{ \Illuminate\Support\Str::limit($post->title, 50) }}</span>
            </nav>
        </div>
    </div>

    {{-- Main Article & Sidebar Grid --}}
    <section class="section" style="background: #f8fafc; padding-top: 2.5rem; padding-bottom: 5rem;">
        <div class="container">
            <div class="blog-single-layout">
                
                {{-- Main Article Card --}}
                <article class="article-main-card">
                    <header style="margin-bottom: 2rem;">
                        <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem; flex-wrap: wrap;">
                            <span class="badge badge-red" style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.05em;">
                                {{ $post->tags->isNotEmpty() ? $post->tags->first()->name : 'Legal Insight' }}
                            </span>
                            <span style="color: #64748b; font-size: 0.875rem; font-weight: 500;">New York Injury Rights</span>
                        </div>

                        <h1 style="font-size: clamp(1.85rem, 3.5vw, 2.5rem); font-weight: 900; color: #0f172a; line-height: 1.25; margin-bottom: 1.25rem; letter-spacing: -0.02em;">
                            {{ $post->title }}
                        </h1>

                        <div style="display: flex; align-items: center; justify-content: space-between; gap: 1rem; color: #64748b; font-size: 0.9375rem; padding-bottom: 1.5rem; border-bottom: 1px solid #e2e8f0; flex-wrap: wrap;">
                            <div style="display: flex; align-items: center; gap: 0.75rem;">
                                <img src="{{ asset('assets/media/branding/shapiro-badge-round.png') }}" alt="Adam L. Shapiro" style="width: 36px; height: 36px; border-radius: 50%; object-fit: contain; border: 1.5px solid #0f172a; background: #ffffff;">
                                <div>
                                    <span style="display: block; font-size: 0.75rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.05em; font-weight: 700;">Written By</span>
                                    <strong style="color: #0f172a; font-size: 0.9375rem;">{{ (!empty($post->author_name) && strtolower($post->author_name) !== 'admin') ? $post->author_name : 'Attorney Adam L. Shapiro' }}</strong>
                                </div>
                            </div>

                            <div style="display: flex; align-items: center; gap: 1.25rem; flex-wrap: wrap;">
                                <span style="display: inline-flex; align-items: center; gap: 0.4rem;">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                    {{ $post->published_at ? $post->published_at->format('F j, Y') : 'Recent' }}
                                </span>
                                <span style="display: inline-flex; align-items: center; gap: 0.4rem;">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                    {{ $post->estimated_reading_time }} min read
                                </span>
                            </div>
                        </div>
                    </header>

                    {{-- Featured Hero Image --}}
                    @if($post->featured_image)
                    <div style="margin-bottom: 2.5rem; border-radius: 14px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 4px 12px rgba(0,0,0,0.06);">
                        <img src="{{ asset(ltrim($post->featured_image, '/')) }}" alt="{{ $post->featured_image_alt ?? $post->title }}" style="width: 100%; height: auto; max-height: 480px; object-fit: cover; display: block;" loading="lazy" onerror="this.onerror=null;this.src='{{ asset('assets/media/branding/shapiro-logo.png') }}';this.style.objectFit='contain';this.style.background='#0b1b3d';this.style.padding='3rem';">
                    </div>
                    @endif

                    {{-- Full Dynamic Content From DB --}}
                    <div class="article-content">
                        {!! $post->content !!}
                    </div>

                    {{-- Post Tags --}}
                    @if($post->tags->count() > 0)
                    <div style="margin-top: 3rem; padding-top: 1.5rem; border-top: 1px solid #e2e8f0; display: flex; align-items: center; gap: 0.75rem; flex-wrap: wrap;">
                        <strong style="font-size: 0.8125rem; color: #64748b; text-transform: uppercase; letter-spacing: 0.05em;">Related Topics:</strong>
                        @foreach($post->tags as $t)
                            <a href="{{ route('blog.tag', $t->slug) }}" class="blog-tag-pill">
                                #{{ $t->name }}
                            </a>
                        @endforeach
                    </div>
                    @endif

                    {{-- Redesigned Author Profile Box (Solves media_1790187369464.png) --}}
                    <div class="blog-author-box">
                        <div class="blog-author-avatar-wrap">
                            <img src="{{ asset('assets/media/attorneys/adam-shapiro-portrait.png') }}" alt="Adam L. Shapiro" class="blog-author-avatar" onerror="this.onerror=null;this.src='{{ asset('assets/media/branding/shapiro-badge-round.png') }}';">
                        </div>
                        <div class="blog-author-info">
                            <div class="blog-author-header">
                                <h3 class="blog-author-name">Adam L. Shapiro &amp; Associates, P.C.</h3>
                                <span class="blog-author-title">Lead Trial Counsel</span>
                            </div>
                            <p class="blog-author-bio">
                                Over 30 years fighting aggressively for injury victims across Queens, Brooklyn, Bronx, Manhattan, and Long Island. Admitted in New York and Florida, former insurance defense counsel bringing insider tactical litigation advantages to every case.
                            </p>
                            <div class="blog-author-actions">
                                <a href="tel:+19707427476" class="btn btn-accent btn-sm" style="display: inline-flex; align-items: center; gap: 0.5rem;">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                                    <span>(970) SHAPIRO</span>
                                </a>
                                <a href="{{ route('contact') }}" class="btn btn-outline-white btn-sm" style="display: inline-flex; align-items: center; gap: 0.5rem;">
                                    <span>Free Case Evaluation &rarr;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                {{-- Sidebar Column --}}
                <aside style="display: flex; flex-direction: column; gap: 2rem; position: sticky; top: 90px;">
                    
                    {{-- Free Consultation CTA Widget --}}
                    <div class="card" style="background: linear-gradient(135deg, #060e22 0%, #0b1b3d 100%); color: #ffffff; padding: 2.25rem 1.75rem; border: 1.5px solid #0b1b3d; box-shadow: 6px 6px 0px #0b1b3d; border-radius: 16px;">
                        <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.75rem;">
                            <span class="badge badge-gold" style="font-size: 0.75rem; text-transform: uppercase; font-weight: 800;">Free Legal Review</span>
                        </div>
                        <h3 style="color: #ffffff; font-size: 1.45rem; font-weight: 800; margin-bottom: 0.75rem; line-height: 1.3;">
                            Injured in New York? Speak to Attorney Adam Shapiro
                        </h3>
                        <p style="color: #cbd5e1; font-size: 0.9375rem; line-height: 1.6; margin-bottom: 1.5rem;">
                            Get direct answers before insurance adjusters lock in statements. Zero upfront fees — we only get paid when we recover money for you.
                        </p>
                        <a href="tel:+19707427476" class="btn btn-accent" style="display: inline-flex; align-items: center; justify-content: center; gap: 0.5rem; width: 100%; margin-bottom: 0.75rem; font-size: 1.05rem; font-weight: 700;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                            <span>Call (970) SHAPIRO</span>
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-white" style="display: block; width: 100%; text-align: center; font-size: 0.9375rem;">
                            Request Online Case Review &rarr;
                        </a>
                    </div>

                    {{-- Recent Posts Widget --}}
                    <div class="card" style="background: #ffffff; border: 1.5px solid #0b1b3d; box-shadow: 6px 6px 0px #0b1b3d; border-radius: 16px; padding: 1.75rem;">
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #0b1b3d; margin-bottom: 1.25rem; padding-bottom: 0.75rem; border-bottom: 2px solid #f1f5f9; display: flex; align-items: center; justify-content: space-between;">
                            <span>Recent Legal Insights</span>
                            <span style="font-size: 0.75rem; color: #64748b; font-weight: 600;">UPDATED</span>
                        </h3>
                        <div style="display: flex; flex-direction: column; gap: 1rem;">
                            @foreach($recentPosts as $recent)
                                <div style="padding-bottom: 1rem; border-bottom: 1px solid #f1f5f9;">
                                    <a href="{{ route('blog.show', $recent->slug) }}" style="color: #0b1b3d; text-decoration: none; font-weight: 700; font-size: 0.9375rem; line-height: 1.45; display: block; margin-bottom: 0.35rem; transition: color 0.2s ease;">
                                        {{ $recent->title }}
                                    </a>
                                    <span style="font-size: 0.8125rem; color: #94a3b8; display: inline-flex; align-items: center; gap: 0.35rem;">
                                        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                        {{ $recent->published_at ? $recent->published_at->format('M d, Y') : '' }}
                                    </span>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- Practice Areas Quick Links --}}
                    <div class="card" style="background: #ffffff; border: 1.5px solid #0b1b3d; box-shadow: 6px 6px 0px #0b1b3d; border-radius: 16px; padding: 1.75rem;">
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #0b1b3d; margin-bottom: 1.25rem; padding-bottom: 0.75rem; border-bottom: 2px solid #f1f5f9;">
                            Practice Areas
                        </h3>
                        <div style="display: flex; flex-direction: column; gap: 0.5rem; font-size: 0.9375rem;">
                            <a href="{{ route('practice.personal-injury') }}" style="color: #334155; text-decoration: none; font-weight: 600; padding: 0.5rem 0; border-bottom: 1px solid #f1f5f9; display: flex; justify-content: space-between; align-items: center;"><span>Personal Injury</span> <span style="color: var(--color-accent-red);">&rarr;</span></a>
                            <a href="{{ route('practice.motor-vehicle') }}" style="color: #334155; text-decoration: none; font-weight: 600; padding: 0.5rem 0; border-bottom: 1px solid #f1f5f9; display: flex; justify-content: space-between; align-items: center;"><span>Motor Vehicle Accidents</span> <span style="color: var(--color-accent-red);">&rarr;</span></a>
                            <a href="{{ route('practice.slip-trip-fall') }}" style="color: #334155; text-decoration: none; font-weight: 600; padding: 0.5rem 0; border-bottom: 1px solid #f1f5f9; display: flex; justify-content: space-between; align-items: center;"><span>Slip, Trip &amp; Fall</span> <span style="color: var(--color-accent-red);">&rarr;</span></a>
                            <a href="{{ route('practice.workers-compensation') }}" style="color: #334155; text-decoration: none; font-weight: 600; padding: 0.5rem 0; border-bottom: 1px solid #f1f5f9; display: flex; justify-content: space-between; align-items: center;"><span>Workers' Compensation</span> <span style="color: var(--color-accent-red);">&rarr;</span></a>
                            <a href="{{ route('practice.medical-malpractice') }}" style="color: #334155; text-decoration: none; font-weight: 600; padding: 0.5rem 0; border-bottom: 1px solid #f1f5f9; display: flex; justify-content: space-between; align-items: center;"><span>Medical Malpractice</span> <span style="color: var(--color-accent-red);">&rarr;</span></a>
                            <a href="{{ route('practice.wrongful-death') }}" style="color: #334155; text-decoration: none; font-weight: 600; padding: 0.5rem 0; border-bottom: 1px solid #f1f5f9; display: flex; justify-content: space-between; align-items: center;"><span>Wrongful Death</span> <span style="color: var(--color-accent-red);">&rarr;</span></a>
                            <a href="{{ route('practice.construction-accident') }}" style="color: #334155; text-decoration: none; font-weight: 600; padding: 0.5rem 0; border-bottom: 1px solid #f1f5f9; display: flex; justify-content: space-between; align-items: center;"><span>Construction Accidents</span> <span style="color: var(--color-accent-red);">&rarr;</span></a>
                            <a href="{{ route('practice.ebike-scooter') }}" style="color: #334155; text-decoration: none; font-weight: 600; padding: 0.5rem 0; display: flex; justify-content: space-between; align-items: center;"><span>E-Bike &amp; Scooter Crashes</span> <span style="color: var(--color-accent-red);">&rarr;</span></a>
                        </div>
                    </div>

                </aside>
            </div>
        </div>
    </section>

    {{-- Related Posts Section --}}
    @if($relatedPosts->count() > 0)
    <section class="section" style="background:var(--color-gray-50);border-top:1px solid var(--color-gray-200);">
        <div class="container">
            <div class="text-center" style="max-width:800px;margin:0 auto 3rem;">
                <span class="badge badge-navy">Explore More</span>
                <h2 class="section-title">Related Case Analyses &amp; Articles</h2>
            </div>
            <div class="grid grid-3" style="gap:2rem;">
                @foreach($relatedPosts as $rel)
                    <x-blog-card :post="$rel" />
                @endforeach
            </div>
        </div>
    </section>
    @endif
@endsection
