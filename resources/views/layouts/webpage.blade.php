<!DOCTYPE html>
<html lang="es" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- ===== SEO ===== --}}
    @php
        $seoBrand = 'CAP PERU';
        $seoTitle = trim((string) ($title ?? ''));
        $seoDescription = trim((string) ($metaDescription ?? ''));
        $seoCanonical = url()->current();
        $seoImage = asset('themes/webpage/assets/images/logo/logo.png');
    @endphp
    <title>{{ $seoTitle !== '' ? $seoTitle . ' | ' . $seoBrand : $seoBrand . ' | Capacitación y Diplomados para el Sector Público y Privado' }}</title>
    <meta name="description" content="{{ $seoDescription !== '' ? $seoDescription : 'Capacitaciones, cursos y diplomados para el sector público y privado. Modalidad presencial, virtual y e-learning con certificación oficial. CAP PERU.' }}">
    <link rel="canonical" href="{{ $seoCanonical }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="{{ $ogType ?? 'website' }}">
    <meta property="og:site_name" content="{{ $seoBrand }}">
    <meta property="og:locale" content="es_PE">
    <meta property="og:title" content="{{ $seoTitle !== '' ? $seoTitle : $seoBrand }}">
    <meta property="og:description" content="{{ $seoDescription !== '' ? $seoDescription : 'Capacitaciones, cursos y diplomados para el sector público y privado.' }}">
    <meta property="og:url" content="{{ $seoCanonical }}">
    <meta property="og:image" content="{{ $ogImage ?? $seoImage }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seoTitle !== '' ? $seoTitle : $seoBrand }}">
    <meta name="twitter:description" content="{{ $seoDescription !== '' ? $seoDescription : 'Capacitaciones, cursos y diplomados para el sector público y privado.' }}">
    <meta name="twitter:image" content="{{ $ogImage ?? $seoImage }}">

    <!-- Inmediate Theme Detection -->
    <script>
        (function() {
            const theme = localStorage.getItem('theme') || 'light';
            document.documentElement.setAttribute('data-bs-theme', theme);
        })();
    </script>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themes/capperu/assets/img/fevicon-cap.png') }}">

    <!-- Conexiones tempranas a CDNs (solo fuentes; Swiper y AOS son locales) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fuente Poppins (antes via @import dentro de CSS: bloqueaba el render) -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">

    <!-- CSS
    ========================= -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('themes/webpage/assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('themes/webpage/assets/css/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('themes/webpage/assets/css/plugins.css') }}">

    <!-- AOS Library (local) -->
    <link href="{{ asset('themes/webpage/assets/vendor/aos.css') }}" rel="stylesheet">
    <!-- Swiper Library (local) -->
    <link rel="stylesheet" href="{{ asset('themes/webpage/assets/vendor/swiper-bundle.min.css') }}" />
    <!-- Modern Proposal Styles -->
    <link rel="stylesheet" href="{{ asset('themes/webpage/assets/css/modern-style.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('themes/webpage/assets/css/style.css') }}">

    <!-- Modernizer JS -->
    <script src="{{ asset('themes/webpage/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
</head>

<body>

    @yield('content')
    <x-floating-bubble />
    <!-- JS
============================================ -->

    <!-- jquery -->
    <script defer src="{{ asset('themes/webpage/assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script defer src="{{ asset('themes/webpage/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <!-- Popper JS -->
    <script defer src="{{ asset('themes/webpage/assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script defer src="{{ asset('themes/webpage/assets/js/bootstrap.min.js') }}"></script>
    <!-- Plugins JS -->
    <script defer src="{{ asset('themes/webpage/assets/js/plugins.js') }}"></script>
    <!-- Ajax Mail -->
    <script defer src="{{ asset('themes/webpage/assets/js/ajax-mail.js') }}"></script>
    <!-- Main JS -->
    <script defer src="{{ asset('themes/webpage/assets/js/main.js') }}"></script>

    <!-- Global Libraries & Initialization (locales: sin dependencia de CDNs externos) -->
    <script defer src="{{ asset('themes/webpage/assets/vendor/aos.js') }}"></script>
    <script defer src="{{ asset('themes/webpage/assets/vendor/swiper-bundle.min.js') }}"></script>
    <script>
        // Los scripts con defer se ejecutan ANTES del evento DOMContentLoaded,
        // por eso AOS.init debe ir dentro de ese evento (antes estaba al nivel
        // del documento y AOS aún no existía => la página quedaba en blanco).
        document.addEventListener('DOMContentLoaded', function () {
            if (window.AOS) {
                AOS.init({
                    duration: 1000,
                    mirror: true,
                    once: false
                });
            }
        });

        // Red de seguridad: si el CDN de AOS falla, revelar todo el contenido
        window.addEventListener('load', function () {
            setTimeout(function () {
                if (!window.AOS) {
                    document.querySelectorAll('[data-aos]').forEach(function (el) {
                        el.style.opacity = '1';
                        el.style.transform = 'none';
                    });
                }
            }, 1500);
        });
    </script>

</body>

</html>
