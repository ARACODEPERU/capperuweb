@extends('layouts.webpage')

@section('content')

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <x-header />

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

@endsection
