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
                                <h2>ALCANCE DEL SIG</h2>
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
                        <h2><b>ALCANCE DEL SISTEMA DE GESTIÓN DE LA CALIDAD</b></h2>
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
                        <p>
                            <b>Lima, 10 de abril del 2024</b>
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
