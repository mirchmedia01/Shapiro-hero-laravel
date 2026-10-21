@extends('layouts.app')

@section('title', 'New York Construction Accident Lawyer | Labor Law 240 | Shapiro the Hero')
@section('meta_description', 'Injured on a New York construction site? Shapiro the Hero handles Labor Law 240/241 scaffold falls, equipment injuries, and wrongful death claims. Free consultation — no fee unless we win.')

@section('body_class', 'practice-detail-page')

@section('content')

{{-- Hero Section --}}
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div>
                <span class="badge badge-accent" style="margin-bottom: 1.25rem;">NYC Construction Injury Attorney</span>
                <h1 class="heading-xl" style="color: #ffffff; margin-bottom: 1.5rem;">
                    Construction Accident Lawyer New York — <span style="color: var(--color-accent-light);">NYC Construction Injury Attorney</span> Queens, Brooklyn, Manhattan &amp; Beyond
                </h1>
                <p style="font-size: 1.125rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 1.25rem;">
                    New York gives injured construction workers some of the strongest legal protections in the country. But those protections have deadlines. And they only work if you know how to use them.
                </p>
                <p style="font-size: 1.05rem; line-height: 1.7; color: #e2e8f0; margin-bottom: 2rem;">
                    We have been fighting for injured construction workers across New York City since 1994. Adam spent years defending the contractors and insurers on the other side. Now that knowledge works for you. Free consultation. English and Spanish. No fee unless we win.
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
                <div class="hero-media-card" style="border-radius: 24px; overflow: hidden; -webkit-mask-image: -webkit-radial-gradient(white, black); mask-image: radial-gradient(white, black);">
                    <img src="{{ asset('assets/media/practice-areas/construction-accident-lawyer.png') }}" alt="Construction Accident Lawyer NYC" loading="eager" style="border-radius: 24px;">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Construction Overview & Job Site Rights --}}
<section class="section">
    <div class="container">
        <div class="two-col-equal-height">
            <div class="col-image">
                <div class="image-frame">
                    <img src="{{ asset('assets/media/practice-areas/injured-construction-worker.png') }}" alt="Injured Construction Worker Legal Protection NYC">
                </div>
            </div>

            <div class="col-content">
                <span class="section-subtitle">Aggressive Worker Representation</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">Holding Property Owners &amp; General Contractors Accountable</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                    Construction remains the single most hazardous industry in New York City. From high-rise developments in Manhattan to transit renovations in Brooklyn and Queens, a split-second equipment failure or absent safety harness causes life-altering trauma.
                </p>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                    General contractors and site owners frequently attempt to hide behind workers' compensation to block injured workers from full recovery. We cut through that defense immediately. By deploying New York's strict Labor Laws, we hold third parties accountable for pain, suffering, and full lifetime earning losses.
                </p>
                <div style="padding: 1.25rem; background: var(--color-bg-alt); border-left: 4px solid var(--color-accent); border-radius: var(--radius-md); margin-bottom: 1.5rem;">
                    <p style="margin: 0; color: var(--color-text); font-weight: 500;">
                        We dispatch investigators to the job site immediately to photograph safety violations, interview co-workers, and subpoena OSHA inspection records before equipment is altered.
                    </p>
                </div>
                <div class="btn-action-row" style="flex-wrap: nowrap !important; gap: 1rem;">
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-md">Free Construction Review &rarr;</a>
                    <a href="tel:+19707427476" class="btn btn-outline btn-md">Call (970) 742-7476 &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Labor Law 240 & 241 Overview --}}
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Statutory Protections</span>
            <h2 class="heading-lg">New York Labor Law 240 &amp; 241 Rights</h2>
            <p>New York provides unique, powerful statutory protections that hold site owners strictly accountable.</p>
        </div>

        <div class="grid grid-2" style="gap: 3.5rem; align-items: stretch;">
            <div class="card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                <div class="deep-dive-card-media">
                    <img src="{{ asset('assets/media/cases/window-washer-liability.png') }}" alt="Scaffold and High-Rise Fall Protection Law New York">
                </div>
                <div style="padding: 2.25rem; display: flex; flex-direction: column; flex-grow: 1;">
                    <span class="badge badge-red" style="margin-bottom: 1rem; align-self: flex-start;">Absolute Liability</span>
                    <h3 class="heading-md" style="margin-bottom: 1rem;">New York Labor Law 240 — The Scaffold Law and Absolute Liability</h3>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                        Labor Law 240 is one of the most powerful worker protections in the country. It imposes <strong>absolute liability</strong> on property owners and general contractors when a worker is injured in a fall from a height or is struck by a falling object.
                    </p>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                        <strong>Absolute means exactly that.</strong> The owner cannot blame the injured worker, even partially. If proper fall protection was absent, liability attaches. Full stop.
                    </p>
                    <div style="margin-top: auto; background: var(--color-bg-alt); padding: 1.25rem; border-radius: var(--radius-md); border-left: 3px solid var(--color-accent);">
                        <p style="margin: 0; font-size: 0.95rem; color: var(--color-text); font-weight: 500;">
                            This covers falls from scaffolding, ladders, roofs, and elevated platforms, as well as injuries from falling tools, materials, and unsecured debris. We have litigated Labor Law 240 cases for over 30 years. Adam knows exactly how insurers fight these claims. He knows because he used to help build those arguments. Now he dismantles them.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                <div class="deep-dive-card-media">
                    <img src="{{ asset('assets/media/practice-areas/construction-accident-lawyer.png') }}" alt="Demolition and Excavation Industrial Code Claims New York">
                </div>
                <div style="padding: 2.25rem; display: flex; flex-direction: column; flex-grow: 1;">
                    <span class="badge badge-gold" style="margin-bottom: 1rem; align-self: flex-start;">Industrial Code Rights</span>
                    <h3 class="heading-md" style="margin-bottom: 1rem;">New York Labor Law 241 — Construction, Demolition, and Excavation Rights</h3>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                        Labor Law 241 protects workers injured during construction, demolition, and excavation, even without a fall from height. Property owners and general contractors must maintain safe conditions throughout the entire project. Violations of the Industrial Code establish liability directly.
                    </p>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                        Unlike Labor Law 240, comparative fault applies under 241. But it reduces your recovery. We identify all applicable code violations and pursue all responsible parties.
                    </p>
                    <div style="margin-top: auto; background: var(--color-bg-alt); padding: 1.25rem; border-radius: var(--radius-md); border-left: 3px solid var(--color-gold);">
                        <p style="margin: 0; font-size: 0.95rem; color: var(--color-text); font-weight: 500;">
                            We identify all applicable Industrial Code (Part 23) violations and pursue every contractor, owner, and subcontractor who failed to follow statutory safety mandates.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Construction Accident Types We Handle --}}
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Comprehensive Job Site Claims</span>
            <h2 class="heading-lg">Construction Accident Types We Handle</h2>
            <p>Not every construction accident fits neatly into a category. We fight across all of them:</p>
        </div>

        <div class="grid grid-4" style="gap: 1.5rem; margin-bottom: 3.5rem;">
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">Scaffold &amp; Ladder Falls</h4>
                <p class="card-text">Falls from scaffolding, extension ladders, temporary staging, and roofs covered under Labor Law 240 absolute liability.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">Crane &amp; Heavy Machinery</h4>
                <p class="card-text">Crane collapses, rigging failures, hoisting accidents, and heavy equipment tipping or mechanical malfunctions.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">Caught-In &amp; Caught-Between</h4>
                <p class="card-text">Workers pulled into machinery, trapped between equipment, or pinned against temporary structures and walls.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">Trench Collapses &amp; Cave-Ins</h4>
                <p class="card-text">Unshored trench collapses, suffocating excavation cave-ins, and inadequate soil protection systems.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">Electrocution &amp; Power Lines</h4>
                <p class="card-text">Contact with overhead power lines, faulty temporary site wiring, and improper lockout/tagout procedures.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">Falling Tools &amp; Debris</h4>
                <p class="card-text">Dropped hand tools, falling cinder blocks, structural beams, and unsecured building materials striking workers below.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">Construction Wrongful Death</h4>
                <p class="card-text">Catastrophic fatalities demanding full lifetime wage recovery and survival action damages for surviving families.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">Municipal &amp; Government Sites</h4>
                <p class="card-text">Accidents on MTA transit sites, School Construction Authority (SCA) jobs, NYCHA projects, and city agencies.</p>
            </div>
        </div>

        {{-- Deep Dive Section: Falls from Heights, Caught-In, and Electrocution --}}
        <div class="grid grid-3" style="gap: 2rem; align-items: stretch; margin-bottom: 3.5rem;">
            <div class="card" style="padding: 2.25rem 2rem; background: #ffffff; display: flex; flex-direction: column;">
                <span class="badge badge-red" style="margin-bottom: 0.75rem; align-self: flex-start;">High-Rise Hazards</span>
                <h4 style="color: var(--color-primary); font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Falls from Heights — Scaffolding, Ladders and Roofs</h4>
                <p style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1rem;">
                    Falls from height are the leading cause of serious injury and death on New York construction sites. They are also the category most directly protected under Labor Law 240. When scaffolding collapses, a ladder shifts, or a guardrail fails, the property owner and general contractor bear absolute liability provided the required safety equipment was absent or inadequate.
                </p>
                <p style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.7; margin-top: auto;">
                    Construction sites get cleaned up fast after accidents. We move faster. We secure OSHA records, site inspection logs, witness statements, and photographic evidence before they disappear. That evidence is the case. We protect it from day one.
                </p>
            </div>

            <div class="card" style="padding: 2.25rem 2rem; background: #ffffff; display: flex; flex-direction: column;">
                <span class="badge badge-gold" style="margin-bottom: 0.75rem; align-self: flex-start;">Equipment Hazards</span>
                <h4 style="color: var(--color-primary); font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Caught-In and Between Accidents — Machinery and Trenching Injuries</h4>
                <p style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1rem;">
                    Caught-in and caught-between accidents involve workers pulled into machinery, trapped between equipment, or buried in trench collapses. Amputations, crush injuries, and fatalities are common outcomes.
                </p>
                <p style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.7; margin-top: auto;">
                    Liability frequently extends to equipment manufacturers, general contractors, and property owners simultaneously. We investigate every layer rather than stopping at the most obvious defendant. Every responsible party answers.
                </p>
            </div>

            <div class="card" style="padding: 2.25rem 2rem; background: #ffffff; display: flex; flex-direction: column;">
                <span class="badge badge-blue" style="margin-bottom: 0.75rem; align-self: flex-start;">Electrical Infrastructure</span>
                <h4 style="color: var(--color-primary); font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Electrocution and Electrical Injuries on NYC Job Sites</h4>
                <p style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.7; margin-bottom: 1rem;">
                    Electrocution is the third leading cause of construction worker deaths nationally. In New York City, aging electrical infrastructure further raises that risk. Overhead power lines, faulty wiring, and improper lockout/tagout procedures cause severe burns, nerve damage, cardiac arrest, and death.
                </p>
                <p style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.7; margin-top: auto;">
                    Liability can extend to utility companies, equipment manufacturers, and property owners who failed to disclose known electrical hazards on the job site. We work with electrical engineering experts to establish exactly what went wrong and who is responsible.
                </p>
            </div>
        </div>

        {{-- Comp vs Third-Party Lawsuit Explainer --}}
        <div style="background: var(--color-primary); color: #ffffff; padding: 3rem; border-radius: var(--radius-xl); box-shadow: var(--shadow-xl);">
            <div class="grid grid-2" style="gap: 3rem; align-items: center;">
                <div>
                    <span class="badge badge-gold" style="margin-bottom: 1rem; align-self: flex-start;">Dual Recovery Strategy</span>
                    <h3 style="color: #ffffff; font-size: 1.85rem; font-weight: 700; margin-bottom: 1rem;">Workers' Compensation vs. Third-Party Lawsuit</h3>
                    <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 1rem;">
                        Workers’ compensation covers medical bills and a portion of lost wages. It does not compensate for pain and suffering. And it prevents you from suing your direct employer.
                    </p>
                    <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 1rem;">
                        It does not prevent you from suing the general contractor, a subcontractor, a property owner, or an equipment manufacturer whose negligence contributed to your accident.
                    </p>
                    <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 1.5rem;">
                        A third-party personal injury lawsuit runs parallel to your workers’ comp claim and recovers damages workers’ comp will never pay. We pursue both paths simultaneously from the first consultation. You should not have to choose between them.
                    </p>
                    <div class="btn-action-row" style="flex-wrap: nowrap !important; gap: 1rem;">
                        <a href="{{ route('contact') }}" class="btn btn-accent btn-md">Free Construction Review &rarr;</a>
                        <a href="tel:+19707427476" class="btn btn-outline-white btn-md">Call (970) SHAPIRO &rarr;</a>
                    </div>
                </div>
                <div style="background: rgba(255,255,255,0.08); padding: 2rem; border-radius: var(--radius-lg); border: 1px solid rgba(255,255,255,0.15);">
                    <h4 style="color: var(--color-gold); font-size: 1.2rem; margin-bottom: 0.75rem;">Municipal Site 90-Day Deadline</h4>
                    <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.25rem;">
                        One critical deadline: if your accident happened on a government-owned construction site, a Notice of Claim must be filed within 90 days. Miss it and your right to sue the government entity is gone entirely. Call us immediately if a municipal site was involved.
                    </p>
                    <a href="tel:+19707427476" class="btn btn-accent btn-md">Check Your Site's Deadline</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FAQ Section --}}
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Clear Insights</span>
            <h2 class="heading-lg">Frequently Asked Questions</h2>
            <p>Essential legal answers for New York construction accident victims.</p>
        </div>

        <div class="faq-list" style="max-width: 900px; margin: 0 auto;">
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Do I need a lawyer if I was injured on a job site?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes, especially if parties beyond your direct employer contributed to the accident. Workers’ comp caps your recovery and excludes pain and suffering entirely. A third-party lawsuit can recover significantly more. We evaluate both from the first call.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How long do I have to file a construction accident claim in New York?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Three years for most construction accident claims. If a government entity owns the site, a Notice of Claim must be filed within 90 days of the accident. Do not wait.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How are damages calculated in a construction accident case?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Based on injury severity, lost income, future medical needs, and impact on quality of life. We work with medical and economic experts to build a damage picture that reflects the full long-term cost, not just the immediate bills.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if I was partly at fault for the accident?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Under Labor Law 240, your own conduct is generally not a defense the property owner can use against you. Under Labor Law 241, your recovery is reduced proportionally but not eliminated. Either way, you have a case worth fighting.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Do construction accident attorneys work on contingency?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes. We charge nothing unless we recover money for you. No upfront fees. No hourly charges. The consultation is free.</p>
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
                <span class="section-subtitle">Rapid Evidence Preservation</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">Talk to Adam Before Anyone Else Does</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.5rem;">
                    The contractor’s insurance company starts building their defense the same day your accident happens. Before you give a recorded statement, sign anything, or accept any offer, call us first.
                </p>
                <div style="background: #ffffff; padding: 1.75rem; border-radius: var(--radius-lg); margin-bottom: 2rem; border-left: 4px solid var(--color-accent); box-shadow: var(--shadow-sm);">
                    <div style="font-weight: 700; color: var(--color-primary); font-size: 1.15rem; margin-bottom: 0.5rem;">Free Direct Attorney Consultation</div>
                    <p style="margin: 0; color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.6;">
                        The consultation is free. Adam is reachable directly from the first call to evaluate your third-party claims and rights.
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
                <x-contact-form :caseType="'Construction Accident'" />
            </div>
        </div>
    </div>
</section>

{{-- Five Boroughs and Long Island Section --}}
@include('partials.jurisdiction-reach')

{{-- Cases We Handle Matrix --}}
@include('partials.cases-we-handle')

{{-- Awards & Recognition Ribbon --}}
@include('partials.awards-ribbon')

@endsection
