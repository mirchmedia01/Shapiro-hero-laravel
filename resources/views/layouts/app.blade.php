<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    {{-- SEO Standards --}}
    @include('partials.seo')

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    {{-- Modern Pure Laravel Stylesheet (Zero Elementor Dependencies) --}}
    <link rel="stylesheet" href="{{ asset('assets/css/modern-theme.css') }}?v={{ file_exists(public_path('assets/css/modern-theme.css')) ? filemtime(public_path('assets/css/modern-theme.css')) : time() }}" media="all" />

    @stack('styles')
</head>
<body class="@yield('body_class', 'site-body')">

    {{-- Modern Header --}}
    @include('partials.header')

    {{-- Flash Notifications --}}
    @include('partials.flash-messages')

    {{-- Main Content --}}
    <main id="content" class="site-main">
        @yield('content')
    </main>

    {{-- Modern Footer --}}
    @include('partials.footer')

    {{-- Core Vanilla Interactive Scripts --}}
    <script>
        // Mobile Drawer Navigation
        function toggleMobileMenu() {
            var drawer = document.getElementById('mobile-nav-drawer');
            var overlay = document.getElementById('mobile-drawer-overlay');
            if (drawer && overlay) {
                var isOpen = drawer.classList.contains('open');
                if (isOpen) {
                    drawer.classList.remove('open');
                    overlay.classList.remove('active');
                    document.body.style.overflow = '';
                    document.documentElement.style.overflow = '';
                } else {
                    drawer.classList.add('open');
                    overlay.classList.add('active');
                    document.body.style.overflow = 'hidden';
                    document.documentElement.style.overflow = 'hidden';
                }
            }
        }

        // Accessible FAQ Accordions
        function toggleFaq(btn) {
            var item = btn.closest('.faq-item');
            if (!item) return;
            var isActive = item.classList.contains('active');
            
            // Close other sibling items in same accordion if desired
            var accordion = item.closest('.faq-accordion');
            if (accordion) {
                accordion.querySelectorAll('.faq-item.active').forEach(function(el) {
                    if (el !== item) el.classList.remove('active');
                });
            }

            if (isActive) {
                item.classList.remove('active');
            } else {
                item.classList.add('active');
            }
        }
    </script>

    @stack('scripts')
</body>
</html>
