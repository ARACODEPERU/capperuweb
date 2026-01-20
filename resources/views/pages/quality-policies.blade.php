@extends('layouts.webpage')

@section('content')

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <x-header />

        <style>
            /* Hero Section Styles */
            .policy-hero {
                background: linear-gradient(180deg, #111 0%, #2a2a2a 100%);
                padding: 100px 0 180px;
                text-align: center;
                color: #fff;
                position: relative;
            }
            .policy-hero h1 { font-size: 3.5rem; font-weight: 800; margin-bottom: 15px; color: #fff; text-transform: uppercase; }
            .policy-hero p { font-size: 1.2rem; color: rgba(255,255,255,0.7); max-width: 600px; margin: 0 auto 25px; }
            
            .modern-breadcrumb { display: inline-flex; list-style: none; padding: 10px 25px; background: rgba(255,255,255,0.05); border-radius: 50px; margin: 0; border: 1px solid rgba(255,255,255,0.1); }
            .modern-breadcrumb li { color: #fff; font-size: 0.9rem; font-weight: 500; }
            .modern-breadcrumb li a { color: #ccc; text-decoration: none; transition: 0.3s; }
            .modern-breadcrumb li a:hover { color: #fff; }
            .modern-breadcrumb li + li::before { content: '/'; margin: 0 10px; color: #555; }
            .modern-breadcrumb li span { color: #ce1212; }

            /* Contenedor Principal con Overlap */
            .policy-container-overlap { 
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

            .policy-content h2 { font-weight: 800; color: #222; margin-bottom: 25px; font-size: 1.8rem; position: relative; padding-bottom: 15px; }
            .policy-content h2::after { content: ''; position: absolute; bottom: 0; left: 0; width: 60px; height: 4px; background: #ce1212; border-radius: 2px; }
            .policy-content p { color: #555; line-height: 1.8; margin-bottom: 20px; font-size: 1.05rem; text-align: justify; }
            .policy-content ul { list-style: none; padding-left: 0; margin-bottom: 25px; }
            .policy-content ul li { position: relative; padding-left: 35px; margin-bottom: 15px; color: #555; line-height: 1.6; }
            .policy-content ul li::before { 
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
            .policy-date { font-weight: 700; color: #222; margin-top: 30px; display: block; text-align: right; font-style: italic; border-top: 1px solid #eee; padding-top: 20px; }
        </style>

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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            mirror: true,
            once: false
        });
    </script>
@endsection
