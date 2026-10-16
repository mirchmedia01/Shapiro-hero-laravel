@extends('layouts.app')

@section('body_class', 'blog-index-page')

@section('content')
{{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            <div class="hero-grid">
                <div>
                    <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(220, 38, 38, 0.15); border: 1px solid rgba(220, 38, 38, 0.4); padding: 0.4rem 1rem; border-radius: var(--radius-full); margin-bottom: 1.5rem;">
                        <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: #ef4444;"></span>
                        <span style="font-size: 0.8125rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.1em; color: #fca5a5;">The Evidence Room</span>
                    </div>

                    <h1 class="heading-xl" style="color: #ffffff; margin-bottom: 1.5rem;">
                        Legal Strategy &amp; <br>
                        <span style="color: var(--color-accent-light);">Case Briefs</span> From The Hero
                    </h1>

                    <p style="font-size: 1.125rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 2rem; max-width: 620px;">
                        In-depth case analyses, New York statutory updates, and strategic litigation guides authored by Attorney Adam L. Shapiro &amp; Associates.
                    </p>

                    <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center;">
                        <a href="#articles" class="btn btn-accent btn-lg">
                            <span>Browse Case Briefs</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-white btn-lg">
                            <span>Free Case Review</span>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="hero-media-card">
                        <img src="{{ asset('assets/media/practice-areas/personal-injury-banner.png') }}" alt="The Evidence Room - Legal Insights" loading="eager">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem 1.25rem 1rem; background: linear-gradient(to top, rgba(10,25,47,0.92) 0%, rgba(10,25,47,0.6) 60%, transparent 100%);">
                            <span class="badge badge-gold" style="margin-bottom: 0.5rem; display: inline-flex;">The Evidence Room</span>
                            <div style="color: #ffffff; font-weight: 800; font-size: 1.15rem;">New York Personal Injury &amp; Trial Law Insights</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Articles Grid --}}
    <section class="section" style="padding-top: 3.5rem;" id="articles">
        <div class="container">
            {{-- Filter Result Notification (if accessed via search or tag query) --}}
            @if(isset($tag))
                <div style="background: #eff6ff; border: 1px solid #bfdbfe; border-radius: var(--radius-md); padding: 0.75rem 1.25rem; display: inline-flex; align-items: center; gap: 1rem; margin-bottom: 2rem;">
                    <span style="font-size: 0.9375rem; color: var(--color-primary-blue); font-weight: 600;">
                        Showing articles tagged: <strong>{{ $tag->name }}</strong>
                    </span>
                    <a href="{{ route('blog.index') }}" style="color: var(--color-accent-red); font-weight: 700; text-decoration: none; font-size: 0.875rem;">&times; Clear filter</a>
                </div>
            @elseif(!empty($search))
                <div style="background: #eff6ff; border: 1px solid #bfdbfe; border-radius: var(--radius-md); padding: 0.75rem 1.25rem; display: inline-flex; align-items: center; gap: 1rem; margin-bottom: 2rem;">
                    <span style="font-size: 0.9375rem; color: var(--color-primary-blue); font-weight: 600;">
                        Search results for: "<strong>{{ $search }}</strong>" ({{ $posts->total() }} articles found)
                    </span>
                    <a href="{{ route('blog.index') }}" style="color: var(--color-accent-red); font-weight: 700; text-decoration: none; font-size: 0.875rem;">&times; View all</a>
                </div>
            @endif
            @if($posts->count() > 0)
                <div class="grid grid-3" style="gap: 2rem;">
                    @foreach($posts as $post)
                        <x-blog-card :post="$post" />
                    @endforeach
                </div>

                {{-- Pagination Component --}}
                <div style="margin-top: 3.5rem;">
                    {{ $posts->withQueryString()->links('partials.pagination') }}
                </div>
            @else
                <div class="card" style="text-align: center; padding: 4rem 2rem; max-width: 600px; margin: 2rem auto;">
                    <div style="display:flex;justify-content:center;margin-bottom: 1rem; color: var(--color-primary-blue);">
                        <x-icon name="search" size="48" />
                    </div>
                    <h3 style="font-size: 1.5rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem;">No Articles Found</h3>
                    <p style="color: var(--color-text-muted); margin-bottom: 1.5rem;">No legal guides or case briefs matched your search criteria. Please try another search term.</p>
                    <a href="{{ route('blog.index') }}" class="btn btn-primary">
                        View All Articles
                    </a>
                </div>
            @endif
        </div>
    </section>
@endsection
