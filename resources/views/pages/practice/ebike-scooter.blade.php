@extends('layouts.app')

@section('title', 'New York E-Bike & Scooter Accident Lawyer | Shapiro')
@section('meta_description', 'E-bike or scooter accident in New York? Shapiro the Hero fights for delivery workers & crash victims. No fee unless we win.')

@section('body_class', 'practice-detail-page')

@section('content')

{{-- Hero Section --}}
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div>
                <span class="badge badge-accent" style="margin-bottom: 1.25rem;">NYC Micro-Mobility Litigators</span>
                <h1 class="heading-xl" style="color: #ffffff; margin-bottom: 1.5rem;">
                    E-Bike &amp; Electric Scooter Accident Lawyer New York City — <span style="color: var(--color-accent-light);">NYC E-Bike Injury Attorney</span> Queens, Brooklyn, Manhattan &amp; All Five Boroughs
                </h1>
                <p style="font-size: 1.125rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 1.25rem;">
                    E-bike and scooter crashes are surging across New York City. The injuries are serious, the insurance rules are complicated, and the other side is already working to pay you as little as possible.
                </p>
                <p style="font-size: 1.05rem; line-height: 1.7; color: #e2e8f0; margin-bottom: 2rem;">
                    We fight for riders, pedestrians, and delivery workers injured in e-bike and electric scooter accidents across New York. Adam knows exactly how insurers fight these claims. Free consultation. English and Spanish. No fee unless we win.
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
                    <img src="{{ asset('assets/media/practice-areas/electric-bicycle-scooter-lawyer.jpg') }}" alt="E-Bike &amp; Scooter Accident Lawyer NYC" loading="eager" style="border-radius: 24px;">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Surge & Complexity Section --}}
<section class="section">
    <div class="container">
        <div class="two-col-equal-height">
            <div class="col-image">
                <div class="image-frame">
                    <img src="{{ asset('assets/media/practice-areas/crash-scene-investigation.jpg') }}" alt="NYC E-Bike and Scooter Collision Investigation">
                </div>
            </div>

            <div class="col-content">
                <span class="section-subtitle">A Critical Safety Crisis</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">Why E-Bike and Scooter Accident Cases Are More Complicated Than Car Crashes</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                    New York City has a problem. Despite representing only about 2.5% of the U.S. population, NYC accounts for <strong>47% of nationwide e-bike fatalities</strong>. Reported e-bike collisions jumped 75% in 2026 compared to the same period in 2025. These are traumatic brain injuries, spinal damage, crush injuries, and wrongful deaths. And when it happens to you, the insurance game starts immediately. We shut it down.
                </p>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                    Most people assume an e-bike accident works the same way as a car accident. It does not. The legal landscape is different, and the insurance picture is significantly more complicated. E-bikes and scooters do not require traditional motor vehicle insurance. When a collision involves a car, the rider may claim the driver’s no-fault insurance or, if the driver is unidentified, through New York’s Motor Vehicle Accident Indemnification Corporation.
                </p>
                <div style="padding: 1.25rem; background: var(--color-bg-alt); border-left: 4px solid var(--color-accent); border-radius: var(--radius-md); margin-bottom: 1.5rem;">
                    <p style="margin: 0; color: var(--color-text); font-weight: 500;">
                        Standard auto policies rarely cover e-scooter injuries. Some homeowners or renters policies provide limited liability. Many injured riders discover they are caught between policies with no clear path to recovery. We know that path. We find it, and we deploy every available claim.
                    </p>
                </div>
                <div class="btn-action-row" style="flex-wrap: nowrap !important; gap: 1rem;">
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-md">Free Case Review &rarr;</a>
                    <a href="tel:+19707427476" class="btn btn-outline btn-md">Call (970) 742-7476 &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Who Can Be Held Liable --}}
<section class="section section-alt">
    <div class="container">
        {{-- 2025 Legal Framework Feature Banner --}}
        <div style="margin-bottom: 3.5rem; background: var(--color-primary); color: #ffffff; border-radius: var(--radius-xl); padding: 2.75rem 2.5rem; box-shadow: var(--shadow-xl);">
            <div class="grid grid-2" style="gap: 2.5rem; align-items: center;">
                <div>
                    <span class="badge badge-gold" style="margin-bottom: 1rem; align-self: flex-start;">New Legal Framework</span>
                    <h3 style="color: #ffffff; font-size: 1.75rem; font-weight: 700; margin-bottom: 1rem;">New York E-Bike Laws: What Changed in 2025?</h3>
                    <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 1rem;">
                        The law governing e-bike and scooter accidents in New York shifted significantly in 2025. You need to know this before you file anything.
                    </p>
                    <p style="color: #cbd5e1; line-height: 1.7; margin: 0; font-size: 0.95rem;">
                        <strong>Effective July 11, 2025</strong>, New York law requires police to investigate and report e-bike and e-scooter accidents involving physical injury or serious physical injury to the DMV within <strong>5 days</strong> of the crash. E-scooter operators involved in crashes causing death or serious physical injury must report to the DMV within <strong>10 days</strong>.
                    </p>
                </div>
                <div style="background: rgba(255,255,255,0.08); padding: 1.75rem 2rem; border-radius: var(--radius-lg); border: 1px solid rgba(255,255,255,0.15);">
                    <div style="font-size: 1.15rem; font-weight: 700; color: var(--color-gold); margin-bottom: 0.75rem;">Mandatory DMV Paper Trail</div>
                    <p style="color: #cbd5e1; line-height: 1.6; font-size: 0.95rem; margin-bottom: 1.25rem;">
                        Before this law, many e-bike crashes went unreported. Now there is an official paper trail that serves as decisive evidence for your case. E-scooters may not exceed 15 mph and may ride in bike lanes. Helmets are required for riders aged 16 and 17.
                    </p>
                    <a href="tel:+19707427476" class="btn btn-accent btn-md">Verify Your Crash Report &rarr;</a>
                </div>
            </div>
        </div>

        <div class="section-header">
            <span class="section-subtitle">Multi-Party Culpability</span>
            <h2 class="heading-lg">Who Can Be Held Liable in an E-Bike Accident?</h2>
            <p>This is where most injured riders get it wrong. They assume the only person responsible is the driver who hit them. That is rarely the full picture. Liability can fall on multiple parties at once:</p>
        </div>

        <div class="grid grid-4" style="gap: 1.5rem; margin-bottom: 3.5rem;">
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">The Negligent Driver</h4>
                <p class="card-text">Distracted driving, failure to yield, dooring, and running red lights are the most common causes of serious e-bike crashes in New York City.</p>
            </div>

            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">The Rental Company</h4>
                <p class="card-text">If riding a Citi Bike, Lime, or rental e-bike/scooter, liability covers poor maintenance, mechanical failure, or inadequate warnings. We know how to defeat app waivers.</p>
            </div>

            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">The Manufacturer</h4>
                <p class="card-text">Defective brakes and batteries. Of 40 deaths nationwide related to lithium-ion battery fires, 29 occurred in NYC alone. Product liability applies.</p>
            </div>

            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">The City or Municipality</h4>
                <p class="card-text">Potholes, broken pavement, missing bike lane markings, and road hazards. Municipal claims require a Notice of Claim filed within 90 days.</p>
            </div>
        </div>

        {{-- Deep Dive: Injuries & Delivery Workers --}}
        <div class="grid grid-2" style="gap: 3.5rem; align-items: stretch; margin-bottom: 3.5rem;">
            <div class="card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                <div class="deep-dive-card-media">
                    <img src="{{ asset('assets/media/blog/the-evidence-room-desk.jpg') }}" alt="E-Bike and Scooter Injury Claims Investigation">
                </div>
                <div style="padding: 2.25rem; display: flex; flex-direction: column; flex-grow: 1;">
                    <span class="badge badge-red" style="margin-bottom: 1rem; align-self: flex-start;">Catastrophic Harm</span>
                    <h3 class="heading-md" style="margin-bottom: 1rem; color: var(--color-primary);">Common E-Bike &amp; Scooter Injuries We Fight For</h3>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                        Riders have no protection between their body and the impact. The injuries reflect that:
                    </p>
                    <ul style="list-style: none; padding: 0; margin: 0 0 1.25rem 0; display: flex; flex-direction: column; gap: 0.5rem; font-size: 0.95rem; color: var(--color-text-muted);">
                        <li>✓ Traumatic brain injuries and concussions</li>
                        <li>✓ Spinal cord damage and paralysis</li>
                        <li>✓ Broken arms, wrists, hands, and legs</li>
                        <li>✓ Road rash requiring surgery and skin grafting</li>
                        <li>✓ Internal injuries and organ damage</li>
                        <li>✓ Facial lacerations and dental injuries</li>
                        <li>✓ Wrongful death</li>
                    </ul>
                    <p style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.6; margin-top: auto;">
                        Electric bicycle riders have higher rates of traumatic brain injuries and are three times as likely to involve a pedestrian compared to traditional bike accidents. These are not soft-tissue cases. We treat every e-bike claim with the severity it deserves.
                    </p>
                </div>
            </div>

            <div class="card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                <div class="deep-dive-card-media">
                    <img src="{{ asset('assets/media/practice-areas/electric-bicycle-scooter-lawyer.jpg') }}" alt="Delivery Workers and Courier Rights NYC">
                </div>
                <div style="padding: 2.25rem; display: flex; flex-direction: column; flex-grow: 1;">
                    <span class="badge badge-gold" style="margin-bottom: 1rem; align-self: flex-start;">Deliveristas Rights</span>
                    <h3 class="heading-md" style="margin-bottom: 1rem; color: var(--color-primary);">Delivery Workers — Your Rights Are the Same</h3>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                        Tens of thousands of delivery workers ride e-bikes across New York City every day. They are among the most vulnerable people on New York streets and among the most underserved when accidents happen.
                    </p>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                        If you were injured as a delivery worker on an e-bike, your rights are the same as any other injury victim. We fight for delivery workers across all five boroughs. Language is not a barrier. We work in English and Spanish. Hablamos Español.
                    </p>
                    <div style="margin-top: auto; background: var(--color-bg-alt); padding: 1.25rem; border-radius: var(--radius-md); border-left: 3px solid var(--color-accent);">
                        <h5 style="color: var(--color-primary); margin-bottom: 0.25rem; font-size: 1rem;">What Happens When the Driver Has No Insurance</h5>
                        <p style="margin: 0; color: var(--color-text-muted); font-size: 0.9rem;">
                            An uninsured driver does not mean an uncompensated victim. Recovery can be pursued through New York’s Motor Vehicle Accident Indemnification Corporation (MVAIC) or household auto policies.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Next Steps & Recoverable Damages --}}
        <div class="card" style="background: var(--color-primary); color: #ffffff; padding: 2.5rem; border-radius: var(--radius-xl); box-shadow: var(--shadow-lg);">
            <div class="grid grid-2" style="gap: 2.5rem; align-items: center;">
                <div>
                    <h3 style="color: #ffffff; font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">What to Do Immediately After an E-Bike or Scooter Accident</h3>
                    <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 0.75rem;">
                        The steps you take in the hours after a crash directly affect the strength of your case:
                    </p>
                    <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.6rem; font-size: 0.95rem; color: #cbd5e1;">
                        <li><strong>1. Call the police:</strong> Specifically state it is an e-bike/scooter crash to trigger mandatory 2025 DMV reporting.</li>
                        <li><strong>2. Get immediate medical attention:</strong> Concussions and internal trauma may appear hours or days later.</li>
                        <li><strong>3. Document the scene:</strong> Photographs of damage, road conditions, and nearby surveillance cameras.</li>
                        <li><strong>4. Call Adam first:</strong> Do not give a recorded statement to any insurance adjuster.</li>
                    </ul>
                </div>
                <div style="background: rgba(255,255,255,0.08); padding: 2rem; border-radius: var(--radius-lg); border: 1px solid rgba(255,255,255,0.15);">
                    <h4 style="color: var(--color-gold); font-size: 1.2rem; margin-bottom: 0.75rem;">What You Can Recover</h4>
                    <p style="color: #cbd5e1; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1rem;">
                        Medical expenses (current and future), lost wages and reduced earning capacity, pain and suffering, property damage, permanent disability compensation, and wrongful death damages. The first offer is almost never the right number.
                    </p>
                    <a href="tel:+19707427476" class="btn btn-accent btn-md">Evaluate Your Claim Free</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FAQ Section --}}
<section class="section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Rider FAQ</span>
            <h2 class="heading-lg">Frequently Asked Questions</h2>
            <p>Practical legal answers for e-bike, electric scooter, and delivery rider accidents in New York.</p>
        </div>

        <div class="faq-list" style="max-width: 900px; margin: 0 auto;">
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Do I have a case if I was riding an e-bike and got hit by a car?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes. If a driver’s negligence caused the accident, you can pursue their liability insurance for full compensation including pain and suffering, medical bills, and lost wages. Call us before you speak to their insurer.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if no-fault insurance doesn't apply to my e-bike?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>That is common. We identify every other insurance policy and legal avenue available to you, including the driver’s liability coverage, rental company coverage, manufacturer liability, and MVAIC if the driver was uninsured.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if the rental company's app waiver says I cannot sue?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Those waivers are frequently challenged and limited under New York law. We review every waiver and fight its enforceability where the law allows.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How long do I have to file an e-bike accident claim?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Three years from the accident date for a personal injury claim. Two years for wrongful death. If a government entity or city property was involved, a Notice of Claim must be filed within 90 days. Do not wait.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if I was partly at fault?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>New York’s comparative negligence law means you can still recover compensation even if you were partially responsible. Your recovery is reduced proportionally but not eliminated. We fight to keep your assigned fault percentage as close to the actual facts as possible.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Do you handle cases for commercial delivery workers?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes. We represent delivery workers across all five boroughs. Full services in English and Spanish. Hablamos Español.</p>
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
                <span class="section-subtitle">Act Before Evidence Is Lost</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">Talk to Adam Before the Insurance Company Closes Your Case</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.5rem;">
                    Insurers move fast after an e-bike accident. Before you give a recorded statement, accept any offer, or sign anything, call us first.
                </p>
                <div style="background: #ffffff; padding: 1.75rem; border-radius: var(--radius-lg); margin-bottom: 2rem; border-left: 4px solid var(--color-accent); box-shadow: var(--shadow-sm);">
                    <div style="font-weight: 700; color: var(--color-primary); font-size: 1.15rem; margin-bottom: 0.5rem;">Free Direct Attorney Consultation</div>
                    <p style="margin: 0; color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.6;">
                        The consultation is free. Adam is reachable directly from the first call to review your crash report and protect your rights.
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
                <x-contact-form :caseType="'E-Bike / Electric Scooter Accident'" />
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
