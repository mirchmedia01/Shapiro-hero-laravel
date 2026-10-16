@extends('layouts.app')

@section('body_class', 'career-page')

@section('content')
{{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            <div class="hero-grid">
                <div>
                    <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(220, 38, 38, 0.15); border: 1px solid rgba(220, 38, 38, 0.4); padding: 0.4rem 1rem; border-radius: var(--radius-full); margin-bottom: 1.5rem;">
                        <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: #ef4444;"></span>
                        <span style="font-size: 0.8125rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.1em; color: #fca5a5;">Join The Hero Team</span>
                    </div>

                    <h1 class="heading-xl" style="color: #ffffff; margin-bottom: 1.5rem;">
                        Join Our Team — <br>
                        <span style="color: var(--color-accent-light);">Fight For Justice</span> In New York
                    </h1>

                    <p style="font-size: 1.125rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 2rem; max-width: 620px;">
                        Become a part of the most dedicated personal injury and civil litigation law firm in New York. We are looking for relentless, disciplined, and compassionate legal advocates who want to make a genuine difference in injured victims' lives.
                    </p>

                    <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center; margin-bottom: 2rem;">
                        <a href="#positions" class="btn btn-accent btn-lg">
                            <span>Explore Open Roles</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                        </a>
                        <a href="mailto:adam@shapirolawoffice.com?subject=Career%20Inquiry%20-%20Shapiro%20Law" class="btn btn-outline-white btn-lg">
                            <span>Submit Resume</span>
                        </a>
                    </div>

                    <div style="display: flex; gap: 1.75rem; border-top: 1px solid rgba(255,255,255,0.15); padding-top: 1.5rem; flex-wrap: wrap; font-size: 0.875rem; color: #94a3b8;">
                        <span style="display: inline-flex; align-items: center; gap: 0.35rem;"><x-icon name="check" size="14" class="text-gold" /> Competitive Base &amp; Bonuses</span>
                        <span style="display: inline-flex; align-items: center; gap: 0.35rem;"><x-icon name="check" size="14" class="text-gold" /> Forest Hills, NYC Headquarters</span>
                        <span style="display: inline-flex; align-items: center; gap: 0.35rem;"><x-icon name="check" size="14" class="text-gold" /> Direct Trial Mentorship</span>
                    </div>
                </div>

                <div>
                    <div class="hero-media-card">
                        <img src="{{ asset('assets/media/about/ny-law-office-heritage.jpg') }}" alt="Direct Mentorship with Trial Veteran Adam L. Shapiro" loading="eager">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem 1.25rem 1rem; background: linear-gradient(to top, rgba(10,25,47,0.92) 0%, rgba(10,25,47,0.6) 60%, transparent 100%);">
                            <span class="badge badge-gold" style="margin-bottom: 0.5rem; display: inline-flex;">Direct Mentorship</span>
                            <div style="color: #ffffff; font-weight: 800; font-size: 1.15rem;">Work Directly Alongside 30+ Year Trial Veteran Adam L. Shapiro</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Why Join The Hero? --}}
    <section class="section section-alt">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Our Firm Culture</span>
                <h2 class="heading-lg">Why Join <span style="color: var(--color-accent-red);">The Hero?</span></h2>
                <p>
                    At Shapiro Law Office, we don't just practice law—we fight for justice. We are looking for relentless, disciplined, and passionate professionals who want to make a real difference in people's lives.
                </p>
            </div>

            <div class="grid grid-3" style="gap: 2rem;">
                <div class="card" style="text-align: center; align-items: center; border-top: 4px solid var(--color-accent-red);">
                    <div class="card-icon-box-lg card-icon-red">
                        <x-icon name="gavel" size="28" />
                    </div>
                    <h3 class="heading-sm" style="margin-bottom: 0.75rem; color: var(--color-primary);">High Impact Cases</h3>
                    <p style="font-size: 0.9375rem; color: var(--color-text-muted); line-height: 1.7;">
                        Handle high-stakes cases that change lives. You won't be pushed into routine paper-pushing—you'll advocate directly for clients against deep-pocketed corporate insurers.
                    </p>
                </div>

                <div class="card" style="text-align: center; align-items: center; border-top: 4px solid var(--color-primary-blue);">
                    <div class="card-icon-box-lg card-icon-blue">
                        <x-icon name="users" size="28" />
                    </div>
                    <h3 class="heading-sm" style="margin-bottom: 0.75rem; color: var(--color-primary);">Elite Legal Team</h3>
                    <p style="font-size: 0.9375rem; color: var(--color-text-muted); line-height: 1.7;">
                        Work alongside New York's premier advocates. Collaborate in an environment that values speed, tactical precision, and relentless trial preparedness.
                    </p>
                </div>

                <div class="card" style="text-align: center; align-items: center; border-top: 4px solid var(--color-accent);">
                    <div class="card-icon-box-lg card-icon-gold">
                        <x-icon name="rocket" size="28" />
                    </div>
                    <h3 class="heading-sm" style="margin-bottom: 0.75rem; color: var(--color-primary);">Direct Mentorship &amp; Growth</h3>
                    <p style="font-size: 0.9375rem; color: var(--color-text-muted); line-height: 1.7;">
                        Gain direct courtroom, deposition, and negotiation experience directly under Attorney Adam L. Shapiro, a trial attorney with over 30 years of plaintiff and defense experience.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Open Positions --}}
    <section class="section" id="positions">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Career Opportunities</span>
                <h2 class="heading-lg">Current Open Positions</h2>
                <p>Currently Recruiting Top-Tier Legal Professionals for our Forest Hills, NY Headquarters.</p>
            </div>

            <div style="display: flex; flex-direction: column; gap: 1.5rem; max-width: 980px; margin: 0 auto;">
                {{-- Role 1 --}}
                <div class="job-card">
                    <div>
                        <div style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem; flex-wrap: wrap;">
                            <span class="badge badge-blue">Full-Time</span>
                            <span class="badge badge-gold">Forest Hills, NY</span>
                            <span class="badge badge-red">Trial Department</span>
                        </div>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem;">
                            Personal Injury Lawyer
                        </h3>
                        <p style="color: var(--color-text-muted); font-size: 0.9375rem; line-height: 1.6; margin: 0; max-width: 620px;">
                            Lead catastrophic injury, slip and fall, and premises liability lawsuits through discovery, depositions, motion practice, and jury trials in NY Supreme Court.
                        </p>
                    </div>
                    <div style="display: flex; gap: 0.75rem; align-items: center; flex-shrink: 0;">
                        <a href="{{ route('practice.personal-injury') }}" class="btn btn-outline btn-sm">
                            Practice Overview
                        </a>
                        <a href="mailto:adam@shapirolawoffice.com?subject=Application%20-%20Personal%20Injury%20Lawyer" class="btn btn-primary btn-sm">
                            Apply Now &rarr;
                        </a>
                    </div>
                </div>

                {{-- Role 2 --}}
                <div class="job-card">
                    <div>
                        <div style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem; flex-wrap: wrap;">
                            <span class="badge badge-blue">Full-Time</span>
                            <span class="badge badge-gold">Forest Hills, NY</span>
                            <span class="badge badge-red">Motor Vehicle</span>
                        </div>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem;">
                            Any Motor Vehicle Accident Attorney
                        </h3>
                        <p style="color: var(--color-text-muted); font-size: 0.9375rem; line-height: 1.6; margin: 0; max-width: 620px;">
                            Manage heavy-impact motor vehicle, commercial trucking, rideshare (Uber/Lyft), and motorcycle litigation under NY No-Fault and liability statutes.
                        </p>
                    </div>
                    <div style="display: flex; gap: 0.75rem; align-items: center; flex-shrink: 0;">
                        <a href="{{ route('practice.motor-vehicle') }}" class="btn btn-outline btn-sm">
                            Practice Overview
                        </a>
                        <a href="mailto:adam@shapirolawoffice.com?subject=Application%20-%20Motor%20Vehicle%20Attorney" class="btn btn-primary btn-sm">
                            Apply Now &rarr;
                        </a>
                    </div>
                </div>

                {{-- Role 3 --}}
                <div class="job-card">
                    <div>
                        <div style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem; flex-wrap: wrap;">
                            <span class="badge badge-blue">Full-Time</span>
                            <span class="badge badge-gold">Forest Hills, NY</span>
                            <span class="badge badge-red">Workers' Compensation</span>
                        </div>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem;">
                            Workers' Compensation Lawyer
                        </h3>
                        <p style="color: var(--color-text-muted); font-size: 0.9375rem; line-height: 1.6; margin: 0; max-width: 620px;">
                            Represent injured workers before the New York State Workers' Compensation Board and coordinate third-party construction negligence claims.
                        </p>
                    </div>
                    <div style="display: flex; gap: 0.75rem; align-items: center; flex-shrink: 0;">
                        <a href="{{ route('practice.workers-compensation') }}" class="btn btn-outline btn-sm">
                            Practice Overview
                        </a>
                        <a href="mailto:adam@shapirolawoffice.com?subject=Application%20-%20Workers%20Comp%20Lawyer" class="btn btn-primary btn-sm">
                            Apply Now &rarr;
                        </a>
                    </div>
                </div>

                {{-- Role 4 --}}
                <div class="job-card">
                    <div>
                        <div style="display: flex; gap: 0.5rem; margin-bottom: 0.5rem; flex-wrap: wrap;">
                            <span class="badge badge-blue">Full-Time / Part-Time</span>
                            <span class="badge badge-gold">Forest Hills, NY</span>
                            <span class="badge badge-red">Legal Support</span>
                        </div>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem;">
                            Litigation Paralegal &amp; Legal Assistant
                        </h3>
                        <p style="color: var(--color-text-muted); font-size: 0.9375rem; line-height: 1.6; margin: 0; max-width: 620px;">
                            Assist attorneys with client communication, medical record retrieval, bill of particulars drafting, and court calendar management in a fast-paced environment.
                        </p>
                    </div>
                    <div style="display: flex; gap: 0.75rem; align-items: center; flex-shrink: 0;">
                        <a href="mailto:adam@shapirolawoffice.com?subject=Application%20-%20Paralegal" class="btn btn-primary btn-sm">
                            Apply Now &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Firm Benefits & Perks --}}
    <section class="section section-alt">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">What We Offer</span>
                <h2 class="heading-lg">Competitive Benefits &amp; Growth</h2>
                <p>We invest heavily in our team members with top-market compensation and continuous professional development.</p>
            </div>

            <div class="grid grid-4" style="gap: 1.5rem;">
                <div class="card" style="padding: 1.75rem;">
                    <div class="card-icon-box card-icon-gold">
                        <x-icon name="dollar" size="24" />
                    </div>
                    <h4 style="font-size: 1.125rem; font-weight: 700; color: var(--color-primary); margin-bottom: 0.5rem;">Generous Compensation</h4>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted); margin: 0;">Competitive base salary plus aggressive contingency case outcome bonuses.</p>
                </div>

                <div class="card" style="padding: 1.75rem;">
                    <div class="card-icon-box card-icon-blue">
                        <x-icon name="hospital" size="24" />
                    </div>
                    <h4 style="font-size: 1.125rem; font-weight: 700; color: var(--color-primary); margin-bottom: 0.5rem;">Health &amp; Wellness</h4>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted); margin: 0;">Comprehensive medical, dental, and prescription drug plan coverage.</p>
                </div>

                <div class="card" style="padding: 1.75rem;">
                    <div class="card-icon-box card-icon-blue">
                        <x-icon name="train" size="24" />
                    </div>
                    <h4 style="font-size: 1.125rem; font-weight: 700; color: var(--color-primary); margin-bottom: 0.5rem;">Prime Location</h4>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted); margin: 0;">Forest Hills, Austin St. Steps from the E, F, M, R subway lines and LIRR.</p>
                </div>

                <div class="card" style="padding: 1.75rem;">
                    <div class="card-icon-box card-icon-red">
                        <x-icon name="graduation-cap" size="24" />
                    </div>
                    <h4 style="font-size: 1.125rem; font-weight: 700; color: var(--color-primary); margin-bottom: 0.5rem;">Direct Mentorship</h4>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted); margin: 0;">Learn directly from 30+ year trial veteran Adam L. Shapiro.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Application Section --}}
    <section class="section">
        <div class="container">
            <div class="card card-dark text-center" style="padding: 4rem 2rem; max-width: 860px; margin: 0 auto; box-shadow: var(--shadow-xl); align-items: center;">
                <span class="badge badge-gold" style="margin-bottom: 1.25rem; display: inline-flex; align-self: center;">Direct Recruitment</span>
                <h2 style="font-size: 2.25rem; font-weight: 800; color: #ffffff; margin-bottom: 1rem;">
                    Ready to Make a Real Impact?
                </h2>
                <p style="font-size: 1.125rem; line-height: 1.8; color: #cbd5e1; max-width: 650px; margin: 0 auto 2rem;">
                    Please send your resume, cover letter, and representative writing samples directly to Attorney Adam L. Shapiro. All applications and inquiries are held in strict confidence.
                </p>
                <div style="display: flex; justify-content: center; gap: 1.25rem; flex-wrap: wrap;">
                    <a href="mailto:adam@shapirolawoffice.com?subject=Career%20Application%20-%20Shapiro%20Law%20Office" class="btn btn-accent btn-lg" style="display: inline-flex; align-items: center; gap: 0.5rem;">
                        <x-icon name="mail" size="18" />
                        <span>Submit Application via Email</span>
                    </a>
                    <a href="tel:+19707427476" class="btn btn-outline-white btn-lg" style="display: inline-flex; align-items: center; gap: 0.5rem;">
                        <x-icon name="phone" size="18" />
                        <span>Call (970) 742-7476</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Awards & Recognition Ribbon --}}
    @include('partials.awards-ribbon')
@endsection
