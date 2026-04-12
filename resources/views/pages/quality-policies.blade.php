@extends('layouts.webpage')

@section('content')

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <x-header />

        <!-- HERO SECTION -->
        <div class="policy-hero">
            <div class="container">
                <h1>Políticas de Calidad</h1>
                <p>Comprometidos con la excelencia académica y la mejora continua de nuestros procesos.</p>
                <ul class="modern-breadcrumb">
                    <li><a href="{{ route('web_home') }}">Inicio</a></li>
                    <li><span>Políticas de Calidad</span></li>
                </ul>
            </div>
        </div>

        <!-- CONTENIDO PRINCIPAL (OVERLAP) -->
        <div class="container policy-container-overlap">
            <div class="row justify-content-center">
                <div class="col-lg-10 policy-content" data-aos="fade-up">
                    <h2>POLÍTICA DEL SISTEMA DE GESTIÓN DE LA CALIDAD</h2>
                    <p>
                        Centro de Actualización Profesional &amp; Consultoría S.A.C., es una empresa dedicada al
                        rubro de la capacitación
                        especializada por más de 12 años en distintas ciudades del Perú. Su objetivo es contribuir a
                        la actualización
                        y perfeccionamiento académico de profesionales y egresados de las diferentes carreras
                        profesionales.
                    </p>
                    <p>
                        Somos una empresa encargada de implementar actividades de capacitación, formación,
                        actualización profesional
                        en distintas especialidades en la modalidad Presencial y Modalidad Virtual a nivel nacional.
                    </p>
                    <p>
                        Centro de Actualización Profesional &amp; Consultoría S.A.C. tiene como objetivo alcanzar
                        altos estándares de
                        calidad en todos y cada uno de los procesos que componen su operación, en la búsqueda del
                        desarrollo
                        sostenible y el fortalecimiento de sus partes interesadas, dentro de este contexto se
                        compromete a:
                    </p>
                    <ul>
                        <li>
                            Asegurar que los objetivos del Sistema de Gestión de Calidad guarden relación con los
                            objetivos
                            estratégicos de la empresa, los cuales son apropiados para el propósito y su contexto.
                        </li>
                        <li>
                            Cumplir con los requisitos legales, contractuales del cliente y otros aplicables.
                        </li>
                        <li>
                            Mejorar continuamente nuestros servicios, asumiendo la responsabilidad por la calidad de
                            nuestros servicios.
                        </li>
                    </ul>
                    <p>
                        La Gerencia se asegura que la política sea comunicada, entendida y aplicada por su
                        Organización y se encuentre
                        disponible a todas las partes interesadas pertinentes.
                    </p>
                    <span class="policy-date">Lima, 24 de enero del 2024</span>
                </div>
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
