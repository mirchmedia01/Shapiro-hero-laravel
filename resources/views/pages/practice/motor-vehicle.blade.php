@extends('layouts.app')

@section('body_class', 'practice-detail-page')

@section('content')

{{-- Hero Section --}}
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div>
                <span class="badge badge-accent" style="margin-bottom: 1.25rem;">Motor Vehicle Accident Attorney</span>
                <h1 class="heading-xl" style="color: #ffffff; margin-bottom: 1.5rem;">
                    New York Car Accident Lawyer &amp; <span style="color: var(--color-accent-light);">Motor Vehicle Accident Attorney</span> Serving All Five Boroughs
                </h1>
                <p style="font-size: 1.125rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 1.5rem;">
                    Insurance companies move fast after a crash. We move faster. If you were injured in a car, truck, motorcycle, rideshare, or any motor vehicle collision in New York, we fight to recover every dollar you are owed.
                </p>
                <div class="btn-action-row">
                    <a href="tel:+19707427476" class="btn btn-accent btn-lg">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 0.5rem; vertical-align: middle;"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                        Get Free Case Review
                    </a>
                    <a href="#consultation" class="btn btn-outline-white btn-lg">Schedule Consultation</a>
                </div>
                <div style="margin-top: 1.5rem; display: flex; gap: 1.5rem; flex-wrap: wrap; font-size: 0.875rem; color: #94a3b8;">
                    <span>✓ Free Consultation</span>
                    <span>✓ English &amp; Español</span>
                    <span>✓ No Fee Unless We Win</span>
                </div>
            </div>

            <div>
                <div class="hero-media-card">
                    <img src="{{ asset('assets/media/practice-areas/motor-vehicle-accident-lawyer.jpg') }}" alt="Motor Vehicle Accident Lawyer NYC" loading="eager">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Car Accident Claims in NY --}}
<section class="section">
    <div class="container">
        <div class="grid grid-2" style="align-items: center; gap: 3.5rem;">
            <div>
                <div style="border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-lg);">
                    <img src="{{ asset('assets/media/practice-areas/nyc-car-accident-claims.jpg') }}" alt="Car Accident Claims in New York" style="width: 100%; aspect-ratio: 16 / 11; max-height: 480px; height: 100%; object-fit: cover; display: block;">
                </div>
            </div>
            <div>
                <span class="section-subtitle">Maximizing Your Settlement</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">Car Accident Claims in New York</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                    A car accident can upend everything in seconds. Your health. Your income. Your ability to care for your family. What happens in the days immediately following the crash determines how much compensation you recover.
                </p>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                    Insurance adjusters are trained to minimize payouts. They call fast, sound sympathetic, and put a number on the table that sounds reasonable but sits far below what your case is truly worth. Adam knows this firsthand because he spent years on the defense side watching it happen. Then he crossed the aisle to fight for injured victims.
                </p>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.5rem;">
                    When you hire us, we take over all communications with insurers immediately. We secure police reports, preserve surveillance footage and dashcam data, work with premier medical experts, and negotiate from strength. If they refuse to pay fairly, we take it to trial.
                </p>
                <div class="btn-action-row">
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-md">Free Crash Review &rarr;</a>
                    <a href="tel:+19707427476" class="btn btn-outline btn-md">Call (970) 742-7476</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Our Strategy (4-Step Process) --}}
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Battle-Tested Methodology</span>
            <h2 class="heading-lg">Our 4-Step Strategic Blueprint</h2>
            <p>We systematically deconstruct the defense's playbook to position your case for maximum recovery.</p>
        </div>

        <div class="grid grid-4" style="gap: 1.5rem;">
            <div class="card" style="border-top: 4px solid var(--color-primary);">
                <span style="font-size: 2rem; font-weight: 800; color: var(--color-accent); margin-bottom: 0.5rem; display: block;">01</span>
                <h3 class="card-title">Information Gathering</h3>
                <p class="card-text">We secure police crash reports, 911 audio, witness statements, traffic camera recordings, and black box telemetry before it is erased.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary);">
                <span style="font-size: 2rem; font-weight: 800; color: var(--color-accent); margin-bottom: 0.5rem; display: block;">02</span>
                <h3 class="card-title">Expert Consultation</h3>
                <p class="card-text">We coordinate with top orthopedic surgeons, neurologists, and accident reconstruction engineers to validate your injuries.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary);">
                <span style="font-size: 2rem; font-weight: 800; color: var(--color-accent); margin-bottom: 0.5rem; display: block;">03</span>
                <h3 class="card-title">Client Protection</h3>
                <p class="card-text">We aggressively file No-Fault wage and medical coverage claims within New York's 30-day window so bills get paid while we sue.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary);">
                <span style="font-size: 2rem; font-weight: 800; color: var(--color-accent); margin-bottom: 0.5rem; display: block;">04</span>
                <h3 class="card-title">Maximum Results</h3>
                <p class="card-text">Negotiating from an unyielding position of strength, ready and willing to take the defendant to trial if their offer falls short.</p>
            </div>
        </div>
    </div>
</section>

{{-- Case Valuation & Specialized Vehicle Cases --}}
<section class="section">
    <div class="container">
        <div class="grid grid-2" style="gap: 3.5rem; align-items: flex-start; margin-bottom: 4rem;">
            <div class="card" style="padding: 2.5rem;">
                <span class="badge badge-gold" style="margin-bottom: 1rem; align-self: flex-start;">Case Valuation</span>
                <h3 class="heading-md" style="margin-bottom: 1rem;">How Much Is a Car Accident Worth in New York?</h3>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                    No two cases are identical. New York law allows injury victims to pursue compensation across several distinct categories:
                </p>
                <ul style="list-style: none; padding: 0; margin: 0 0 1.5rem 0; display: flex; flex-direction: column; gap: 0.75rem;">
                    <li style="display: flex; gap: 0.5rem; color: var(--color-text);">
                        <strong style="color: var(--color-accent);">&bull;</strong> Medical bills — all current emergency treatment and projected future care
                    </li>
                    <li style="display: flex; gap: 0.5rem; color: var(--color-text);">
                        <strong style="color: var(--color-accent);">&bull;</strong> Lost wages and diminished future earning capacity
                    </li>
                    <li style="display: flex; gap: 0.5rem; color: var(--color-text);">
                        <strong style="color: var(--color-accent);">&bull;</strong> Pain and suffering, emotional distress, and loss of life enjoyment
                    </li>
                    <li style="display: flex; gap: 0.5rem; color: var(--color-text);">
                        <strong style="color: var(--color-accent);">&bull;</strong> Complete vehicle and personal property damage
                    </li>
                    <li style="display: flex; gap: 0.5rem; color: var(--color-text);">
                        <strong style="color: var(--color-accent);">&bull;</strong> Wrongful death compensation if a loved one was tragically lost
                    </li>
                </ul>
                <div style="background: var(--color-bg-alt); padding: 1.25rem; border-radius: var(--radius-md); border-left: 3px solid var(--color-gold);">
                    <p style="margin: 0; font-size: 0.9rem; color: var(--color-text); font-weight: 500;">
                        The first offer from an insurer is almost never fair. We evaluate every factor — injury severity, recovery duration, lifetime economic loss, and policy limits — and demand full value.
                    </p>
                </div>
            </div>

            <div>
                <span class="section-subtitle">Commercial &amp; Complex Collisions</span>
                <h3 class="heading-md" style="margin-bottom: 1.25rem;">Truck Accident Claims — Federal Regulations &amp; Fleet Liability</h3>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                    Commercial truck accidents involve severe injuries and complex federal FMCSA regulations. Unlike standard passenger car claims, liability often extends across multiple entities: the driver, the trucking company, the cargo loader, and equipment manufacturers.
                </p>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                    Commercial carriers carry commercial policies from $1M to $10M+. We act immediately to secure vital telemetry, driver electronic logs, and maintenance records before they can be altered or erased.
                </p>
                <div class="btn-action-row">
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-md">Free Truck Claim Review &rarr;</a>
                    <a href="tel:+19707427476" class="btn btn-outline btn-md">Call (970) 742-7476</a>
                </div>
            </div>
        </div>

        {{-- Specialized Areas (Motorcycle, Rideshare, Hit and Run) in One Clean Row --}}
        <div class="grid grid-3" style="gap: 1.5rem;">
            <div class="card" style="padding: 1.75rem;">
                <span class="badge badge-red" style="margin-bottom: 0.75rem; align-self: flex-start;">Rider Defense</span>
                <h4 class="card-title">Motorcycle Accidents</h4>
                <p class="card-text" style="line-height: 1.6; margin-bottom: 0;">
                    Riders face unfair bias from insurers and juries. We dismantle the assumption that the motorcyclist was reckless, proving fault and recovering full compensation for serious trauma.
                </p>
            </div>

            <div class="card" style="padding: 1.75rem;">
                <span class="badge badge-gold" style="margin-bottom: 0.75rem; align-self: flex-start;">Uber &amp; Lyft</span>
                <h4 class="card-title">Rideshare Collisions</h4>
                <p class="card-text" style="line-height: 1.6; margin-bottom: 0;">
                    Coverage depends on driver app status — whether waiting for a fare or transporting passengers under a $1M corporate policy. We maximize recovery under every applicable tier.
                </p>
            </div>

            <div class="card" style="padding: 1.75rem;">
                <span class="badge badge-blue" style="margin-bottom: 0.75rem; align-self: flex-start;">Uninsured / Hit &amp; Run</span>
                <h4 class="card-title">Hit &amp; Run Accidents</h4>
                <p class="card-text" style="line-height: 1.6; margin-bottom: 0;">
                    If the at-fault driver fled or had no insurance, your claim is not lost. We pursue recovery through your uninsured motorist coverage and New York's MVAIC fund.
                </p>
            </div>
        </div>
    </div>
</section>

@include('partials.cases-we-handle')

{{-- Comparative Fault & Deadlines --}}
<section class="section section-alt">
    <div class="container">
        <div class="grid grid-2" style="align-items: center; gap: 3.5rem;">
            <div>
                <span class="section-subtitle">Critical New York Rules</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">New York Comparative Negligence &amp; Strict Deadlines</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                    New York follows a pure comparative fault rule. You can recover compensation even if you were partially responsible for the crash. Your recovery is reduced proportionally by your percentage of fault, but not eliminated. We aggressively keep your assigned percentage aligned with the physical evidence.
                </p>
                <div style="background: #ffffff; padding: 1.5rem; border-radius: var(--radius-lg); border-left: 4px solid var(--color-accent); margin-bottom: 1.5rem;">
                    <strong style="color: var(--color-primary); font-size: 1.05rem; display: block; margin-bottom: 0.5rem;">Statute of Limitations Deadlines:</strong>
                    <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.5rem; font-size: 0.95rem; color: var(--color-text-muted);">
                        <li><strong>3 Years:</strong> Standard motor vehicle accident claims against private drivers.</li>
                        <li><strong>90 Days:</strong> Strict Notice of Claim window for collisions involving municipal vehicles (MTA buses, NYPD, sanitation trucks, or city-owned cars).</li>
                        <li><strong>30 Days:</strong> Required deadline to file for New York No-Fault medical and lost wage benefits.</li>
                    </ul>
                </div>
                <p style="color: var(--color-text-muted); font-size: 0.95rem; margin-bottom: 1.5rem;">
                    <strong>Serving All Five Boroughs:</strong> Queens (Forest Hills, Flushing, Jamaica, Astoria), Brooklyn, The Bronx, Manhattan, Staten Island, and Long Island.
                </p>
                <div class="btn-action-row" style="display: flex; flex-direction: row; flex-wrap: nowrap; gap: 0.75rem; align-items: center;">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-md" style="white-space: nowrap;">Check Claim Deadline &rarr;</a>
                    <a href="tel:+19707427476" class="btn btn-outline btn-md" style="white-space: nowrap;">Call (970) SHAPIRO</a>
                </div>
            </div>

            <div>
                <div style="border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-xl);">
                    <img src="{{ asset('assets/media/practice-areas/crash-scene-investigation.jpg') }}" alt="Motor Vehicle Crash Representation" style="width: 100%; aspect-ratio: 16 / 11; max-height: 480px; height: 100%; object-fit: cover; display: block;">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FAQ Section --}}
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Clear Answers</span>
            <h2 class="heading-lg">Frequently Asked Questions</h2>
            <p>Straightforward guidance on New York motor vehicle accident litigation.</p>
        </div>

        <div class="faq-list" style="max-width: 900px; margin: 0 auto;">
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What should I do immediately after a car accident in New York?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Call the police and ensure an official report is filed. Seek medical attention immediately even if you feel fine — an initial gap in treatment is the primary weapon insurers use to devalue claims. Document the scene with photos, gather witness info, and call us before speaking to any insurance adjuster.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How much is a car accident worth in New York?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>It depends on injury severity, duration of treatment, lost income, and available insurance coverage. What is consistent is that the first offer is almost never the right number. We evaluate every factor and fight for what your case is actually worth.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How long will my case take?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Straightforward cases can settle in months. Cases involving serious injuries or disputed fault can take longer and may go to trial. We keep you informed at every stage and never push you toward a fast settlement that undervalues your claim.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if I was partially at fault?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>You can still recover under New York's comparative fault law. Your recovery is reduced proportionally by your percentage of fault, but not eliminated. We fight to ensure your assigned fault percentage strictly reflects the actual facts.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if the driver who hit me had no insurance?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>We pursue recovery through your own uninsured motorist coverage and through New York's Motor Vehicle Accident Indemnification Corporation (MVAIC). An uninsured driver does not mean an uncompensated victim.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Consultation CTA Section --}}
<section class="section section-alt" id="consultation">
    <div class="container">
        <div class="grid grid-2" style="gap: 3.5rem; align-items: flex-start;">
            <div>
                <span class="section-subtitle">Don't Wait</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">Talk to Adam Before You Talk to the Insurance Company</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.5rem;">
                    Before you give a recorded statement, accept a quick settlement offer, or sign any insurance documents, call us first. The consultation is free, and there is zero fee unless we win.
                </p>
                <div style="background: #ffffff; padding: 1.75rem; border-radius: var(--radius-lg); margin-bottom: 2rem; border-left: 4px solid var(--color-accent); box-shadow: var(--shadow-sm);">
                    <div style="font-weight: 700; color: var(--color-primary); font-size: 1.15rem; margin-bottom: 0.5rem;">Direct Access to Adam Shapiro</div>
                    <p style="margin: 0; color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.6;">
                        Adam is reachable from the very first call. We review your accident details and formulate a customized legal strategy for your case.
                    </p>
                </div>
                <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                    <a href="tel:+19707427476" class="btn btn-primary btn-lg" style="display: inline-flex; align-items: center; justify-content: center; gap: 0.6rem; text-decoration: none;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>Call (970) SHAPIRO / 970 742-7476</span>
                    </a>
                    <span style="font-size: 0.8125rem; color: var(--color-text-muted); text-align: center;">Available 24/7 &bull; Direct Attorney Access &bull; No Win No Fee</span>
                </div>
            </div>

            <div>
                <x-contact-form :caseType="'Car / Motor Vehicle Accident'" />
            </div>
        </div>
    </div>
</section>

@endsection
