<header class="site-header">
    {{-- Top Announcement Bar --}}
    <div class="header-top-bar">
        <div class="container header-top-inner">
            <div class="header-top-left">
                <span class="badge badge-gold" style="font-size: 0.7rem; padding: 0.2rem 0.6rem;">Available 24/7</span>
                <span style="display: none;" class="sm-inline">Need A Hero? Call Shapiro &bull; NYC &amp; Long Island Injury Lawyers</span>
            </div>
            <div class="header-top-right">
                <a href="tel:+19707427476" class="top-hotline" aria-label="Call Shapiro Law Office">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <span>(970) SHAPIRO</span>
                </a>
                <div class="header-top-socials">
                    <a href="https://www.facebook.com/profile.php?id=61578257990343" target="_blank" rel="noopener noreferrer" aria-label="Facebook" style="opacity: 0.8; display: flex; align-items: center;">
                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="https://www.instagram.com/need_a_hero_call_shapiro?igsh=MW84bjRnMjN1bWRraw==" target="_blank" rel="noopener noreferrer" aria-label="Instagram" style="opacity: 0.8; display: flex; align-items: center;">
                        <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Navbar --}}
    <div class="container">
        <nav class="nav-inner" aria-label="Main Navigation">
            <a href="{{ route('home') }}" class="brand-logo" aria-label="Shapiro The Hero Homepage">
                <img src="{{ asset('assets/media/branding/shapiro-logo.png') }}" alt="Adam L. Shapiro &amp; Associates, P.C. Logo" width="286" height="68" fetchpriority="high">
            </a>

            {{-- Desktop Nav Links --}}
            <ul class="nav-links">
                <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                
                {{-- Practice Areas Dropdown --}}
                <li class="nav-item-dropdown">
                    <a href="{{ route('services') }}" class="nav-link {{ request()->is('practice*') || request()->routeIs('services') ? 'active' : '' }}" style="display: flex; align-items: center; gap: 0.35rem;">
                        <span>Practice Areas</span>
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('practice.personal-injury') }}" class="dropdown-link">Personal Injury</a></li>
                        <li><a href="{{ route('practice.motor-vehicle') }}" class="dropdown-link">Motor Vehicle Accidents</a></li>
                        <li><a href="{{ route('practice.slip-trip-fall') }}" class="dropdown-link">Slip / Trip &amp; Fall</a></li>
                        <li><a href="{{ route('practice.workers-compensation') }}" class="dropdown-link">Workers' Compensation</a></li>
                        <li><a href="{{ route('practice.medical-malpractice') }}" class="dropdown-link">Medical Malpractice</a></li>
                        <li><a href="{{ route('practice.wrongful-death') }}" class="dropdown-link">Wrongful Death</a></li>
                        <li><a href="{{ route('practice.construction-accident') }}" class="dropdown-link">Construction Accidents</a></li>
                        <li><a href="{{ route('practice.ebike-scooter') }}" class="dropdown-link">E-Bike &amp; Scooter Accidents</a></li>
                        <li style="border-top: 1px solid var(--color-border); margin-top: 0.25rem;"><a href="{{ route('services') }}" class="dropdown-link" style="font-weight: 700; color: var(--color-primary-blue);">All Practice Areas &rarr;</a></li>
                    </ul>
                </li>

                <li><a href="{{ route('high-profiles-cases') }}" class="nav-link {{ request()->routeIs('high-profiles-cases') ? 'active' : '' }}">High Profile Cases</a></li>
                <li><a href="{{ route('awards') }}" class="nav-link {{ request()->routeIs('awards') ? 'active' : '' }}">Awards</a></li>
                <li><a href="{{ route('career') }}" class="nav-link {{ request()->routeIs('career') ? 'active' : '' }}">Career</a></li>
                <li><a href="{{ route('blog.index') }}" class="nav-link {{ request()->is('blog*') ? 'active' : '' }}">Blog</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>

            {{-- Right Action CTA --}}
            <div style="display: flex; align-items: center; gap: 1rem;">
                <a href="{{ route('contact') }}" class="btn btn-accent btn-sm md-inline" style="display: none;">
                    <span>Free Case Review</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14m-7-7 7 7-7 7"/></svg>
                </a>

                {{-- Mobile Hamburger Toggle --}}
                <button type="button" class="mobile-toggle-btn" aria-label="Toggle Mobile Menu" onclick="toggleMobileMenu()">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </button>
            </div>
        </nav>
    </div>

    {{-- Mobile Slide Drawer --}}
    <div id="mobile-nav-drawer" class="mobile-drawer">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; padding-bottom: 1rem; border-bottom: 1px solid var(--color-border);">
            <img src="{{ asset('assets/media/branding/shapiro-logo.png') }}" alt="Shapiro The Hero" style="height: 52px; width: auto;">
            <button type="button" onclick="toggleMobileMenu()" style="background: none; border: none; font-size: 1.5rem; cursor: pointer; color: var(--color-text); padding: 0.5rem;">
                &times;
            </button>
        </div>

        <div style="margin-bottom: 1.5rem;">
            <a href="tel:+19707427476" class="btn btn-accent" style="width: 100%; justify-content: center;">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <span>Call (970) SHAPIRO</span>
            </a>
        </div>

        <ul style="list-style: none; display: flex; flex-direction: column; gap: 0.5rem;">
            <li><a href="{{ route('home') }}" class="nav-link" onclick="toggleMobileMenu()">Home</a></li>
            <li><a href="{{ route('about') }}" class="nav-link" onclick="toggleMobileMenu()">About Us</a></li>
            <li style="border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border); padding: 0.5rem 0;">
                <div style="font-weight: 700; font-size: 0.875rem; text-transform: uppercase; color: var(--color-primary-blue); margin-bottom: 0.5rem;">Practice Areas</div>
                <ul style="list-style: none; padding-left: 0.75rem; display: flex; flex-direction: column; gap: 0.4rem;">
                    <li><a href="{{ route('practice.personal-injury') }}" class="dropdown-link" onclick="toggleMobileMenu()">Personal Injury</a></li>
                    <li><a href="{{ route('practice.motor-vehicle') }}" class="dropdown-link" onclick="toggleMobileMenu()">Motor Vehicle Accidents</a></li>
                    <li><a href="{{ route('practice.slip-trip-fall') }}" class="dropdown-link" onclick="toggleMobileMenu()">Slip / Trip &amp; Fall</a></li>
                    <li><a href="{{ route('practice.workers-compensation') }}" class="dropdown-link" onclick="toggleMobileMenu()">Workers' Compensation</a></li>
                    <li><a href="{{ route('practice.medical-malpractice') }}" class="dropdown-link" onclick="toggleMobileMenu()">Medical Malpractice</a></li>
                    <li><a href="{{ route('practice.wrongful-death') }}" class="dropdown-link" onclick="toggleMobileMenu()">Wrongful Death</a></li>
                    <li><a href="{{ route('practice.construction-accident') }}" class="dropdown-link" onclick="toggleMobileMenu()">Construction Accidents</a></li>
                    <li><a href="{{ route('practice.ebike-scooter') }}" class="dropdown-link" onclick="toggleMobileMenu()">E-Bike &amp; Scooter</a></li>
                </ul>
            </li>
            <li><a href="{{ route('high-profiles-cases') }}" class="nav-link" onclick="toggleMobileMenu()">High Profile Cases</a></li>
            <li><a href="{{ route('awards') }}" class="nav-link" onclick="toggleMobileMenu()">Awards</a></li>
            <li><a href="{{ route('career') }}" class="nav-link" onclick="toggleMobileMenu()">Career</a></li>
            <li><a href="{{ route('blog.index') }}" class="nav-link" onclick="toggleMobileMenu()">Blog</a></li>
            <li><a href="{{ route('contact') }}" class="nav-link" onclick="toggleMobileMenu()">Contact Us</a></li>
        </ul>

        <div style="margin-top: 2rem; padding-top: 1.25rem; border-top: 1px solid var(--color-border); display: flex; align-items: center; justify-content: center; gap: 1rem;">
            <a href="https://www.facebook.com/profile.php?id=61578257990343" target="_blank" rel="noopener noreferrer" aria-label="Facebook" style="color: var(--color-primary); background: var(--color-bg-alt); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
            </a>
            <a href="https://www.instagram.com/need_a_hero_call_shapiro?igsh=MW84bjRnMjN1bWRraw==" target="_blank" rel="noopener noreferrer" aria-label="Instagram" style="color: var(--color-primary); background: var(--color-bg-alt); width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            </a>
        </div>
    </div>
    <div id="mobile-drawer-overlay" class="mobile-drawer-overlay" onclick="toggleMobileMenu()"></div>
</header>
<style>
@media (min-width: 640px) { .sm-inline { display: inline !important; } }
@media (min-width: 768px) { .md-inline { display: inline-flex !important; } }
</style>
