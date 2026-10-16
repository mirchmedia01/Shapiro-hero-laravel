@props([
    'caseType' => null,
    'title' => 'Get Your Free Case Evaluation',
    'subtitle' => 'No fee unless we win. Fill out this form for an immediate callback from Adam L. Shapiro.',
    'badge' => '100% Free Consultation',
    'showHeader' => true,
    'card' => true,
    'id' => 'contact-form',
])

<div class="{{ $card ? 'card contact-form-card' : 'contact-form-wrapper' }}" id="{{ $id }}">
    @if($showHeader)
        <div class="contact-form-header">
            @if($badge)
                <div class="contact-form-badge">
                    <span class="badge-dot"></span>
                    <span>{{ $badge }}</span>
                </div>
            @endif
            <h3 class="contact-form-title">{{ $title }}</h3>
            @if($subtitle)
                <p class="contact-form-subtitle">{{ $subtitle }}</p>
            @endif
        </div>
    @endif

    {{-- In-form Success & Error Notifications --}}
    @if(session('success'))
        <div class="form-alert-success" role="alert">
            <svg class="form-alert-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            <div class="form-alert-content">
                <strong class="form-alert-heading">Case Request Received!</strong>
                <p class="form-alert-text">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    @if($errors->any())
        <div class="form-alert-error" role="alert">
            <svg class="form-alert-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
            <div class="form-alert-content">
                <strong class="form-alert-heading">Please correct the highlighted fields below:</strong>
                <ul class="form-alert-list">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <form method="POST" action="{{ route('contact.submit') }}" aria-label="{{ $title }}">
        @csrf

        {{-- Anti-Spam Honeypot Field (invisible to users) --}}
        <div style="display:none !important; visibility:hidden; opacity:0; position:absolute; left:-9999px;">
            <label for="{{ $id }}-website-hp">Leave this empty</label>
            <input type="text" name="website_hp" id="{{ $id }}-website-hp" autocomplete="off" tabindex="-1">
        </div>

        <div class="contact-form-fields">
            {{-- Row 1: Full Name and Phone Number --}}
            <div class="form-grid-2col">
                <div class="form-group">
                    <label for="{{ $id }}-name" class="form-label">
                        <span>Full Name <span class="form-label-required">*</span></span>
                    </label>
                    <input 
                        type="text" 
                        name="name" 
                        id="{{ $id }}-name" 
                        class="form-input @error('name') is-invalid @enderror" 
                        placeholder="Your Full Name" 
                        value="{{ old('name') }}" 
                        autocomplete="name"
                        required
                    >
                    @error('name')
                        <div class="form-error">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="{{ $id }}-phone" class="form-label">
                        <span>Phone Number <span class="form-label-required">*</span></span>
                    </label>
                    <input 
                        type="tel" 
                        name="phone" 
                        id="{{ $id }}-phone" 
                        class="form-input @error('phone') is-invalid @enderror" 
                        placeholder="(970) 742-7476" 
                        value="{{ old('phone') }}" 
                        autocomplete="tel"
                        inputmode="tel"
                        required
                    >
                    @error('phone')
                        <div class="form-error">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                </div>
            </div>

            {{-- Row 2: Email and Case Category --}}
            @if($caseType)
                <input type="hidden" name="case_type" value="{{ $caseType }}">
                <div class="form-group">
                    <label for="{{ $id }}-email" class="form-label">
                        <span>Email Address</span>
                        <span class="form-label-optional">Optional</span>
                    </label>
                    <input 
                        type="email" 
                        name="email" 
                        id="{{ $id }}-email" 
                        class="form-input @error('email') is-invalid @enderror" 
                        placeholder="your.email@example.com" 
                        value="{{ old('email') }}"
                        autocomplete="email"
                        inputmode="email"
                    >
                    @error('email')
                        <div class="form-error">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                            <span>{{ $message }}</span>
                        </div>
                    @enderror
                </div>
            @else
                <div class="form-grid-2col">
                    <div class="form-group">
                        <label for="{{ $id }}-email" class="form-label">
                            <span>Email Address</span>
                            <span class="form-label-optional">Optional</span>
                        </label>
                        <input 
                            type="email" 
                            name="email" 
                            id="{{ $id }}-email" 
                            class="form-input @error('email') is-invalid @enderror" 
                            placeholder="your.email@example.com" 
                            value="{{ old('email') }}"
                            autocomplete="email"
                            inputmode="email"
                        >
                        @error('email')
                            <div class="form-error">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="{{ $id }}-case-type" class="form-label">
                            <span>Case Category</span>
                        </label>
                        <select name="case_type" id="{{ $id }}-case-type" class="form-select @error('case_type') is-invalid @enderror">
                            <option value="">Select Accident / Case Type...</option>
                            <option value="Personal Injury" {{ old('case_type') == 'Personal Injury' ? 'selected' : '' }}>Personal Injury</option>
                            <option value="Motor Vehicle Accident" {{ old('case_type') == 'Motor Vehicle Accident' ? 'selected' : '' }}>Motor Vehicle Accident</option>
                            <option value="Slip and Fall" {{ old('case_type') == 'Slip and Fall' ? 'selected' : '' }}>Slip and Fall</option>
                            <option value="Workers' Compensation" {{ old('case_type') == "Workers' Compensation" ? 'selected' : '' }}>Workers' Compensation</option>
                            <option value="Medical Malpractice" {{ old('case_type') == 'Medical Malpractice' ? 'selected' : '' }}>Medical Malpractice</option>
                            <option value="Wrongful Death" {{ old('case_type') == 'Wrongful Death' ? 'selected' : '' }}>Wrongful Death</option>
                            <option value="Construction Accident" {{ old('case_type') == 'Construction Accident' ? 'selected' : '' }}>Construction Accident</option>
                            <option value="E-Bike or Scooter" {{ old('case_type') == 'E-Bike or Scooter' ? 'selected' : '' }}>E-Bike or Scooter</option>
                            <option value="Other Injury" {{ old('case_type') == 'Other Injury' ? 'selected' : '' }}>Other Personal Injury</option>
                        </select>
                        @error('case_type')
                            <div class="form-error">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>
                </div>
            @endif

            {{-- Row 3: Message / Description --}}
            <div class="form-group">
                <label for="{{ $id }}-message" class="form-label">
                    <span>Briefly Describe What Happened <span class="form-label-required">*</span></span>
                </label>
                <textarea 
                    name="message" 
                    id="{{ $id }}-message" 
                    rows="4" 
                    class="form-textarea @error('message') is-invalid @enderror" 
                    placeholder="Describe what happened, injury date, location, and how we can assist..." 
                    required
                >{{ old('message') }}</textarea>
                @error('message')
                    <div class="form-error">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                        <span>{{ $message }}</span>
                    </div>
                @enderror
            </div>

            {{-- Row 4: Submit Button & Reassurance --}}
            <div class="form-actions">
                <button type="submit" class="form-submit-btn">
                    <span>Submit Free Case Review</span>
                    <svg class="submit-arrow" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </button>
                <div class="form-trust-badges">
                    <span class="trust-item">
                        <x-icon name="lock" size="13" />
                        <span>Strictly Confidential</span>
                    </span>
                    <span class="trust-divider">&bull;</span>
                    <span class="trust-item">
                        <x-icon name="shield" size="13" />
                        <span>No Win, No Fee</span>
                    </span>
                    <span class="trust-divider">&bull;</span>
                    <span class="trust-item">
                        <x-icon name="clock" size="13" />
                        <span>24/7 Rapid Response</span>
                    </span>
                </div>
                <p class="form-legal-note">
                    Zero upfront legal fees. No attorney-client relationship is created until a formal retainer agreement is signed.
                </p>
            </div>
        </div>
    </form>
</div>
