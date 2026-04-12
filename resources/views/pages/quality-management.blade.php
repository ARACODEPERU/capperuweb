@extends('layouts.webpage')

@section('content')

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <x-header />

        <!-- HERO SECTION -->
        <div class="management-hero">
            <div class="container">
                <h1>Alcance del SIG</h1>
                <p>Definición de los límites y aplicabilidad de nuestro Sistema de Gestión de Calidad.</p>
                <ul class="modern-breadcrumb">
                    <li><a href="{{ route('web_home') }}">Inicio</a></li>
                    <li><span>Alcance del SIG</span></li>
                </ul>
            </div>
        </div>

        <!-- CONTENIDO PRINCIPAL (OVERLAP) -->
        <div class="container management-container-overlap">
            <div class="row justify-content-center">
                <div class="col-lg-10 management-content" data-aos="fade-up">
                    <h2>ALCANCE DEL SISTEMA DE GESTIÓN DE LA CALIDAD</h2>
                    <p>
                        Nuestra empresa CENTRO DE ACTUALIZACION PROFESIONAL & CONSULTORIA S.A.C., ubicada en Av. 2 de
                        Mayo 516 oficina 201 distrito de Miraflores y departamento de Lima, contando con la
                        participación de la Alta Dirección, se extiende el presente Acta de Alcance para fines de la
                        Implementación del Sistema de Gestión de Calidad de nuestra empresa.
                    </p>
                    <p>
                        El Alcance comprende los límites dentro de las instalaciones donde se brinde el servicio a
                        nuestros clientes:
                    </p>
                    <ul>
                        <li>
                            Para el Sistema de Gestión de la Calidad, ISO 9001:2015 abarca los servicios de
                            “Capacitación en
                            modalidad virtual para egresados y profesionales de todas las carreras”.
                        </li>
                    </ul>
                    <span class="management-date">Lima, 10 de abril del 2024</span>
                </div>
            </div>
        </div>

        <!-- Brand Logos Area -->
        <div data-aos="fade-up" data-aos-duration="1000">
            <x-brand-logos />
        </div>

        <!-- Footer Area -->
        <div data-aos="fade-up" data-aos-duration="1000">
            <x-footer />
        </div>

        <!--// Footer Area -->
    </div>
    <!-- Main Wrapper End -->

@endsection
