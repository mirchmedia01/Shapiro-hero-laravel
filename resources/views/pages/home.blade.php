@extends('layouts.app')

@section('body_class', 'home-page')

@section('content')

{{-- =========================================================================
     1. HERO SECTION (Live Match: New York Personal Injury Lawyer Fighting for You Since 1994)
     ========================================================================= --}}
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            {{-- Left Column: Headline & Action CTAs --}}
            <div>
                <div style="display: inline-flex; align-items: center; gap: 0.65rem; background: rgba(30, 58, 138, 0.35); border: 1.5px solid rgba(214, 40, 40, 0.5); padding: 0.35rem 1.1rem 0.35rem 0.45rem; border-radius: var(--radius-full); margin-bottom: 1.5rem; backdrop-filter: blur(8px); box-shadow: 0 4px 15px rgba(0,0,0,0.25);">
                    <img src="{{ asset('assets/media/branding/shapiro-badge-round.png') }}" alt="Shapiro The Hero" style="width: 28px; height: 28px; border-radius: 50%; object-fit: contain; background: #ffffff; padding: 2px; box-shadow: 0 2px 6px rgba(0,0,0,0.3);">
                    <span style="font-size: 0.8125rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; color: #ffffff;">Need A Hero? <span style="color: #fca5a5;">Call Shapiro!</span></span>
                </div>

                <h1 class="heading-xl" style="color: #ffffff; margin-bottom: 1.5rem; letter-spacing: -0.02em;">
                    New York Personal <br>
                    <span style="color: #ffffff;">Injury Lawyer</span> <br>
                    <span style="display: inline-block; font-size: 0.52em; font-weight: 800; text-transform: uppercase; letter-spacing: 0.1em; color: #D62828; border-bottom: 2px solid #D62828; padding-bottom: 0.25rem; margin-top: 0.5rem;">Fighting for You Since 1994</span>
                </h1>

                <p style="font-size: 1.125rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 2.25rem; max-width: 620px; width: 100%; word-break: normal; overflow-wrap: break-word;">
                    When you're hit, we hit back harder. Adam L. Shapiro is the shield between you and the insurance giants. Over 25+ years of aggressive trial representation across New York City and Long Island. <strong>No fee unless we win your case.</strong>
                </p>

                <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center; margin-bottom: 2.5rem;">
                    <a href="tel:+19707427476" class="btn btn-accent btn-lg" style="box-shadow: 0 8px 20px rgba(214, 40, 40, 0.4);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>CALL (970) 742-7476</span>
                    </a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-white btn-lg">
                        <span>Free Case Evaluation</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </div>

                {{-- Trust Stats Bar --}}
                <div class="hero-trust-stats" style="display: flex; gap: 2rem; border-top: 1px solid rgba(255,255,255,0.15); padding-top: 1.5rem; flex-wrap: wrap;">
                    <div>
                        <div class="stat-number" style="font-size: 1.75rem; font-weight: 800; color: #ffffff; font-family: var(--font-heading);">$100M+</div>
                        <div class="stat-label" style="font-size: 0.8125rem; color: #94a3b8;">Recovered for Clients</div>
                    </div>
                    <div>
                        <div class="stat-number" style="font-size: 1.75rem; font-weight: 800; color: #ffffff; font-family: var(--font-heading);">25+ Years</div>
                        <div class="stat-label" style="font-size: 0.8125rem; color: #94a3b8;">Trial Experience</div>
                    </div>
                    <div>
                        <div class="stat-number" style="font-size: 1.75rem; font-weight: 800; color: #ffffff; font-family: var(--font-heading);">$0 Upfront</div>
                        <div class="stat-label" style="font-size: 0.8125rem; color: #94a3b8;">No Win, No Fee Guarantee</div>
                    </div>
                </div>
            </div>

            {{-- Right Column: Featured Video Reel --}}
            <div style="display: flex; flex-direction: column; align-items: center; width: 100%;">
                <div class="hero-reel-mockup" id="hero-reel-container">
                    <video id="hero-main-video" src="{{ asset('assets/media/videos/shapiro-law-firm-reel.mp4') }}" poster="{{ asset('assets/media/attorneys/adam-shapiro-reel-cover.jpg') }}" controls autoplay muted loop playsinline preload="auto"></video>
                    <div class="hero-video-play-overlay is-hidden" id="hero-video-play-btn" title="Click to Play Video">
                        <div class="hero-video-play-icon">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="currentColor"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                        </div>
                    </div>
                </div>
                <div style="display: flex; align-items: center; justify-content: center; width: 100%; max-width: 360px; margin-top: 0.875rem; padding: 0 0.5rem;">
                    <span style="font-size: 0.875rem; color: #cbd5e1; white-space: nowrap;">Adam L. Shapiro in Action</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- =========================================================================
     2. RECOGNITION & AWARDS (14 Accolades Marquee)
     ========================================================================= --}}
<div class="awards-marquee-section">
    <div class="container">
        <div class="awards-marquee-header">
            <div class="awards-marquee-heading-group">
                <span class="awards-marquee-eyebrow">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    Verified Accolades
                </span>
                <h2 class="awards-marquee-title">Recognition <span style="color: #D62828;">&amp;</span> Awards</h2>
            </div>
            <a href="{{ route('awards') }}" class="awards-marquee-link">
                <span>View All 14 Honors</span>
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
            </a>
        </div>
    </div>

    {{-- Seamless Infinite Auto-Scrolling Marquee Track --}}
    <div class="awards-marquee-wrapper">
        <div class="awards-marquee-track">
            {{-- Set 1 (All 14 Badges) --}}
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/10-best-attorneys-2018.png') }}" alt="10 Best 2018" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/20th-anniversary-excellence.png') }}" alt="20th Anniversary" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/25-years-experience-silver.png') }}" alt="25 Years Experience" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/american-academy-attorneys.png') }}" alt="American Academy" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/american-association-for-justice.png') }}" alt="Association of Justice" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/avvo-clients-choice.png') }}" alt="AVVO Client's Choice" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/best-attorneys-of-america.png') }}" alt="Best Attorneys of America" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/best-lawyers-award.png') }}" alt="Best Lawyers" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/businessman-of-the-year.png') }}" alt="Businessman of the Year" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/global-law-experts.png') }}" alt="Global Law Experts" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/lawyers-of-distinction.png') }}" alt="Lawyers of Distinction" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/national-alliance-of-attorneys.png') }}" alt="National Alliance of Attorneys" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/top-100-trial-lawyers.png') }}" alt="Top 100 Trial Lawyers" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/top-tier-lawyers.png') }}" alt="Top Tier Lawyers" loading="lazy"></a>

            {{-- Set 2 (Duplicate for Seamless Loop) --}}
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/10-best-attorneys-2018.png') }}" alt="10 Best 2018" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/20th-anniversary-excellence.png') }}" alt="20th Anniversary" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/25-years-experience-silver.png') }}" alt="25 Years Experience" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/american-academy-attorneys.png') }}" alt="American Academy" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/american-association-for-justice.png') }}" alt="Association of Justice" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/avvo-clients-choice.png') }}" alt="AVVO Client's Choice" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/best-attorneys-of-america.png') }}" alt="Best Attorneys of America" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/best-lawyers-award.png') }}" alt="Best Lawyers" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/businessman-of-the-year.png') }}" alt="Businessman of the Year" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/global-law-experts.png') }}" alt="Global Law Experts" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/lawyers-of-distinction.png') }}" alt="Lawyers of Distinction" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/national-alliance-of-attorneys.png') }}" alt="National Alliance of Attorneys" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/top-100-trial-lawyers.png') }}" alt="Top 100 Trial Lawyers" loading="lazy"></a>
            <a href="{{ route('awards') }}" class="awards-marquee-item"><img src="{{ asset('assets/media/awards/top-tier-lawyers.png') }}" alt="Top Tier Lawyers" loading="lazy"></a>
        </div>
    </div>
</div>

{{-- =========================================================================
     4. OUR PRACTICE AREAS (6 Live Practice Areas with Exact Live Copy)
     ========================================================================= --}}
<section class="section" style="background: var(--color-bg);">
    <div class="container">
        <div class="section-header" style="text-align: center; max-width: 820px; margin: 0 auto 3rem;">
            <span class="section-subtitle">Dedicated Practice Areas</span>
            <h2 class="heading-lg" style="margin-bottom: 0.75rem;">Our Practice Areas</h2>
            <p style="font-size: 1.125rem; line-height: 1.7; color: var(--color-text-muted);">
                We provide elite legal representation across a wide spectrum of personal injury litigation. When you’ve been wronged, we’re here to right it.
            </p>
        </div>

        <div class="grid grid-3 practice-cards-grid">
            {{-- Practice 1: Personal Injury --}}
            <div class="practice-card">
                <div class="practice-card-media">
                    <img src="{{ asset('assets/media/practice-areas/personal-injury-lawyer.jpg') }}" alt="Personal Injury Lawyer NYC" class="practice-card-image" loading="lazy">
                </div>
                <div class="practice-card-body">
                    <h3 class="practice-card-title">Personal Injury</h3>
                    <p style="font-size: 0.9rem; line-height: 1.65; color: var(--color-text-muted); margin-bottom: 0.75rem;">
                        Someone’s negligence put you in a hospital bed. Now their insurance company is working to minimize what they pay you. We fight for injury victims across New York and Florida, from catastrophic accidents to serious injuries that change lives permanently.
                    </p>
                    <p style="font-size: 0.9rem; line-height: 1.65; color: #1e293b; font-weight: 600; margin-bottom: 1.25rem;">
                        We move fast. We build strong. We recover every dollar available to you.
                    </p>
                    <a href="{{ route('practice.personal-injury') }}" class="practice-card-link">
                        <span>LEARN MORE</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            {{-- Practice 2: E-Bike & Electric Scooter Accidents --}}
            <div class="practice-card">
                <div class="practice-card-media">
                    <img src="{{ asset('assets/media/practice-areas/electric-bicycle-scooter-lawyer.jpg') }}" alt="E-Bike & Scooter Accident Attorney" class="practice-card-image" loading="lazy">
                </div>
                <div class="practice-card-body">
                    <h3 class="practice-card-title">E-Bike &amp; Electric Scooter Accidents</h3>
                    <p style="font-size: 0.9rem; line-height: 1.65; color: var(--color-text-muted); margin-bottom: 0.75rem;">
                        Most NYC cycling fatalities involve e-bikes, and these crashes cause traumatic brain injuries, fractures, and spinal damage. No-fault insurance does not automatically apply the way it does with cars. Liability can fall on a negligent driver, a rental company, or a product manufacturer.
                    </p>
                    <p style="font-size: 0.9rem; line-height: 1.65; color: #1e293b; font-weight: 600; margin-bottom: 1.25rem;">
                        We find every liable party and deploy every available claim.
                    </p>
                    <a href="{{ route('practice.ebike-scooter') }}" class="practice-card-link">
                        <span>LEARN MORE</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            {{-- Practice 3: Slip/Trip & Fall --}}
            <div class="practice-card">
                <div class="practice-card-media">
                    <img src="{{ asset('assets/media/practice-areas/slip-trip-fall-attorney.jpg') }}" alt="Slip and Fall Attorney NYC" class="practice-card-image" loading="lazy">
                </div>
                <div class="practice-card-body">
                    <h3 class="practice-card-title">Slip/Trip &amp; Fall</h3>
                    <p style="font-size: 0.9rem; line-height: 1.65; color: var(--color-text-muted); margin-bottom: 0.75rem;">
                        Wet floors. Broken stairs. Cracked sidewalks. The property owner’s insurer will try to make it your fault. We crush that argument.
                    </p>
                    <p style="font-size: 0.9rem; line-height: 1.65; color: #1e293b; font-weight: 600; margin-bottom: 1.25rem;">
                        Critical rule: if a city or municipal property caused your injury, a Notice of Claim must be filed within 90 days. Miss that window and the case is gone. We move fast.
                    </p>
                    <a href="{{ route('practice.slip-trip-fall') }}" class="practice-card-link">
                        <span>LEARN MORE</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            {{-- Practice 4: Workers' Compensation in New York --}}
            <div class="practice-card">
                <div class="practice-card-media">
                    <img src="{{ asset('assets/media/practice-areas/workers-compensation-lawyer.jpg') }}" alt="Workers Compensation Lawyer New York" class="practice-card-image" loading="lazy">
                </div>
                <div class="practice-card-body">
                    <h3 class="practice-card-title">Workers’ Compensation in New York</h3>
                    <p style="font-size: 0.9rem; line-height: 1.65; color: var(--color-text-muted); margin-bottom: 1.25rem;">
                        Your employer’s workers’ comp insurer is not neutral. Their job is to close your claim cheap. We handle full compensation proceedings and investigate whether a third party carries separate personal injury liability. That can mean two claims running at once, maximizing everything you recover.
                    </p>
                    <a href="{{ route('practice.workers-compensation') }}" class="practice-card-link">
                        <span>LEARN MORE</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            {{-- Practice 5: Medical Malpractice & Surgical Errors --}}
            <div class="practice-card">
                <div class="practice-card-media">
                    <img src="{{ asset('assets/media/practice-areas/medical-malpractice-attorney.png') }}" alt="Medical Malpractice and Surgical Errors" class="practice-card-image" loading="lazy">
                </div>
                <div class="practice-card-body">
                    <h3 class="practice-card-title">Medical Malpractice &amp; Surgical Errors</h3>
                    <p style="font-size: 0.9rem; line-height: 1.65; color: var(--color-text-muted); margin-bottom: 1.25rem;">
                        Surgical errors. Misdiagnoses. Birth injuries. Medication mistakes. These cases require medical experts and a team that will not back down when the hospital’s legal department shows up. Adam spent years inside the machine. He knows how institutional defendants fight these claims.
                    </p>
                    <a href="{{ route('practice.medical-malpractice') }}" class="practice-card-link">
                        <span>LEARN MORE</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            {{-- Practice 6: Wrongful Death Claims --}}
            <div class="practice-card">
                <div class="practice-card-media">
                    <img src="{{ asset('assets/media/practice-areas/wrongful-death-lawyer.jpg') }}" alt="Wrongful Death Claims Attorney" class="practice-card-image" loading="lazy">
                </div>
                <div class="practice-card-body">
                    <h3 class="practice-card-title">Wrongful Death Claims</h3>
                    <p style="font-size: 0.9rem; line-height: 1.65; color: var(--color-text-muted); margin-bottom: 0.75rem;">
                        When negligence takes a life, the family left behind deserves a fighter. We pursue funeral expenses, lost financial support, and the full economic impact the family will carry for years.
                    </p>
                    <p style="font-size: 0.9rem; line-height: 1.65; color: #1e293b; font-weight: 600; margin-bottom: 1.25rem;">
                        New York’s wrongful death statute of limitations is two years from the date of death. The clock is running.
                    </p>
                    <a href="{{ route('practice.wrongful-death') }}" class="practice-card-link">
                        <span>LEARN MORE</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ route('services') }}" class="btn btn-primary btn-lg">
                <span>View Full Services &rarr;</span>
            </a>
        </div>
    </div>
</section>

{{-- =========================================================================
     5. OUR SUPERPOWER IS RESULTS (The 8 Live Pillars of Excellence)
     ========================================================================= --}}
<section class="section section-alt">
    <div class="container">
        <div class="section-header" style="text-align: center; max-width: 780px; margin: 0 auto 3.5rem;">
            <span class="badge badge-accent" style="margin-bottom: 0.75rem;">Why New Yorkers Choose Shapiro</span>
            <h2 class="heading-lg" style="margin-bottom: 0.75rem;">Our Superpower Is Results</h2>
            <p style="font-size: 1.05rem; color: var(--color-text-muted);">
                Choosing a lawyer is a big decision. Here is why New Yorkers trust us to handle their most critical legal battles.
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 1.75rem;">
            {{-- Pillar 1 --}}
            <div class="card" style="background: #ffffff; padding: 2rem 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm); display: flex; flex-direction: column;">
                <div class="card-icon-box card-icon-blue">
                    <x-icon name="certificate" size="26" />
                </div>
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">Licenses and Memberships</h3>
                <p style="font-size: 0.875rem; line-height: 1.6; color: var(--color-text-muted); margin-bottom: 1.25rem; flex-grow: 1;">
                    Attorney Shapiro holds multiple legal licenses and is an active member of respected legal associations.
                </p>
                <a href="{{ route('about') }}" style="font-size: 0.875rem; font-weight: 700; color: var(--color-primary-blue); text-decoration: none; display: inline-flex; align-items: center; gap: 0.35rem;">
                    <span>Read More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>

            {{-- Pillar 2 --}}
            <div class="card" style="background: #ffffff; padding: 2rem 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm); display: flex; flex-direction: column;">
                <div class="card-icon-box card-icon-red">
                    <x-icon name="gavel" size="26" />
                </div>
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">High Profile Cases</h3>
                <p style="font-size: 0.875rem; line-height: 1.6; color: var(--color-text-muted); margin-bottom: 1.25rem; flex-grow: 1;">
                    The firm has handled numerous high-profile cases, demonstrating experience with complex litigation and media-sensitive legal matters.
                </p>
                <a href="{{ route('high-profiles-cases') }}" style="font-size: 0.875rem; font-weight: 700; color: var(--color-primary-blue); text-decoration: none; display: inline-flex; align-items: center; gap: 0.35rem;">
                    <span>Read More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>

            {{-- Pillar 3 --}}
            <div class="card" style="background: #ffffff; padding: 2rem 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm); display: flex; flex-direction: column;">
                <div class="card-icon-box card-icon-blue">
                    <x-icon name="compass" size="26" />
                </div>
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">Philosophy</h3>
                <p style="font-size: 0.875rem; line-height: 1.6; color: var(--color-text-muted); margin-bottom: 1.25rem; flex-grow: 1;">
                    Shapiro Law Office operates on a client-first philosophy—offering aggressive representation, honest communication, and individualized legal strategies.
                </p>
                <a href="{{ route('services') }}" style="font-size: 0.875rem; font-weight: 700; color: var(--color-primary-blue); text-decoration: none; display: inline-flex; align-items: center; gap: 0.35rem;">
                    <span>Read More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>

            {{-- Pillar 4 --}}
            <div class="card" style="background: #ffffff; padding: 2rem 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm); display: flex; flex-direction: column;">
                <div class="card-icon-box card-icon-blue">
                    <x-icon name="building" size="26" />
                </div>
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">Institutional Clients</h3>
                <p style="font-size: 0.875rem; line-height: 1.6; color: var(--color-text-muted); margin-bottom: 1.25rem; flex-grow: 1;">
                    The firm serves corporate and institutional clients with long-term legal support, combining legal precision with dependable counsel.
                </p>
                <a href="{{ route('services') }}" style="font-size: 0.875rem; font-weight: 700; color: var(--color-primary-blue); text-decoration: none; display: inline-flex; align-items: center; gap: 0.35rem;">
                    <span>Read More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>

            {{-- Pillar 5 --}}
            <div class="card" style="background: #ffffff; padding: 2rem 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm); display: flex; flex-direction: column;">
                <div class="card-icon-box card-icon-gold">
                    <x-icon name="phone-call" size="26" />
                </div>
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">Always Accessible</h3>
                <p style="font-size: 0.875rem; line-height: 1.6; color: var(--color-text-muted); margin-bottom: 1.25rem; flex-grow: 1;">
                    Attorney Shapiro ensures clients can reach him directly, prioritizing availability and responsiveness.
                </p>
                <a href="{{ route('contact') }}" style="font-size: 0.875rem; font-weight: 700; color: var(--color-primary-blue); text-decoration: none; display: inline-flex; align-items: center; gap: 0.35rem;">
                    <span>Read More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>

            {{-- Pillar 6 --}}
            <div class="card" style="background: #ffffff; padding: 2rem 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm); display: flex; flex-direction: column;">
                <div class="card-icon-box card-icon-blue">
                    <x-icon name="shield-check" size="26" />
                </div>
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">Confidence</h3>
                <p style="font-size: 0.875rem; line-height: 1.6; color: var(--color-text-muted); margin-bottom: 1.25rem; flex-grow: 1;">
                    Clients are encouraged to have full confidence in the firm’s ability, thanks to decades of experience, honest advice, and proven results.
                </p>
                <a href="{{ route('about') }}" style="font-size: 0.875rem; font-weight: 700; color: var(--color-primary-blue); text-decoration: none; display: inline-flex; align-items: center; gap: 0.35rem;">
                    <span>Read More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>

            {{-- Pillar 7 --}}
            <div class="card" style="background: #ffffff; padding: 2rem 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm); display: flex; flex-direction: column;">
                <div class="card-icon-box card-icon-green">
                    <x-icon name="dollar" size="26" />
                </div>
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">No Recovery, No Attorney’s Fees!</h3>
                <p style="font-size: 0.875rem; line-height: 1.6; color: var(--color-text-muted); margin-bottom: 1.25rem; flex-grow: 1;">
                    Clients pay nothing unless the firm wins their case—reinforcing a strong commitment to justice and results.
                </p>
                <a href="{{ route('contact') }}" style="font-size: 0.875rem; font-weight: 700; color: var(--color-primary-blue); text-decoration: none; display: inline-flex; align-items: center; gap: 0.35rem;">
                    <span>Read More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>

            {{-- Pillar 8 --}}
            <div class="card" style="background: #ffffff; padding: 2rem 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm); display: flex; flex-direction: column;">
                <div class="card-icon-box card-icon-gold">
                    <x-icon name="star" size="26" />
                </div>
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">References and Recommendations</h3>
                <p style="font-size: 0.875rem; line-height: 1.6; color: var(--color-text-muted); margin-bottom: 1.25rem; flex-grow: 1;">
                    Positive client testimonials and peer endorsements reflect the firm’s reputation for effective advocacy and client satisfaction.
                </p>
                <a href="{{ route('about') }}" style="font-size: 0.875rem; font-weight: 700; color: var(--color-primary-blue); text-decoration: none; display: inline-flex; align-items: center; gap: 0.35rem;">
                    <span>Read More</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>
        </div>

        {{-- Consultation Call-To-Action Banner --}}
        <div style="margin-top: 3.5rem; background: linear-gradient(135deg, #1e3a8a 0%, #0b1b3d 100%); border-radius: var(--radius-xl); padding: 3rem 2.5rem; color: #ffffff; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 2rem; box-shadow: var(--shadow-lg);">
            <div style="max-width: 680px;">
                <h3 style="font-size: 1.85rem; font-weight: 900; color: #ffffff; margin-bottom: 0.5rem; font-family: var(--font-heading);">Ready to seek Justice?</h3>
                <p style="font-size: 1.05rem; color: #cbd5e1; margin: 0; line-height: 1.6;">
                    Join thousands of satisfied clients who turned their tragedy into a legal victory. We are available 24/7 to hear your story.
                </p>
            </div>
            <div>
                <a href="{{ route('contact') }}" class="btn btn-accent btn-lg" style="box-shadow: 0 8px 20px rgba(214, 40, 40, 0.4); white-space: nowrap;">
                    <span>Book Consultation Now</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- =========================================================================
     6. LEARN MORE ABOUT US (Live Section 12 Match: Overview & Short Video)
     ========================================================================= --}}
<section class="section" style="background: #ffffff;">
    <div class="container">
        <div class="responsive-two-col" style="align-items: center; gap: 3.5rem;">
            <div>
                <span class="section-subtitle">Excellence &amp; Advocacy</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">
                    Learn More About Us
                </h2>
                <p style="font-size: 1.0625rem; line-height: 1.8; color: var(--color-text-muted); margin-bottom: 1.5rem;">
                    Our firm is a leading provider of comprehensive legal services, renowned for our commitment to excellence and client-centric approach. With a rich history of delivering outstanding results, we offer a diverse range of practice areas and industry expertise to meet the unique needs of our clients. Our firm achieving favourable outcomes for our clients.
                </p>
                <div style="font-weight: 700; font-size: 1.15rem; color: #1e3a8a; border-left: 3px solid #d62828; padding-left: 1.25rem; margin-bottom: 2rem; line-height: 1.6;">
                    Exemplary legal expertise tailored to your unique needs and challenges
                </div>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="{{ route('about') }}" class="btn btn-primary btn-lg">
                        <span>Explore Our Firm &rarr;</span>
                    </a>
                    <a href="tel:+19707427476" class="btn btn-outline btn-lg">
                        <span>CALL (970) 742-7476</span>
                    </a>
                </div>
            </div>

            <div style="display: flex; flex-direction: column; align-items: center; width: 100%;">
                <div class="hero-reel-mockup" style="border: 2.5px solid rgba(11, 27, 61, 0.2); box-shadow: var(--shadow-2xl);">
                    <video src="{{ asset('assets/media/videos/hurt-in-accident-advice-short.mp4') }}#t=0.001" poster="{{ asset('assets/media/attorneys/adam-shapiro-reel-cover.jpg') }}" controls playsinline preload="metadata"></video>
                </div>
                <p style="text-align: center; width: 100%; max-width: 360px; font-size: 0.875rem; color: var(--color-text-muted); margin-top: 0.85rem; font-weight: 600;">
                    Watch: What to do immediately after an injury in NYC
                </p>
            </div>
        </div>
    </div>
</section>

{{-- =========================================================================
     7. A CHAMPION FOR THE VULNERABLE (Live Section 13/15 Match: Two Sides. One Mission.)
     ========================================================================= --}}
<section class="section" style="background: #0b1b3d; color: #ffffff;">
    <div class="container">
        <div class="responsive-two-col ratio-1-11" style="align-items: center; gap: 3.5rem;">
            <div>
                <div class="champion-portrait-wrapper" style="box-shadow: 0 20px 40px rgba(0,0,0,0.5); max-width: 420px; margin: 0 auto; position: relative;">
                    <img src="{{ asset('assets/media/attorneys/adam-shapiro-portrait.png') }}" alt="Adam L. Shapiro, Esq." class="champion-portrait-img" style="height: auto; aspect-ratio: 1 / 1; object-fit: cover; object-position: center 15%;">
                    {{-- Dual Identity Hero Badge --}}
                    <div style="position: absolute; bottom: 16px; right: 16px; background: rgba(11, 27, 61, 0.92); border: 1.5px solid rgba(214, 40, 40, 0.6); padding: 0.45rem 0.9rem; border-radius: 9999px; display: flex; align-items: center; gap: 0.6rem; backdrop-filter: blur(8px); box-shadow: 0 8px 24px rgba(0,0,0,0.6);">
                        <img src="{{ asset('assets/media/branding/shapiro-badge-round.png') }}" alt="The Shapiro Shield" style="width: 28px; height: 28px; object-fit: contain; background: #ffffff; border-radius: 50%; padding: 2px;">
                        <div style="text-align: left; line-height: 1.2;">
                            <span style="font-size: 0.72rem; font-weight: 800; text-transform: uppercase; color: #ffffff; display: block; letter-spacing: 0.05em;">The Shapiro Shield</span>
                            <span style="font-size: 0.65rem; color: #fca5a5; font-weight: 600;">Two Sides. One Mission.</span>
                        </div>
                    </div>
                </div>
                <blockquote style="border-left: 4px solid var(--color-accent-red); margin: 1.5rem 0 0; font-style: italic; font-size: 1.05rem; color: #f1f5f9; line-height: 1.7; background: rgba(255,255,255,0.05); padding: 1.25rem 1.5rem; border-radius: 0 var(--radius-md) var(--radius-md) 0;">
                    &ldquo;We don’t just file papers. We go to war. Every case is a battle for someone’s future, and in this courtroom, we don’t accept anything less than a victory.&rdquo;
                    <footer style="margin-top: 0.75rem; font-size: 0.95rem; font-weight: 700; color: #D62828; font-style: normal;">
                        -Adam L. Shapiro
                    </footer>
                </blockquote>
            </div>

            <div>
                <div style="display: inline-flex; align-items: center; gap: 0.55rem; background: rgba(30, 58, 138, 0.35); border: 1.5px solid rgba(214, 40, 40, 0.45); padding: 0.35rem 1rem 0.35rem 0.45rem; border-radius: var(--radius-full); margin-bottom: 1.25rem; backdrop-filter: blur(8px);">
                    <img src="{{ asset('assets/media/branding/shapiro-badge-round.png') }}" alt="Shapiro Hero Shield" style="width: 22px; height: 22px; border-radius: 50%; object-fit: contain; background: #ffffff; padding: 1.5px;">
                    <span style="font-size: 0.8125rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; color: #ffffff;">The Professional Force</span>
                </div>

                <h2 class="heading-lg" style="color: #ffffff; margin-bottom: 0.5rem;">
                    A Champion For The Vulnerable.
                </h2>
                <h3 style="font-size: 1.35rem; font-weight: 800; color: #D62828; margin-bottom: 1.25rem;">
                    Adam L. Shapiro, Esq. &bull; Two Sides. One Mission.
                </h3>

                <p style="font-size: 1.0625rem; line-height: 1.8; color: #cbd5e1; margin-bottom: 2rem;">
                    Shapiro Law Office isn’t just a business—it’s a sanctuary for the injured. We combine meticulous legal strategy with the relentless energy of a champion. When insurance giants try to crush you, we deploy the Shapiro Shield.
                </p>

                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="{{ route('about') }}" class="btn btn-accent btn-lg" style="box-shadow: 0 8px 20px rgba(214, 40, 40, 0.4);">
                        <span>Explore the Origin</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                    <a href="tel:+19707427476" class="btn btn-outline-white btn-lg">
                        <span>CALL (970) 742-7476</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- =========================================================================
     8. TRUST ADAM L. SHAPIRO & ASSOCIATES (Live Section 16 Match)
     ========================================================================= --}}
<section class="section" style="background: #ffffff;">
    <div class="container">
        <div class="responsive-two-col ratio-1-11" style="align-items: center; gap: 3.5rem; background: linear-gradient(135deg, #1e3a8a 0%, #0b1b3d 100%); border-radius: var(--radius-2xl); padding: 3.5rem 3rem; color: #ffffff; box-shadow: var(--shadow-xl); position: relative; overflow: hidden;">
            {{-- Subtle Hero Shield Watermark --}}
            <img src="{{ asset('assets/media/branding/shapiro-badge-round.png') }}" alt="" aria-hidden="true" style="position: absolute; right: -40px; bottom: -40px; width: 320px; height: 320px; opacity: 0.05; filter: grayscale(100%) brightness(200%); pointer-events: none;">

            <div>
                <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255, 255, 255, 0.12); border: 1px solid rgba(255, 255, 255, 0.25); padding: 0.35rem 0.9rem; border-radius: var(--radius-full); margin-bottom: 1rem;">
                    <img src="{{ asset('assets/media/branding/shapiro-badge-round.png') }}" alt="Shapiro Badge" style="width: 18px; height: 18px; object-fit: contain;">
                    <span style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; color: #ffffff;">Unwavering Advocacy</span>
                </div>
                <h2 class="heading-lg" style="color: #ffffff; margin-bottom: 0.75rem;">
                    Trust Adam L. Shapiro &amp; Associates
                </h2>
                <h3 style="font-size: 1.25rem; font-weight: 600; color: #D62828; margin-bottom: 1.5rem;">
                    To Fight for the Justice and Compensation You Deserve
                </h3>
                <div style="width: 50px; height: 3px; background: var(--color-accent-red); margin-bottom: 1.5rem;"></div>

                <h4 style="font-size: 1.35rem; font-weight: 800; color: #ffffff; margin-bottom: 0.5rem; font-family: var(--font-heading);">
                    Injured in an Accident?
                </h4>
                <p style="font-size: 1.05rem; color: #e2e8f0; margin-bottom: 2rem; font-weight: 500;">
                    We Protect Your Rights. You Focus on Recovery.
                </p>

                {{-- Live Checklist --}}
                <ul style="list-style: none; padding: 0; margin: 0 0 2.5rem; display: flex; flex-direction: column; gap: 0.85rem;">
                    <li style="display: flex; align-items: center; gap: 0.75rem; font-size: 1.05rem; font-weight: 700; color: #ffffff;">
                        <span style="width: 24px; height: 24px; border-radius: 50%; background: #d62828; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        <span>Proven Legal Expertise</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.75rem; font-size: 1.05rem; font-weight: 700; color: #ffffff;">
                        <span style="width: 24px; height: 24px; border-radius: 50%; background: #d62828; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        <span>Aggressive Case Representation</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.75rem; font-size: 1.05rem; font-weight: 700; color: #ffffff;">
                        <span style="width: 24px; height: 24px; border-radius: 50%; background: #d62828; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        <span>Responsive, Reliable Support</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.75rem; font-size: 1.05rem; font-weight: 700; color: #ffffff;">
                        <span style="width: 24px; height: 24px; border-radius: 50%; background: #d62828; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        <span>Thorough Case Evaluation</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 0.75rem; font-size: 1.05rem; font-weight: 700; color: #ffffff;">
                        <span style="width: 24px; height: 24px; border-radius: 50%; background: #d62828; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                        <span>Maximum Compensation Pursuit</span>
                    </li>
                </ul>

                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg" style="box-shadow: 0 8px 25px rgba(214, 40, 40, 0.4);">
                        <span>Free Case Evaluation</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                    <a href="tel:+19707427476" class="btn btn-outline-white btn-lg">
                        <span>CALL (970) 742-7476</span>
                    </a>
                </div>
            </div>

            <div>
                <div style="border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-2xl); border: 2px solid rgba(255,255,255,0.15);">
                    <img src="{{ asset('assets/media/practice-areas/electric-bicycle-scooter-lawyer.jpg') }}" alt="Electric Scooter Accident Attorney" style="width: 100%; aspect-ratio: 16 / 11; max-height: 420px; height: auto; object-fit: cover; object-position: center center; display: block;">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- =========================================================================
     10. INSTAGRAM REELS (Official Reels Hub from @shapirothehero)
     ========================================================================= --}}
<section class="ig-reels-section">
    <div class="container">
        {{-- Section Header with Instagram Branding and Carousel Controls --}}
        <div class="ig-reels-header">
            <div>
                <div class="ig-badge">
                    <x-icon name="instagram" size="16" />
                    <span>Official Instagram Reels</span>
                </div>
                <h2 class="heading-lg" style="color: #ffffff; margin-bottom: 0.5rem;">
                    Watch Adam L. Shapiro on Instagram Reels
                </h2>
                <p style="color: #94a3b8; font-size: 1.05rem; margin: 0; max-width: 650px;">
                    Straightforward NYC legal advice, trial strategies, and what to do after an injury in 60 seconds or less.
                </p>
            </div>

            <div class="ig-nav-buttons">
                <button type="button" class="ig-nav-btn" id="ig-prev-btn" aria-label="Previous Reels">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 18l-6-6 6-6"/></svg>
                </button>
                <button type="button" class="ig-nav-btn" id="ig-next-btn" aria-label="Next Reels">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 18l6-6-6-6"/></svg>
                </button>
            </div>
        </div>

        {{-- Instagram Reels Slider Track --}}
        <div class="ig-reels-track" id="ig-reels-track">
            {{-- Reel 1: Accident Immediate Steps --}}
            <div class="ig-reel-card">
                <video class="ig-reel-video" src="{{ asset('assets/media/videos/hurt-in-accident-advice-short.mp4') }}" playsinline preload="metadata"></video>
                <div class="ig-reel-top">
                    <span class="ig-reel-badge-pill">
                        <x-icon name="instagram" size="14" />
                        <span>Immediate Steps</span>
                    </span>
                    <button type="button" class="ig-sound-btn" title="Toggle Sound">
                        <x-icon name="volume" size="16" />
                    </button>
                </div>
                <div class="ig-play-trigger">
                    <x-icon name="play" size="24" />
                </div>
                <div class="ig-reel-scrim">
                    <div class="ig-author-row">
                        <img src="{{ asset('assets/media/branding/shapiro-badge-round.png') }}" alt="Shapiro The Hero" class="ig-author-avatar">
                        <div class="ig-author-handle">
                            <span>shapirothehero</span>
                            <span class="ig-verified-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            </span>
                        </div>
                    </div>
                    <h3 class="ig-reel-title">What To Do If You're Hurt in an Accident</h3>
                    <p class="ig-reel-caption">Essential steps to document the scene, preserve witness contacts, and avoid insurance traps.</p>
                    <div class="ig-reel-audio">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>
                        <span>Original Audio &bull; Shapiro Law Office</span>
                    </div>
                </div>
            </div>

            {{-- Reel 2: Comprehensive Settlement Guide --}}
            <div class="ig-reel-card">
                <video class="ig-reel-video" src="{{ asset('assets/media/videos/hurt-in-accident-legal-guide.mp4') }}" playsinline preload="metadata"></video>
                <div class="ig-reel-top">
                    <span class="ig-reel-badge-pill">
                        <x-icon name="instagram" size="14" />
                        <span>Settlement Guide</span>
                    </span>
                    <button type="button" class="ig-sound-btn" title="Toggle Sound">
                        <x-icon name="volume" size="16" />
                    </button>
                </div>
                <div class="ig-play-trigger">
                    <x-icon name="play" size="24" />
                </div>
                <div class="ig-reel-scrim">
                    <div class="ig-author-row">
                        <img src="{{ asset('assets/media/branding/shapiro-badge-round.png') }}" alt="Shapiro The Hero" class="ig-author-avatar">
                        <div class="ig-author-handle">
                            <span>shapirothehero</span>
                            <span class="ig-verified-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            </span>
                        </div>
                    </div>
                    <h3 class="ig-reel-title">How NYC Injury Settlements Are Calculated</h3>
                    <p class="ig-reel-caption">How pain and suffering, lost income, and long-term care are properly evaluated in New York courts.</p>
                    <div class="ig-reel-audio">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>
                        <span>Original Audio &bull; Shapiro Law Office</span>
                    </div>
                </div>
            </div>

            {{-- Reel 3: Strategy & Case Review --}}
            <div class="ig-reel-card">
                <video class="ig-reel-video" src="{{ asset('assets/media/videos/nyc-injury-lawyer-consultation.mp4') }}" playsinline preload="metadata"></video>
                <div class="ig-reel-top">
                    <span class="ig-reel-badge-pill">
                        <x-icon name="instagram" size="14" />
                        <span>Case Strategy</span>
                    </span>
                    <button type="button" class="ig-sound-btn" title="Toggle Sound">
                        <x-icon name="volume" size="16" />
                    </button>
                </div>
                <div class="ig-play-trigger">
                    <x-icon name="play" size="24" />
                </div>
                <div class="ig-reel-scrim">
                    <div class="ig-author-row">
                        <img src="{{ asset('assets/media/branding/shapiro-badge-round.png') }}" alt="Shapiro The Hero" class="ig-author-avatar">
                        <div class="ig-author-handle">
                            <span>shapirothehero</span>
                            <span class="ig-verified-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            </span>
                        </div>
                    </div>
                    <h3 class="ig-reel-title">Free Legal Consultation & Case Strategy</h3>
                    <p class="ig-reel-caption">How we review police reports, interview witnesses, and assess liability with $0 upfront costs.</p>
                    <div class="ig-reel-audio">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>
                        <span>Original Audio &bull; Shapiro Law Office</span>
                    </div>
                </div>
            </div>

            {{-- Reel 4: Courtroom & Trial Preparation --}}
            <div class="ig-reel-card">
                <video class="ig-reel-video" src="{{ asset('assets/media/videos/personal-injury-case-evaluation.mp4') }}" playsinline preload="metadata"></video>
                <div class="ig-reel-top">
                    <span class="ig-reel-badge-pill">
                        <x-icon name="instagram" size="14" />
                        <span>Trial Advocacy</span>
                    </span>
                    <button type="button" class="ig-sound-btn" title="Toggle Sound">
                        <x-icon name="volume" size="16" />
                    </button>
                </div>
                <div class="ig-play-trigger">
                    <x-icon name="play" size="24" />
                </div>
                <div class="ig-reel-scrim">
                    <div class="ig-author-row">
                        <img src="{{ asset('assets/media/branding/shapiro-badge-round.png') }}" alt="Shapiro The Hero" class="ig-author-avatar">
                        <div class="ig-author-handle">
                            <span>shapirothehero</span>
                            <span class="ig-verified-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            </span>
                        </div>
                    </div>
                    <h3 class="ig-reel-title">Courtroom Preparation & Trial Advocacy</h3>
                    <p class="ig-reel-caption">Why insurance companies settle: we prepare every client file as if it will be argued before a jury.</p>
                    <div class="ig-reel-audio">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>
                        <span>Original Audio &bull; Shapiro Law Office</span>
                    </div>
                </div>
            </div>

            {{-- Reel 5: Official Firm Spotlight Reel --}}
            <div class="ig-reel-card">
                <video class="ig-reel-video" src="{{ asset('assets/media/videos/shapiro-law-firm-reel.mp4') }}" playsinline preload="metadata"></video>
                <div class="ig-reel-top">
                    <span class="ig-reel-badge-pill">
                        <x-icon name="instagram" size="14" />
                        <span>Firm Spotlight</span>
                    </span>
                    <button type="button" class="ig-sound-btn" title="Toggle Sound">
                        <x-icon name="volume" size="16" />
                    </button>
                </div>
                <div class="ig-play-trigger">
                    <x-icon name="play" size="24" />
                </div>
                <div class="ig-reel-scrim">
                    <div class="ig-author-row">
                        <img src="{{ asset('assets/media/branding/shapiro-badge-round.png') }}" alt="Shapiro The Hero" class="ig-author-avatar">
                        <div class="ig-author-handle">
                            <span>shapirothehero</span>
                            <span class="ig-verified-icon">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            </span>
                        </div>
                    </div>
                    <h3 class="ig-reel-title">Need A Hero? Meet Adam L. Shapiro</h3>
                    <p class="ig-reel-caption">25+ years fighting passionately for injury victims across Manhattan, Brooklyn, Queens, Bronx, and Long Island.</p>
                    <div class="ig-reel-audio">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18V5l12-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="18" cy="16" r="3"/></svg>
                        <span>Original Audio &bull; Shapiro Law Office</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Instagram Follow Action --}}
        <div style="margin-top: 2.5rem; text-align: center;">
            <a href="https://www.instagram.com/shapirothehero/" target="_blank" rel="noopener noreferrer" class="btn btn-outline-white" style="display: inline-flex; align-items: center; gap: 0.625rem; font-size: 0.95rem;">
                <x-icon name="instagram" size="18" />
                <span>Follow @shapirothehero on Instagram</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17l9.2-9.2M17 17V8H8"/></svg>
            </a>
        </div>
    </div>
</section>

{{-- =========================================================================
     11. WHAT OUR CLIENTS SAY (Live Section 18 Match: Real Client Reviews)
     ========================================================================= --}}
<section class="client-reviews-section" id="client-reviews">
    <div class="container">
        {{-- Section Header with Top Controls --}}
        <div class="client-reviews-header">
            <div class="client-reviews-header-left">
                <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(214, 40, 40, 0.1); border: 1px solid rgba(214, 40, 40, 0.25); padding: 0.35rem 0.9rem; border-radius: var(--radius-full); margin-bottom: 0.85rem;">
                    <img src="{{ asset('assets/media/clients/google-icon.png') }}" alt="Google" style="width: 16px; height: 16px; object-fit: contain;">
                    <span style="font-size: 0.8125rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.08em; color: var(--color-accent-red);">Verified Client Reviews</span>
                </div>
                <h2 class="heading-lg" style="margin-bottom: 0.5rem; color: #0f172a;">
                    What Our <span style="color: #d62828;">Clients </span>Say
                </h2>
                <p style="color: var(--color-text-muted); font-size: 1.05rem; font-weight: 500; margin: 0;">
                    Real Reviews From Real New Yorkers
                </p>
            </div>

            {{-- Slider Controls (Top-Right on Desktop) --}}
            <div class="client-reviews-header-controls">
                <button type="button" class="client-nav-btn client-nav-prev" id="client-prev-btn" aria-label="Previous review">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                </button>
                <button type="button" class="client-nav-btn client-nav-next" id="client-next-btn" aria-label="Next review">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                </button>
            </div>
        </div>

        {{-- Slider Track Wrapper --}}
        <div class="client-reviews-wrapper">
            <div class="client-reviews-track" id="client-reviews-track">
                
                {{-- Slide 1: Lance Becker (From Live Site) --}}
                <div class="client-review-card" data-index="0">
                    <div class="client-card-quote-icon">
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>
                    <div>
                        <div class="client-card-header">
                            <div class="client-card-user">
                                <div class="client-avatar-wrap">
                                    <img src="{{ asset('assets/media/clients/lance-becker.png') }}" alt="Lance Becker review avatar" loading="lazy">
                                </div>
                                <div class="client-author-info">
                                    <h3 class="client-card-author">Lance Becker</h3>
                                    <div class="client-verified-pill">
                                        <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>Repeat Client &bull; Queens, NY</span>
                                    </div>
                                </div>
                            </div>
                            <div class="client-platform-badge">
                                <img src="{{ asset('assets/media/clients/google-icon.png') }}" alt="Google" class="client-platform-icon">
                            </div>
                        </div>

                        <div class="client-stars-row">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>

                        <p class="client-review-text">
                            "I have used this law firm multiple times. Their advice was spot on. They executed on their promises to handle my claim to settlement. I had no complaints and would recommend this firm to others."
                        </p>
                    </div>

                    <div class="client-card-footer">
                        <span class="client-case-tag">Settlement Outcome</span>
                        <span style="font-weight: 700; color: #0f172a;">5.0 / 5.0 Rating</span>
                    </div>
                </div>

                {{-- Slide 2: APNAN AHMED (From Live Site) --}}
                <div class="client-review-card" data-index="1">
                    <div class="client-card-quote-icon">
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>
                    <div>
                        <div class="client-card-header">
                            <div class="client-card-user">
                                <div class="client-avatar-wrap">
                                    <img src="{{ asset('assets/media/clients/apnan-ahmed.jpg') }}" alt="APNAN AHMED review avatar" loading="lazy">
                                </div>
                                <div class="client-author-info">
                                    <h3 class="client-card-author">APNAN AHMED</h3>
                                    <div class="client-verified-pill">
                                        <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>Verified Client &bull; Brooklyn, NY</span>
                                    </div>
                                </div>
                            </div>
                            <div class="client-platform-badge">
                                <img src="{{ asset('assets/media/clients/google-icon.png') }}" alt="Google" class="client-platform-icon">
                            </div>
                        </div>

                        <div class="client-stars-row">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>

                        <p class="client-review-text">
                            "I have used this law firm multiple times. Their advice was spot on. They executed on their promises to handle my claim to settlement. I had no complaints and would recommend this firm to others."
                        </p>
                    </div>

                    <div class="client-card-footer">
                        <span class="client-case-tag">Injury Claim Resolution</span>
                        <span style="font-weight: 700; color: #0f172a;">5.0 / 5.0 Rating</span>
                    </div>
                </div>

                {{-- Slide 3: James Anderson (From Live Site) --}}
                <div class="client-review-card" data-index="2">
                    <div class="client-card-quote-icon">
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>
                    <div>
                        <div class="client-card-header">
                            <div class="client-card-user">
                                <div class="client-avatar-wrap">
                                    <img src="{{ asset('assets/media/clients/james-anderson.jpg') }}" alt="James Anderson review avatar" loading="lazy">
                                    <img src="{{ asset('assets/media/clients/client-avatar-vt.png') }}" alt="" style="display:none;" loading="lazy">
                                </div>
                                <div class="client-author-info">
                                    <h3 class="client-card-author">James Anderson</h3>
                                    <div class="client-verified-pill">
                                        <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>Verified Client &bull; NY</span>
                                    </div>
                                </div>
                            </div>
                            <div class="client-platform-badge">
                                <img src="{{ asset('assets/media/clients/google-icon.png') }}" alt="Google" class="client-platform-icon">
                            </div>
                        </div>

                        <div class="client-stars-row">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>

                        <p class="client-review-text">
                            "Outstanding legal support from start to finish. The team was responsive, knowledgeable, and truly committed to my case."
                        </p>
                    </div>

                    <div class="client-card-footer">
                        <span class="client-case-tag">Accident Recovery</span>
                        <span style="font-weight: 700; color: #0f172a;">5.0 / 5.0 Rating</span>
                    </div>
                </div>

                {{-- Slide 4: Eric Rosenbaum (From Live Site) --}}
                <div class="client-review-card" data-index="3">
                    <div class="client-card-quote-icon">
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>
                    <div>
                        <div class="client-card-header">
                            <div class="client-card-user">
                                <div class="client-avatar-wrap">
                                    <img src="{{ asset('assets/media/clients/eric-rosenbaum.jpg') }}" alt="Eric Rosenbaum review avatar" loading="lazy">
                                </div>
                                <div class="client-author-info">
                                    <h3 class="client-card-author">Eric Rosenbaum</h3>
                                    <div class="client-verified-pill">
                                        <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>Verified Client &bull; NYC</span>
                                    </div>
                                </div>
                            </div>
                            <div class="client-platform-badge">
                                <img src="{{ asset('assets/media/clients/google-icon.png') }}" alt="Google" class="client-platform-icon">
                            </div>
                        </div>

                        <div class="client-stars-row">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>

                        <p class="client-review-text">
                            "Adam Shapiro is a terrific lawyer. He knows his stuff, is tough, and helps guide you through the process. He really is focused on getting the absolute best outcome for you as possible."
                        </p>
                    </div>

                    <div class="client-card-footer">
                        <span class="client-case-tag">Personal Injury Lawsuit</span>
                        <span style="font-weight: 700; color: #0f172a;">5.0 / 5.0 Rating</span>
                    </div>
                </div>

                {{-- Slide 5: Philip K. --}}
                <div class="client-review-card" data-index="4">
                    <div class="client-card-quote-icon">
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>
                    <div>
                        <div class="client-card-header">
                            <div class="client-card-user">
                                <div class="client-avatar-wrap">
                                    <img src="{{ asset('assets/media/clients/philip-k.jpg') }}" alt="Philip K. review avatar" loading="lazy">
                                </div>
                                <div class="client-author-info">
                                    <h3 class="client-card-author">Philip K.</h3>
                                    <div class="client-verified-pill">
                                        <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>Verified Client &bull; Manhattan, NY</span>
                                    </div>
                                </div>
                            </div>
                            <div class="client-platform-badge">
                                <img src="{{ asset('assets/media/clients/google-icon.png') }}" alt="Google" class="client-platform-icon">
                            </div>
                        </div>

                        <div class="client-stars-row">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>

                        <p class="client-review-text">
                            "I have used Mr. Shapiro multiple times and found his professionalism and attention to details to be excellent. His follow up and result oriented approach is second to none in New York."
                        </p>
                    </div>

                    <div class="client-card-footer">
                        <span class="client-case-tag">Construction Accident</span>
                        <span style="font-weight: 700; color: #0f172a;">5.0 / 5.0 Rating</span>
                    </div>
                </div>

                {{-- Slide 6: Maria Gonzalez --}}
                <div class="client-review-card" data-index="5">
                    <div class="client-card-quote-icon">
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="currentColor"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>
                    <div>
                        <div class="client-card-header">
                            <div class="client-card-user">
                                <div class="client-avatar-wrap">
                                    <img src="{{ asset('assets/media/clients/maria-gonzalez.jpg') }}" alt="Maria Gonzalez review avatar" loading="lazy">
                                </div>
                                <div class="client-author-info">
                                    <h3 class="client-card-author">Maria Gonzalez</h3>
                                    <div class="client-verified-pill">
                                        <svg viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                        <span>Verified Client &bull; Queens, NY</span>
                                    </div>
                                </div>
                            </div>
                            <div class="client-platform-badge">
                                <img src="{{ asset('assets/media/clients/google-icon.png') }}" alt="Google" class="client-platform-icon">
                            </div>
                        </div>

                        <div class="client-stars-row">
                            <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                        </div>

                        <p class="client-review-text">
                            "Mr. Shapiro and his bilingual staff took wonderful care of our family during a very difficult accident lawsuit. Hands-on, aggressive, and always available. We won full compensation."
                        </p>
                    </div>

                    <div class="client-card-footer">
                        <span class="client-case-tag">Premises Liability</span>
                        <span style="font-weight: 700; color: #0f172a;">5.0 / 5.0 Rating</span>
                    </div>
                </div>

            </div>
        </div>

        {{-- Pagination Dots --}}
        <div class="client-pagination" id="client-pagination-dots">
            <button type="button" class="client-dot active" data-index="0" aria-label="Slide 1"></button>
            <button type="button" class="client-dot" data-index="1" aria-label="Slide 2"></button>
            <button type="button" class="client-dot" data-index="2" aria-label="Slide 3"></button>
            <button type="button" class="client-dot" data-index="3" aria-label="Slide 4"></button>
            <button type="button" class="client-dot" data-index="4" aria-label="Slide 5"></button>
            <button type="button" class="client-dot" data-index="5" aria-label="Slide 6"></button>
        </div>

        {{-- Trust Rating Badges Pill (Google 4.5/5, Yelp Top Pro, AVVO Superb from Live Site) --}}
        <div style="margin-top: 2.25rem; display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
            <div style="display: inline-flex; align-items: center; gap: 0.6rem; background: #ffffff; border: 1.5px solid #e2e8f0; box-shadow: 0 4px 15px rgba(0,0,0,0.06); padding: 0.6rem 1.4rem; border-radius: 30px; color: #0f172a; font-weight: 700; font-size: 0.95rem;">
                <img src="{{ asset('assets/media/clients/google-icon.png') }}" alt="Google" style="width: 20px; height: 20px; object-fit: contain;">
                <span>Google 4.5/5</span>
                <span style="color: #f59e0b; display: inline-flex; align-items: center; gap: 1px; font-size: 1.05rem; line-height: 1;">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span style="position: relative; display: inline-block; width: 1em; color: #cbd5e1;">★<span style="position: absolute; left: 0; top: 0; width: 50%; overflow: hidden; color: #f59e0b;">★</span></span>
                </span>
            </div>

            <div style="display: inline-flex; align-items: center; gap: 0.6rem; background: #ffffff; border: 1.5px solid #e2e8f0; box-shadow: 0 4px 15px rgba(0,0,0,0.06); padding: 0.6rem 1.4rem; border-radius: 30px; color: #0f172a; font-weight: 700; font-size: 0.95rem;">
                <span style="color: #d62828; font-weight: 900;">yelp</span>
                <span>Yelp Top Pro</span>
            </div>

            <div style="display: inline-flex; align-items: center; gap: 0.6rem; background: #ffffff; border: 1.5px solid #e2e8f0; box-shadow: 0 4px 15px rgba(0,0,0,0.06); padding: 0.6rem 1.4rem; border-radius: 30px; color: #0f172a; font-weight: 700; font-size: 0.95rem;">
                <span style="color: #1e3a8a; font-weight: 900;">Avvo</span>
                <span>AVVO Superb Rating</span>
            </div>
        </div>
    </div>
</section>

{{-- =========================================================================
     12. FREQUENTLY ASKED QUESTIONS (Live Section 19 Match: Exact Live Q&A)
     ========================================================================= --}}
<section class="section" id="faq" style="background: var(--color-bg);">
    <div class="container">
        <div class="section-header" style="text-align: center; max-width: 750px; margin: 0 auto 3rem;">
            <span class="badge badge-navy" style="margin-bottom: 0.75rem;">Clear Answers</span>
            <h2 class="heading-lg" style="margin-bottom: 0.5rem;">Frequently Asked Questions</h2>
            <p style="font-size: 1.05rem; color: var(--color-text-muted);">
                Everything you need to know about starting your claim with Shapiro Law Office.
            </p>
        </div>

        <div style="max-width: 820px; margin: 0 auto; display: flex; flex-direction: column; gap: 1.25rem;">
            {{-- FAQ 1 --}}
            <div class="card" style="background: #ffffff; padding: 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm);">
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">
                    How much do you charge for a consultation?
                </h3>
                <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-muted); margin: 0;">
                    Consultations are 100% free and confidential. We want to hear your story and help you understand your legal options without any upfront cost.
                </p>
            </div>

            {{-- FAQ 2 --}}
            <div class="card" style="background: #ffffff; padding: 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm);">
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">
                    What are your business hours?
                </h3>
                <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-muted); margin: 0;">
                    Our main office is open Monday through Friday from 8:00 AM to 7:00 PM. However, our 24/7 Injury Hotline (970-742-7476) is always available for emergencies.
                </p>
            </div>

            {{-- FAQ 3 --}}
            <div class="card" style="background: #ffffff; padding: 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm);">
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">
                    Where is Shapiro Law Office located?
                </h3>
                <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-muted); margin: 0;">
                    Our main office is located in the heart of Forest Hills at 70-20 Austin St, Suite 111, Forest Hills, NY 11375.
                </p>
            </div>

            {{-- FAQ 4 --}}
            <div class="card" style="background: #ffffff; padding: 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm);">
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">
                    How does the "No Win, No Fee" policy work?
                </h3>
                <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-muted); margin: 0;">
                    No Win, No Fee. We fight, you win. We advance all litigation costs, medical expert fees, and filing charges. If we do not recover money for your claim, you owe us nothing.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- =========================================================================
     13. QUICK HIGHLIGHTS / TRUST PILLARS (Live Section 20 Match)
     ========================================================================= --}}
<section class="section" style="background: #0b1b3d; color: #ffffff; padding: 3rem 0; border-top: 1px solid rgba(255,255,255,0.06); border-bottom: 1px solid rgba(255,255,255,0.06);">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.5rem; text-align: center;">
            <div style="padding: 1.75rem 1rem; border-radius: var(--radius-md); background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); display: flex; flex-direction: column; align-items: center;">
                <div class="card-icon-box card-icon-red card-icon-on-dark" style="margin: 0 auto 0.75rem;">
                    <x-icon name="phone-call" size="24" />
                </div>
                <h3 style="font-size: 1.05rem; font-weight: 800; color: #ffffff; margin: 0; font-family: var(--font-heading);">Injured? Call Shapiro Now</h3>
            </div>

            <div style="padding: 1.75rem 1rem; border-radius: var(--radius-md); background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); display: flex; flex-direction: column; align-items: center;">
                <div class="card-icon-box card-icon-red card-icon-on-dark" style="margin: 0 auto 0.75rem;">
                    <x-icon name="file-check" size="24" />
                </div>
                <h3 style="font-size: 1.05rem; font-weight: 800; color: #ffffff; margin: 0; font-family: var(--font-heading);">Free Consultation Call Today</h3>
            </div>

            <div style="padding: 1.75rem 1rem; border-radius: var(--radius-md); background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); display: flex; flex-direction: column; align-items: center;">
                <div class="card-icon-box card-icon-red card-icon-on-dark" style="margin: 0 auto 0.75rem;">
                    <x-icon name="dollar" size="24" />
                </div>
                <h3 style="font-size: 1.05rem; font-weight: 800; color: #ffffff; margin: 0; font-family: var(--font-heading);">No Win, No Fee</h3>
            </div>

            <div style="padding: 1.75rem 1rem; border-radius: var(--radius-md); background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); display: flex; flex-direction: column; align-items: center;">
                <div class="card-icon-box card-icon-red card-icon-on-dark" style="margin: 0 auto 0.75rem;">
                    <x-icon name="trophy" size="24" />
                </div>
                <h3 style="font-size: 1.05rem; font-weight: 800; color: #ffffff; margin: 0; font-family: var(--font-heading);">We Fight, You Win</h3>
            </div>
        </div>
    </div>
</section>

{{-- =========================================================================
     14. BOOK A CONSULTATION & CONTACT FORM (Live Section 21 Match)
     ========================================================================= --}}
<section class="section section-alt" id="consultation">
    <div class="container">
        <div class="split-section split-form">
            <div>
                <span class="section-subtitle">Searching For A Professional Law Firm?</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">
                    Book A Consultation
                </h2>
                <p style="font-size: 1.125rem; line-height: 1.7; color: var(--color-text-muted); margin-bottom: 2rem;">
                    Join thousands of satisfied clients who turned their tragedy into a legal victory. We are available 24/7 to hear your story. Time is critical in personal injury cases due to strict New York statutes of limitations. Do not speak with insurance adjusters before knowing your true rights.
                </p>

                <div style="display: flex; flex-direction: column; gap: 1.25rem; margin-bottom: 2.5rem;">
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <div class="card-icon-box-sm card-icon-blue" style="margin-bottom: 0;">
                            <x-icon name="phone-call" size="20" />
                        </div>
                        <div>
                            <div style="font-size: 0.8125rem; color: var(--color-text-muted);">Direct Consultation Hotline</div>
                            <a href="tel:+19707427476" style="font-size: 1.25rem; font-weight: 800; color: var(--color-primary);">(970) SHAPIRO / 970 742-7476</a>
                        </div>
                    </div>

                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <div class="card-icon-box-sm card-icon-blue" style="margin-bottom: 0;">
                            <x-icon name="mail" size="20" />
                        </div>
                        <div>
                            <div style="font-size: 0.8125rem; color: var(--color-text-muted);">Direct Consultation Email</div>
                            <a href="mailto:adam@shapirolawoffice.com" style="font-size: 1.125rem; font-weight: 700; color: var(--color-primary);">adam@shapirolawoffice.com</a>
                        </div>
                    </div>
                </div>

                <div style="background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-md); padding: 1.25rem; display: flex; align-items: center; gap: 1rem;">
                    <img src="{{ asset('assets/media/branding/google-reviews-badge.png') }}" alt="Google 5-Star Reviews" style="height: 36px; width: auto;">
                    <div style="font-size: 0.875rem; color: var(--color-text);">
                        <strong>5.0 Star Rated Legal Advocacy</strong> across New York City and Long Island.
                    </div>
                </div>
            </div>

            {{-- Right: Contact Form Component --}}
            <div>
                <x-contact-form />
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const track = document.getElementById('ig-reels-track');
    const prevBtn = document.getElementById('ig-prev-btn');
    const nextBtn = document.getElementById('ig-next-btn');

    if (prevBtn && nextBtn && track) {
        prevBtn.addEventListener('click', function () {
            track.scrollBy({ left: -330, behavior: 'smooth' });
        });
        nextBtn.addEventListener('click', function () {
            track.scrollBy({ left: 330, behavior: 'smooth' });
        });
    }

    const cards = document.querySelectorAll('.ig-reel-card');
    cards.forEach(function (card) {
        const video = card.querySelector('video');
        const soundBtn = card.querySelector('.ig-sound-btn');

        if (!video) return;

        // Toggle play/pause when clicking reel card
        card.addEventListener('click', function (e) {
            if (e.target.closest('.ig-sound-btn')) return;

            if (video.paused) {
                // Pause all other playing reels
                cards.forEach(function (c) {
                    const v = c.querySelector('video');
                    if (v && v !== video && !v.paused) {
                        v.pause();
                        c.classList.remove('is-playing');
                    }
                });

                video.play().then(function () {
                    card.classList.add('is-playing');
                }).catch(function (err) {
                    console.log('Playback error:', err);
                });
            } else {
                video.pause();
                card.classList.remove('is-playing');
            }
        });

        // Sound toggle
        if (soundBtn) {
            soundBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                video.muted = !video.muted;
                soundBtn.setAttribute('title', video.muted ? 'Unmute' : 'Mute');
                soundBtn.style.color = video.muted ? '#94a3b8' : '#D62828';
                soundBtn.style.borderColor = video.muted ? 'rgba(255,255,255,0.2)' : '#D62828';
            });
        }

        // Reset state on completion
        video.addEventListener('ended', function () {
            card.classList.remove('is-playing');
        });
    });

    // Hero Main Video Controls (On/Off Play/Pause & Autoplay)
    const heroVideo = document.getElementById('hero-main-video');
    const heroPlayBtn = document.getElementById('hero-video-play-btn');

    if (heroVideo) {
        heroVideo.muted = true;
        const playPromise = heroVideo.play();
        if (playPromise !== undefined) {
            playPromise.then(function () {
                if (heroPlayBtn) heroPlayBtn.classList.add('is-hidden');
            }).catch(function (err) {
                console.log('Hero video autoplay deferred or blocked:', err);
            });
        }
    }

    if (heroVideo && heroPlayBtn) {
        heroPlayBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            if (heroVideo.paused) {
                // Pause any other playing reels
                cards.forEach(function (c) {
                    const v = c.querySelector('video');
                    if (v && !v.paused) {
                        v.pause();
                        c.classList.remove('is-playing');
                    }
                });

                heroVideo.play().then(function () {
                    heroPlayBtn.classList.add('is-hidden');
                }).catch(function (err) {
                    console.log('Hero video play error:', err);
                });
            } else {
                heroVideo.pause();
                heroPlayBtn.classList.remove('is-hidden');
            }
        });

        heroVideo.addEventListener('play', function () {
            heroPlayBtn.classList.add('is-hidden');
        });

        heroVideo.addEventListener('pause', function () {
            heroPlayBtn.classList.remove('is-hidden');
        });

        heroVideo.addEventListener('ended', function () {
            heroPlayBtn.classList.remove('is-hidden');
        });
    }

    // What Our Clients Say - Interactive Carousel Controls
    const clientTrack = document.getElementById('client-reviews-track');
    const clientPrev = document.getElementById('client-prev-btn');
    const clientNext = document.getElementById('client-next-btn');
    const clientDots = document.querySelectorAll('#client-pagination-dots .client-dot');

    if (clientTrack && clientPrev && clientNext) {
        const getCardWidth = () => {
            const card = clientTrack.querySelector('.client-review-card');
            if (!card) return 380;
            const style = window.getComputedStyle(clientTrack);
            const gap = parseFloat(style.gap) || 28;
            return card.offsetWidth + gap;
        };

        clientPrev.addEventListener('click', function (e) {
            e.preventDefault();
            const cardWidth = getCardWidth();
            if (clientTrack.scrollLeft <= 10) {
                clientTrack.scrollTo({ left: clientTrack.scrollWidth - clientTrack.clientWidth, behavior: 'smooth' });
            } else {
                clientTrack.scrollBy({ left: -cardWidth, behavior: 'smooth' });
            }
        });

        clientNext.addEventListener('click', function (e) {
            e.preventDefault();
            const cardWidth = getCardWidth();
            const maxScroll = clientTrack.scrollWidth - clientTrack.clientWidth;
            if (clientTrack.scrollLeft >= maxScroll - 15) {
                clientTrack.scrollTo({ left: 0, behavior: 'smooth' });
            } else {
                clientTrack.scrollBy({ left: cardWidth, behavior: 'smooth' });
            }
        });

        // Track scroll position to update dots
        clientTrack.addEventListener('scroll', function () {
            const cardWidth = getCardWidth();
            const activeIndex = Math.min(
                clientDots.length - 1,
                Math.max(0, Math.round(clientTrack.scrollLeft / cardWidth))
            );
            clientDots.forEach(function (dot, i) {
                dot.classList.toggle('active', i === activeIndex);
            });
        }, { passive: true });

        // Dot navigation without breaking page layout
        clientDots.forEach(function (dot) {
            dot.addEventListener('click', function (e) {
                e.preventDefault();
                const targetIdx = parseInt(dot.getAttribute('data-index') || '0', 10);
                const cardWidth = getCardWidth();
                clientTrack.scrollTo({ left: targetIdx * cardWidth, behavior: 'smooth' });
            });
        });

        // Optional mouse drag-to-scroll support
        let isDown = false;
        let startX;
        let scrollStart;

        clientTrack.addEventListener('mousedown', function (e) {
            isDown = true;
            startX = e.pageX - clientTrack.offsetLeft;
            scrollStart = clientTrack.scrollLeft;
            clientTrack.style.scrollBehavior = 'auto';
        });

        window.addEventListener('mouseup', function () {
            if (isDown) {
                isDown = false;
                clientTrack.style.scrollBehavior = 'smooth';
            }
        });

        clientTrack.addEventListener('mousemove', function (e) {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - clientTrack.offsetLeft;
            const walk = (x - startX);
            clientTrack.scrollLeft = scrollStart - walk;
        });
    }
});
</script>
@endpush
