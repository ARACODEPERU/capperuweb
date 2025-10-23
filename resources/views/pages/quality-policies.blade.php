@extends('layouts.webpage')

@section('content')
    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <x-header />

        <!-- Breadcrumb -->
        <div class="breadcrumb-area breadcrumb-modify-padding bg-black-3">
            <div class="container">
                <div class="in-breadcrumb">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumb-style-2">
                                <h2>POLÍTICAS DE CALIDAD</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Breadcrumb -->

        <section style="padding: 60px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2><b>POLÍTICA DEL SISTEMA DE GESTIÓN DE LA CALIDAD</b></h2>
                        <p>
                            Centro de Actualización Profesional &amp; Consultoría S.A.C., es una empresa dedicada al
                            rubro de la capacitación
                            especializada por más de 12 años en distintas ciudades del Perú. Su objetivo es contribuir a
                            la actualización
                            y perfeccionamiento académico de profesionales y egresados de las diferentes carreras
                            profesionales.
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
                        <p>
                            <b>Lima, 24 de enero del 2024</b>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer Area -->
        <x-footer />

        <!--// Footer Area -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="subscribe-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="zmdi zmdi-close s-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 id="exampleModalLabel">Ready to watch? Enter your email to create or restart your membership.
                        </h5>
                        <div class="create-membership-wrap modify">
                            <input placeholder="Email Address">
                            <button class="landing-btn-style" type="button">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Wrapper End -->
@endsection
