@extends('layouts.app')

@section('body_class', 'practice-detail-page')

@section('content')

{{-- Practice Area Hero --}}
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div>
                <span class="badge badge-accent" style="margin-bottom: 1.25rem;">NYC Accident Attorney</span>
                <h1 class="heading-xl" style="color: #ffffff; margin-bottom: 1.5rem;">
                    Personal Injury Lawyer New York City — <span style="color: var(--color-accent-light);">NYC Accident Attorney</span> Serving Queens, Brooklyn, Manhattan &amp; All Five Boroughs
                </h1>
                <p style="font-size: 1.125rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 1.5rem;">
                    Someone's negligence put you in a hospital bed. Now their insurance company is working to make sure they pay you as little as possible. We fight back.
                </p>
                <p style="font-size: 1.05rem; line-height: 1.7; color: #e2e8f0; margin-bottom: 2rem;">
                    Adam Shapiro and his team have represented injury victims across New York City since 1994. Before that, Adam spent years defending insurance companies and corporations on the other side. He knows their playbook — every single page of it.
                </p>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center;">
                    <a href="tel:+19707427476" class="btn btn-accent btn-lg">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 0.5rem; vertical-align: middle;"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
                        Get Your Free War Plan
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
                    <img src="{{ asset('assets/media/practice-areas/personal-injury-lawyer.jpg') }}" alt="Personal Injury Lawyer NYC" loading="eager">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- What Personal Injury Means in NY --}}
<section class="section">
    <div class="container">
        <div class="grid grid-2" style="align-items: center; gap: 3.5rem;">
            <div>
                <div style="border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-lg);">
                    <img src="{{ asset('assets/media/practice-areas/slip-trip-fall-attorney.jpg') }}" alt="Personal Injury Claims in New York" style="width: 100%; height: 380px; object-fit: cover;">
                </div>
            </div>
            <div>
                <span class="section-subtitle">Understanding Your Rights</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">What Personal Injury Law Actually Means in New York</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                    Personal injury law covers every situation where someone else's carelessness, recklessness, or negligence causes you physical harm. Car crashes. Falls on dangerous property. Medical errors. Defective products. Workplace accidents. Construction site collapses.
                </p>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.5rem;">
                    New York law gives injured victims the right to pursue full compensation from the party responsible. But that right has strict deadlines. It has complex procedural rules. And it requires proof that most people do not know how to build on their own.
                </p>
                <div style="padding: 1.25rem 1.5rem; background: var(--color-bg-alt); border-left: 4px solid var(--color-accent); border-radius: 0 var(--radius-md) var(--radius-md) 0; margin-bottom: 1.5rem;">
                    <strong style="color: var(--color-primary); font-size: 1.1rem; display: block; margin-bottom: 0.25rem;">That is where we come in.</strong>
                    <p style="margin: 0; font-size: 0.95rem; color: var(--color-text);">We protect your rights from day one, ensuring no insurer takes advantage of your situation while you heal.</p>
                </div>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center;">
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg">Free Injury Consultation &rarr;</a>
                    <a href="tel:+19707427476" class="btn btn-outline btn-lg">Call (970) 742-7476</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- How We Build Your Case --}}
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Aggressive Litigation</span>
            <h2 class="heading-lg">How We Build Your Case to Win</h2>
            <p>To win a personal injury claim in New York, four legal pillars must be firmly established.</p>
        </div>

        <div class="grid grid-4" style="gap: 1.5rem; margin-bottom: 3rem;">
            <div class="card" style="border-top: 4px solid var(--color-primary);">
                <span style="font-size: 2rem; font-weight: 800; color: var(--color-accent); margin-bottom: 0.5rem; display: block;">01</span>
                <h3 class="card-title">Duty of Care</h3>
                <p class="card-text">We establish that the defendant owed you a legal duty to act reasonably and keep you safe from foreseeable harm.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary);">
                <span style="font-size: 2rem; font-weight: 800; color: var(--color-accent); margin-bottom: 0.5rem; display: block;">02</span>
                <h3 class="card-title">Breach of Duty</h3>
                <p class="card-text">We present irrefutable evidence proving the defendant violated their duty through carelessness, omission, or reckless conduct.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary);">
                <span style="font-size: 2rem; font-weight: 800; color: var(--color-accent); margin-bottom: 0.5rem; display: block;">03</span>
                <h3 class="card-title">Direct Causation</h3>
                <p class="card-text">We establish the direct chain between the defendant's breach and the physical injuries and trauma you suffered.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary);">
                <span style="font-size: 2rem; font-weight: 800; color: var(--color-accent); margin-bottom: 0.5rem; display: block;">04</span>
                <h3 class="card-title">Measurable Harm</h3>
                <p class="card-text">We compute and document your complete economic losses and non-economic suffering to demand maximum compensation.</p>
            </div>
        </div>

        <div class="card" style="background: #ffffff; border: 1px solid var(--color-border); padding: 2.5rem; border-radius: var(--radius-xl);">
            <div class="grid grid-2" style="gap: 2rem; align-items: center;">
                <div>
                    <h3 class="heading-md" style="margin-bottom: 1rem;">Closing the Gap Between Lowball Offers and Full Case Value</h3>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                        Simple in theory. Brutal in practice when a multi-billion dollar insurance corporation is disputing every single element of your claim.
                    </p>
                    <p style="color: var(--color-text-muted); line-height: 1.7;">
                        We secure police reports, medical records, surveillance footage, and witness statements from day one. We retain leading medical and economic experts who can speak to the lifetime cost of your injury, not just immediate hospital bills. When the insurer's opening offer arrives, we know exactly how far below fair value it sits.
                    </p>
                </div>
                <div style="background: var(--color-primary); color: #ffffff; padding: 2rem; border-radius: var(--radius-lg); text-align: center;">
                    <div style="font-size: 1.25rem; font-weight: 700; color: var(--color-gold); margin-bottom: 0.5rem;">The Shapiro Advantage</div>
                    <p style="font-size: 1.1rem; line-height: 1.6; margin-bottom: 1.5rem; color: #e2e8f0;">
                        "We build cases that hold up at trial, not just cases that look good enough to settle cheaply. That difference is what maximizes your recovery."
                    </p>
                    <a href="tel:+19707427476" class="btn btn-accent btn-md">Speak with Adam Shapiro</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Types of Cases We Handle --}}
<section class="section">
    <div class="container">
        <div class="grid grid-2" style="align-items: center; gap: 3.5rem;">
            <div>
                <span class="section-subtitle">Full-Spectrum Representation</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">Types of Personal Injury Cases We Handle</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.5rem;">
                    We fight for injury victims across every major category of personal injury law in New York:
                </p>

                <div class="checklist-two-col">
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Car, Truck &amp; Motorcycle Crashes
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Construction &amp; Labor Law §240/241
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Slip, Trip &amp; Fall Accidents
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Medical Malpractice &amp; Errors
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Wrongful Death Actions
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Workers' Comp &amp; 3rd-Party Claims
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> E-Bike &amp; Electric Scooter Crashes
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Pedestrian Knockdowns
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Traumatic Brain Injuries (TBI)
                    </div>
                    <div style="display: flex; align-items: center; gap: 0.5rem; font-size: 0.95rem; font-weight: 500;">
                        <span style="color: var(--color-accent); font-weight: bold;">✓</span> Spinal Cord &amp; Catastrophic Harm
                    </div>
                </div>

                <p style="color: var(--color-text-muted); font-size: 0.95rem; margin-bottom: 1.5rem;">
                    Each case type has its own legal nuances, statutory deadlines, and tactical requirements. We have mastered every single one.
                </p>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center;">
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg">Discuss Your Specific Case &rarr;</a>
                    <a href="tel:+19707427476" class="btn btn-outline btn-lg">Call (970) SHAPIRO</a>
                </div>
            </div>

            <div>
                <div style="border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-xl);">
                    <img src="{{ asset('assets/media/practice-areas/construction-accident-lawyer.png') }}" alt="Accident Cases Handled by Shapiro" style="width: 100%; height: 420px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- What You Can Recover & Comparative Fault --}}
<section class="section section-alt">
    <div class="container">
        <div class="grid grid-2" style="gap: 3rem; margin-bottom: 3.5rem;">
            <div class="card" style="padding: 2.5rem;">
                <span class="badge badge-gold" style="margin-bottom: 1rem; align-self: flex-start;">Damages Overview</span>
                <h3 class="heading-md" style="margin-bottom: 1rem;">What You Can Recover in NY</h3>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                    New York personal injury law allows victims to pursue compensation across two comprehensive categories:
                </p>
                <div style="margin-bottom: 1.25rem;">
                    <strong style="color: var(--color-primary); font-size: 1.05rem;">Economic Damages:</strong>
                    <p style="color: var(--color-text-muted); margin: 0.25rem 0 0.75rem 0;">Financial losses you can measure with documentation: past and future medical bills, lost wages, reduced earning capacity, rehabilitation costs, and property damage.</p>
                </div>
                <div>
                    <strong style="color: var(--color-primary); font-size: 1.05rem;">Non-Economic Damages:</strong>
                    <p style="color: var(--color-text-muted); margin: 0.25rem 0 0;">Intangibles that cannot be assigned a simple receipt: physical pain and suffering, emotional distress, permanent disability, disfigurement, and loss of life's enjoyment.</p>
                </div>
            </div>

            <div class="card" style="padding: 2.5rem;">
                <span class="badge badge-blue" style="margin-bottom: 1rem; align-self: flex-start;">New York Law</span>
                <h3 class="heading-md" style="margin-bottom: 1rem;">Pure Comparative Negligence</h3>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                    New York follows a <strong>pure comparative fault rule</strong>. Even if you were partly responsible for the accident — even if you were 90% at fault — you are still legally entitled to recover damages.
                </p>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                    Your compensation is reduced proportionally by your percentage of fault, but it is not eliminated.
                </p>
                <div style="background: rgba(220, 38, 38, 0.08); padding: 1.25rem; border-radius: var(--radius-md); border-left: 3px solid var(--color-accent);">
                    <p style="margin: 0; font-size: 0.9rem; color: var(--color-text); font-weight: 500;">
                        Insurance adjusters exploit this rule aggressively by falsely inflating your fault percentage to minimize their payouts. We aggressively defend you to keep that number strictly aligned with the facts.
                    </p>
                </div>
            </div>
        </div>

        {{-- Deadlines Ribbon --}}
        <div style="background: var(--color-primary); color: #ffffff; padding: 2.5rem; border-radius: var(--radius-xl); box-shadow: var(--shadow-lg);">
            <div style="text-align: center; max-width: 700px; margin: 0 auto 2rem auto;">
                <h3 style="color: #ffffff; font-size: 1.75rem; font-weight: 700; margin-bottom: 0.5rem;">Deadlines You Cannot Miss</h3>
                <p style="color: #cbd5e1; margin: 0;">Missing a statutory deadline forever bars your right to recover compensation in New York.</p>
            </div>

            <div class="grid grid-4" style="gap: 1.5rem;">
                <div style="background: rgba(255,255,255,0.08); padding: 1.5rem; border-radius: var(--radius-lg); text-align: center; border: 1px solid rgba(255,255,255,0.15);">
                    <div style="font-size: 2rem; font-weight: 800; color: var(--color-gold); margin-bottom: 0.25rem;">3 Years</div>
                    <div style="font-weight: 600; margin-bottom: 0.5rem; color: #ffffff;">Auto, Falls &amp; Sites</div>
                    <p style="font-size: 0.825rem; color: #cbd5e1; margin: 0;">Three years from the exact date of injury for standard tort claims.</p>
                </div>

                <div style="background: rgba(255,255,255,0.08); padding: 1.5rem; border-radius: var(--radius-lg); text-align: center; border: 1px solid rgba(255,255,255,0.15);">
                    <div style="font-size: 2rem; font-weight: 800; color: var(--color-gold); margin-bottom: 0.25rem;">2.5 Years</div>
                    <div style="font-weight: 600; margin-bottom: 0.5rem; color: #ffffff;">Medical Malpractice</div>
                    <p style="font-size: 0.825rem; color: #cbd5e1; margin: 0;">From the date of malpractice or the end of continuous treatment.</p>
                </div>

                <div style="background: rgba(255,255,255,0.08); padding: 1.5rem; border-radius: var(--radius-lg); text-align: center; border: 1px solid rgba(255,255,255,0.15);">
                    <div style="font-size: 2rem; font-weight: 800; color: var(--color-gold); margin-bottom: 0.25rem;">2 Years</div>
                    <div style="font-weight: 600; margin-bottom: 0.5rem; color: #ffffff;">Wrongful Death</div>
                    <p style="font-size: 0.825rem; color: #cbd5e1; margin: 0;">Two years from the date of death, not the accident date.</p>
                </div>

                <div style="background: rgba(220, 38, 38, 0.25); padding: 1.5rem; border-radius: var(--radius-lg); text-align: center; border: 1px solid rgba(220, 38, 38, 0.5);">
                    <div style="font-size: 2rem; font-weight: 800; color: #fca5a5; margin-bottom: 0.25rem;">90 Days</div>
                    <div style="font-weight: 600; margin-bottom: 0.5rem; color: #ffffff;">City / Government</div>
                    <p style="font-size: 0.825rem; color: #fed7d7; margin: 0;">A formal Notice of Claim must be filed within 90 days. Miss it and the case is gone.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Defense Background Advantage --}}
<section class="section">
    <div class="container">
        <div class="grid grid-2" style="align-items: center; gap: 3.5rem;">
            <div>
                <span class="section-subtitle">Insider Insight</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">Why Adam's Background Changes Everything</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                    Most personal injury attorneys have only ever represented plaintiffs. Adam spent years on the defense side first, defending Lloyd's of London, Harley Davidson, Ford Motor Credit, and major insurance carriers in high-stakes civil litigation.
                </p>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                    He knows how insurance companies evaluate claims behind closed doors. He knows which arguments they use to minimize payouts and exactly when they make them. He knows when a low offer means they fear your case and when it means they think you will fold.
                </p>
                <div style="border-left: 3.5px solid var(--color-gold); padding-left: 1.25rem; margin-bottom: 1.5rem;">
                    <p style="font-weight: 800; font-style: italic; color: var(--color-primary); margin: 0; font-size: 1.05rem; line-height: 1.6;">
                        "The first offer is almost never the right number. Adjusters are rewarded for paying as little as possible. We do not let that happen to you."
                    </p>
                </div>
                <p style="color: var(--color-text-muted); font-size: 0.95rem; margin-bottom: 1.5rem;">
                    <strong>Serving All Five Boroughs and Long Island:</strong> Queens (Forest Hills, Flushing, Jamaica, Astoria), Brooklyn, Manhattan, The Bronx, Staten Island, and Nassau County.
                </p>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center;">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Put Adam On Your Side &rarr;</a>
                    <a href="tel:+19707427476" class="btn btn-outline btn-lg">Call (970) 742-7476</a>
                </div>
            </div>

            <div>
                <div style="border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-xl); background: #0b1b3d;">
                    <img src="{{ asset('assets/media/attorneys/adam-shapiro-portrait.png') }}" alt="Adam Shapiro NYC Attorney" style="width: 100%; height: 380px; object-fit: cover; object-position: center 20%; display: block;">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FAQ Section (Interactive Accordion) --}}
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Got Questions?</span>
            <h2 class="heading-lg">Frequently Asked Questions</h2>
            <p>Direct, straightforward answers from 30+ years of New York courtroom experience.</p>
        </div>

        <div class="faq-list" style="max-width: 900px; margin: 0 auto;">
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How do I know if I have a personal injury case?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>If someone else's negligence caused your injury and you suffered real harm because of it, you likely have a case. The best way to know for certain is a free call with Adam. No obligation, no pressure.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What does it cost to hire a personal injury lawyer?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Nothing upfront. We work on contingency. You pay nothing unless we win your case. No hourly fees, and no out-of-pocket costs during the litigation.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Should I talk to the insurance company before calling you?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>No. Do not give a recorded statement, accept any offer, or sign anything before speaking with us. A single recorded statement can seriously damage your claim. Call us first.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if my injury does not seem that serious right now?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Some injuries worsen days or weeks after the accident. A gap in medical treatment is one of the first things insurers use to reduce your claim. See a doctor immediately after any accident, even if you feel fine initially.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if the accident was partly my fault?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>You can still recover under New York's pure comparative negligence law. Your compensation is reduced by your share of fault, but not eliminated. Call us and we will tell you exactly where you stand.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How long will my case take?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Straightforward cases can settle in months. Complex cases involving serious injuries or disputed liability can take longer. We keep you informed at every stage and we never push you toward a fast settlement that undervalues your claim.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Do you handle cases in Spanish?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes. Full legal services in English and Spanish. Hablamos Español. We ensure language is never an obstacle to justice.</p>
                </div>
            </div>
        </div>
    </div>
</section>



@include('partials.cases-we-handle')

{{-- Consultation & Contact Form --}}
<section class="section" id="consultation">
    <div class="container">
        <div class="grid grid-2" style="gap: 3.5rem; align-items: flex-start;">
            <div>
                <span class="section-subtitle">24/7 Rapid Response</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">Call Adam Before You Talk to Anyone Else</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.5rem;">
                    The other side already has a team working on your case. Before you say anything to an insurance adjuster, sign a release, or accept a settlement offer, call us.
                </p>
                <div style="background: var(--color-bg-alt); padding: 1.75rem; border-radius: var(--radius-lg); margin-bottom: 2rem; border-left: 4px solid var(--color-accent);">
                    <div style="font-weight: 700; color: var(--color-primary); font-size: 1.15rem; margin-bottom: 0.5rem;">Free War Plan Consultation</div>
                    <p style="margin: 0; color: var(--color-text-muted); font-size: 0.95rem;">
                        No fee unless we win. Adam is reachable from your very first call. We review your accident details and lay out your legal options clearly.
                    </p>
                </div>
                <div style="display: flex; flex-direction: column; gap: 1rem;">
                    <a href="tel:+19707427476" class="btn btn-accent btn-lg" style="text-align: center;">
                        Call (970) 742-7476 — FREE. NOW.
                    </a>
                </div>
            </div>

            <div>
                <x-contact-form :caseType="'Personal Injury'" />
            </div>
        </div>
    </div>
</section>

@endsection
