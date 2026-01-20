@extends('layouts.webpage')

@section('content')

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <x-header />

        <style>
            /* Hero Section Styles */
            .about-hero {
                background: linear-gradient(180deg, #111 0%, #2a2a2a 100%);
                padding: 100px 0 180px;
                text-align: center;
                color: #fff;
                position: relative;
            }
            .about-hero h1 { font-size: 3.5rem; font-weight: 800; margin-bottom: 15px; color: #fff; text-transform: uppercase; }
            .about-hero p { font-size: 1.2rem; color: rgba(255,255,255,0.7); max-width: 600px; margin: 0 auto 25px; }
            
            .modern-breadcrumb { display: inline-flex; list-style: none; padding: 10px 25px; background: rgba(255,255,255,0.05); border-radius: 50px; margin: 0; border: 1px solid rgba(255,255,255,0.1); }
            .modern-breadcrumb li { color: #fff; font-size: 0.9rem; font-weight: 500; }
            .modern-breadcrumb li a { color: #ccc; text-decoration: none; transition: 0.3s; }
            .modern-breadcrumb li a:hover { color: #fff; }
            .modern-breadcrumb li + li::before { content: '/'; margin: 0 10px; color: #555; }
            .modern-breadcrumb li span { color: #ce1212; }

            /* Contenedor Principal con Overlap */
            .about-container-overlap { 
                margin-top: -100px; 
                position: relative; 
                z-index: 10; 
                padding-bottom: 80px; 
                background: #fff;
                border-radius: 15px;
                padding: 50px;
                box-shadow: 0 15px 35px rgba(0,0,0,0.1);
                margin-bottom: 50px;
            }
        </style>

        <!-- HERO SECTION -->
        <div class="about-hero">
            <div class="container">
                <h1>¿Quiénes Somos?</h1>
                <p>Conoce nuestra historia, misión y los valores que nos impulsan a seguir adelante.</p>
                <ul class="modern-breadcrumb">
                    <li><a href="{{ route('web_home') }}">Inicio</a></li>
                    <li><span>Nosotros</span></li>
                </ul>
            </div>
        </div>

        <!-- CONTENIDO PRINCIPAL (OVERLAP) -->
        <div class="container about-container-overlap">
            <div data-aos="fade-up">
                <x-welcome />
            </div>
            
            <div class="mt-5" data-aos="fade-up" data-aos-delay="100">
                <x-vision-mission-values />
            </div>
        </div>

        <!-- Footer Area -->
        <div data-aos="fade-up" data-aos-duration="1000">
            <x-footer />
        </div>

        <!--// Footer Area -->
    </div>
    <!-- Main Wrapper End -->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            mirror: true,
            once: false
        });
    </script>
@endsection
