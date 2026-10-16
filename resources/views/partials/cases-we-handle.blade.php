{{-- =========================================================================
     CASES WE HANDLE (4-Pillar Cross-Practice Matrix from Live Site)
     ========================================================================= --}}
<section class="section section-alt" id="cases-we-handle">
    <div class="container">
        <div class="section-header" style="text-align: center; max-width: 780px; margin: 0 auto 3rem;">
            <span class="badge badge-accent" style="margin-bottom: 0.75rem;">Full-Service Advocacy</span>
            <h2 class="heading-lg" style="margin-bottom: 0.75rem;">Cases We Handle</h2>
            <p style="font-size: 1.05rem; color: var(--color-text-muted);">
                As a full-service personal injury law firm, we represent clients across all major injury categories in New York:
            </p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.75rem;">
            {{-- Category 1 --}}
            <div class="card" style="background: #ffffff; padding: 2rem 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div class="card-icon-box card-icon-blue">
                        <x-icon name="car" size="24" />
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem; font-family: var(--font-heading);">Vehicle Accidents</h3>
                    <p style="font-size: 0.875rem; line-height: 1.7; color: var(--color-text-muted); margin-bottom: 1.25rem;">
                        Comprehensive representation for car, truck, and motorcycle collisions, bicycle and pedestrian injury claims, and rideshare accidents involving Uber and Lyft.
                    </p>
                </div>
                <a href="{{ route('practice.motor-vehicle') }}" style="font-size: 0.875rem; font-weight: 700; color: var(--color-primary-blue); text-decoration: none; display: inline-flex; align-items: center; gap: 0.35rem;">
                    <span>View Vehicle Claims &rarr;</span>
                </a>
            </div>

            {{-- Category 2 --}}
            <div class="card" style="background: #ffffff; padding: 2rem 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div class="card-icon-box card-icon-blue">
                        <x-icon name="hard-hat" size="24" />
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem; font-family: var(--font-heading);">Workplace &amp; Construction Injuries</h3>
                    <p style="font-size: 0.875rem; line-height: 1.7; color: var(--color-text-muted); margin-bottom: 1.25rem;">
                        Aggressive advocacy for workers' compensation claims, job site and construction accidents, and injuries caused by repetitive stress or unsafe working conditions.
                    </p>
                </div>
                <a href="{{ route('practice.construction-accident') }}" style="font-size: 0.875rem; font-weight: 700; color: var(--color-primary-blue); text-decoration: none; display: inline-flex; align-items: center; gap: 0.35rem;">
                    <span>View Construction Claims &rarr;</span>
                </a>
            </div>

            {{-- Category 3 --}}
            <div class="card" style="background: #ffffff; padding: 2rem 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div class="card-icon-box card-icon-blue">
                        <x-icon name="alert-triangle" size="24" />
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem; font-family: var(--font-heading);">Premises Liability</h3>
                    <p style="font-size: 0.875rem; line-height: 1.7; color: var(--color-text-muted); margin-bottom: 1.25rem;">
                        Relentless pursuit of justice for slip, trip, and fall injuries, hazardous staircases, broken sidewalks, defective buildings, and elevator or escalator accidents.
                    </p>
                </div>
                <a href="{{ route('practice.slip-trip-fall') }}" style="font-size: 0.875rem; font-weight: 700; color: var(--color-primary-blue); text-decoration: none; display: inline-flex; align-items: center; gap: 0.35rem;">
                    <span>View Premises Claims &rarr;</span>
                </a>
            </div>

            {{-- Category 4 --}}
            <div class="card" style="background: #ffffff; padding: 2rem 1.75rem; border-radius: var(--radius-lg); border: 1px solid var(--color-border); box-shadow: var(--shadow-sm); display: flex; flex-direction: column; justify-content: space-between;">
                <div>
                    <div class="card-icon-box card-icon-blue">
                        <x-icon name="activity" size="24" />
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; color: var(--color-primary); margin-bottom: 0.75rem; font-family: var(--font-heading);">Catastrophic &amp; Specialized Cases</h3>
                    <p style="font-size: 0.875rem; line-height: 1.7; color: var(--color-text-muted); margin-bottom: 1.25rem;">
                        Compassionate, determined representation for medical malpractice, wrongful death claims, animal attacks, and severe injuries including traumatic brain injuries, spinal cord damage, and burns.
                    </p>
                </div>
                <a href="{{ route('practice.personal-injury') }}" style="font-size: 0.875rem; font-weight: 700; color: var(--color-primary-blue); text-decoration: none; display: inline-flex; align-items: center; gap: 0.35rem;">
                    <span>View Specialized Claims &rarr;</span>
                </a>
            </div>
        </div>
    </div>
</section>
