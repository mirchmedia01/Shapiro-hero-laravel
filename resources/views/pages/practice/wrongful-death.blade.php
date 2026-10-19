@extends('layouts.app')

@section('title', 'Wrongful Death Attorney in New York | Need a Hero? Call Shapiro!')
@section('meta_description', 'Wrongful death in New York? Shapiro the Hero recovers funeral costs, lost income & family support. Free consultation, no fee unless we win.')

@section('body_class', 'practice-detail-page')

@section('content')

{{-- Hero Section --}}
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div>
                <span class="badge badge-accent" style="margin-bottom: 1.25rem;">Compassionate &amp; Relentless Advocacy</span>
                <h1 class="heading-xl" style="color: #ffffff; margin-bottom: 1.5rem;">
                    Wrongful Death Lawyer New York City — <span style="color: var(--color-accent-light);">NYC Wrongful Death Attorney</span> Serving Queens, Brooklyn, Manhattan &amp; All Five Boroughs
                </h1>
                <p style="font-size: 1.125rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 1.25rem;">
                    Someone took a life they had no right to take. The law gives your family one path to justice. We have been walking that path with New York families since 1994.
                </p>
                <p style="font-size: 1.05rem; line-height: 1.7; color: #e2e8f0; margin-bottom: 2rem;">
                    Losing someone to another person’s negligence is a different kind of grief. It is loss that did not have to happen. The driver who ran the light. The surgeon who missed the obvious. The contractor who skipped the safety equipment. Someone made a decision, and your family is living with the consequences. We fight to make sure they pay for it.
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
                    <img src="{{ asset('assets/media/practice-areas/wrongful-death-lawyer.jpg') }}" alt="Wrongful Death Lawyer NYC" loading="eager">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Defining Wrongful Death in NY & Who Can File --}}
<section class="section">
    <div class="container">
        <div class="grid grid-2" style="align-items: center; gap: 3.5rem;">
            <div>
                <span class="section-subtitle">EPTL § 5-4.1 Statutory Grounds</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">What Makes a Death "Wrongful" Under New York Law</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                    Under the <strong>New York Estates, Powers and Trusts Law (EPTL) § 5-4.1</strong>, a wrongful death lawsuit may be pursued if the victim would have had grounds for a personal injury lawsuit had they survived. In plain terms: if someone’s negligence, recklessness, or intentional misconduct caused the death, the family has a legal claim.
                </p>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                    Four things have to be true: There was a legal duty of care. That duty was breached. The breach caused the death. And the family suffered measurable losses as a result. We build the case on all four. Every time.
                </p>
                <div style="padding: 1.25rem; background: var(--color-bg-alt); border-left: 4px solid var(--color-accent); border-radius: var(--radius-md); margin-bottom: 1.5rem;">
                    <p style="margin: 0; color: var(--color-text); font-weight: 500;">
                        Adam and his team have spent 30 years on both sides of civil litigation in New York. He knows how insurance companies value a human life, the math of it all, and how to destroy their arguments in front of a jury.
                    </p>
                </div>
                <div class="btn-action-row">
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-md">Free Review &rarr;</a>
                    <a href="tel:+19707427476" class="btn btn-outline btn-md">Call (970) 742-7476</a>
                </div>
            </div>

            <div>
                <div class="card" style="padding: 2.5rem; background: #ffffff; border: 1px solid var(--color-border);">
                    <span class="badge badge-red" style="margin-bottom: 1rem; align-self: flex-start;">Procedural Trap</span>
                    <h3 class="heading-md" style="margin-bottom: 1rem;">Who Can File a Wrongful Death Claim in New York</h3>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                        This is where New York law gets specific and where families run into problems without an attorney. To file a wrongful death claim, you must be the decedent’s estate executor or personal representative. This is usually defined in the decedent’s will, but if they did not have one, the court can appoint a personal representative.
                    </p>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin: 0;">
                        If the personal representative is not appointed until after the statute of limitations has expired, the family’s right to file a wrongful death claim could be forever barred. That is one of the most common and devastating procedural traps grieving families fall into. We move to open the estate and secure the family’s right to file from the first call. That step cannot wait.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Common Causes We Handle --}}
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Areas of Fatal Injury Practice</span>
            <h2 class="heading-lg">Common Causes of Wrongful Death We Handle</h2>
            <p>Fatal accidents do not fit a single category. We have fought for families across every major cause of wrongful death in New York:</p>
        </div>

        <div class="grid grid-4" style="gap: 1.5rem; margin-bottom: 3.5rem;">
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">Motor Vehicle Crashes</h4>
                <p class="card-text">Fatal car, truck, motorcycle, bicycle, pedestrian, and rideshare accidents across NYC expressways and city streets.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">Construction Catastrophes</h4>
                <p class="card-text">Construction site deaths under NY Labor Law §240 and §241, scaffold collapses, crane failures, and excavation cave-ins.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">Medical Malpractice</h4>
                <p class="card-text">Surgical errors, anesthesia deaths, missed and delayed cancer diagnoses, and fatal emergency room discharges.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">Premises Liability</h4>
                <p class="card-text">Slip, trip, and fall fatalities on negligent premises, defective elevators, stair collapse, and hazardous building conditions.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">Nursing Home Neglect</h4>
                <p class="card-text">Elder abuse deaths, untreated bedsores leading to sepsis, fall fatalities from unassisted transfers, and dehydration.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">Defective Products</h4>
                <p class="card-text">Defective industrial equipment failures, dangerous automotive components, and lithium-ion battery fire fatalities.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">Pedestrian &amp; E-Bikes</h4>
                <p class="card-text">Pedestrian and bicycle fatalities caused by speeding motorists, commercial delivery e-bikes, and bus collisions.</p>
            </div>
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 1.75rem;">
                <h4 class="card-title">Workplace Accidents</h4>
                <p class="card-text">Industrial and workplace accidents involving gross employer or third-party subcontractor negligence.</p>
            </div>
        </div>

        {{-- Damages & Survival Action (Two Paths) --}}
        <div class="card" style="background: #ffffff; padding: 2.5rem; border-radius: var(--radius-xl); border: 1px solid var(--color-border); margin-bottom: 2.5rem;">
            <div class="grid grid-2" style="gap: 2.5rem;">
                <div>
                    <span class="badge badge-gold" style="margin-bottom: 1rem; align-self: flex-start;">Pecuniary Injuries</span>
                    <h3 class="heading-md" style="margin-bottom: 1rem;">What Your Family Can Recover</h3>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                        New York’s wrongful death law has remained largely unchanged since 1847 and limits recovery to “pecuniary injuries,” which means financial losses only. That is a real limitation and one that frustrates families. But within those limits, the recoverable damages are still substantial. What we pursue:
                    </p>
                    <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.65rem; font-size: 0.95rem; color: var(--color-text-muted);">
                        <li>✓ Medical expenses incurred before death</li>
                        <li>✓ Funeral and burial costs</li>
                        <li>✓ Lost income and financial support the deceased would have provided over their lifetime</li>
                        <li>✓ Loss of parental guidance and care for children</li>
                        <li>✓ Loss of spousal services and support</li>
                    </ul>
                </div>

                <div>
                    <span class="badge badge-red" style="margin-bottom: 1rem; align-self: flex-start;">Survival Actions</span>
                    <h3 class="heading-md" style="margin-bottom: 1rem;">Survival Actions &amp; Punitive Damages</h3>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                        On top of the wrongful death claim, we pursue survival actions where applicable. These are separate claims that recover for what your loved one endured before they died:
                    </p>
                    <ul style="list-style: none; padding: 0; margin: 0 0 1rem 0; display: flex; flex-direction: column; gap: 0.65rem; font-size: 0.95rem; color: var(--color-text-muted);">
                        <li>✓ The deceased’s conscious pain and suffering before death, through a survival action</li>
                        <li>✓ Pre-impact terror and cognitive awareness of impending catastrophe</li>
                        <li>✓ Punitive damages in cases involving extreme recklessness or intentional misconduct</li>
                    </ul>
                    <p style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.6; margin: 0;">
                        Two claims. Two paths to recovery. We pursue both simultaneously and evaluate punitive damages from the first consultation.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Deadlines & Investigation --}}
<section class="section">
    <div class="container">
        <div class="grid grid-2" style="gap: 3.5rem; align-items: flex-start;">
            <div>
                <span class="section-subtitle">Strict Statutes of Limitations</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">The Deadlines Are Real — And They Are Unforgiving</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                    In New York, wrongful death lawsuits must be filed within <strong>two years of the date of the decedent’s death</strong>. Failure to file within this two-year limit will prohibit the individual from ever filing a wrongful death lawsuit. The clock starts on the date of death. Not the accident. Not the diagnosis. The death.
                </p>
                <div style="background: var(--color-bg-alt); padding: 1.5rem; border-radius: var(--radius-lg); border-left: 4px solid var(--color-accent); margin-bottom: 1.5rem;">
                    <p style="font-weight: 600; margin-bottom: 0.75rem; color: var(--color-primary);">There are exceptions worth knowing:</p>
                    <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.75rem; font-size: 0.95rem; color: var(--color-text-muted);">
                        <li><strong>Medical malpractice deaths:</strong> Carry a two-year-and-six-month statute of limitations.</li>
                        <li><strong>Government entity involvement:</strong> Requires a Notice of Claim filed within <strong>90 days of the appointment of the estate administrator</strong>, with the lawsuit filed no later than two years after the death.</li>
                        <li><strong>Minor beneficiaries:</strong> May toll the deadline in certain circumstances, but only if no parent or guardian was already appointed at the time of death.</li>
                        <li><strong>Pending criminal charges against the defendant:</strong> Tolls the civil deadline until the criminal case ends. The family then has one year from that date to file.</li>
                    </ul>
                </div>
                <p style="color: var(--color-text-muted); font-size: 0.95rem;">
                    These deadlines overlap. They conflict. Miss the wrong one and the case is gone regardless of how clear the liability is. We track every deadline from day one.
                </p>
            </div>

            <div>
                <div class="card" style="padding: 2.5rem; background: var(--color-primary); color: #ffffff; border-radius: var(--radius-xl); margin-bottom: 2rem;">
                    <h3 style="color: #ffffff; font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">The Wrongful Death Investigation — What We Deploy</h3>
                    <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 1rem;">
                        Evidence in wrongful death cases disappears fast. Surveillance footage gets overwritten. Witnesses scatter. Construction sites get cleaned up overnight. Medical records get buried in administrative processes. We move immediately.
                    </p>
                    <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 1.5rem;">
                        From the first call, we secure accident reports, OSHA records, medical records, witness statements, expert consultations, and any physical evidence tied to the scene. Adam has spent decades inside the minds of the insurance companies and defense teams who fight these claims. He knows what they look for. He knows what they try to make disappear. We get there first.
                    </p>
                    <a href="tel:+19707427476" class="btn btn-accent btn-md">Preserve Evidence Today</a>
                </div>

                <div class="card" style="padding: 2rem; background: #ffffff; border: 1px solid var(--color-border);">
                    <h4 style="color: var(--color-primary); font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Wrongful Death in New York vs. Other States</h4>
                    <p style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.7; margin: 0;">
                        New York is one of the few states that still restricts wrongful death damages to economic losses only. Grief, emotional suffering, and loss of companionship are not currently compensable under state law, though legislative efforts like the Grieving Families Act have sought to change this for years. What that means practically: the financial case has to be built with precision. Lost income projections, lifetime earnings calculations, economic expert testimony. We build that record thoroughly. The law limits the categories. It does not limit how hard we fight within them.
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
            <span class="section-subtitle">Compassionate Guidance</span>
            <h2 class="heading-lg">Frequently Asked Questions</h2>
            <p>Answers to difficult legal questions during a challenging time.</p>
        </div>

        <div class="faq-list" style="max-width: 900px; margin: 0 auto;">
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Who files the wrongful death lawsuit if there is no will?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The court appoints a personal representative for the estate. We help families navigate that process immediately so no deadlines are jeopardized.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Can multiple family members share in a wrongful death recovery?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes. The estate representative files the claim and any recovery is distributed among the eligible beneficiaries, typically the spouse, children, and parents of the deceased, according to New York law.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if the person who caused the death is facing criminal charges?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>The civil wrongful death case runs separately from any criminal prosecution. A criminal conviction is not required to win a civil wrongful death claim. The standard of proof is lower in civil court.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if my loved one was partly at fault for the accident?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>New York’s comparative fault rules apply. Recovery is reduced proportionally by the deceased’s share of fault but is not eliminated entirely. We fight to keep that percentage as close to the actual facts as possible.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What does it cost to hire a wrongful death attorney?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Nothing upfront. We work on contingency. No win, no fee.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How long does a wrongful death case take?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>It depends on the complexity of the case and whether the defendant’s insurer is willing to pay what the case is worth. Straightforward cases can resolve in months. Cases involving disputed liability or serious damages often take longer and may go to trial. We do not push families toward fast settlements that undervalue their loss.</p>
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
                <span class="section-subtitle">The First Call Costs Nothing</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">Demand Justice For Your Family</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.5rem;">
                    Your family has already paid enough. The consultation is free. Adam is reachable from the first call. No pressure, no obligation, strictly confidential.
                </p>
                <div style="background: var(--color-bg-alt); padding: 1.75rem; border-radius: var(--radius-lg); margin-bottom: 2rem; border-left: 4px solid var(--color-accent);">
                    <div style="font-weight: 700; color: var(--color-primary); font-size: 1.15rem; margin-bottom: 0.5rem;">Free Direct Attorney Consultation</div>
                    <p style="margin: 0; color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.6;">
                        Before you speak to any insurance adjuster, sign anything, or accept anything, call us first.
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
                <x-contact-form :caseType="'Wrongful Death'" />
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
