@extends('layouts.webpage')

@section('content')
    <div class="main-wrapper">

        <!-- header area start -->
        <x-header />

        <!-- slider area start -->
        <x-slider />

        <!-- barra de confianza (métricas con contadores) -->
        <x-trust-bar />

        <!-- nuevos programas -->
        <x-courses-new />

        <!-- próximas convocatorias -->
        <x-upcoming-calls />

        <!-- cursos -->
        <x-courses />

        <!-- diplomados -->
        <x-graduates />

        <!-- ¿por qué elegirnos? -->
        <x-why-us />

        <!-- sectores -->
        <x-sector-public />

        <x-sector-business />

        <x-sector-right />

        <!-- testimonios de egresados -->
        <x-testimonials />

        <!-- alianzas y convenios -->
        <div data-aos="fade-up" data-aos-duration="1000">
            <x-brand-logos />
        </div>

        <!-- llamada final a la acción -->
        <x-cta-band />

        <div data-aos="fade-up" data-aos-duration="1000">
            <x-footer />
        </div>


    </div>
@endsection
