@extends('layouts.webpage')

@section('content')
    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <x-header />

        {{-- <div class="breadcrumb-area breadcrumb-modify-padding bg-black-3">
            <div class="container">
                <div class="in-breadcrumb">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumb-style-2 center">
                                <h2>Contactanos</h2>
                                <ul class="breadcrumb-list-2 black">
                                    <li><a href="{{ route('web_home') }}">Home</a></li>
                                    <li>Contactanos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-us-area section-pt-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="contact-form-wrap section-pb-90">
                            <form id="contact-form" action="https://whizthemes.com/mail-php/tasnim/mail-4.php"
                                method="POST">
                                <div class="contact-page-form">
                                    <div class="row contact-input">
                                        <div class="col-lg-6 col-md-6 contact-inner black">
                                            <input name="name" type="text" placeholder="First Name" id="first-name">
                                        </div>
                                        <div class="col-lg-6 col-md-6 contact-inner black">
                                            <input name="lastname" type="text" placeholder="Last Name" id="last-name">
                                        </div>
                                        <div class="col-lg-6 col-md-6 contact-inner black">
                                            <input type="text" placeholder="Enter Your E-mail" id="email"
                                                name="email">
                                        </div>
                                        <div class="col-lg-6 col-md-6 contact-inner black">
                                            <input name="subject" type="text" placeholder="Subject" id="subject">
                                        </div>
                                        <div class="col-lg-12 col-md-12 contact-inner black contact-message">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="contact-submit-btn text-center">
                                        <button class="submit-btn" type="submit">Send Message</button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-5 ms-auto">
                        <div class="contact-info-inner black">
                            <!-- Single-contact-info -->
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="zmdi zmdi-home"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p> Home #02 Hangla pur <br> Dhaka , Bangladesh </p>
                                </div>
                            </div>
                            <!--// Single-contact-info -->

                            <!-- Single-contact-info -->
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="zmdi zmdi-phone"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p> <a href="#">+022222222</a> <a href="#">+01111109999</a> </p>
                                </div>
                            </div>
                            <!--// Single-contact-info -->

                            <!-- Single-contact-info -->
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="zmdi zmdi-email"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p><a href="#">example@e-mail.com</a> <a href="#">example@e-mail.com</a>
                                    </p>
                                </div>
                            </div>
                            <!--// Single-contact-info -->

                            <!-- Single-contact-info -->
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="zmdi zmdi-globe-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p> <a href="#">www.streamo.net</a></p>
                                </div>
                            </div>
                            <!--// Single-contact-info -->
                        </div>

                    </div>
                </div>
            </div>
        </div> --}}

        <!-- ============================================================== -->
        <!-- SEPARADOR PARA COMPARACIÓN (BORRAR LUEGO) -->
        <!-- ============================================================== -->
        {{-- <div style="background: #000; color: #fff; padding: 40px; text-align: center; margin: 50px 0;">
            <h2>⬇️ PROPUESTA DE DISEÑO MODERNO ⬇️</h2>
            <p>Diseño limpio tipo "Tarjeta Dividida" con mejor jerarquía visual.</p>
        </div> --}}

        <!-- ============================================================== -->
        <!-- INICIO PROPUESTA MODERNA -->
        <!-- ============================================================== -->
        <style>
            /* Hero Section Styles (Encabezado Moderno) */
            .contact-hero {
                background: linear-gradient(180deg, #111 0%, #2a2a2a 100%);
                padding: 100px 0 180px; /* Padding inferior extra para el efecto de superposición */
                text-align: center;
                color: #fff;
                position: relative;
            }
            .contact-hero h1 { font-size: 3.5rem; font-weight: 800; margin-bottom: 15px; color: #fff; }
            .contact-hero p { font-size: 1.2rem; color: rgba(255,255,255,0.7); max-width: 600px; margin: 0 auto 25px; }
            
            .modern-breadcrumb { display: inline-flex; list-style: none; padding: 10px 25px; background: rgba(255,255,255,0.05); border-radius: 50px; margin: 0; border: 1px solid rgba(255,255,255,0.1); }
            .modern-breadcrumb li { color: #fff; font-size: 0.9rem; font-weight: 500; }
            .modern-breadcrumb li a { color: #ccc; text-decoration: none; transition: 0.3s; }
            .modern-breadcrumb li a:hover { color: #fff; }
            .modern-breadcrumb li + li::before { content: '/'; margin: 0 10px; color: #555; }
            .modern-breadcrumb li span { color: #ce1212; }

            .modern-contact-section { background-color: #f4f7f6; padding: 0 0 80px; }
            
            /* Ajuste para que la caja flote sobre el hero (Efecto Overlap) */
            .contact-box { background: #fff; box-shadow: 0 20px 60px rgba(0,0,0,0.1); border-radius: 20px; overflow: hidden; margin-top: -100px; position: relative; z-index: 10; }
            
            .info-panel { background: #1a1a1a; color: #fff; padding: 60px 40px; height: 100%; position: relative; }
            /* Patrón sutil de fondo opcional */
            .info-panel::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 20px 20px; opacity: 0.1; pointer-events: none; }
            
            .info-panel h3 { color: #fff; font-weight: 700; margin-bottom: 40px; font-size: 1.8rem; }
            .info-item { display: flex; margin-bottom: 35px; align-items: flex-start; }
            .info-icon { width: 50px; height: 50px; background: rgba(255,255,255,0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 20px; flex-shrink: 0; transition: 0.3s; }
            .info-item:hover .info-icon { background: #ce1212; transform: scale(1.1); }
            .info-icon i { font-size: 1.2rem; color: #fff; }
            
            .info-content h5 { color: #fff; font-size: 1.1rem; margin-bottom: 5px; font-weight: 600; }
            .info-content p { color: #aaa; font-size: 0.95rem; margin: 0; line-height: 1.6; }
            .info-content a { color: #aaa; text-decoration: none; transition: 0.3s; }
            .info-content a:hover { color: #ce1212; }

            .form-panel { padding: 60px 50px; background: #fff; }
            .form-panel h3 { font-weight: 700; margin-bottom: 10px; color: #333; font-size: 1.8rem; }
            .form-panel p { color: #777; margin-bottom: 30px; }
            
            .modern-input { width: 100%; padding: 15px 20px; border: 2px solid #f0f0f0; background: #f9f9f9; border-radius: 10px; margin-bottom: 20px; transition: 0.3s; outline: none; font-size: 0.95rem; color: #333; }
            .modern-input:focus { border-color: #ce1212; background: #fff; }
            .modern-input::placeholder { color: #bbb; }
            
            .modern-btn { background: #ce1212; color: #fff; padding: 16px 40px; border: none; border-radius: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; cursor: pointer; transition: 0.3s; display: inline-block; width: 100%; box-shadow: 0 5px 15px rgba(206, 18, 18, 0.2); }
            .modern-btn:hover { background: #a00000; transform: translateY(-2px); box-shadow: 0 8px 20px rgba(206, 18, 18, 0.3); }
        </style>

        <!-- HERO SECTION (ENCABEZADO) -->
        <div class="contact-hero">
            <div class="container">
                <h1>Contáctanos</h1>
                <p>¿Tienes alguna duda o consulta? Estamos aquí para ayudarte.</p>
                <ul class="modern-breadcrumb">
                    <li><a href="{{ route('web_home') }}">Inicio</a></li>
                    <li><span>Contacto</span></li>
                </ul>
            </div>
        </div>

        <div class="modern-contact-section">
            <div class="container">
                <div class="contact-box">
                    <div class="row g-0">
                        <!-- Columna Izquierda: Información (Fondo Oscuro) -->
                        <div class="col-lg-5">
                            <div class="info-panel">
                                <h3>Información</h3>
                                
                                <div class="info-item">
                                    <div class="info-icon"><i class="zmdi zmdi-pin"></i></div>
                                    <div class="info-content">
                                        <h5>Nuestra Oficina</h5>
                                        <p>Av. Principal 123, Lima<br>Perú</p>
                                    </div>
                                </div>

                                <div class="info-item">
                                    <div class="info-icon"><i class="zmdi zmdi-phone"></i></div>
                                    <div class="info-content">
                                        <h5>Teléfonos</h5>
                                        <p><a href="tel:+0123456789">+01 234 567 89</a></p>
                                        <p><a href="tel:+0198765432">+01 987 654 32</a></p>
                                    </div>
                                </div>

                                <div class="info-item">
                                    <div class="info-icon"><i class="zmdi zmdi-email"></i></div>
                                    <div class="info-content">
                                        <h5>Correo Electrónico</h5>
                                        <p><a href="mailto:info@capperu.com">info@capperu.com</a></p>
                                        <p><a href="mailto:soporte@capperu.com">soporte@capperu.com</a></p>
                                    </div>
                                </div>

                                <div class="info-item">
                                    <div class="info-icon"><i class="zmdi zmdi-globe"></i></div>
                                    <div class="info-content">
                                        <h5>Sitio Web</h5>
                                        <p><a href="#">www.capperu.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Columna Derecha: Formulario (Fondo Blanco) -->
                        <div class="col-lg-7">
                            <div class="form-panel">
                                <h3>Envíanos un mensaje</h3>
                                <p>Tu dirección de correo electrónico no será publicada.</p>
                                
                                <form action="#" method="POST">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="modern-input" placeholder="Nombre" name="name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="modern-input" placeholder="Apellidos" name="lastname">
                                        </div>
                                    </div>
                                    <input type="email" class="modern-input" placeholder="Correo Electrónico" name="email">
                                    <input type="text" class="modern-input" placeholder="Asunto" name="subject">
                                    <textarea class="modern-input" rows="4" placeholder="Escribe tu mensaje aquí..." name="message"></textarea>
                                    
                                    <button type="submit" class="modern-btn">Enviar Mensaje</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- FIN PROPUESTA MODERNA -->
        <!-- ============================================================== -->

        <!-- Footer Area -->
        <x-footer />
        <!--// Footer Area -->
        <!-- Modal -->
        {{-- <div class="modal fade" id="exampleModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="subscribe-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="zmdi zmdi-close s-close"></i></button>
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
        </div> --}}
    </div>
    <!-- Main Wrapper End -->
@endsection
