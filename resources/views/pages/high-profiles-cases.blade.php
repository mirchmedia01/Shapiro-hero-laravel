@extends('layouts.app')

@section('body_class', 'high-profile-cases-page')

@section('content')
{{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            <div class="hero-grid">
                <div>
                    <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(220, 38, 38, 0.15); border: 1px solid rgba(220, 38, 38, 0.4); padding: 0.4rem 1rem; border-radius: var(--radius-full); margin-bottom: 1.5rem;">
                        <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: #ef4444;"></span>
                        <span style="font-size: 0.8125rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.1em; color: #fca5a5;">In The News &amp; Court of Public Record</span>
                    </div>

                    <h1 class="heading-xl" style="color: #ffffff; margin-bottom: 1.5rem;">
                        High Profile <br>
                        <span style="color: var(--color-accent-light);">Landmark Cases</span> &amp; Media Victories
                    </h1>

                    <p style="font-size: 1.125rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 2rem; max-width: 620px;">
                        When high-stakes civil litigation reaches the front pages of the <em>New York Post</em> and national news broadcasts, Attorney Adam L. Shapiro delivers aggressive, fearless courtroom representation against celebrities, mega-corporations, and city agencies.
                    </p>

                    <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center; margin-bottom: 2rem;">
                        <a href="tel:+19707427476" class="btn btn-accent btn-lg">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <span>Call (970) SHAPIRO</span>
                        </a>
                        <a href="#consultation" class="btn btn-outline-white btn-lg">
                            <span>Request Free Evaluation</span>
                        </a>
                    </div>

                    <div style="display: flex; gap: 1.75rem; border-top: 1px solid rgba(255,255,255,0.15); padding-top: 1.5rem; flex-wrap: wrap; font-size: 0.875rem; color: #94a3b8;">
                        <span style="display: inline-flex; align-items: center; gap: 0.35rem;"><x-icon name="check" size="14" class="text-gold" /> High-Profile Civil Litigation</span>
                        <span style="display: inline-flex; align-items: center; gap: 0.35rem;"><x-icon name="check" size="14" class="text-gold" /> National Press Coverage</span>
                        <span style="display: inline-flex; align-items: center; gap: 0.35rem;"><x-icon name="check" size="14" class="text-gold" /> 100% Confidential Consultation</span>
                    </div>
                </div>

                <div>
                    <div class="hero-media-card">
                        <img src="{{ asset('assets/media/about/ny-trial-courtroom.jpg') }}" alt="High Profile Landmark Cases &amp; Litigation" loading="eager">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem 1.25rem 1rem; background: linear-gradient(to top, rgba(10,25,47,0.92) 0%, rgba(10,25,47,0.6) 60%, transparent 100%);">
                            <span class="badge badge-gold" style="margin-bottom: 0.5rem; display: inline-flex;">Proven Trial Record</span>
                            <div style="color: #ffffff; font-weight: 800; font-size: 1.15rem;">Featured Across NY Post, Daily News &amp; National TV</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- The Hero in the Media (Overview Section) --}}
    <section class="section section-alt">
        <div class="container">
            <div class="split-section split-video">
                <div>
                    <span class="section-subtitle">Battle-Tested Advocacy</span>
                    <h2 class="heading-lg" style="margin-bottom: 1.25rem;">The Hero in the Media</h2>
                    <p style="font-size: 1.125rem; line-height: 1.8; color: var(--color-text-muted); margin-bottom: 1.5rem;">
                        <a href="{{ route('about') }}" style="color: var(--color-primary-blue); font-weight: 700; text-decoration: underline;">Mr. Shapiro</a> has successfully handled many high profile and newsworthy cases and matters of public interest including, but not limited to, those against celebrities <strong>Sean Combs</strong>, <strong>Steven Patrick Morrissey</strong>, iconic NYC establishment <strong>Patsy’s Pizzeria</strong>, <strong>The Bronx Zoo</strong>, The City of New York’s <strong>Fire Department</strong>, <strong>Police Department</strong>, <strong>Department of Parks and Recreation</strong>, <strong>Department of Sanitation</strong>, and <strong>Department of Environmental Protection</strong>; and <strong>The State of New York</strong>.
                    </p>
                    <p style="font-size: 1.05rem; line-height: 1.7; color: var(--color-text); margin-bottom: 2rem;">
                        Whether facing mega-celebrity defense teams or New York City's Corporation Counsel, Attorney Adam Shapiro uses his deep knowledge of defense playbooks to achieve landmark justice for everyday New Yorkers.
                    </p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="{{ route('contact') }}" class="btn btn-accent">
                            Contact Us Today &rarr;
                        </a>
                        <a href="#press-archives" class="btn btn-outline">
                            View Press Archives &darr;
                        </a>
                    </div>
                </div>

                <div>
                    <div class="card" style="background: #ffffff; border: 2px solid var(--color-border); padding: 2.25rem; box-shadow: var(--shadow-lg);">
                        <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.5rem;">
                            <img src="{{ asset('assets/media/branding/shapiro-badge-round.png') }}" alt="Shapiro Badge" style="width: 50px; height: 50px; object-fit: contain;">
                            <div>
                                <h3 style="font-size: 1.125rem; font-weight: 800; color: var(--color-primary);">Media Outlets That Covered Our Cases</h3>
                                <span style="font-size: 0.8125rem; color: var(--color-text-muted);">Television, Print &amp; Investigative Broadcasts</span>
                            </div>
                        </div>

                        <div style="display: flex; flex-direction: column; gap: 1rem;">
                            <div style="display: flex; align-items: center; gap: 1rem; padding: 0.75rem; background: var(--color-bg-alt); border-radius: var(--radius-md);">
                                <div style="width: 42px; height: 42px; border-radius: 50%; background: rgba(30, 58, 138, 0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: var(--color-primary-blue);">
                                    <x-icon name="newspaper" size="20" />
                                </div>
                                <div>
                                    <strong style="color: var(--color-primary); font-size: 0.9375rem;">New York Post &amp; NY Daily News</strong>
                                    <p style="margin: 0; font-size: 0.8125rem; color: var(--color-text-muted);">Front-page investigative coverage on major municipal and celebrity claims.</p>
                                </div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 1rem; padding: 0.75rem; background: var(--color-bg-alt); border-radius: var(--radius-md);">
                                <div style="width: 42px; height: 42px; border-radius: 50%; background: rgba(220, 38, 38, 0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: var(--color-accent-red);">
                                    <x-icon name="tv" size="20" />
                                </div>
                                <div>
                                    <strong style="color: var(--color-primary); font-size: 0.9375rem;">CBS News, NBC News &amp; ABC 7 NYC</strong>
                                    <p style="margin: 0; font-size: 0.8125rem; color: var(--color-text-muted);">Featured broadcasts on the Bronx Zoo tram failure and transit accidents.</p>
                                </div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 1rem; padding: 0.75rem; background: var(--color-bg-alt); border-radius: var(--radius-md);">
                                <div style="width: 42px; height: 42px; border-radius: 50%; background: rgba(217, 119, 6, 0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0; color: var(--color-accent);">
                                    <x-icon name="scale" size="20" />
                                </div>
                                <div>
                                    <strong style="color: var(--color-primary); font-size: 0.9375rem;">New York Law Journal &amp; VerdictSearch</strong>
                                    <p style="margin: 0; font-size: 0.8125rem; color: var(--color-text-muted);">Published settlements setting precedent across New York State civil law.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Cases That Made Headlines (The 9 Core Case Bento Cards) --}}
    <section class="section">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Courtroom Excellence</span>
                <h2 class="heading-lg">Cases <span style="color: var(--color-primary-blue);">That Made</span> Headlines</h2>
                <p>
                    Mr. Shapiro has successfully handled many high-profile and newsworthy cases of public interest — including those against celebrities, major corporations, New York City agencies, and The State of New York.
                </p>
            </div>

            <div class="grid grid-3" style="gap: 2rem;">
                {{-- Case 1 --}}
                <div class="card" style="border-top: 4px solid var(--color-accent-red);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span class="badge badge-red">Celebrity · Civil Litigation</span>
                        <span style="font-size: 0.8125rem; color: var(--color-text-muted); font-weight: 600;">Media Coverage</span>
                    </div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem;">
                        Sean Combs (Puff Daddy)
                    </h3>
                    <p style="color: var(--color-text-muted); font-size: 0.9375rem; line-height: 1.7; flex-grow: 1;">
                        Represented a client in a high-profile civil matter involving hip-hop mogul Sean Combs, drawing significant media coverage from the <em>New York Post</em> and other major metropolitan outlets.
                    </p>
                </div>

                {{-- Case 2 --}}
                <div class="card" style="border-top: 4px solid var(--color-primary-blue);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span class="badge badge-blue">Celebrity · Civil Litigation</span>
                        <span style="font-size: 0.8125rem; color: var(--color-text-muted); font-weight: 600;">Public Record</span>
                    </div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem;">
                        Steven Patrick Morrissey
                    </h3>
                    <p style="color: var(--color-text-muted); font-size: 0.9375rem; line-height: 1.7; flex-grow: 1;">
                        Litigated a complex civil matter against the internationally known musician and former lead singer of The Smiths, covered extensively by multiple New York news outlets.
                    </p>
                </div>

                {{-- Case 3 --}}
                <div class="card" style="border-top: 4px solid var(--color-accent);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span class="badge badge-gold">$10M Lawsuit</span>
                        <span style="font-size: 0.8125rem; color: var(--color-text-muted); font-weight: 600;">CBS &amp; NBC News</span>
                    </div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem;">
                        The Bronx Zoo — Cable Car Incident
                    </h3>
                    <p style="color: var(--color-text-muted); font-size: 0.9375rem; line-height: 1.7; flex-grow: 1;">
                        Filed a $10 million suit after dozens of visitors were struck and injured when the Bronx Zoo's aerial tram malfunctioned. Covered by CBS, NBC, and the <em>New York Post</em>.
                    </p>
                </div>

                {{-- Case 4 --}}
                <div class="card" style="border-top: 4px solid var(--color-accent-red);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span class="badge badge-red">City Agency Negligence</span>
                        <span style="font-size: 0.8125rem; color: var(--color-text-muted); font-weight: 600;">NY Post Featured</span>
                    </div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem;">
                        City of New York — Fire Department
                    </h3>
                    <p style="color: var(--color-text-muted); font-size: 0.9375rem; line-height: 1.7; flex-grow: 1;">
                        Sued the FDNY after firefighters dropped a 500-pound man down a flight of stairs during an emergency response, causing serious injury. Featured prominently in the <em>New York Post</em>.
                    </p>
                </div>

                {{-- Case 5 --}}
                <div class="card" style="border-top: 4px solid var(--color-primary-blue);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span class="badge badge-blue">Premises Liability</span>
                        <span style="font-size: 0.8125rem; color: var(--color-text-muted); font-weight: 600;">NYC Icon</span>
                    </div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem;">
                        Patsy's Pizzeria
                    </h3>
                    <p style="color: var(--color-text-muted); font-size: 0.9375rem; line-height: 1.7; flex-grow: 1;">
                        Represented an injury victim in a premises liability matter against the iconic New York City restaurant, resulting in media coverage and successful case resolution.
                    </p>
                </div>

                {{-- Case 6 --}}
                <div class="card" style="border-top: 4px solid var(--color-accent);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span class="badge badge-gold">Municipal Litigation</span>
                        <span style="font-size: 0.8125rem; color: var(--color-text-muted); font-weight: 600;">Local Press</span>
                    </div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem;">
                        City of New York — Police Department
                    </h3>
                    <p style="color: var(--color-text-muted); font-size: 0.9375rem; line-height: 1.7; flex-grow: 1;">
                        Litigated against the NYPD in a high-profile matter involving a police officer and a gun-related incident that garnered citywide media attention and investigative scrutiny.
                    </p>
                </div>

                {{-- Case 7 --}}
                <div class="card" style="border-top: 4px solid var(--color-accent-red);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span class="badge badge-red">NY Labor Law § 240</span>
                        <span style="font-size: 0.8125rem; color: var(--color-text-muted); font-weight: 600;">Workplace Safety</span>
                    </div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem;">
                        Window Washer Accident
                    </h3>
                    <p style="color: var(--color-text-muted); font-size: 0.9375rem; line-height: 1.7; flex-grow: 1;">
                        Represented a window washer seriously injured on the job in a prominent construction liability case featured by New York media, enforcing strict owner liability under state law.
                    </p>
                </div>

                {{-- Case 8 --}}
                <div class="card" style="border-top: 4px solid var(--color-primary-blue);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span class="badge badge-blue">Multi-Party Collision</span>
                        <span style="font-size: 0.8125rem; color: var(--color-text-muted); font-weight: 600;">Covered Twice</span>
                    </div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem;">
                        Funeral Procession Collision
                    </h3>
                    <p style="color: var(--color-text-muted); font-size: 0.9375rem; line-height: 1.7; flex-grow: 1;">
                        Handled a multi-party lawsuit arising from a serious collision involving a funeral procession. Covered twice by New York media due to its complex, multi-defendant nature.
                    </p>
                </div>

                {{-- Case 9 --}}
                <div class="card" style="border-top: 4px solid var(--color-accent);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span class="badge badge-gold">Municipal Accountability</span>
                        <span style="font-size: 0.8125rem; color: var(--color-text-muted); font-weight: 600;">Five Boroughs</span>
                    </div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem;">
                        NYC City Agencies — Multiple Matters
                    </h3>
                    <p style="color: var(--color-text-muted); font-size: 0.9375rem; line-height: 1.7; flex-grow: 1;">
                        Successfully litigated cases against NYC Department of Parks &amp; Recreation, Department of Sanitation, and Department of Environmental Protection on behalf of injured New Yorkers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- News Clippings & Press Gallery --}}
    <section class="section section-alt" id="press-archives">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Verified Press Clippings</span>
                <h2 class="heading-lg">Headlines &amp; Media Archives</h2>
                <p>
                    Archived newspaper articles, front-page clippings, and broadcast reports documenting Adam L. Shapiro’s notable lawsuits and client victories.
                </p>
            </div>

            {{-- Press Filter Tabs --}}
            <div class="press-filter-nav">
                <button type="button" class="press-filter-btn active" data-filter="all">All Archives (12)</button>
                <button type="button" class="press-filter-btn" data-filter="celebrity">Celebrity &amp; Landmark</button>
                <button type="button" class="press-filter-btn" data-filter="transit">Transit &amp; Municipal</button>
                <button type="button" class="press-filter-btn" data-filter="catastrophic">Catastrophic &amp; Malpractice</button>
            </div>

            <div class="press-archive-grid">
                {{-- Clipping 1 --}}
                <div class="press-archive-card" data-category="catastrophic">
                    <div class="press-archive-top">
                        <span class="press-source-pill">
                            <x-icon name="document-text" size="14" />
                            VerdictSearch
                        </span>
                        <span class="badge badge-gold">Major Settlement</span>
                    </div>
                    <div class="press-archive-media">
                        <img src="{{ asset('assets/media/cases/case-settlement-commercial.png') }}" alt="Commercial Property Case Settlement Headline" loading="lazy">
                    </div>
                    <div class="press-archive-body">
                        <h4 class="press-archive-title">Commercial Property Negligence Verdict</h4>
                        <p class="press-archive-snippet">
                            Substantial financial recovery secured on behalf of an injured tenant following documented hazardous structural failures and owner negligence.
                        </p>
                        <div class="press-archive-footer">
                            <span>NY Supreme Court</span>
                            <span>Premises Liability</span>
                        </div>
                    </div>
                </div>

                {{-- Clipping 2 --}}
                <div class="press-archive-card" data-category="transit">
                    <div class="press-archive-top">
                        <span class="press-source-pill">
                            <x-icon name="newspaper" size="14" />
                            NY Daily News
                        </span>
                        <span class="badge badge-blue">Transit Litigation</span>
                    </div>
                    <div class="press-archive-media">
                        <img src="{{ asset('assets/media/cases/case-settlement-subway.png') }}" alt="Subway Transit Settlement Headline" loading="lazy">
                    </div>
                    <div class="press-archive-body">
                        <h4 class="press-archive-title">NYC Subway &amp; Transit Authority Recovery</h4>
                        <p class="press-archive-snippet">
                            Comprehensive settlement holding municipal transit authorities accountable for dangerous platform conditions and operator negligence.
                        </p>
                        <div class="press-archive-footer">
                            <span>MTA Transit Tort Unit</span>
                            <span>Municipal Transit</span>
                        </div>
                    </div>
                </div>

                {{-- Clipping 3 --}}
                <div class="press-archive-card" data-category="catastrophic">
                    <div class="press-archive-top">
                        <span class="press-source-pill">
                            <x-icon name="newspaper" size="14" />
                            New York Post
                        </span>
                        <span class="badge badge-red">Highway Crash</span>
                    </div>
                    <div class="press-archive-media">
                        <img src="{{ asset('assets/media/cases/case-settlement-truck.png') }}" alt="Commercial Truck Collision Headline" loading="lazy">
                    </div>
                    <div class="press-archive-body">
                        <h4 class="press-archive-title">Severe Commercial Truck Collision Award</h4>
                        <p class="press-archive-snippet">
                            High-stakes interstate trucking litigation recovering lifetime medical compensation and lost wages for catastrophic impact survivors.
                        </p>
                        <div class="press-archive-footer">
                            <span>U.S. District Court</span>
                            <span>Commercial Freight</span>
                        </div>
                    </div>
                </div>

                {{-- Clipping 4 --}}
                <div class="press-archive-card" data-category="catastrophic">
                    <div class="press-archive-top">
                        <span class="press-source-pill">
                            <x-icon name="document-text" size="14" />
                            VerdictSearch
                        </span>
                        <span class="badge badge-blue">Pedestrian Right of Way</span>
                    </div>
                    <div class="press-archive-media">
                        <img src="{{ asset('assets/media/cases/case-settlement-pedestrian.png') }}" alt="Pedestrian Knockdown Headline" loading="lazy">
                    </div>
                    <div class="press-archive-body">
                        <h4 class="press-archive-title">Catastrophic Pedestrian Knockdown Recovery</h4>
                        <p class="press-archive-snippet">
                            Aggressive trial representation proving driver liability and failure to yield in an urban crosswalk severe trauma lawsuit.
                        </p>
                        <div class="press-archive-footer">
                            <span>Queens Supreme Court</span>
                            <span>Pedestrian Rights</span>
                        </div>
                    </div>
                </div>

                {{-- Clipping 5 --}}
                <div class="press-archive-card" data-category="celebrity">
                    <div class="press-archive-top">
                        <span class="press-source-pill">
                            <x-icon name="newspaper" size="14" />
                            New York Post
                        </span>
                        <span class="badge badge-gold">$10 Million Suit</span>
                    </div>
                    <div class="press-archive-media">
                        <img src="{{ asset('assets/media/cases/bronx-zoo-cable-car.jpg') }}" alt="Bronx Zoo Cable Car Incident Press Report" loading="lazy">
                    </div>
                    <div class="press-archive-body">
                        <h4 class="press-archive-title">Bronx Zoo Tram Aerial Failure Lawsuit</h4>
                        <p class="press-archive-snippet">
                            Front-page New York Post coverage of Adam Shapiro representing families suspended over the Bronx Zoo due to ride operator negligence.
                        </p>
                        <div class="press-archive-footer">
                            <span>Bronx Supreme Court</span>
                            <span>High-Profile Action</span>
                        </div>
                    </div>
                </div>

                {{-- Clipping 6 --}}
                <div class="press-archive-card" data-category="transit">
                    <div class="press-archive-top">
                        <span class="press-source-pill">
                            <x-icon name="newspaper" size="14" />
                            NY Daily News
                        </span>
                        <span class="badge badge-red">FDNY Lawsuit</span>
                    </div>
                    <div class="press-archive-media">
                        <img src="{{ asset('assets/media/cases/fdny-emergency-drop.png') }}" alt="FDNY Emergency Drop Headline" loading="lazy">
                    </div>
                    <div class="press-archive-body">
                        <h4 class="press-archive-title">FDNY Dropped Patient Down Flight of Stairs</h4>
                        <p class="press-archive-snippet">
                            Landmark municipal liability action following severe patient injuries sustained during emergency medical responder transport.
                        </p>
                        <div class="press-archive-footer">
                            <span>Kings County Civil</span>
                            <span>Municipal Negligence</span>
                        </div>
                    </div>
                </div>

                {{-- Clipping 7 --}}
                <div class="press-archive-card" data-category="catastrophic">
                    <div class="press-archive-top">
                        <span class="press-source-pill">
                            <x-icon name="scale" size="14" />
                            Law Journal Report
                        </span>
                        <span class="badge badge-blue">Medical Negligence</span>
                    </div>
                    <div class="press-archive-media">
                        <img src="{{ asset('assets/media/cases/case-settlement-medical.png') }}" alt="Medical Malpractice Case Settlement Headline" loading="lazy">
                    </div>
                    <div class="press-archive-body">
                        <h4 class="press-archive-title">Hospital Failure to Diagnose Verdict</h4>
                        <p class="press-archive-snippet">
                            Decisive medical malpractice verdict proving clinical diagnostic failures and delayed intervention resulting in severe patient injury.
                        </p>
                        <div class="press-archive-footer">
                            <span>NY Supreme Court</span>
                            <span>Medical Malpractice</span>
                        </div>
                    </div>
                </div>

                {{-- Clipping 8 --}}
                <div class="press-archive-card" data-category="catastrophic">
                    <div class="press-archive-top">
                        <span class="press-source-pill">
                            <x-icon name="document-text" size="14" />
                            VerdictSearch
                        </span>
                        <span class="badge badge-gold">Motorcycle Recovery</span>
                    </div>
                    <div class="press-archive-media">
                        <img src="{{ asset('assets/media/cases/case-settlement-motorcycle.png') }}" alt="Motorcycle Collision Verdict Headline" loading="lazy">
                    </div>
                    <div class="press-archive-body">
                        <h4 class="press-archive-title">Severe Intersection Motorcycle Crash Award</h4>
                        <p class="press-archive-snippet">
                            Complex reconstruction and liability litigation holding commercial motorist fully liable for failing to yield to oncoming rider.
                        </p>
                        <div class="press-archive-footer">
                            <span>Nassau Supreme Court</span>
                            <span>Motorcycle Collision</span>
                        </div>
                    </div>
                </div>

                {{-- Clipping 9 --}}
                <div class="press-archive-card" data-category="celebrity">
                    <div class="press-archive-top">
                        <span class="press-source-pill">
                            <x-icon name="newspaper" size="14" />
                            NY Daily News
                        </span>
                        <span class="badge badge-red">NYPD Litigation</span>
                    </div>
                    <div class="press-archive-media">
                        <img src="{{ asset('assets/media/cases/nypd-gun-incident.png') }}" alt="NYPD Gun Incident Lawsuit Report" loading="lazy">
                    </div>
                    <div class="press-archive-body">
                        <h4 class="press-archive-title">NYPD Civil Rights &amp; Firearm Incident</h4>
                        <p class="press-archive-snippet">
                            Major civil rights litigation against municipal police personnel for unjustified weapon discharge and officer accountability.
                        </p>
                        <div class="press-archive-footer">
                            <span>Kings County Special</span>
                            <span>Civil Rights Litigation</span>
                        </div>
                    </div>
                </div>

                {{-- Clipping 10 --}}
                <div class="press-archive-card" data-category="catastrophic">
                    <div class="press-archive-top">
                        <span class="press-source-pill">
                            <x-icon name="scale" size="14" />
                            NY Law Journal
                        </span>
                        <span class="badge badge-blue">NY Labor Law § 240</span>
                    </div>
                    <div class="press-archive-media">
                        <img src="{{ asset('assets/media/cases/case-settlement-construction.png') }}" alt="Construction Fall Case Settlement Headline" loading="lazy">
                    </div>
                    <div class="press-archive-body">
                        <h4 class="press-archive-title">Job Site Scaffolding Collapse Recovery</h4>
                        <p class="press-archive-snippet">
                            Victorious recovery under New York's strict scaffolding statutes for an injured union tradesman following catastrophic elevation fall.
                        </p>
                        <div class="press-archive-footer">
                            <span>Richmond Supreme Court</span>
                            <span>Construction Labor Law</span>
                        </div>
                    </div>
                </div>

                {{-- Clipping 11 --}}
                <div class="press-archive-card" data-category="catastrophic">
                    <div class="press-archive-top">
                        <span class="press-source-pill">
                            <x-icon name="newspaper" size="14" />
                            New York Post
                        </span>
                        <span class="badge badge-gold">Workplace Fall</span>
                    </div>
                    <div class="press-archive-media">
                        <img src="{{ asset('assets/media/cases/window-washer-liability.png') }}" alt="Window Washer Construction Liability Report" loading="lazy">
                    </div>
                    <div class="press-archive-body">
                        <h4 class="press-archive-title">Window Washer High-Rise Fall Lawsuit</h4>
                        <p class="press-archive-snippet">
                            Extensive investigative and legal action pursuing building owners and contractors for catastrophic harness equipment failure.
                        </p>
                        <div class="press-archive-footer">
                            <span>Manhattan Civil Part</span>
                            <span>Workplace Liability</span>
                        </div>
                    </div>
                </div>

                {{-- Clipping 12 --}}
                <div class="press-archive-card" data-category="transit">
                    <div class="press-archive-top">
                        <span class="press-source-pill">
                            <x-icon name="newspaper" size="14" />
                            Metro Press
                        </span>
                        <span class="badge badge-red">Municipal Transit</span>
                    </div>
                    <div class="press-archive-media">
                        <img src="{{ asset('assets/media/cases/case-settlement-bus.png') }}" alt="MTA Transit Collision Headline" loading="lazy">
                    </div>
                    <div class="press-archive-body">
                        <h4 class="press-archive-title">MTA Bus Transit Collision Settlement</h4>
                        <p class="press-archive-snippet">
                            Direct legal victory holding the metropolitan transit agency accountable for rapid transit bus passenger injuries and collisions.
                        </p>
                        <div class="press-archive-footer">
                            <span>Bronx Supreme Court</span>
                            <span>Public Transit Injury</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Free Consultation Section --}}
    <section class="section" id="consultation">
        <div class="container">
            <div class="split-section split-form">
                <div>
                    <span class="section-subtitle">The Hero Is Ready To Listen</span>
                    <h2 class="heading-lg" style="margin-bottom: 1.25rem;">
                        Secure Your Confidential Consultation
                    </h2>
                    <p style="font-size: 1.125rem; line-height: 1.7; color: var(--color-text-muted); margin-bottom: 2rem;">
                        Whether your case involves a celebrity defendant, municipal negligence, or catastrophic accident damages, Attorney Adam L. Shapiro provides hands-on, aggressive representation with <strong>zero upfront fees</strong>.
                    </p>

                    <div style="display: flex; flex-direction: column; gap: 1.25rem; margin-bottom: 2rem;">
                        <div style="display: flex; align-items: center; gap: 1rem;">
                            <div style="width: 44px; height: 44px; border-radius: 50%; background: var(--color-primary-blue); display: flex; align-items: center; justify-content: center; color: #fff; flex-shrink: 0;">
                                <x-icon name="phone" size="20" />
                            </div>
                            <div>
                                <div style="font-size: 0.8125rem; color: var(--color-text-muted);">Direct Line Available 24/7</div>
                                <a href="tel:+19707427476" style="font-size: 1.25rem; font-weight: 800; color: var(--color-primary);">(970) SHAPIRO / 970 742-7476</a>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; gap: 1rem;">
                            <div style="width: 44px; height: 44px; border-radius: 50%; background: var(--color-primary-blue); display: flex; align-items: center; justify-content: center; color: #fff; flex-shrink: 0;">
                                <x-icon name="mail" size="20" />
                            </div>
                            <div>
                                <div style="font-size: 0.8125rem; color: var(--color-text-muted);">Attorney Direct Email</div>
                                <a href="mailto:adam@shapirolawoffice.com" style="font-size: 1.125rem; font-weight: 700; color: var(--color-primary);">adam@shapirolawoffice.com</a>
                            </div>
                        </div>
                    </div>

                    <div style="background: var(--color-bg-alt); border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.25rem; font-size: 0.875rem; color: var(--color-text-muted); display: flex; align-items: center; gap: 0.75rem;">
                        <x-icon name="shield" size="22" class="text-red" />
                        <div><strong>100% Contingency Guarantee:</strong> You pay nothing unless we recover compensation for you. All case reviews are strictly confidential.</div>
                    </div>
                </div>

                <div>
                    <x-contact-form caseType="High Profile Litigation" title="Get Your Case Evaluated" subtitle="Speak directly with Attorney Adam L. Shapiro regarding your legal matter." badge="Free Case Evaluation" />
                </div>
            </div>
        </div>
    </section>

    {{-- Awards & Recognition Ribbon --}}
    @include('partials.awards-ribbon')
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var filterBtns = document.querySelectorAll('.press-filter-btn');
        var cards = document.querySelectorAll('.press-archive-card');

        if (filterBtns.length > 0 && cards.length > 0) {
            filterBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    filterBtns.forEach(function(b) { b.classList.remove('active'); });
                    this.classList.add('active');

                    var filter = this.getAttribute('data-filter');
                    cards.forEach(function(card) {
                        var category = card.getAttribute('data-category');
                        if (filter === 'all' || category === filter) {
                            card.style.display = 'flex';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });
        }
    });
</script>
@endpush
