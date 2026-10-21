@extends('layouts.app')

@section('title', 'Medical Malpractice Attorney in New York | Shapiro')
@section('meta_description', 'Medical negligence in New York? Shapiro the Hero sues for malpractice, misdiagnosis & birth injuries. Free consult. No fee unless we win.')

@section('body_class', 'practice-detail-page')

@section('content')

{{-- Hero Section --}}
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div>
                <span class="badge badge-accent" style="margin-bottom: 1.25rem;">Medical Negligence Litigators</span>
                <h1 class="heading-xl" style="color: #ffffff; margin-bottom: 1.5rem;">
                    Medical Malpractice Lawyer New York City — <span style="color: var(--color-accent-light);">Surgical Error &amp; Hospital Negligence</span> Attorney Queens, Brooklyn, Manhattan &amp; All Five Boroughs
                </h1>
                <p style="font-size: 1.125rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 1.25rem;">
                    You trusted a doctor. A hospital. A surgeon. And something went wrong that should not have gone wrong. Now you are dealing with consequences that will follow you for years, maybe forever.
                </p>
                <p style="font-size: 1.05rem; line-height: 1.7; color: #e2e8f0; margin-bottom: 2rem;">
                    Medical malpractice cases are among the hardest personal injury claims to win in New York. They require medical experts, meticulous records review, and an attorney who will not back down when a hospital’s legal team shows up swinging. We do not back down.
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
                    <img src="{{ asset('assets/media/practice-areas/medical-malpractice-attorney.png') }}" alt="Medical Malpractice Attorney NYC" loading="eager" style="border-radius: 24px;">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Defining Medical Malpractice in NY --}}
<section class="section">
    <div class="container">
        <div class="two-col-equal-height">
            <div class="col-image">
                <div class="image-frame">
                    <img src="{{ asset('assets/media/blog/medical-malpractice-proof.png') }}" alt="Medical Malpractice Records Review and Evidence in New York">
                </div>
            </div>

            <div class="col-content">
                <span class="section-subtitle">The Legal Standard</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">What Is Medical Malpractice in New York?</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                    A bad medical outcome is not automatically malpractice. But when a doctor, surgeon, hospital, or healthcare provider fails to meet the accepted standard of care and that failure causes you serious harm, that is malpractice. And it is something we fight hard.
                </p>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                    Medical malpractice occurs when a healthcare provider deviates from the standard of care that a reasonably competent provider would follow in the same situation. The bad result alone is not enough. You have to prove the provider did something wrong, or failed to do something they should have done, and that failure directly caused your injury.
                </p>
                <div style="padding: 1.25rem; background: var(--color-bg-alt); border-left: 4px solid var(--color-accent); border-radius: var(--radius-md); margin-bottom: 1.5rem;">
                    <p style="margin: 0; color: var(--color-text); font-weight: 500;">
                        Proving that connection requires expert testimony. It requires someone in the same medical field to review the records and say, on the record, that the standard of care was breached. We build every case with licensed medical experts from the start. We review every record. We find where the standard of care broke down and who is responsible for it. Then we fight for everything you are owed.
                    </p>
                </div>
                <div class="btn-action-row" style="flex-wrap: nowrap !important; gap: 1rem;">
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-md">Free Case Evaluation &rarr;</a>
                    <a href="tel:+19707427476" class="btn btn-outline btn-md">Call (970) 742-7476 &rarr;</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Case Types Grid --}}
<section class="section section-alt">
    <div class="container">
        {{-- No Damages Cap Feature Banner --}}
        <div style="margin-bottom: 3.5rem; background: #ffffff; border: 1px solid var(--color-border); border-left: 5px solid var(--color-gold); border-radius: var(--radius-xl); padding: 2rem 2.5rem; box-shadow: var(--shadow-sm); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1.5rem;">
            <div style="max-width: 820px;">
                <span class="badge badge-gold" style="margin-bottom: 0.75rem; align-self: flex-start;">No Damages Cap in New York</span>
                <h3 class="heading-md" style="margin-bottom: 0.75rem;">Full Financial Recovery With No Artificial Statutory Ceiling</h3>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 0.5rem;">
                    New York has no statutory cap on medical malpractice damages. That means there is no artificial ceiling on what you can recover.
                </p>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin: 0;">
                    Economic damages cover medical bills, lost income, and future care costs. Non-economic damages cover pain and suffering, loss of enjoyment of life, and emotional harm. We pursue every category and fight for the full number.
                </p>
            </div>
            <div>
                <a href="tel:+19707427476" class="btn btn-primary btn-md" style="white-space: nowrap;">Free Value Check &rarr;</a>
            </div>
        </div>

        <div class="section-header">
            <span class="section-subtitle">Areas of Clinical Focus</span>
            <h2 class="heading-lg">Medical Malpractice Cases We Handle</h2>
            <p>We fight for victims of all types of medical negligence across New York City:</p>
        </div>

        <div class="grid grid-3" style="gap: 2rem; margin-bottom: 3.5rem;">
            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 2rem;">
                <h4 class="card-title">Surgical &amp; Anesthesia Errors</h4>
                <p class="card-text">Surgical errors, wrong-site surgery, foreign objects left in the body after surgery, and anesthesia errors and complications.</p>
            </div>

            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 2rem;">
                <h4 class="card-title">Misdiagnosis &amp; Cancer Delay</h4>
                <p class="card-text">Misdiagnosis, delayed diagnosis, and failure to diagnose cancer, allowing conditions to worsen in ways proper treatment would have prevented.</p>
            </div>

            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 2rem;">
                <h4 class="card-title">Birth Injuries</h4>
                <p class="card-text">Delivery room negligence, cerebral palsy, oxygen deprivation, and permanent nerve injuries affecting a child’s entire future.</p>
            </div>

            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 2rem;">
                <h4 class="card-title">Emergency Room Malpractice</h4>
                <p class="card-text">Overlooked strokes and heart attacks, failure to order imaging, rushing examinations, and premature patient discharges.</p>
            </div>

            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 2rem;">
                <h4 class="card-title">Hospital Negligence &amp; Infections</h4>
                <p class="card-text">Hospital negligence, post-surgical infections, failure to monitor, failure to follow up, and chronic understaffing failures.</p>
            </div>

            <div class="card" style="border-top: 4px solid var(--color-primary); padding: 2rem;">
                <h4 class="card-title">Medication &amp; Nursing Home Neglect</h4>
                <p class="card-text">Medication errors, dangerous drug interactions, prescription dosing mistakes, and nursing home neglect and abuse.</p>
            </div>
        </div>

        {{-- Deep Dive Section 1: Surgical Errors & Misdiagnosis --}}
        <div class="grid grid-2" style="gap: 3.5rem; align-items: stretch; margin-bottom: 3.5rem;">
            <div class="card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                <div class="deep-dive-card-media">
                    <img src="{{ asset('assets/media/blog/the-evidence-room-desk.jpg') }}" alt="Surgical Malpractice & Operating Room Investigation">
                </div>
                <div style="padding: 2.25rem; display: flex; flex-direction: column; flex-grow: 1;">
                    <span class="badge badge-red" style="margin-bottom: 1rem; align-self: flex-start;">Operating Room Failures</span>
                    <h3 class="heading-md" style="margin-bottom: 1rem; color: var(--color-primary);">Surgical Errors — When the Operating Room Becomes the Danger Zone</h3>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                        Surgery carries risk and every patient accepts that before going in. What no patient agrees to is a surgeon operating on the wrong site, or leaving an instrument inside the body, or causing nerve damage through careless technique.
                    </p>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin-top: auto;">
                        Those outcomes have a name and it is failure. The surgeon, the hospital, and the anesthesiologist can all bear liability depending on what happened and who controlled it. We investigate every layer and pursue every source of compensation available to you.
                    </p>
                </div>
            </div>

            <div class="card" style="padding: 0; overflow: hidden; display: flex; flex-direction: column;">
                <div class="deep-dive-card-media">
                    <img src="{{ asset('assets/media/practice-areas/medical-malpractice-attorney.png') }}" alt="Misdiagnosis and Delayed Diagnosis in New York City">
                </div>
                <div style="padding: 2.25rem; display: flex; flex-direction: column; flex-grow: 1;">
                    <span class="badge badge-gold" style="margin-bottom: 1rem; align-self: flex-start;">Diagnostic Failures</span>
                    <h3 class="heading-md" style="margin-bottom: 1rem; color: var(--color-primary);">Misdiagnosis and Delayed Diagnosis</h3>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                        Some of the most devastating malpractice cases never involve a scalpel. A doctor who misreads imaging and sends a stroke patient home has caused harm just as real as any surgical mistake.
                    </p>
                    <p style="color: var(--color-text-muted); line-height: 1.7; margin-top: auto;">
                        A physician who dismisses chest pain without proper testing, and that patient suffers a heart attack hours later, has failed that person at the moment they needed care most. When a diagnostic failure causes a condition to worsen in ways that proper treatment would have prevented, we build the case that connects that failure to the full consequences and fight for everything those consequences are worth.
                    </p>
                </div>
            </div>
        </div>

        {{-- Deep Dive Section 2: Birth Injuries, ER & Hospital Negligence --}}
        <div class="grid grid-3" style="gap: 2rem; margin-bottom: 3.5rem;">
            <div class="card" style="padding: 2rem; background: #ffffff;">
                <h4 style="color: var(--color-primary); font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Birth Injuries — Fighting for Your Child's Future</h4>
                <p style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.7; margin: 0;">
                    Birth injuries are among the highest-value medical malpractice cases in New York because the damages can span an entire lifetime. When oxygen is cut off during delivery and a child develops cerebral palsy, or forceps are applied incorrectly and cause permanent nerve damage, the consequences follow that child into every school year, every medical appointment, every part of a life that was supposed to begin without that weight. When a delivery room mistake costs a child a normal life, the hospital and the delivering physician must answer for it fully. We fight for the child and the family carrying that future alongside them.
                </p>
            </div>

            <div class="card" style="padding: 2rem; background: #ffffff;">
                <h4 style="color: var(--color-primary); font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Emergency Room Malpractice</h4>
                <p style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.7; margin: 0;">
                    Emergency rooms run at a brutal pace and nobody expects them to be perfect. What patients do have a right to expect is that the physician treating them will run the appropriate tests, read the results correctly, and make decisions based on what the evidence actually shows. When a doctor sends someone home without imaging that would have caught a stroke, or discharges a patient who needed to be admitted, the speed of the environment does not excuse what happened. Emergency room malpractice causes permanent disability and death in New York City hospitals every year. We hold ER physicians and the hospitals employing them accountable when their failures cause serious harm.
                </p>
            </div>

            <div class="card" style="padding: 2rem; background: #ffffff;">
                <h4 style="color: var(--color-primary); font-size: 1.25rem; font-weight: 700; margin-bottom: 0.75rem;">Hospital Negligence — Institutional Responsibility</h4>
                <p style="color: var(--color-text-muted); font-size: 0.95rem; line-height: 1.7; margin: 0;">
                    Doctors practice inside systems that hospitals design, staff, and control. When those systems run chronically short on staff, skip proper supervision, or allow sanitary protocols to slip until a patient develops a post-surgical infection, the harm that results is institutional. It did not come from one person having a bad day. It came from decisions made at the organizational level that put patients at risk. When a hospital’s own failures contributed to your injury, the institution is liable alongside whoever was directly involved in your care. We pursue every responsible party.
                </p>
            </div>
        </div>

        {{-- Lavern's Law Callout Box --}}
        <div style="background: var(--color-primary); color: #ffffff; padding: 2.5rem; border-radius: var(--radius-xl); box-shadow: var(--shadow-lg);">
            <div class="grid grid-2" style="gap: 2.5rem; align-items: center;">
                <div>
                    <span class="badge badge-gold" style="margin-bottom: 0.75rem;">New York State Law</span>
                    <h3 style="color: #ffffff; font-size: 1.6rem; font-weight: 700; margin-bottom: 1rem;">Failure to Diagnose Cancer — Lavern's Law</h3>
                    <p style="color: #cbd5e1; line-height: 1.7; margin-bottom: 0.75rem;">
                        New York enacted Lavern’s Law in 2018 specifically for patients whose cancer was missed or misdiagnosed. Before this law, the 2.5-year filing deadline started on the date of the negligent act, which often expired before the patient even knew something had gone wrong.
                    </p>
                    <p style="color: #cbd5e1; line-height: 1.7; margin: 0;">
                        The law changed that clock. For failure-to-diagnose cancer cases, the deadline now starts when the patient discovers the error or reasonably should have discovered it. If you were told your results were clear and later found out they were not, the rules governing your deadline are different from the standard ones. Call us and we will tell you exactly where you stand.
                    </p>
                </div>
                <div style="text-align: center; background: rgba(255,255,255,0.08); padding: 2rem; border-radius: var(--radius-lg); border: 1px solid rgba(255,255,255,0.15);">
                    <div style="font-size: 1.15rem; font-weight: 600; color: #ffffff; margin-bottom: 0.5rem;">Unsure of Your Filing Deadline?</div>
                    <p style="color: #cbd5e1; font-size: 0.95rem; margin-bottom: 1.25rem;">We evaluate your medical timeline and confirm exactly where your case stands under the law.</p>
                    <a href="tel:+19707427476" class="btn btn-accent btn-md">Check Your Deadline Free</a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Deadlines & Certificate of Merit & Recoverable Damages --}}
<section class="section">
    <div class="container">
        <div class="grid grid-3" style="gap: 2.5rem; align-items: stretch;">
            <div class="card" style="padding: 2.5rem; display: flex; flex-direction: column;">
                <span class="badge badge-gold" style="margin-bottom: 1rem; align-self: flex-start;">Strict Limitations</span>
                <h3 class="heading-md" style="margin-bottom: 1rem;">New York Medical Malpractice Deadlines</h3>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                    New York’s statute of limitations for medical malpractice is <strong>2 years and 6 months</strong> from the date of the alleged malpractice, not the standard 3 years that applies to other personal injury claims. That six-month difference has closed cases that people assumed were still open.
                </p>
                <p style="font-weight: 600; margin-bottom: 0.5rem; color: var(--color-primary);">There are critical exceptions:</p>
                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 0.75rem; font-size: 0.95rem; color: var(--color-text-muted);">
                    <li><strong>Foreign objects left in the body:</strong> The lawsuit may be filed within one year after the date of discovery of the foreign object, or within one year of learning facts that would reasonably lead to its discovery.</li>
                    <li><strong>Cancer misdiagnosis under Lavern's Law:</strong> The clock starts when you discovered the error, not when it happened.</li>
                    <li><strong>Children:</strong> For patients under 18 when the malpractice occurred, the statute is paused until age 18, though it must typically be filed within 10 years of the negligent act.</li>
                    <li><strong style="color: var(--color-accent);">Public hospitals:</strong> If your malpractice occurred at a public hospital like Bellevue, you have <strong>90 days</strong> to file a Notice of Claim, not 2.5 years. Miss that window and the case is gone.</li>
                </ul>
            </div>

            <div class="card" style="padding: 2rem; display: flex; flex-direction: column;">
                <div style="aspect-ratio: 16/10; min-height: 190px; max-height: 220px; border-radius: var(--radius-lg); overflow: hidden; margin-bottom: 1.25rem; background: #0b1b3d; box-shadow: 0 4px 15px rgba(0,0,0,0.12); -webkit-mask-image: -webkit-radial-gradient(white, black); mask-image: radial-gradient(white, black);">
                    <img src="{{ asset('assets/media/practice-areas/nyc-medical-certificate-of-merit.jpg') }}" alt="Medical Expert Records Review for Certificate of Merit CPLR § 3012-a" style="width: 100%; height: 100%; object-fit: cover; display: block; border-radius: var(--radius-lg);">
                </div>
                <span class="badge badge-blue" style="margin-bottom: 0.75rem; align-self: flex-start;">CPLR § 3012-a</span>
                <h3 class="heading-md" style="margin-bottom: 0.85rem;">What the Certificate of Merit Means for Your Case</h3>
                <p style="color: var(--color-text-muted); line-height: 1.65; margin-bottom: 1rem; font-size: 0.95rem;">
                    Under New York Civil Practice Law &amp; Rules § 3012-a, every medical malpractice complaint must be accompanied by a formal Certificate of Merit signed by your attorney.
                </p>
                <div style="background: #f8fafc; border-left: 3px solid #2563eb; padding: 0.85rem 1rem; border-radius: 6px; margin-bottom: 1rem;">
                    <p style="margin: 0; font-size: 0.875rem; color: #1e293b; line-height: 1.55; font-weight: 500;">
                        <strong>Mandatory Physician Review:</strong> We cannot file your lawsuit without first having a licensed, board-certified physician in the relevant medical specialty review your complete medical records and certify in writing that there is a reasonable basis for the malpractice action.
                    </p>
                </div>
                <p style="color: var(--color-text-muted); line-height: 1.65; font-size: 0.95rem; margin-top: auto;">
                    We retain premier medical experts early to examine imaging, diagnostic charts, and surgical logs. We build an ironclad expert evidentiary foundation from day one.
                </p>
            </div>

            <div class="card" style="padding: 2.5rem; display: flex; flex-direction: column;">
                <span class="badge badge-gold" style="margin-bottom: 1rem; align-self: flex-start;">Full Recovery</span>
                <h3 class="heading-md" style="margin-bottom: 1rem;">What Compensation Can You Recover?</h3>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                    Medical malpractice damages in New York cover:
                </p>
                <ul style="list-style: none; padding: 0; margin: 0 0 1rem 0; display: flex; flex-direction: column; gap: 0.6rem; font-size: 0.95rem; color: var(--color-text-muted);">
                    <li>✓ All past and future medical expenses related to the malpractice</li>
                    <li>✓ Lost income and reduced earning capacity</li>
                    <li>✓ Pain and suffering</li>
                    <li>✓ Permanent disability or disfigurement</li>
                    <li>✓ Long-term care and rehabilitation costs</li>
                    <li>✓ Wrongful death damages if a loved one was killed</li>
                </ul>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-top: auto; font-size: 0.95rem;">
                    We evaluate every category and fight for what the case is actually worth. Not what the hospital’s insurer offers.
                </p>
            </div>
        </div>
    </div>
</section>

{{-- FAQ Section --}}
<section class="section section-alt">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle">Malpractice Answers</span>
            <h2 class="heading-lg">Frequently Asked Questions</h2>
            <p>Direct legal insight into New York medical negligence and hospital liability claims.</p>
        </div>

        <div class="faq-list" style="max-width: 900px; margin: 0 auto;">
            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How do I know if I have a medical malpractice case?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>If a healthcare provider made an error that a reasonably competent provider would not have made, and that error caused you serious harm, you may have a case. Call us. We review the facts and tell you exactly where you stand.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>How long do I have to file a medical malpractice claim in New York?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Two years and six months from the date of the malpractice in most cases. Public hospital cases require a Notice of Claim within 90 days. Cancer misdiagnosis cases follow different rules under Lavern’s Law. Call us immediately and do not assume you know which deadline applies.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Do I need a medical expert to file a case?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Yes. New York requires a Certificate of Merit filed with every medical malpractice complaint. We retain the expert, review the records, and build that foundation before we file anything.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if the doctor says the outcome was just a known risk?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Known risks are not automatically malpractice. But if the risk materialized because of negligence, that is a different matter. We investigate what happened and whether the standard of care was followed. The doctor’s explanation is the beginning of the inquiry, not the end.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>What if the malpractice happened at a city or public hospital?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>A Notice of Claim must be filed within 90 days of the malpractice. This is a hard deadline with very limited exceptions. Call us the same day you suspect negligence at a public hospital.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Is there a limit on how much I can recover?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>No. New York has no cap on medical malpractice damages. We fight for the full amount your case is worth.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" onclick="toggleFaq(this)">
                    <span>Do you charge anything upfront?</span>
                    <span class="faq-icon">+</span>
                </button>
                <div class="faq-answer">
                    <p>Nothing. Contingency fee only. No win, no fee.</p>
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
                <span class="section-subtitle">Take Action Now</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">Talk to Adam Before the Hospital's Legal Team Gets Further Ahead</h2>
                <p style="color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1.5rem;">
                    Hospitals start building their defense the day something goes wrong. Before you sign any documents, give any recorded statement, or accept any explanation from the hospital, call us first.
                </p>
                <div style="background: var(--color-bg-alt); padding: 1.75rem; border-radius: var(--radius-lg); margin-bottom: 2rem; border-left: 4px solid var(--color-accent);">
                    <div style="font-weight: 700; color: var(--color-primary); font-size: 1.15rem; margin-bottom: 0.5rem;">Free Confidential Consultation</div>
                    <p style="margin: 0; color: var(--color-text-muted); font-size: 0.95rem;">
                        Before you speak to anyone, call us. The consultation is free. No upfront fees. Adam is reachable from the first call.
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
                <x-contact-form :caseType="'Medical Malpractice'" />
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
