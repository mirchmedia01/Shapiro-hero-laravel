@extends('layouts.app')

@section('body_class', 'services-page')

@section('content')

{{-- Hero Section --}}
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div>
                <span class="badge badge-gold" style="margin-bottom: 1.25rem;">Practice Areas Directory</span>
                <h1 class="heading-xl" style="color: #ffffff; margin-bottom: 1.5rem;">
                    Personal Injury <span style="color: var(--color-accent-light);">Practice Areas</span> — New York Accident &amp; Injury Lawyer
                </h1>
                <p style="font-size: 1.125rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 2rem;">
                    Thirty years. Both sides of the courtroom. Adam defended the insurance giants before he switched sides to hunt them. Every case below is handled personally. You are never a file number here.
                </p>
                <div class="btn-action-row">
                    <a href="#directory" class="btn btn-accent">Explore Practice Areas</a>
                    <a href="{{ route('contact') }}" class="btn btn-outline-white">Free Consultation</a>
                </div>
            </div>

            <div>
                <div class="hero-media-card" style="border-radius: 24px; overflow: hidden; -webkit-mask-image: -webkit-radial-gradient(white, black); mask-image: radial-gradient(white, black);">
                    <img src="{{ asset('assets/media/practice-areas/nyc-personal-injury-hero.jpg') }}" alt="Personal Injury Legal Services" loading="eager" style="border-radius: 24px;">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Practice Area Directory (8 Cards) --}}
<section class="section" id="directory">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Comprehensive Coverage</span>
            <h2 class="heading-lg">Our Areas of Legal Focus</h2>
            <p>Select your accident category below to learn about your legal rights and our aggressive litigation strategies.</p>
        </div>

        <div class="grid grid-4 practice-cards-grid">
            {{-- 1. Personal Injury --}}
            <div class="practice-card">
                <div class="practice-card-media">
                    <img src="{{ asset('assets/media/practice-areas/personal-injury-lawyer.jpg') }}" alt="Personal Injury Lawyer" class="practice-card-image" loading="lazy">
                </div>
                <div class="practice-card-body">
                    <span class="badge badge-blue" style="margin-bottom: 0.5rem; align-self: flex-start;">General Tort</span>
                    <h3 class="practice-card-title">Personal Injury</h3>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
                        Someone’s negligence put you in a hospital bed. Now their insurance company is working to minimize what they pay you. We fight for injury victims across NY and FL, recovering every dollar available.
                    </p>
                    <a href="{{ route('practice.personal-injury') }}" class="practice-card-link">
                        <span>Learn More</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            {{-- 2. Motor Vehicle Accidents --}}
            <div class="practice-card">
                <div class="practice-card-media">
                    <img src="{{ asset('assets/media/practice-areas/motor-vehicle-accident-lawyer.jpg') }}" alt="Motor Vehicle Accidents" class="practice-card-image" loading="lazy">
                </div>
                <div class="practice-card-body">
                    <span class="badge badge-gold" style="margin-bottom: 0.5rem; align-self: flex-start;">Auto Crashes</span>
                    <h3 class="practice-card-title">Motor Vehicle Accidents</h3>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
                        Commercial trucks, multi-car highway pileups, rideshare collisions, and motorcycle accidents across NYC and Long Island. We pursue policy limits from all negligent operators.
                    </p>
                    <a href="{{ route('practice.motor-vehicle') }}" class="practice-card-link">
                        <span>Learn More</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            {{-- 3. Slip, Trip & Fall --}}
            <div class="practice-card">
                <div class="practice-card-media">
                    <img src="{{ asset('assets/media/practice-areas/slip-trip-fall-attorney.jpg') }}" alt="Slip / Trip & Fall" class="practice-card-image" loading="lazy">
                </div>
                <div class="practice-card-body">
                    <span class="badge badge-red" style="margin-bottom: 0.5rem; align-self: flex-start;">Premises Liability</span>
                    <h3 class="practice-card-title">Slip/Trip &amp; Fall</h3>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
                        Property owners who neglect ice, broken concrete sidewalks, dark staircases, or wet floors must be held responsible. We document hazards before property owners can repair them.
                    </p>
                    <a href="{{ route('practice.slip-trip-fall') }}" class="practice-card-link">
                        <span>Learn More</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            {{-- 4. Workers' Compensation --}}
            <div class="practice-card">
                <div class="practice-card-media">
                    <img src="{{ asset('assets/media/practice-areas/workers-compensation-lawyer.jpg') }}" alt="Workers' Compensation" class="practice-card-image" loading="lazy">
                </div>
                <div class="practice-card-body">
                    <span class="badge badge-blue" style="margin-bottom: 0.5rem; align-self: flex-start;">Workplace Injuries</span>
                    <h3 class="practice-card-title">Workers' Compensation</h3>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
                        Injured on the job in New York? We help you secure medical care and wage replacement while uncovering third-party liability claims that exceed statutory workers' comp limits.
                    </p>
                    <a href="{{ route('practice.workers-compensation') }}" class="practice-card-link">
                        <span>Learn More</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            {{-- 5. Medical Malpractice --}}
            <div class="practice-card">
                <div class="practice-card-media">
                    <img src="{{ asset('assets/media/practice-areas/medical-malpractice-attorney.png') }}" alt="Medical Malpractice" class="practice-card-image" loading="lazy">
                </div>
                <div class="practice-card-body">
                    <span class="badge badge-red" style="margin-bottom: 0.5rem; align-self: flex-start;">Medical Neglect</span>
                    <h3 class="practice-card-title">Medical Malpractice</h3>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
                        When doctors, hospitals, or surgeons make inexcusable errors. We collaborate with premier medical specialists to expose negligence and secure the justice your family deserves.
                    </p>
                    <a href="{{ route('practice.medical-malpractice') }}" class="practice-card-link">
                        <span>Learn More</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            {{-- 6. Wrongful Death --}}
            <div class="practice-card">
                <div class="practice-card-media">
                    <img src="{{ asset('assets/media/practice-areas/wrongful-death-lawyer.jpg') }}" alt="Wrongful Death" class="practice-card-image" loading="lazy">
                </div>
                <div class="practice-card-body">
                    <span class="badge badge-gold" style="margin-bottom: 0.5rem; align-self: flex-start;">Fatal Claims</span>
                    <h3 class="practice-card-title">Wrongful Death</h3>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
                        Nothing can replace a lost loved one, but holding the responsible parties accountable protects your family's financial future and delivers a measure of closure.
                    </p>
                    <a href="{{ route('practice.wrongful-death') }}" class="practice-card-link">
                        <span>Learn More</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            {{-- 7. Construction Accidents --}}
            <div class="practice-card">
                <div class="practice-card-media">
                    <img src="{{ asset('assets/media/practice-areas/construction-accident-lawyer.png') }}" alt="Construction Accidents" class="practice-card-image" loading="lazy">
                </div>
                <div class="practice-card-body">
                    <span class="badge badge-blue" style="margin-bottom: 0.5rem; align-self: flex-start;">Scaffold &amp; Labor Law</span>
                    <h3 class="practice-card-title">Construction Accidents</h3>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
                        Under NY Labor Law Sections 240, 241(6), and 200, general contractors and owners are strictly accountable for falls from ladders, scaffolds, and falling site debris.
                    </p>
                    <a href="{{ route('practice.construction-accident') }}" class="practice-card-link">
                        <span>Learn More</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            {{-- 8. E-Bike & Electric Scooter --}}
            <div class="practice-card">
                <div class="practice-card-media">
                    <img src="{{ asset('assets/media/practice-areas/electric-bicycle-scooter-lawyer.jpg') }}" alt="E-Bike & Electric Scooter Accidents" class="practice-card-image" loading="lazy">
                </div>
                <div class="practice-card-body">
                    <span class="badge badge-gold" style="margin-bottom: 0.5rem; align-self: flex-start;">Urban Transit</span>
                    <h3 class="practice-card-title">E-Bike &amp; Scooter</h3>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.6; margin-bottom: 1.25rem;">
                        E-bike riders and pedestrians suffer severe fractures and head trauma in NYC traffic. We identify every liable driver, fleet company, and equipment manufacturer.
                    </p>
                    <a href="{{ route('practice.ebike-scooter') }}" class="practice-card-link">
                        <span>Learn More</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Frequently Asked Questions --}}
<section class="section section-alt" id="faq">
    <div class="container">
        <div class="section-header" style="text-align: center; max-width: 750px; margin: 0 auto 3rem;">
            <span class="badge badge-navy" style="margin-bottom: 0.75rem;">Clear Answers</span>
            <h2 class="heading-lg" style="margin-bottom: 0.5rem;">Frequently Asked Questions</h2>
            <p style="font-size: 1.05rem; color: var(--color-text-muted);">Common questions regarding personal injury claims in New York.</p>
        </div>

        <div style="max-width: 820px; margin: 0 auto; display: flex; flex-direction: column; gap: 1.25rem;">
            <div class="card" style="background: #ffffff; padding: 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm);">
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">
                    How much does it cost to hire you?
                </h3>
                <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-muted); margin: 0;">
                    Nothing upfront. Contingency fee only. No win, no fee. We advance all litigation costs and get paid only when we win your compensation.
                </p>
            </div>

            <div class="card" style="background: #ffffff; padding: 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm);">
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">
                    How quickly should I contact a lawyer?
                </h3>
                <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-muted); margin: 0;">
                    Same day. Evidence disappears fast and the insurance company starts building against you immediately. Call us before speaking to any adjuster.
                </p>
            </div>

            <div class="card" style="background: #ffffff; padding: 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm);">
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">
                    Will my case go to trial?
                </h3>
                <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-muted); margin: 0;">
                    Most cases settle. If the insurer will not pay what your case is worth, we take them to court. Preparing for trial is why we win higher settlements.
                </p>
            </div>

            <div class="card" style="background: #ffffff; padding: 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm);">
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">
                    What if I was partially at fault?
                </h3>
                <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-muted); margin: 0;">
                    New York’s comparative negligence law means you can still recover even if you were partly at fault. Your award is reduced proportionally, not barred.
                </p>
            </div>

            <div class="card" style="background: #ffffff; padding: 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm);">
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">
                    Can I sue the city of New York or MTA?
                </h3>
                <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-muted); margin: 0;">
                    Yes. But a Notice of Claim must be filed within 90 days of the incident. Miss that window and the case is gone. Call immediately.
                </p>
            </div>

            <div class="card" style="background: #ffffff; padding: 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm);">
                <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.5rem; font-family: var(--font-heading);">
                    Do you speak Spanish?
                </h3>
                <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-muted); margin: 0;">
                    Yes. Full legal services in English and Spanish. Hablamos Espa&ntilde;ol.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Ready to seek Justice? Section --}}
<section class="section section-dark">
    <div class="container container-narrow" style="text-align: center;">
        <span class="badge badge-gold" style="margin-bottom: 1rem;">24/7 Rapid Response</span>
        <h2 class="heading-lg" style="color: #ffffff; margin-bottom: 1.25rem;">Ready to Seek Justice?</h2>
        <p style="color: #cbd5e1; font-size: 1.125rem; line-height: 1.7; margin-bottom: 2.25rem;">
            Join thousands of satisfied clients who turned their tragedy into a legal victory. We are available 24/7 to hear your story. No win, no fee.
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="tel:+19707427476" class="btn btn-accent btn-lg">Call (970) SHAPIRO</a>
            <a href="{{ route('contact') }}" class="btn btn-outline-white btn-lg">Book A Consultation</a>
        </div>
    </div>
</section>

@endsection
