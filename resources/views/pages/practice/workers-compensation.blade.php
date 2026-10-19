@extends('layouts.app')

@section('body_class', 'practice-detail-page')

@section('content')

{{-- Hero Section --}}
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div>
                <span class="badge badge-accent" style="margin-bottom: 1.25rem;">NYC Workplace Injury Attorney</span>
                <h1 class="heading-xl" style="color: #ffffff; margin-bottom: 1.5rem;">
                    Workers' Compensation Lawyer New York City — <span style="color: var(--color-accent-light);">NYC Workplace Injury Attorney</span> Queens, Brooklyn, Manhattan &amp; All Five Boroughs
                </h1>
                <p style="font-size: 1.125rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 1.5rem;">
                    You got hurt on the job. Now your employer's insurance company is deciding what your injury is worth. Their number and the real number are rarely the same.
                </p>
                <p style="font-size: 1.05rem; line-height: 1.7; color: #e2e8f0; margin-bottom: 2rem;">
                    We fight for injured workers across New York City. Adam Shapiro has spent 30+ years on both sides of these claims. He knows exactly how insurers minimize payouts and how to secure every dollar you are owed.
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
                    <img src="{{ asset('assets/media/practice-areas/workers-compensation-lawyer.jpg') }}" alt="Workers' Compensation Attorney NYC" loading="eager">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- What Workers' Comp Covers --}}
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Statutory Protections</span>
            <h2 class="heading-lg">What New York Workers' Compensation Covers</h2>
            <p>Workers' compensation in New York provides three core categories of benefits when you are injured on the job.</p>
        </div>

        <div class="grid grid-3" style="gap: 2rem; margin-bottom: 3.5rem;">
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 2.5rem;">
                <span class="badge badge-blue" style="margin-bottom: 1rem; align-self: flex-start;">100% Covered</span>
                <h3 class="card-title">Medical Coverage</h3>
                <p class="card-text">
                    All reasonable and necessary medical treatment related to your work injury is covered: hospital stays, surgery, doctor visits, physical therapy, diagnostic scans, and prescription medications. The insurer pays doctors directly — not you.
                </p>
            </div>

            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 2.5rem;">
                <span class="badge badge-gold" style="margin-bottom: 1rem; align-self: flex-start;">Rate Updates</span>
                <h3 class="card-title">Wage Replacement</h3>
                <p class="card-text">
                    If your injury keeps you out of work or reduces your hours, you are entitled to two-thirds of your Average Weekly Wage, subject to the state maximum. As of July 1, 2025, the maximum weekly benefit rate is <strong>$1,222.42</strong> (through June 30, 2026). The statutory minimum is <strong>$325/week</strong>.
                </p>
            </div>

            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 2.5rem;">
                <span class="badge badge-red" style="margin-bottom: 1rem; align-self: flex-start;">Disability Ratings</span>
                <h3 class="card-title">Disability Classifications</h3>
                <p class="card-text">
                    Temporary total, temporary partial, permanent total, and permanent partial disability classifications carry vastly different payout durations. We fight for the classification that reflects your true medical condition, not the insurer's lowballed rating.
                </p>
            </div>
        </div>

        {{-- Crucial Third-Party Lawsuit Explainer --}}
        <div class="card" style="background: var(--color-primary); color: #ffffff; padding: 3rem; border-radius: var(--radius-xl); box-shadow: var(--shadow-xl);">
            <div class="grid grid-2" style="gap: 3rem; align-items: center;">
                <div>
                    <span class="badge badge-gold" style="margin-bottom: 1rem; align-self: flex-start;">Maximizing Your Recovery</span>
                    <h3 style="color: #ffffff; font-size: 1.85rem; font-weight: 700; margin-bottom: 1rem;">What Workers' Comp Does NOT Cover — And Why It Matters</h3>
                    <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 1rem;">
                        Workers' compensation replaces only two-thirds of wages, caps high-earning workers below two-thirds, and provides <strong>zero compensation for pain and suffering</strong>.
                    </p>
                    <p style="color: #cbd5e1; line-height: 1.7; margin: 0;">
                        That gap is substantial. And it is where a <strong>third-party personal injury lawsuit</strong> becomes essential. If someone other than your direct employer contributed to your injury — a general contractor, subcontractor, building owner, or machinery manufacturer — we file a separate personal injury lawsuit.
                    </p>
                </div>
                <div style="background: rgba(255,255,255,0.08); padding: 2rem; border-radius: var(--radius-lg); border: 1px solid rgba(255,255,255,0.15);">
                    <h4 style="color: var(--color-gold); font-size: 1.2rem; margin-bottom: 0.75rem;">Two Claims Running Simultaneously</h4>
                    <p style="color: #e2e8f0; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.25rem;">
                        The third-party lawsuit recovers pain and suffering, future earning loss, and damages workers' comp will never touch. We investigate every case for third-party liability from day one. You never have to leave money on the table.
                    </p>
                    <a href="tel:+19707427476" class="btn btn-accent btn-md">Explore Third-Party Claims</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Common Injuries We Fight For --}}
<section class="section section-alt">
    <div class="container">
        <div class="grid grid-2" style="align-items: center; gap: 3.5rem;">
            <div>
                <span class="section-subtitle">Extensive Representation</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">Common Workplace Injuries We Fight For</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.5rem;">
                    We represent injured workers across all five boroughs in every commercial sector:
                </p>

                <div class="checklist-two-col">
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Construction Falls &amp; Scaffolds
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Repetitive Stress Injuries
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Forklift &amp; Machinery Crush
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Slips, Trips &amp; Falls on Job
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Severe Lifting &amp; Disc Herniations
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Burns &amp; Electrical Shocks
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Toxic Fume Exposure
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Delivery &amp; Transport Crashes
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Healthcare Worker Injuries
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Job Site Catastrophic Trauma
                    </div>
                </div>

                <div style="background: #ffffff; padding: 1.25rem; border-radius: var(--radius-md); border-left: 3px solid var(--color-accent); margin-bottom: 1.5rem;">
                    <p style="margin: 0; font-size: 0.9rem; color: var(--color-text); font-weight: 600;">
                        Employer Retaliation Is Illegal: Under New York law, it is strictly unlawful for your employer to fire, demote, or cut hours because you filed a claim. If they retaliate, we take direct legal action against them.
                    </p>
                </div>
                <div class="btn-action-row">
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-md">Free Comp Review &rarr;</a>
                    <a href="tel:+19707427476" class="btn btn-outline btn-md">Call (970) 742-7476</a>
                </div>
            </div>

            <div>
                <div style="border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-xl);">
                    <img src="{{ asset('assets/media/practice-areas/construction-accident-lawyer.png') }}" alt="Workplace Injury Claims" style="width: 100%; height: 490px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Benefit Calculations & Deadlines --}}
<section class="section">
    <div class="container">
        <div class="grid grid-2" style="gap: 3.5rem; align-items: flex-start;">
            <div class="card" style="padding: 2.5rem;">
                <span class="badge badge-gold" style="margin-bottom: 1rem; align-self: flex-start;">Auditing Calculations</span>
                <h3 class="heading-md" style="margin-bottom: 1rem;">How Benefits Are Calculated</h3>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                    Your Average Weekly Wage (AWW) is determined by your gross earnings in the 52 weeks prior to injury, including overtime and bonuses. The weekly formula is two-thirds of your AWW multiplied by your degree of disability.
                </p>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin: 0;">
                    Insurers routinely undervalue the AWW calculation, especially for workers paid partially in cash or whose hours fluctuated seasonally. We audit every calculation to recover the true compensation you are owed.
                </p>
            </div>

            <div class="card" style="padding: 2.5rem;">
                <span class="badge badge-red" style="margin-bottom: 1rem; align-self: flex-start;">Statute of Limitations</span>
                <h3 class="heading-md" style="margin-bottom: 1rem;">Critical Deadlines — Do Not Miss These</h3>
                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 1rem; font-size: 0.95rem; color: var(--color-text-muted);">
                    <li>
                        <strong style="color: var(--color-primary);">30 Days to Report:</strong> You must give written notice of your injury to your employer within 30 days of the accident.
                    </li>
                    <li>
                        <strong style="color: var(--color-primary);">2 Years to File:</strong> You must file an official claim with the New York State Workers' Compensation Board within two years of the injury date.
                    </li>
                    <li>
                        <strong style="color: var(--color-accent);">90 Days for Municipal Sites:</strong> If your job injury occurred on city- or state-owned property, a formal Notice of Claim must be served within 90 days.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

{{-- FAQ Section --}}
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Workers' Comp FAQ</span>
            <h2 class="heading-lg">Frequently Asked Questions</h2>
            <p>Direct legal answers regarding New York workplace accidents and board hearings.</p>
        </div>

        <div class="faq-list" style="max-width: 900px; margin: 0 auto;">
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Do I have to prove my employer was negligent to get workers' comp?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>No. Workers' compensation in New York is a no-fault system. If you were injured in the course and scope of your employment, you are generally entitled to statutory benefits regardless of who caused the accident.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Can I be fired for filing a workers' comp claim?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>No. Employer retaliation for filing a workers' comp claim is strictly illegal under New York Workers' Compensation Law § 120. If your employer fires, demotes, or retaliates against you, we pursue additional legal claims against them.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if my workers' comp claim is denied?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>You have the absolute right to appeal before an Administrative Law Judge at the New York State Workers' Compensation Board. We handle the entire hearing and appeals process, gathering medical proof to overturn the denial.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Can I sue my employer directly?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>In most circumstances, workers' compensation is your exclusive remedy against your direct employer. However, it does not prevent you from suing third parties — such as general contractors, property owners, or equipment manufacturers — whose negligence contributed to your harm.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How much of my wages will I actually receive?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Two-thirds of your average weekly wage, up to the New York state statutory maximum of $1,222.42 per week (for injuries occurring July 1, 2025 through June 30, 2026). The minimum weekly rate is $325. We ensure your AWW is calculated correctly.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if I have a pre-existing condition?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Under New York law, aggravation of a pre-existing condition caused by a job accident or repetitive occupational stress is fully compensable. We work with physicians to document how the workplace event worsened your condition.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Do you charge anything upfront?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Nothing. All legal fees in workers' compensation and third-party injury claims are strictly contingency-based and must be approved by the Workers' Compensation Board or court. You pay nothing out-of-pocket.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Consultation CTA Section --}}
<section class="section" id="consultation">
    <div class="container">
        <div class="grid grid-2" style="gap: 3.5rem; align-items: flex-start;">
            <div>
                <span class="section-subtitle">Defend Your Rights</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">Talk to Adam Before the Insurance Company Closes Your Case</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.5rem;">
                    The insurer moves fast after a workplace injury. Before you give a recorded statement, sign anything, or accept any benefit offer without legal counsel, call us first.
                </p>
                <div style="background: var(--color-bg-alt); padding: 1.75rem; border-radius: var(--radius-lg); margin-bottom: 2rem; border-left: 4px solid var(--color-accent);">
                    <div style="font-weight: 700; color: var(--color-primary); font-size: 1.15rem; margin-bottom: 0.5rem;">Free Direct Attorney Consultation</div>
                    <p style="margin: 0; color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.6;">
                        The consultation is free. Adam is reachable from the very first call. We review your case and identify all available sources of recovery.
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
                <x-contact-form :caseType="'Workers Compensation'" />
            </div>
        </div>
    </div>
</section>

{{-- Cases We Handle Matrix --}}
@include('partials.cases-we-handle')

{{-- Awards & Recognition Ribbon --}}
@include('partials.awards-ribbon')

@endsection
