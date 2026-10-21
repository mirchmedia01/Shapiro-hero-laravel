@extends('layouts.app')

@section('body_class', 'about-page')

@section('content')

{{-- =========================================================================
     1. HERO SECTION
     ========================================================================= --}}
<section class="hero-section">
    <div class="container">
        <div class="hero-grid">
            <div>
                <span class="badge badge-gold" style="margin-bottom: 1.25rem;">Founding Attorney Biography</span>
                <h1 class="heading-xl about-hero-heading" style="color: #ffffff; font-size: clamp(2rem, 3.2vw, 2.75rem); line-height: 1.25; margin-bottom: 1.35rem;">
                    Meet Adam L. Shapiro &mdash; <span style="color: var(--color-accent-light);">Personal Injury Attorney</span> Licensed in New York &amp; Florida
                </h1>
                <p style="font-size: 1.125rem; line-height: 1.8; color: #cbd5e1; margin-bottom: 1.25rem;">
                    Adam L. Shapiro has been fighting for injured New Yorkers since 1994. Based in Forest Hills, Queens, he represents accident victims, injured workers, and families across New York and Florida. Car crashes. Construction falls. Slip and fall injuries. Medical malpractice. Workers’ comp. Wrongful death.
                </p>
                <p style="font-size: 1.0625rem; line-height: 1.8; color: #ffffff; font-weight: 600; margin-bottom: 2rem;">
                    He handles it all. Personally. You will not be handed off to a paralegal or treated like a file number. Adam takes your calls, knows your case, and when the insurance company comes with a lowball offer, Adam is already two steps ahead.
                </p>
                <div class="btn-action-row">
                    <a href="{{ route('contact') }}" class="btn btn-accent btn-lg">
                        <span>Schedule Free Consultation</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                    </a>
                    <a href="tel:+19707427476" class="btn btn-outline-white btn-lg">
                        <span>(970) SHAPIRO</span>
                    </a>
                </div>
                <div style="margin-top: 1.75rem; display: flex; gap: 1.5rem; flex-wrap: wrap; font-size: 0.875rem; color: #94a3b8;">
                    <span style="display: inline-flex; align-items: center; gap: 0.4rem; color: #e2e8f0;"><strong style="color: var(--color-gold);">✓</strong> 30+ Years Experience</span>
                    <span style="display: inline-flex; align-items: center; gap: 0.4rem; color: #e2e8f0;"><strong style="color: var(--color-gold);">✓</strong> Direct Attorney Access</span>
                    <span style="display: inline-flex; align-items: center; gap: 0.4rem; color: #e2e8f0;"><strong style="color: var(--color-gold);">✓</strong> English &amp; Español</span>
                    <span style="display: inline-flex; align-items: center; gap: 0.4rem; color: #e2e8f0;"><strong style="color: var(--color-gold);">✓</strong> No Fee Unless We Win</span>
                </div>
            </div>

            <div style="display: flex; align-items: center; justify-content: center; width: 100%;">
                <div class="about-hero-portrait-card" style="box-shadow: 0 25px 60px -15px rgba(0,0,0,0.7); max-width: 480px; width: 100%; position: relative; border-radius: var(--radius-2xl); overflow: hidden; border: 2.5px solid rgba(212, 163, 115, 0.45); background: #0b1b3d;">
                    <img src="{{ asset('assets/media/attorneys/adam-shapiro-real-client-hd.png') }}" alt="Adam L. Shapiro, Esq. - Founding Personal Injury Attorney" style="width: 100%; aspect-ratio: 1 / 1; object-fit: cover; object-position: center center; display: block;">
                    
                    {{-- Experience Floating Badge --}}
                    <div style="position: absolute; top: 1.25rem; right: 1.25rem; background: rgba(11, 27, 61, 0.9); backdrop-filter: blur(8px); border: 1px solid rgba(212, 163, 115, 0.6); border-radius: 9999px; padding: 0.4rem 0.95rem; display: flex; align-items: center; gap: 0.45rem; box-shadow: 0 4px 15px rgba(0,0,0,0.4);">
                        <span style="color: var(--color-gold); font-size: 0.9rem;">★</span>
                        <span style="color: #ffffff; font-size: 0.8rem; font-weight: 700; letter-spacing: 0.04em; text-transform: uppercase;">Since 1994</span>
                    </div>

                    {{-- Bottom Credential Overlay Card --}}
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(to top, rgba(11, 27, 61, 0.97) 0%, rgba(11, 27, 61, 0.82) 65%, transparent 100%); padding: 2rem 1.5rem 1.35rem; text-align: center;">
                        <div style="font-size: 1.35rem; font-weight: 800; color: #ffffff; letter-spacing: -0.01em;">Adam L. Shapiro, Esq.</div>
                        <div style="font-size: 0.85rem; color: var(--color-gold); font-weight: 700; text-transform: uppercase; letter-spacing: 0.06em; margin-top: 0.35rem;">
                            Founder &amp; Principal Trial Attorney
                        </div>
                        <div style="font-size: 0.8rem; color: #cbd5e1; margin-top: 0.25rem;">
                            Direct Attorney Access &bull; Admitted in NY &amp; FL
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- =========================================================================
     2. THE INSIDER DEFENSE ADVANTAGE
     ========================================================================= --}}
<section class="section section-alt">
    <div class="container">
        <div class="split-section split-video">
            <div>
                <span class="section-subtitle">About Us</span>
                <h2 class="heading-lg" style="margin-bottom: 1.5rem;">
                    Shapiro's Advantage: Former Defense Counsel for Lloyd's of London &amp; Harley Davidson
                </h2>
                <div style="font-size: 1.0625rem; line-height: 1.8; color: var(--color-text-muted); display: flex; flex-direction: column; gap: 1rem;">
                    <p><strong>This is the part other attorneys cannot copy.</strong></p>
                    <p>Before Adam fought for injury victims, he spent years on the other side. He defended Lloyd’s of London. Harley Davidson. Ford Motor Credit. Bank of America. Legion Insurance Company. The New York State Liquidation Bureau. He was inside the machine. He learned exactly how insurance adjusters are trained to think, stall, and minimize what they pay out.</p>
                    <p><strong>Then he crossed the line.</strong></p>
                    <p>He took everything he learned defending the giants and turned it against them. When an adjuster sits across from Adam, they are facing someone who studied their playbook and even helped them write it.</p>
                    <p>That is Adam’s advantage. And now it works for you. Only.</p>
                </div>
                <div style="margin-top: 1.5rem; display: flex; flex-direction: column; gap: 1.25rem;">
                    <div>
                        <span class="badge badge-gold" style="font-size: 0.875rem; padding: 0.5rem 1rem;">30+ Years of Dual-Perspective Trial Mastery</span>
                    </div>
                    <div class="btn-action-row" style="flex-wrap: nowrap !important; gap: 1rem;">
                        <a href="{{ route('contact') }}" class="btn btn-accent btn-md">Schedule Free Consultation &rarr;</a>
                        <a href="tel:+19707427476" class="btn btn-outline btn-md">Call (970) 742-7476</a>
                    </div>
                </div>
            </div>

            <div style="display: flex; flex-direction: column; align-items: center; width: 100%;">
                <div class="hero-reel-mockup" style="max-width: 400px; border-radius: 24px; overflow: hidden; -webkit-mask-image: -webkit-radial-gradient(white, black); mask-image: radial-gradient(white, black);">
                    <video poster="{{ asset('assets/media/attorneys/adam-shapiro-reel-cover.jpg') }}" controls playsinline preload="metadata" style="width: 100%; height: 100%; object-fit: cover; display: block; border-radius: 24px;">
                        <source src="{{ asset('assets/media/videos/hurt-in-accident-advice-short.mp4') }}" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div style="display: flex; align-items: center; justify-content: space-between; width: 100%; max-width: 400px; margin-top: 0.875rem; padding: 0 0.5rem; gap: 0.75rem;">
                    <div>
                        <h4 style="font-size: 0.95rem; font-weight: 700; color: var(--color-primary); margin: 0;">Adam L. Shapiro on Video</h4>
                        <p style="font-size: 0.8125rem; color: var(--color-text-muted); margin: 0;">Advice if you are injured in an accident</p>
                    </div>
                    <span class="badge badge-red" style="white-space: nowrap; flex-shrink: 0;">Watch Reel</span>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- =========================================================================
     3. 30 YEARS OF CIVIL LITIGATION (Redesigned with Imagery & Timeline)
     ========================================================================= --}}
<section class="litigation-heritage-section">
    <div class="container">
        {{-- Section Header --}}
        <div style="max-width: 820px; margin-bottom: 3.5rem;">
            <span class="section-subtitle">Deep Litigative Heritage</span>
            <h2 class="heading-lg" style="margin-bottom: 1.25rem;">
                30 Years of Civil Litigation &mdash; Representing Both Plaintiffs and Defendants
            </h2>
            <p style="font-size: 1.125rem; line-height: 1.8; color: var(--color-text-muted);">
                A storied legal career forged across high-stakes corporate courtrooms, aviation disaster investigations, and over three decades of tenacious trial advocacy for New York's injured victims.
            </p>
        </div>

        {{-- Split Grid: Left Career Timeline & Quote | Right High-End Visual Composite --}}
        <div class="litigation-heritage-grid">
            {{-- Left Column: Timeline Journey --}}
            <div>
                <div class="litigation-timeline">
                    {{-- 1993 --}}
                    <div class="timeline-step">
                        <div class="timeline-marker"></div>
                        <span class="timeline-year-tag">1993 &bull; Miami, Florida</span>
                        <h4>Florida Foundations &amp; Aviation Litigation</h4>
                        <p>
                            Adam started his legal career in Florida in 1993. Criminal defense first. Then, insurance and aviation litigation at two major Miami firms, representing institutional clients in high-stakes national and international cases.
                        </p>
                    </div>

                    {{-- 1997 --}}
                    <div class="timeline-step">
                        <div class="timeline-marker"></div>
                        <span class="timeline-year-tag">1997 &bull; Park Avenue, New York</span>
                        <h4>Partner at Issler &amp; Schrage, LLP</h4>
                        <p>
                            By 1997, he was back in New York as an associate and then partner at Issler &amp; Schrage, LLP on Park Avenue, handling cases for corporations, insurance companies, and celebrities alongside individual plaintiffs and defendants.
                        </p>
                    </div>

                    {{-- 2000 - Present --}}
                    <div class="timeline-step">
                        <div class="timeline-marker"></div>
                        <span class="timeline-year-tag">2000 &ndash; Present &bull; Forest Hills, Queens</span>
                        <h4>Independent Trial Firm &amp; Plaintiff Advocacy</h4>
                        <p>
                            In 2000, he opened his own firm in Forest Hills. He has been there ever since. Over 30 years. Both sides of the courtroom. Every type of civil case. That depth is not something you find at most personal injury firms.
                        </p>
                    </div>
                </div>

                {{-- Pull Quote Box --}}
                <div class="litigation-quote-card">
                    <p>
                        &ldquo;That depth is not something you find at most personal injury firms. It is something you feel the moment the other side realizes who they are dealing with.&rdquo;
                    </p>
                    <span>&mdash; Adam L. Shapiro, Esq. &bull; Managing Partner</span>
                </div>

                {{-- Action Buttons --}}
                <div class="btn-action-row" style="margin-top: 1.75rem; flex-wrap: nowrap !important; gap: 1rem;">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-md">Get Adam On Your Side &rarr;</a>
                    <a href="tel:+19707427476" class="btn btn-outline btn-md">Call (970) SHAPIRO</a>
                </div>
            </div>

            {{-- Right Column: Visual Showcase --}}
            <div class="litigation-visual-showcase">
                {{-- Law Library Card --}}
                <div class="litigation-visual-card">
                    <img src="{{ asset('assets/media/about/ny-law-office-heritage.jpg') }}" alt="Park Avenue Legal Heritage & Law Library" loading="lazy">
                    <div class="litigation-visual-caption">
                        <div>
                            <strong>Manhattan &amp; Queens Heritage</strong>
                            <p>Decades of corporate &amp; institutional defense insight</p>
                        </div>
                        <span>Park Ave &bull; NYC</span>
                    </div>
                </div>

                {{-- Supreme Court Trial Card --}}
                <div class="litigation-visual-card">
                    <img src="{{ asset('assets/media/about/ny-trial-courtroom.jpg') }}" alt="New York State Supreme Court Trial Courtroom" loading="lazy">
                    <div class="litigation-visual-caption">
                        <div>
                            <strong>Both Sides of the Courtroom</strong>
                            <p>Proven trial prowess across all NY state &amp; federal courts</p>
                        </div>
                        <span>Trial Mastery</span>
                    </div>
                </div>

                {{-- Floating Badge --}}
                <div class="litigation-floating-stat">
                    <div class="stat-num">30+</div>
                    <div class="stat-text">
                        Years of Dual-Perspective<br>Courtroom Mastery
                    </div>
                </div>
            </div>
        </div>

        {{-- 5 Elevated Pillar Feature Cards --}}
        <div class="pillars-section-header">
            <span class="section-subtitle" style="font-size: 0.8125rem; letter-spacing: 0.1em;">Guiding Core Pillars</span>
            <h3 style="font-size: 1.5rem; font-weight: 800; color: var(--color-primary); margin: 0.25rem 0 0 0;">Excellence Across Every Dimension of Legal Practice</h3>
        </div>

        <div class="pillars-grid">
            {{-- Pillar 1 --}}
            <div class="pillar-feature-card">
                <div class="pillar-icon-circle">
                    <x-icon name="file-text" size="24" />
                </div>
                <h4>Contract Clarity</h4>
                <p>Meticulous scrutiny and negotiation of complex releases, insurance policies, and settlement contracts.</p>
            </div>

            {{-- Pillar 2 --}}
            <div class="pillar-feature-card">
                <div class="pillar-icon-circle">
                    <x-icon name="shield-check" size="24" />
                </div>
                <h4>Title Assurance</h4>
                <p>Complete due diligence safeguarding client rights, property claims, and statutory entitlements.</p>
            </div>

            {{-- Pillar 3 --}}
            <div class="pillar-feature-card">
                <div class="pillar-icon-circle">
                    <x-icon name="globe" size="24" />
                </div>
                <h4>Bilingual Legal Services</h4>
                <p>Direct attorney communication in English and Spanish without translators or communication barriers.</p>
            </div>

            {{-- Pillar 4 --}}
            <div class="pillar-feature-card">
                <div class="pillar-icon-circle">
                    <x-icon name="handshake" size="24" />
                </div>
                <h4>Smooth Closings</h4>
                <p>Seamless execution and prompt disbursement of hard-won settlement recoveries and court awards.</p>
            </div>

            {{-- Pillar 5 --}}
            <div class="pillar-feature-card">
                <div class="pillar-icon-circle">
                    <x-icon name="compass" size="24" />
                </div>
                <h4>Trusted Guidance</h4>
                <p>Unvarnished, strategic legal advice directly from Adam Shapiro at every critical juncture of your case.</p>
            </div>
        </div>
    </div>
</section>

{{-- =========================================================================
     4. BILINGUAL LEGAL SERVICES (Hablamos Español)
     ========================================================================= --}}
<section class="section section-alt">
    <div class="container">
        <div class="card" style="background: linear-gradient(135deg, #1e3a8a 0%, #0b1b3d 100%); color: #ffffff; padding: 2.5rem 1.75rem; border-radius: var(--radius-xl); box-shadow: var(--shadow-lg);">
            <div class="responsive-two-col ratio-12-1">
                <div>
                    <span class="badge badge-gold" style="margin-bottom: 1rem;">Community Commitment</span>
                    <h2 class="heading-lg" style="color: #ffffff; margin-bottom: 1.25rem;">
                        Bilingual Legal Services &mdash; English &amp; Spanish / Hablamos Espa&ntilde;ol
                    </h2>
                    <p style="font-size: 1.0625rem; line-height: 1.8; color: #cbd5e1; margin-bottom: 1.5rem;">
                        Adam’s firm serves New York’s full community. If English is not your first language, that is not a barrier here. The firm provides full legal services in both English and Spanish. You deserve to understand exactly what is happening with your case, in the language you think in.
                    </p>
                    <div style="font-size: 1.25rem; font-weight: 800; color: var(--color-accent-light); font-family: var(--font-heading); margin-bottom: 1.5rem;">
                        Hablamos Espa&ntilde;ol.
                    </div>
                    <div class="btn-action-row" style="flex-wrap: nowrap !important; gap: 1rem;">
                        <a href="{{ route('contact') }}" class="btn btn-accent btn-md">Consulta Gratuita / Free Case Review &rarr;</a>
                        <a href="tel:+19707427476" class="btn btn-outline-white btn-md">Llámenos: (970) 742-7476</a>
                    </div>
                </div>

                <div style="display: flex; flex-direction: column; gap: 1rem;">
                    <div style="background: rgba(255,255,255,0.08); padding: 1.25rem; border-radius: var(--radius-md); border-left: 4px solid var(--color-accent-light);">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 0.25rem;">Asesor&iacute;a Legal Directa</h4>
                        <p style="font-size: 0.875rem; color: #cbd5e1; margin: 0;">Comun&iacute;quese directamente en espa&ntilde;ol sin barreras idiom&aacute;ticas.</p>
                    </div>
                    <div style="background: rgba(255,255,255,0.08); padding: 1.25rem; border-radius: var(--radius-md); border-left: 4px solid var(--color-accent-red);">
                        <h4 style="font-size: 1.1rem; font-weight: 700; color: #ffffff; margin-bottom: 0.25rem;">Consulta 100% Gratuita</h4>
                        <p style="font-size: 0.875rem; color: #cbd5e1; margin: 0;">No cobramos honorarios a menos que ganemos su caso.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- =========================================================================
     5. ACADEMIC BACKGROUND & BAR ADMISSIONS
     ========================================================================= --}}
<section class="section" style="background: var(--color-bg-alt); padding: 5rem 0;">
    <div class="container">
        <div class="section-header" style="text-align: center; max-width: 780px; margin: 0 auto 3.5rem;">
            <span class="section-subtitle">Credentials &amp; Heritage</span>
            <h2 class="heading-lg">Academic Background &amp; Field Experience</h2>
            <p>A verified record of prestigious scholarship, legal internships, and multi-state licensure.</p>
        </div>

        {{-- Two-Column Equal Height Cards --}}
        <div class="responsive-two-col" style="gap: 2rem; align-items: stretch; margin-bottom: 2rem;">
            {{-- Academic Background Card --}}
            <div class="card" style="flex: 1 1 50%; padding: 2.25rem; background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-xl); box-shadow: var(--shadow-md); display: flex; flex-direction: column;">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.75rem; padding-bottom: 1.25rem; border-bottom: 1px solid var(--color-border);">
                    <div class="card-icon-box card-icon-blue" style="margin-bottom: 0; width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; border-radius: var(--radius-md);">
                        <x-icon name="graduation-cap" size="24" />
                    </div>
                    <div>
                        <h3 class="heading-sm" style="margin: 0; font-size: 1.25rem; color: var(--color-primary);">Academic Background</h3>
                        <span style="font-size: 0.8125rem; color: var(--color-text-muted); font-weight: 500;">Decades of excellence in legal scholarship</span>
                    </div>
                </div>

                <div style="display: flex; flex-direction: column; gap: 1.5rem; flex-grow: 1;">
                    {{-- Univ of Miami --}}
                    <div style="position: relative; padding-left: 1.25rem; border-left: 3px solid var(--color-primary-blue);">
                        <div style="display: flex; align-items: baseline; justify-content: space-between; gap: 0.5rem; flex-wrap: wrap;">
                            <h4 style="font-size: 1.05rem; font-weight: 800; color: var(--color-primary); margin: 0;">UNIVERSITY OF MIAMI SCHOOL OF LAW</h4>
                            <span class="badge badge-primary" style="font-size: 0.75rem; padding: 0.2rem 0.6rem; font-weight: 700;">1993</span>
                        </div>
                        <p style="font-size: 0.875rem; font-weight: 700; color: var(--color-primary-blue); margin: 0.25rem 0 0.4rem 0;">Juris Doctor (J.D.)</p>
                        <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.6; margin: 0;">
                            Before graduating, tried cases in court. Clerked at Shrier &amp; Koenigsberg and interned at Dade County Public Defender's Office.
                        </p>
                    </div>

                    {{-- SUNY Albany --}}
                    <div style="position: relative; padding-left: 1.25rem; border-left: 3px solid var(--color-primary-blue);">
                        <div style="display: flex; align-items: baseline; justify-content: space-between; gap: 0.5rem; flex-wrap: wrap;">
                            <h4 style="font-size: 1.05rem; font-weight: 800; color: var(--color-primary); margin: 0;">SUNY ALBANY</h4>
                            <span class="badge badge-primary" style="font-size: 0.75rem; padding: 0.2rem 0.6rem; font-weight: 700;">1990</span>
                        </div>
                        <p style="font-size: 0.875rem; font-weight: 700; color: var(--color-primary-blue); margin: 0.25rem 0 0.4rem 0;">Psychology &amp; Criminal Justice</p>
                        <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.6; margin: 0;">
                            Bachelor of Science in Psychology with double minors in Philosophy and Criminal Justice.
                        </p>
                    </div>

                    {{-- Jamaica High School --}}
                    <div style="position: relative; padding-left: 1.25rem; border-left: 3px solid var(--color-primary-blue);">
                        <div style="display: flex; align-items: baseline; justify-content: space-between; gap: 0.5rem; flex-wrap: wrap;">
                            <h4 style="font-size: 1.05rem; font-weight: 800; color: var(--color-primary); margin: 0;">JAMAICA HIGH SCHOOL</h4>
                            <span class="badge badge-primary" style="font-size: 0.75rem; padding: 0.2rem 0.6rem; font-weight: 700;">1986</span>
                        </div>
                        <p style="font-size: 0.875rem; font-weight: 700; color: var(--color-primary-blue); margin: 0.25rem 0 0.4rem 0;">Presidential Award Recipient &bull; Regents Scholarship</p>
                        <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.6; margin: 0;">
                            Graduated with honors, demonstrating early academic distinction.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Admissions & Field Experience Card --}}
            <div class="card" style="flex: 1 1 50%; padding: 2.25rem; background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-xl); box-shadow: var(--shadow-md); display: flex; flex-direction: column;">
                <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 1.75rem; padding-bottom: 1.25rem; border-bottom: 1px solid var(--color-border);">
                    <div class="card-icon-box card-icon-red" style="margin-bottom: 0; width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; border-radius: var(--radius-md);">
                        <x-icon name="scale" size="24" />
                    </div>
                    <div>
                        <h3 class="heading-sm" style="margin: 0; font-size: 1.25rem; color: var(--color-primary);">Bar &amp; Court Admissions</h3>
                        <span style="font-size: 0.8125rem; color: var(--color-text-muted); font-weight: 500;">Multi-state jurisdictional reach &amp; federal admissions</span>
                    </div>
                </div>

                <div style="display: flex; flex-direction: column; gap: 1.15rem; flex-grow: 1;">
                    {{-- New York Bar --}}
                    <div style="display: flex; align-items: center; justify-content: space-between; gap: 1rem; padding: 1rem 1.25rem; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: var(--radius-lg);">
                        <div style="display: flex; align-items: center; gap: 0.85rem;">
                            <div style="width: 32px; height: 32px; border-radius: 50%; background: #dcfce7; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <span style="font-size: 1rem; font-weight: 800; color: var(--color-primary); display: block;">NEW YORK BAR</span>
                                <span style="font-size: 0.8125rem; color: var(--color-text-muted);">State-wide Trial &amp; Appellate Courts</span>
                            </div>
                        </div>
                        <span style="background: #e0f2fe; color: #0369a1; font-size: 0.75rem; font-weight: 700; padding: 0.25rem 0.65rem; border-radius: 999px; white-space: nowrap;">Active Since 1994</span>
                    </div>

                    {{-- Florida Bar --}}
                    <div style="display: flex; align-items: center; justify-content: space-between; gap: 1rem; padding: 1rem 1.25rem; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: var(--radius-lg);">
                        <div style="display: flex; align-items: center; gap: 0.85rem;">
                            <div style="width: 32px; height: 32px; border-radius: 50%; background: #dcfce7; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <span style="font-size: 1rem; font-weight: 800; color: var(--color-primary); display: block;">FLORIDA BAR</span>
                                <span style="font-size: 0.8125rem; color: var(--color-text-muted);">Multi-State Jurisdictional Reach</span>
                            </div>
                        </div>
                        <span style="background: #e0f2fe; color: #0369a1; font-size: 0.75rem; font-weight: 700; padding: 0.25rem 0.65rem; border-radius: 999px; white-space: nowrap;">Licensed 1993</span>
                    </div>

                    {{-- US District Courts --}}
                    <div style="display: flex; align-items: center; justify-content: space-between; gap: 1rem; padding: 1rem 1.25rem; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: var(--radius-lg);">
                        <div style="display: flex; align-items: center; gap: 0.85rem;">
                            <div style="width: 32px; height: 32px; border-radius: 50%; background: #dcfce7; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            </div>
                            <div>
                                <span style="font-size: 1rem; font-weight: 800; color: var(--color-primary); display: block;">U.S. DISTRICT COURTS (EDNY &amp; SDNY)</span>
                                <span style="font-size: 0.8125rem; color: var(--color-text-muted);">Federal Eastern &amp; Southern Districts of New York</span>
                            </div>
                        </div>
                        <span style="background: #fef3c7; color: #92400e; font-size: 0.75rem; font-weight: 700; padding: 0.25rem 0.65rem; border-radius: 999px; white-space: nowrap;">Federal Admission</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Full Width Bar Admissions, Associations & Awards Showcase --}}
        <div class="card" style="padding: 2.5rem; background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-xl); box-shadow: var(--shadow-md);">
            <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem; margin-bottom: 1.75rem; padding-bottom: 1.25rem; border-bottom: 1px solid var(--color-border);">
                <div>
                    <span class="badge badge-gold" style="margin-bottom: 0.5rem;">Verified Honors</span>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--color-primary); margin: 0;">
                        Bar Admissions, Associations &amp; Awards
                    </h3>
                    <p style="font-size: 0.9375rem; color: var(--color-text-muted); margin: 0.35rem 0 0 0;">
                        Adam is recognized nationally and locally as one of New York’s top personal injury attorneys:
                    </p>
                </div>
                <div class="btn-action-row" style="margin: 0; flex-wrap: nowrap !important;">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-md">
                        Work With Adam &rarr;
                    </a>
                </div>
            </div>

            {{-- 4 Grid Badges --}}
            <div class="grid grid-4" style="gap: 1.25rem; margin-bottom: 2rem;">
                <div style="padding: 1.25rem; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: var(--radius-lg); text-align: center;">
                    <div style="font-weight: 800; font-size: 1.05rem; color: var(--color-primary); margin-bottom: 0.25rem;">AAJ Member</div>
                    <span style="font-size: 0.8125rem; color: var(--color-text-muted); line-height: 1.4; display: block;">American Association for Justice</span>
                </div>
                <div style="padding: 1.25rem; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: var(--radius-lg); text-align: center;">
                    <div style="font-weight: 800; font-size: 1.05rem; color: var(--color-primary); margin-bottom: 0.25rem;">Top 100 Trial Lawyers</div>
                    <span style="font-size: 0.8125rem; color: var(--color-text-muted); line-height: 1.4; display: block;">National Trial Lawyers Association</span>
                </div>
                <div style="padding: 1.25rem; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: var(--radius-lg); text-align: center;">
                    <div style="font-weight: 800; font-size: 1.05rem; color: var(--color-primary); margin-bottom: 0.25rem;">Million Dollar Advocates</div>
                    <span style="font-size: 0.8125rem; color: var(--color-text-muted); line-height: 1.4; display: block;">Forum Member (Top 1% in US)</span>
                </div>
                <div style="padding: 1.25rem; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: var(--radius-lg); text-align: center;">
                    <div style="font-weight: 800; font-size: 1.05rem; color: var(--color-primary); margin-bottom: 0.25rem;">10 Best Law Firms</div>
                    <span style="font-size: 0.8125rem; color: var(--color-text-muted); line-height: 1.4; display: block;">Lawyers of Distinction &amp; Best Attorney</span>
                </div>
            </div>

            {{-- Media Broadcast Strip --}}
            <div style="background: linear-gradient(135deg, #0b1b3d 0%, #1e3a8a 100%); border-radius: var(--radius-lg); padding: 1.5rem 2rem; color: #ffffff; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1.25rem;">
                <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <x-icon name="tv" size="24" class="text-gold" />
                    <div>
                        <span style="font-size: 0.8125rem; text-transform: uppercase; letter-spacing: 0.08em; color: var(--color-accent-light); font-weight: 700; display: block;">Media Recognition</span>
                        <strong style="font-size: 1rem; color: #ffffff;">Featured on Major Investigative &amp; News Outlets</strong>
                    </div>
                </div>

                <div style="display: flex; align-items: center; gap: 0.75rem; flex-wrap: wrap;">
                    <span style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.25); padding: 0.35rem 0.85rem; border-radius: 999px; font-size: 0.8125rem; font-weight: 700; color: #ffffff;">CBS</span>
                    <span style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.25); padding: 0.35rem 0.85rem; border-radius: 999px; font-size: 0.8125rem; font-weight: 700; color: #ffffff;">NBC</span>
                    <span style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.25); padding: 0.35rem 0.85rem; border-radius: 999px; font-size: 0.8125rem; font-weight: 700; color: #ffffff;">WPIX 11</span>
                    <span style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.25); padding: 0.35rem 0.85rem; border-radius: 999px; font-size: 0.8125rem; font-weight: 700; color: #ffffff;">News12</span>
                    <span style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.25); padding: 0.35rem 0.85rem; border-radius: 999px; font-size: 0.8125rem; font-weight: 700; color: #ffffff;">NY1</span>
                    <span style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.25); padding: 0.35rem 0.85rem; border-radius: 999px; font-size: 0.8125rem; font-weight: 700; color: #ffffff;">The New York Post</span>
                    <span style="background: rgba(255,255,255,0.15); border: 1px solid rgba(255,255,255,0.25); padding: 0.35rem 0.85rem; border-radius: 999px; font-size: 0.8125rem; font-weight: 700; color: #ffffff;">Newsday</span>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
</section>

{{-- =========================================================================
     6. AREAS OF PRACTICE & FREE CONSULTATION
     ========================================================================= --}}
<section class="section section-alt">
    <div class="container">
        <div class="responsive-two-col">
            <div>
                <span class="section-subtitle">Scope of Representation</span>
                <h2 class="heading-lg" style="margin-bottom: 1.25rem;">
                    Areas of Practice &mdash; Car Accidents, Construction, Slip &amp; Fall, Workers' Comp
                </h2>
                <p style="font-size: 1.0625rem; line-height: 1.8; color: var(--color-text-muted); margin-bottom: 1.25rem;">
                    Adam fights for victims across every major personal injury category in New York:
                </p>
                <ul style="padding-left: 1.25rem; font-size: 0.95rem; color: var(--color-text-muted); line-height: 1.8; margin-bottom: 1.5rem;">
                    <li>Car, truck, motorcycle, and rideshare accidents</li>
                    <li>Construction site accidents and scaffold injuries</li>
                    <li>Slip and fall on private or public property</li>
                    <li>Workers’ compensation claims</li>
                    <li>Medical malpractice</li>
                    <li>Wrongful death</li>
                    <li>Defective products</li>
                </ul>
                <p style="font-size: 1.05rem; font-weight: 700; color: var(--color-primary);">
                    Hurt badly or slightly, Adam treats every case like war.
                </p>
            </div>

            <div>
                <div class="card" style="background: #ffffff; border: 2px solid var(--color-border); border-top: 5px solid var(--color-accent-red); border-radius: var(--radius-xl); padding: 2.25rem 1.75rem; box-shadow: var(--shadow-lg);">
                    <span class="badge badge-accent" style="margin-bottom: 0.75rem;">Zero Financial Risk</span>
                    <h3 style="font-size: 1.5rem; font-weight: 800; color: var(--color-primary); margin-bottom: 1rem; font-family: var(--font-heading);">
                        Free Consultation &mdash; No Fee Unless We Win
                    </h3>
                    <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-muted); margin-bottom: 1rem;">
                        Adam’s first conversation with you costs nothing. No obligation. No pressure. Just answers.
                    </p>
                    <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-text-muted); margin-bottom: 1rem;">
                        If he takes your case, you pay nothing unless he wins. No out-of-pocket risk. No upfront fees. All matters stay strictly confidential.
                    </p>
                    <p style="font-size: 0.95rem; line-height: 1.7; color: var(--color-primary); font-weight: 600; margin-bottom: 1.75rem;">
                        You were hurt. The insurance company already has a team working against you. Call Adam before you call them.
                    </p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="tel:+19707427476" class="btn btn-accent btn-lg" style="width: 100%; justify-content: center;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <span>Call (970) SHAPIRO</span>
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline" style="width: 100%; justify-content: center;">
                            <span>Book Consultation Online</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
