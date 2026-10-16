@extends('layouts.app')

@section('body_class', 'contact-page')

@section('content')
{{-- Hero Section --}}
    <section class="hero-section">
        <div class="container">
            <div class="hero-grid">
                <div>
                    <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(220, 38, 38, 0.15); border: 1px solid rgba(220, 38, 38, 0.4); padding: 0.4rem 1rem; border-radius: var(--radius-full); margin-bottom: 1.5rem;">
                        <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: #ef4444;"></span>
                        <span style="font-size: 0.8125rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.1em; color: #fca5a5;">Available 24/7 For Emergency Consultation</span>
                    </div>

                    <h1 class="heading-xl" style="color: #ffffff; margin-bottom: 1.25rem;">
                        Contact Shapiro The Hero <br>
                        <span style="color: var(--color-accent-light);">Get A Free Case Evaluation</span>
                    </h1>

                    <p style="font-size: 1.125rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 2rem;">
                        Injured in New York? Don't navigate the legal system alone. Contact Attorney Adam L. Shapiro directly for aggressive, experienced representation. Available 24/7.
                    </p>

                    <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center; margin-bottom: 2rem;">
                        <a href="tel:+19707427476" class="btn btn-accent btn-lg">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <span>(970) SHAPIRO / (970) 742-7476</span>
                        </a>
                        <a href="mailto:adam@shapirolawoffice.com" class="btn btn-outline-white btn-lg">
                            <span>Email Directly</span>
                        </a>
                    </div>

                    <div style="display: flex; gap: 1.75rem; border-top: 1px solid rgba(255,255,255,0.15); padding-top: 1.5rem; flex-wrap: wrap; font-size: 0.875rem; color: #94a3b8;">
                        <span style="display: inline-flex; align-items: center; gap: 0.35rem;"><x-icon name="check" size="14" class="text-gold" /> Free Case Review</span>
                        <span style="display: inline-flex; align-items: center; gap: 0.35rem;"><x-icon name="check" size="14" class="text-gold" /> Direct Attorney Access</span>
                        <span style="display: inline-flex; align-items: center; gap: 0.35rem;"><x-icon name="check" size="14" class="text-gold" /> No Fee Unless We Win</span>
                    </div>
                </div>

                <div>
                    <div class="hero-media-card">
                        <img src="{{ asset('assets/media/practice-areas/personal-injury-banner.png') }}" alt="Contact Shapiro Law Firm" loading="eager">
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem 1.25rem 1rem; background: linear-gradient(to top, rgba(10,25,47,0.92) 0%, rgba(10,25,47,0.6) 60%, transparent 100%);">
                            <span class="badge badge-gold" style="margin-bottom: 0.5rem; display: inline-flex;">24/7 Hotline</span>
                            <div style="color: #ffffff; font-weight: 800; font-size: 1.15rem;">Direct Attorney Line: (970) 742-7476</div>
                            <div style="color: #cbd5e1; font-size: 0.875rem; margin-top: 0.25rem;">Queens &bull; Brooklyn &bull; Manhattan &bull; Bronx &bull; Long Island</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact Information & Form Split --}}
    <section class="section" style="background: var(--color-bg);">
        <div class="container">
            <div class="contact-split-grid">
                
                {{-- Left Column: Direct Contact & Office Cards --}}
                <div style="display: flex; flex-direction: column; gap: 1.75rem;">
                    
                    {{-- 24/7 Hotline Card --}}
                    <div class="card card-dark" style="padding: 2.25rem;">
                        <span class="badge badge-gold" style="margin-bottom: 0.75rem; align-self: flex-start;">24/7 Hotline</span>
                        <h2 style="font-size: 1.75rem; font-weight: 800; color: #ffffff; margin-bottom: 0.5rem;">
                            Direct Emergency Support
                        </h2>
                        <p style="color: #cbd5e1; font-size: 0.9375rem; line-height: 1.6; margin-bottom: 1.5rem;">
                            Accidents happen at all hours. Our legal team is reachable around the clock to provide immediate emergency guidance.
                        </p>
                        <div style="display: flex; flex-direction: column; gap: 1rem;">
                            <a href="tel:+19707427476" style="display: flex; align-items: center; gap: 1rem; color: #ffffff; text-decoration: none; font-size: 1.35rem; font-weight: 800;">
                                <div class="card-icon-box-sm card-icon-red card-icon-on-dark" style="margin-bottom: 0;">
                                    <x-icon name="phone-call" size="20" />
                                </div>
                                <span>(970) 742-7476</span>
                            </a>
                            <a href="mailto:adam@shapirolawoffice.com" style="display: flex; align-items: center; gap: 1rem; color: #cbd5e1; text-decoration: none; font-size: 1rem; font-weight: 600;">
                                <div class="card-icon-box-sm card-icon-blue card-icon-on-dark" style="margin-bottom: 0;">
                                    <x-icon name="mail" size="20" />
                                </div>
                                <span>adam@shapirolawoffice.com</span>
                            </a>
                        </div>
                    </div>

                    {{-- Office Locations Card --}}
                    <div class="card" style="padding: 2rem;">
                        <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.25rem;">
                            <div class="card-icon-box-sm card-icon-red" style="margin-bottom: 0;">
                                <x-icon name="map-pin" size="20" />
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--color-primary); margin: 0;">Office Locations</h3>
                        </div>

                        <div style="margin-bottom: 1.25rem; padding-bottom: 1.25rem; border-bottom: 1px solid var(--color-border);">
                            <strong style="color: var(--color-primary); font-size: 1rem; display: block; margin-bottom: 0.25rem;">Forest Hills NYC Headquarters:</strong>
                            <p style="color: var(--color-text-muted); font-size: 0.9375rem; margin: 0; line-height: 1.6;">
                                70-20 Austin St, Suite 111<br>
                                Forest Hills, NY 11375
                            </p>
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <strong style="color: var(--color-primary); font-size: 1rem; display: block; margin-bottom: 0.25rem;">Long Island Consultation Office:</strong>
                            <p style="color: var(--color-text-muted); font-size: 0.9375rem; margin: 0; line-height: 1.6;">
                                110-20 71st Ave<br>
                                Forest Hills &amp; Long Island, NY
                            </p>
                        </div>

                        <p style="font-size: 0.8125rem; color: var(--color-text-light); font-style: italic; margin: 0;">
                            * Hospital and in-home visits available across NYC and Long Island for severely injured victims.
                        </p>
                    </div>

                    {{-- Intake Hours Card --}}
                    <div class="card" style="padding: 2rem;">
                        <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.25rem;">
                            <div class="card-icon-box-sm card-icon-blue" style="margin-bottom: 0;">
                                <x-icon name="clock" size="20" />
                            </div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--color-primary); margin: 0;">Intake &amp; Business Hours</h3>
                        </div>

                        <div style="display: flex; flex-direction: column; gap: 0.75rem; font-size: 0.9375rem;">
                            <div style="display: flex; justify-content: space-between; padding-bottom: 0.5rem; border-bottom: 1px solid var(--color-border);">
                                <span style="font-weight: 600; color: var(--color-text);">Monday – Friday:</span>
                                <span style="font-weight: 700; color: var(--color-primary-blue);">8:00 AM – 7:00 PM</span>
                            </div>
                            <div style="display: flex; justify-content: space-between; padding-bottom: 0.5rem; border-bottom: 1px solid var(--color-border);">
                                <span style="font-weight: 600; color: var(--color-text);">Saturday – Sunday:</span>
                                <span style="font-weight: 700; color: var(--color-accent-red);">24/7 Emergency Line</span>
                            </div>
                            <div style="display: flex; justify-content: space-between;">
                                <span style="font-weight: 600; color: var(--color-text);">Online Case Form:</span>
                                <span style="font-weight: 700; color: var(--color-accent-light);">Processed Instantly</span>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Right Column: Free Case Evaluation Form Card --}}
                <div style="position: sticky; top: 100px;">
                    <x-contact-form />
                </div>

            </div>
        </div>
    </section>

    {{-- Full Width Interactive Office Map --}}
    <section style="background: var(--color-bg); padding: 0 0 4rem 0;">
        <div class="container">
            <div style="border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-xl); border: 1px solid var(--color-border); background: #ffffff;">
                <div style="display: flex; align-items: center; justify-content: space-between; padding: 1.25rem 1.75rem; background: #0b1b3d; color: #ffffff; flex-wrap: wrap; gap: 1rem;">
                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                        <span style="display: inline-flex; align-items: center; justify-content: center; width: 36px; height: 36px; border-radius: 50%; background: #D62828; color: #ffffff;">
                            <x-icon name="map-pin" size="18" />
                        </span>
                        <div>
                            <h3 style="font-size: 1.15rem; font-weight: 800; margin: 0; color: #ffffff;">Forest Hills NYC Headquarters &bull; Interactive Map</h3>
                            <p style="font-size: 0.85rem; color: #94a3b8; margin: 0;">70-20 Austin St, Suite 111, Forest Hills, NY 11375</p>
                        </div>
                    </div>
                    <a href="https://maps.google.com/maps?q=Forest%20Hills%2C%20NY%20%2070-20%20Austin%20St%20Ste%20111" target="_blank" rel="noopener noreferrer" class="btn btn-outline-white btn-sm" style="font-size: 0.85rem;">
                        <span>Open in Google Maps &rarr;</span>
                    </a>
                </div>
                <iframe loading="lazy"
                        src="https://maps.google.com/maps?q=Forest%20Hills%2C%20NY%20%2070-20%20Austin%20St%20Ste%20111&t=m&z=15&output=embed&iwloc=near"
                        title="Forest Hills, NY 70-20 Austin St Ste 111"
                        aria-label="Forest Hills, NY 70-20 Austin St Ste 111"
                        style="width: 100%; height: 450px; border: 0; display: block;"
                        allowfullscreen=""></iframe>
            </div>
        </div>
    </section>

    {{-- Value Pillars Reassurance Banner --}}
    <section class="section section-alt" style="border-top: 1px solid var(--color-border);">
        <div class="container">
            <div class="grid grid-3" style="gap: 2rem; text-align: center;">
                <div class="card" style="align-items: center;">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: rgba(30, 58, 138, 0.1); display: flex; align-items: center; justify-content: center; color: var(--color-primary-blue); margin-bottom: 1rem;">
                        <x-icon name="scale" size="28" />
                    </div>
                    <h3 class="heading-sm" style="margin-bottom: 0.5rem; color: var(--color-primary);">No Win, No Fee Guarantee</h3>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.6; margin: 0;">
                        We operate on 100% contingency. You pay zero legal fees upfront and nothing unless we recover compensation.
                    </p>
                </div>

                <div class="card" style="align-items: center;">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: rgba(30, 58, 138, 0.1); display: flex; align-items: center; justify-content: center; color: var(--color-primary-blue); margin-bottom: 1rem;">
                        <x-icon name="shield" size="28" />
                    </div>
                    <h3 class="heading-sm" style="margin-bottom: 0.5rem; color: var(--color-primary);">Direct Attorney Attention</h3>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.6; margin: 0;">
                        You are never passed off to paralegals. You speak directly with trial attorney Adam L. Shapiro throughout your case.
                    </p>
                </div>

                <div class="card" style="align-items: center;">
                    <div style="width: 60px; height: 60px; border-radius: 50%; background: rgba(30, 58, 138, 0.1); display: flex; align-items: center; justify-content: center; color: var(--color-primary-blue); margin-bottom: 1rem;">
                        <x-icon name="lock" size="28" />
                    </div>
                    <h3 class="heading-sm" style="margin-bottom: 0.5rem; color: var(--color-primary);">Free Direct Case Review</h3>
                    <p style="font-size: 0.875rem; color: var(--color-text-muted); line-height: 1.6; margin: 0;">
                        Your consultation is fully protected under attorney-client privilege. Your information remains completely secure.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Awards Ribbon --}}
    @include('partials.awards-ribbon')
@endsection
