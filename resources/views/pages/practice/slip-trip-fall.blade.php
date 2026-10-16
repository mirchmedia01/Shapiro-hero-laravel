@extends('layouts.app')

@section('body_class', 'practice-detail-page')

@section('content')

{{-- Hero Section --}}
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div>
                <span class="badge badge-accent" style="margin-bottom: 1.25rem;">Premises Liability Lawyer</span>
                <h1 class="heading-xl" style="color: #ffffff; margin-bottom: 1.5rem;">
                    Slip and Fall Attorney New York City — <span style="color: var(--color-accent-light);">Premises Liability Lawyer</span> Serving Queens, Brooklyn, Manhattan &amp; All Five Boroughs
                </h1>
                <p style="font-size: 1.125rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 1.5rem;">
                    Property owners in New York have a strict legal duty to keep their premises safe for visitors and pedestrians. When they neglect hazards and you get hurt, we hold them fully accountable.
                </p>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center;">
                    <a href="tel:+19707427476" class="btn btn-accent btn-lg">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 0.5rem; vertical-align: middle;"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                        Get Your Free War Plan
                    </a>
                    <a href="#consultation" class="btn btn-outline-white btn-lg">Free Consultation</a>
                </div>
                <div style="margin-top: 1.5rem; display: flex; gap: 1.5rem; flex-wrap: wrap; font-size: 0.875rem; color: #94a3b8;">
                    <span>✓ Free Consultation</span>
                    <span>✓ English &amp; Español</span>
                    <span>✓ No Fee Unless We Win</span>
                </div>
            </div>

            <div>
                <div class="hero-media-card">
                    <img src="{{ asset('assets/media/practice-areas/slip-trip-fall-attorney.jpg') }}" alt="Trip & Fall Attorney NYC" loading="eager">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Overview Section --}}
<section class="section">
    <div class="container">
        <div class="grid grid-2" style="align-items: center; gap: 3.5rem;">
            <div>
                <span class="section-subtitle">Property Owner Neglect</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">Severe Injuries From Dangerous Conditions</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                    A slip and fall can happen in seconds. The resulting injuries are rarely minor. Broken bones, traumatic brain injuries, herniated spinal discs, and torn knee ligaments are common outcomes.
                </p>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                    Property owners and their insurance adjusters move rapidly following an accident. They frequently attempt to blame the victim for not paying attention or claim they had "no notice" of the dangerous hazard.
                </p>
                <div style="padding: 1.25rem; background: var(--color-bg-alt); border-left: 4px solid var(--color-accent); border-radius: var(--radius-md); margin-bottom: 1.5rem;">
                    <p style="margin: 0; color: var(--color-text); font-weight: 500;">
                        We have been litigating premises liability cases across New York City since 1994. Adam knows every single defense strategy property owners use because he spent years helping build them. Now he tears them apart on behalf of injured New Yorkers.
                    </p>
                </div>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center;">
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg">Free Slip &amp; Fall Case Review &rarr;</a>
                    <a href="tel:+19707427476" class="btn btn-outline btn-lg">Call (970) 742-7476</a>
                </div>
            </div>

            <div>
                <div class="card" style="padding: 2.5rem; background: #ffffff; border: 1px solid var(--color-border);">
                    <h3 class="heading-md" style="margin-bottom: 1rem;">Commercial Property Falls</h3>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                        Businesses that invite the public onto their property — supermarkets, grocery stores, restaurants, retail shops, and office buildings — must maintain safe conditions. That means promptly cleaning up spills, repairing defective flooring, and warning visitors about known hazards.
                    </p>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin: 0;">
                        When a supermarket ignores a spill or a building fails to salt an icy entryway, they are liable. We pursue compensation from the business operator, property management company, and building owner simultaneously.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Types of Claims We Handle --}}
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Premises Focus Areas</span>
            <h2 class="heading-lg">Slip, Trip &amp; Fall Claims We Handle</h2>
            <p>Every premises liability case requires targeted investigation to prove notice and owner culpability.</p>
        </div>

        <div class="grid grid-4" style="gap: 1.5rem; margin-bottom: 3rem;">
            <div class="card" style="border-top: 4px solid var(--color-primary);">
                <h4 class="card-title">Wet Floors &amp; Spills</h4>
                <p class="card-text">Supermarket puddles, leaks, mopped floors without warning signs, and slippery restaurant grease.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary);">
                <h4 class="card-title">Broken Sidewalks</h4>
                <p class="card-text">Raised slabs, tree root upheaval, missing concrete, and pothole defects outside buildings.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary);">
                <h4 class="card-title">Ice &amp; Snow Accumulation</h4>
                <p class="card-text">Untreated ice patches, uncleared walkways, and dangerous refreeze cycles from defective drainage.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary);">
                <h4 class="card-title">Staircase &amp; Handrail Defects</h4>
                <p class="card-text">Broken or missing handrails, uneven step heights, damaged tread, and pitch-black stairwells.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary);">
                <h4 class="card-title">Elevator &amp; Escalator Accidents</h4>
                <p class="card-text">Misleveling elevators, sudden drops, mechanical entrapment, and escalator jerk stops.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary);">
                <h4 class="card-title">Landlord Negligence</h4>
                <p class="card-text">Dark apartment building hallways, neglected lobby tiles, and unaddressed tenant repair notices.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary);">
                <h4 class="card-title">City &amp; Municipal Property</h4>
                <p class="card-text">Subway stations, public parks, municipal plazas, and public school building hazards.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary);">
                <h4 class="card-title">Parking Lot Hazards</h4>
                <p class="card-text">Unlit commercial lots, wheel-stop trip hazards, deep potholes, and unplowed parking zones.</p>
            </div>
        </div>
    </div>
</section>

{{-- Local Law 49 & City Liability --}}
<section class="section">
    <div class="container">
        <div class="grid grid-2" style="gap: 3.5rem; align-items: flex-start;">
            <div class="card" style="padding: 2.5rem;">
                <span class="badge badge-gold" style="margin-bottom: 1rem; align-self: flex-start;">NYC Administrative Code</span>
                <h3 class="heading-md" style="margin-bottom: 1rem;">NYC Sidewalk Liability — Local Law 49</h3>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                    Under NYC Administrative Code § 7-210 (Local Law 49), adjacent commercial and multi-family property owners in New York City are strictly responsible for maintaining the public sidewalk directly in front of their building.
                </p>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                    Cracked pavement, raised flags, and missing concrete are the property owner's legal responsibility in most cases — not the City of New York.
                </p>
                <div style="background: var(--color-bg-alt); padding: 1.25rem; border-radius: var(--radius-md); border-left: 3px solid var(--color-gold);">
                    <p style="margin: 0; font-size: 0.9rem; color: var(--color-text); font-weight: 500;">
                        We identify the adjacent property owner, search the NYC Department of Transportation database for prior violation notices, and pull maintenance history immediately.
                    </p>
                </div>
            </div>

            <div class="card" style="padding: 2.5rem; border: 2px solid var(--color-accent-light);">
                <span class="badge badge-red" style="margin-bottom: 1rem; align-self: flex-start;">Strict 90-Day Window</span>
                <h3 class="heading-md" style="margin-bottom: 1rem;">Suing the City of New York</h3>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                    If your fall happened on city-owned property, a public school, a park, or a municipal building, the rules are drastically different and the deadline is unforgiving.
                </p>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                    Before suing New York City, a formal <strong>Notice of Claim must be served within 90 days</strong> of the accident. Miss that deadline by a single day, and your right to recover is permanently extinguished.
                </p>
                <div style="background: rgba(220, 38, 38, 0.08); padding: 1.25rem; border-radius: var(--radius-md);">
                    <p style="margin: 0; font-size: 0.9rem; color: var(--color-text); font-weight: 600;">
                        We file Notices of Claim immediately upon retention. If city property was involved, call us today.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FAQ Section --}}
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Legal Insight</span>
            <h2 class="heading-lg">Frequently Asked Questions</h2>
            <p>Clear guidance on premises liability lawsuits across the five boroughs.</p>
        </div>

        <div class="faq-list" style="max-width: 900px; margin: 0 auto;">
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How do I prove a property owner is liable?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>You must establish that the owner created the hazard or had actual or constructive notice of it (meaning it existed long enough that they should have discovered and fixed it). We prove this through surveillance video timestamps, maintenance logs, inspection reports, and witness testimony.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if I was partly at fault for looking at my phone?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>You can still recover. New York's pure comparative fault rule reduces your compensation by your percentage of fault, but does not eliminate your claim. We fight to keep that percentage as close to zero as possible.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How long do I have to file a slip and fall claim in New York?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Three years from the accident date for private property owners. If a government entity owns or operates the property, a formal Notice of Claim must be served within 90 days. Do not delay.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if the property owner says they had no warning?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>That is the most common defense insurer adjusters raise. We counter it with surveillance footage proving how long the hazard sat unaddressed, employee cleaning records, and prior complaints on record.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Does it matter if there was no wet floor sign?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes. The total absence of a yellow warning cone or wet floor sign is direct evidence of negligence, proving the owner failed their basic legal duty to warn visitors of a known dangerous condition.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if I slipped on a public sidewalk?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Under NYC Local Law 49, adjacent commercial and residential building owners are liable for sidewalk maintenance in front of their building. If it is city property, the 90-day Notice of Claim applies. We determine exact ownership from day one.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Do I have a case if I fell in my own apartment building?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes. Landlords are legally required to maintain common areas, stairwells, lobbies, and laundry rooms in a safe, code-compliant condition. Tenants have the exact same rights to a safe premises as any visitor.</p>
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
                <span class="section-subtitle">Protect Your Claim</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">Talk to Adam Before the Property Owner's Insurer Calls You</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.5rem;">
                    The property owner's insurance company will contact you quickly after a fall. They will sound helpful, but a recorded statement taken before you retain counsel can severely damage your recovery.
                </p>
                <div style="background: var(--color-bg-alt); padding: 1.75rem; border-radius: var(--radius-lg); margin-bottom: 2rem; border-left: 4px solid var(--color-accent);">
                    <div style="font-weight: 700; color: var(--color-primary); font-size: 1.15rem; margin-bottom: 0.5rem;">Direct Attorney Access</div>
                    <p style="margin: 0; color: var(--color-text-muted); font-size: 0.95rem;">
                        The consultation is 100% free. No upfront fees. Adam Shapiro is reachable directly from your first call.
                    </p>
                </div>
                <div style="display: flex; flex-direction: column; gap: 1rem;">
                    <a href="tel:+19707427476" class="btn btn-accent btn-lg" style="text-align: center;">
                        Call (970) 742-7476 — FREE. NOW.
                    </a>
                </div>
            </div>

            <div>
                <x-contact-form :caseType="'Slip, Trip & Fall'" />
            </div>
        </div>
    </div>
</section>

{{-- Cases We Handle Matrix --}}
@include('partials.cases-we-handle')

{{-- Awards & Recognition Ribbon --}}
@include('partials.awards-ribbon')

@endsection
