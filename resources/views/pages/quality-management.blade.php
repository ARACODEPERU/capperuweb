@extends('layouts.webpage')

@section('content')

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <x-header />

        <style>
            /* Hero Section Styles */
            .management-hero {
                background: linear-gradient(180deg, #111 0%, #2a2a2a 100%);
                padding: 100px 0 180px;
                text-align: center;
                color: #fff;
                position: relative;
            }
            .management-hero h1 { font-size: 3.5rem; font-weight: 800; margin-bottom: 15px; color: #fff; text-transform: uppercase; }
            .management-hero p { font-size: 1.2rem; color: rgba(255,255,255,0.7); max-width: 600px; margin: 0 auto 25px; }
            
            .modern-breadcrumb { display: inline-flex; list-style: none; padding: 10px 25px; background: rgba(255,255,255,0.05); border-radius: 50px; margin: 0; border: 1px solid rgba(255,255,255,0.1); }
            .modern-breadcrumb li { color: #fff; font-size: 0.9rem; font-weight: 500; }
            .modern-breadcrumb li a { color: #ccc; text-decoration: none; transition: 0.3s; }
            .modern-breadcrumb li a:hover { color: #fff; }
            .modern-breadcrumb li + li::before { content: '/'; margin: 0 10px; color: #555; }
            .modern-breadcrumb li span { color: #ce1212; }

            /* Contenedor Principal con Overlap */
            .management-container-overlap { 
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

            .management-content h2 { font-weight: 800; color: #222; margin-bottom: 25px; font-size: 1.8rem; position: relative; padding-bottom: 15px; }
            .management-content h2::after { content: ''; position: absolute; bottom: 0; left: 0; width: 60px; height: 4px; background: #ce1212; border-radius: 2px; }
            .management-content p { color: #555; line-height: 1.8; margin-bottom: 20px; font-size: 1.05rem; text-align: justify; }
            .management-content ul { list-style: none; padding-left: 0; margin-bottom: 25px; }
            .management-content ul li { position: relative; padding-left: 35px; margin-bottom: 15px; color: #555; line-height: 1.6; }
            .management-content ul li::before { 
                content: '✔'; 
                position: absolute; 
                left: 0; 
                top: 0; 
                color: #fff; 
                background: #ce1212; 
                width: 24px; 
                height: 24px; 
                border-radius: 50%; 
                text-align: center; 
                line-height: 24px; 
                font-size: 12px; 
                font-weight: bold;
            }
            .management-date { font-weight: 700; color: #222; margin-top: 30px; display: block; text-align: right; font-style: italic; border-top: 1px solid #eee; padding-top: 20px; }
        </style>

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
