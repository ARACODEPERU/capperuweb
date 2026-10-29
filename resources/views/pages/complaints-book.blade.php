@extends('layouts.webpage')

@section('content')

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <x-header />

        <!-- HERO SECTION -->
        <div class="policy-hero">
            <div class="container">
                <h1>Libro de Reclamaciones</h1>
                <p>Tu voz nos ayuda a mejorar. Registra aquí tu reclamo conforme a la normativa vigente.</p>
                <ul class="modern-breadcrumb">
                    <li><a href="{{ route('web_home') }}">Inicio</a></li>
                    <li><span>Libro de Reclamaciones</span></li>
                </ul>
            </div>
        </div>

        <!-- CONTENIDO PRINCIPAL (OVERLAP) -->
        <div class="container policy-container-overlap">
            <div class="row justify-content-center">
                <div class="col-lg-10 policy-content" data-aos="fade-up">
                    <div class="quality-header">
                        <div class="quality-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="8" height="4" x="8" y="2" rx="1" ry="1"/>
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/>
                                <path d="M12 11h4"/>
                                <path d="M12 16h4"/>
                                <path d="M8 11h.01"/>
                                <path d="M8 16h.01"/>
                            </svg>
                        </div>
                        <h2>LIBRO DE RECLAMACIONES</h2>
                    </div>
                    <p>
                        Conforme a lo establecido en el Código de Protección y Defensa del Consumidor
                        (Ley N° 29571) y el Decreto Supremo N° 011-2011-PCM, Centro de Actualización
                        Profesional &amp; Consultoría S.A.C. pone a tu disposición el presente Libro de
                        Reclamaciones. Nos comprometemos a atender tu caso en un plazo máximo de
                        15 días hábiles.
                    </p>

                    <form class="claims-form" method="POST" action="{{ route('send_claim') }}">
                        @csrf

                        <h3 class="claims-section-title">1. Identificación del consumidor reclamante</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="claims-names">Nombres *</label>
                                <input type="text" class="modern-input" id="claims-names" name="names" required>
                            </div>
                            <div class="col-md-4">
                                <label for="claims-lastnames">Apellidos *</label>
                                <input type="text" class="modern-input" id="claims-lastnames" name="lastnames" required>
                            </div>
                            <div class="col-md-4">
                                <label for="claims-document-type">Tipo de documento *</label>
                                <select class="modern-input" id="claims-document-type" name="document_type" required>
                                    <option value="DNI">DNI</option>
                                    <option value="C.E.">C.E.</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="claims-number">Número de documento *</label>
                                <input type="text" class="modern-input" id="claims-number" name="number" required>
                            </div>
                            <div class="col-md-4">
                                <label for="claims-email">Correo electrónico *</label>
                                <input type="email" class="modern-input" id="claims-email" name="email" required>
                            </div>
                            <div class="col-md-4">
                                <label for="claims-phone">Teléfono *</label>
                                <input type="text" class="modern-input" id="claims-phone" name="phone" required>
                            </div>
                        </div>

                        <h3 class="claims-section-title">2. Identificación del bien contratado</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="claims-product-type">Tipo de producto *</label>
                                <input type="text" class="modern-input" id="claims-product-type" name="product_type" placeholder="Ej: Diplomado, Curso" required>
                            </div>
                            <div class="col-md-4">
                                <label for="claims-product-name">Nombre del producto *</label>
                                <input type="text" class="modern-input" id="claims-product-name" name="product_name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="claims-amount">Monto reclamado (S/) *</label>
                                <input type="text" class="modern-input" id="claims-amount" name="amount" required>
                            </div>
                            <div class="col-md-12">
                                <label for="claims-details">Detalle de la reclamación *</label>
                                <textarea class="modern-input" id="claims-details" name="details" rows="4" required></textarea>
                            </div>
                        </div>

                        <button type="submit" class="modern-btn">Enviar reclamación</button>
                    </form>

                    <style>
                        .claims-form {
                            margin-top: 10px;
                        }
                        .claims-section-title {
                            font-size: 1.1rem;
                            font-weight: 700;
                            color: var(--text-main);
                            margin: 28px 0 16px;
                            padding-bottom: 10px;
                            border-bottom: 2px solid rgba(206, 18, 18, 0.25);
                        }
                        .claims-section-title:first-of-type {
                            margin-top: 0;
                        }
                        .claims-form label {
                            display: block;
                            font-size: 0.88rem;
                            font-weight: 600;
                            color: var(--text-main);
                            margin-bottom: 6px;
                        }
                        .claims-form .modern-btn {
                            margin-top: 10px;
                        }
                    </style>
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
