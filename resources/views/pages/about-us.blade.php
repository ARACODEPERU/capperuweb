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
                                <h2>¿QUIENES SOMOS?</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Breadcrumb -->

        <section class="about-section">
            <div class="container">
                <div class="row">
                    <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                        <div class="inner-column">
                            <div class="sec-title">
                                <span class="title">Nuestra Compañia</span>
                                <h2>Bienvenidos a <br><b>CAP</b> PERÚ</h2>
                            </div>
                            <div class="text">
                                El Centro de Actualización Profesional CAP – PERÚ SAC es una empresa dedicada al rubro de la
                                capacitación especializada por más de 7 años en distintas ciudades del Perú. Su objetivo en
                                contribuir a la actualización y perfeccionamiento académico de profesionales y egresados de
                                las diferentes carreras profesionales. Somos una empresa encargada de implementar
                                actividades de capacitación, formación, actualización profesional en distintas
                                especialidades en la modalidad Presencial y Modalidad Virtual.
                            </div>
                            <div class="text">
                                El centro de Actualización Profesional CAP está comprometido con la sociedad a través de
                                las acciones concretas de enseñanza - aprendizaje, investigación, proyección social y
                                responsabilidad social.
                            </div>
                            {{-- <ul class="list-style-one">
                                <li>Lorem Ipsum is simply dummy tex</li>
                                <li>Consectetur adipisicing elit</li>
                                <li>Sed do eiusmod tempor incididunt</li>
                            </ul> --}}
                            <div class="btn-box">
                                <a href="{{ route('web_contact') }}" class="theme-btn btn-style-one">Contactanos</a>
                            </div>
                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column wow fadeInLeft">
                            <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img
                                        src="https://i.ibb.co/QP6Nmpf/image-1-about.jpg" alt=""></a></figure>
                            <figure class="image-2"><a href="#" class="lightbox-image" data-fancybox="images"><img
                                        src="https://i.ibb.co/JvN0NVB/image-2-about.jpg" alt=""></a></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <style>
            a,
            a:active,
            a:focus {
                color: #6f6f6f;
                text-decoration: none;
                transition-timing-function: ease-in-out;
                -ms-transition-timing-function: ease-in-out;
                -moz-transition-timing-function: ease-in-out;
                -webkit-transition-timing-function: ease-in-out;
                -o-transition-timing-function: ease-in-out;
                transition-duration: .2s;
                -ms-transition-duration: .2s;
                -moz-transition-duration: .2s;
                -webkit-transition-duration: .2s;
                -o-transition-duration: .2s;
            }

            ul {
                margin: 0;
                padding: 0;
                list-style: none;
            }

            img {
                max-width: 100%;
                height: auto;
            }

            section {
                padding: 60px 0;
                /* min-height: 100vh;*/
            }

            .sec-title {
                position: relative;
                z-index: 1;
                margin-bottom: 60px;
            }

            .sec-title .title {
                position: relative;
                display: block;
                font-size: 18px;
                line-height: 24px;
                color: #f4181c;
                font-weight: 500;
                margin-bottom: 15px;
            }

            .sec-title h2 {
                position: relative;
                display: block;
                font-size: 40px;
                line-height: 1.28em;
                color: #222222;
                font-weight: 600;
                padding-bottom: 18px;
            }

            .sec-title h2:before {
                position: absolute;
                content: '';
                left: 0px;
                bottom: 0px;
                width: 50px;
                height: 3px;
                background-color: #d1d2d6;
            }

            .sec-title .text {
                position: relative;
                font-size: 16px;
                line-height: 26px;
                color: #848484;
                font-weight: 400;
                margin-top: 35px;
            }

            .sec-title.light h2 {
                color: #ffffff;
            }

            .sec-title.text-center h2:before {
                left: 50%;
                margin-left: -25px;
            }

            .list-style-one {
                position: relative;
            }

            .list-style-one li {
                position: relative;
                font-size: 16px;
                line-height: 26px;
                color: #222222;
                font-weight: 400;
                padding-left: 35px;
                margin-bottom: 12px;
            }

            .list-style-one li:before {
                content: "\f058";
                position: absolute;
                left: 0;
                top: 0px;
                display: block;
                font-size: 18px;
                padding: 0px;
                color: #ff2222;
                font-weight: 600;
                -moz-font-smoothing: grayscale;
                -webkit-font-smoothing: antialiased;
                font-style: normal;
                font-variant: normal;
                text-rendering: auto;
                line-height: 1.6;
                font-family: "Font Awesome 5 Free";
            }

            .list-style-one li a:hover {
                color: #44bce2;
            }

            .btn-style-one {
                position: relative;
                display: inline-block;
                font-size: 17px;
                line-height: 30px;
                color: #ffffff;
                padding: 10px 30px;
                font-weight: 600;
                overflow: hidden;
                letter-spacing: 0.02em;
                background-color: #f4181c;
            }

            .btn-style-one:hover {
                background-color: #001e57;
                color: #ffffff;
            }

            .about-section {
                position: relative;
                padding: 120px 0 70px;
            }

            .about-section .sec-title {
                margin-bottom: 45px;
            }

            .about-section .content-column {
                position: relative;
                margin-bottom: 50px;
            }

            .about-section .content-column .inner-column {
                position: relative;
                padding-left: 30px;
            }

            .about-section .text {
                margin-bottom: 40px;
                font-size: 16px;
                line-height: 26px;
                color: #848484;
                font-weight: 400;
            }

            .about-section .list-style-one {
                margin-bottom: 45px;
            }

            .about-section .btn-box {
                position: relative;
            }

            .about-section .btn-box a {
                padding: 15px 50px;
            }

            .about-section .image-column {
                position: relative;
            }

            .about-section .image-column .text-layer {
                position: absolute;
                right: -110px;
                top: 50%;
                font-size: 325px;
                line-height: 1em;
                color: #ffffff;
                margin-top: -175px;
                font-weight: 500;
            }

            .about-section .image-column .inner-column {
                position: relative;
                padding-left: 120px;
                padding-bottom: 125px;
            }

            .about-section .image-column .inner-column:before {
                position: absolute;
                left: -75px;
                top: 65px;
                height: 520px;
                width: 520px;
                background-image: url(https://i.ibb.co/fxJ1jtC/about-circle-1.png);
                content: "";
            }

            .about-section .image-column .image-1 {
                position: relative;
            }

            .about-section .image-column .image-2 {
                position: absolute;
                left: 0;
                bottom: 0;
            }

            .about-section .image-column .image-2 img,
            .about-section .image-column .image-1 img {
                box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
            }

            .about-section .image-column .video-link {
                position: absolute;
                left: 70px;
                top: 170px;
            }

            .about-section .image-column .video-link .link {
                position: relative;
                display: block;
                font-size: 22px;
                color: #191e34;
                font-weight: 400;
                text-align: center;
                height: 100px;
                width: 100px;
                line-height: 100px;
                background-color: #ffffff;
                border-radius: 50%;
                box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
                -webkit-transition: all 300ms ease;
                -moz-transition: all 300ms ease;
                -ms-transition: all 300ms ease;
                -o-transition: all 300ms ease;
                transition: all 300ms ease;
            }

            .about-section .image-column .video-link .link:hover {
                background-color: #191e34;
                color: #fff;
            }
        </style>


        <div class="movie-details-wrap section-ptb-50 section-padding-lr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-about">
                            <div class="box">
                                <div class="content">
                                    <h2>01</h2>
                                    <h3>VISIÓN</h3>
                                    <p>
                                        El Centro de Actualización Profesional CAP será reconocida como una de las mejores
                                        entidades a nivel nacional debido a la calidad de sus productos académicos y
                                        contribución con el desarrollo de la sociedad.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-about">
                            <div class="box">
                                <div class="content">
                                    <h2>02</h2>
                                    <h3>MISIÓN</h3>
                                    <p>
                                        Formar profesionales idóneos con sentido humanista y científico, competitivos,
                                        creativos y comprometidos con el desarrollo socioeconómico del país. Contribuir en
                                        ampliar el saber mediante la capacitación constante en diversos programas como:
                                        diplomados, cursos y talleres.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card-about">
                            <div class="box">
                                <div class="content">
                                    <h2>03</h2>
                                    <h3>VALORES</h3>
                                    <p>
                                        <b>• Excelencia Académica:</b> Es alcanzar el máximo logro de aprendizaje en todos y
                                        cada uno de los alumnos logrando una formación futura.
                                        <br>
                                        <b>• Equidad:</b> Proporcionar un trato justo en el trabajo, sin importar género,
                                        raza,
                                        discapacidades u otras características personales.
                                        <br>
                                        <b>• Ética:</b> Conjunto de normas morales que rigen la conducta de acciones de la
                                        empresa.
                                        <br>
                                        <b>• Liderazgo:</b> Establecer una meta común, inspirar al equipo de trabajo,
                                        retarlos y
                                        seguir avanzando.
                                        <br>
                                        <b>• Innovación:</b> Nos valemos del aprendizaje y la creatividad para encontrar
                                        nuevas
                                        formas de enseñanza generando un sistema de mejora continua.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    .card-about {
                        position: relative;
                        min-width: 320px;
                        height: 440px;
                        box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
                            inset -5px -5px 15px rgba(255, 255, 255, 0.1),
                            5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
                        border-radius: 15px;
                        margin: 30px;
                        transition: 0.5s;
                    }

                    .card-about:nth-child(1) .box .content a {
                        background: #2196f3;
                    }

                    .card-about:nth-child(2) .box .content a {
                        background: #e91e63;
                    }

                    .card-about:nth-child(3) .box .content a {
                        background: #23c186;
                    }

                    .card-about .box {
                        position: absolute;
                        top: 20px;
                        left: 20px;
                        right: 20px;
                        bottom: 20px;
                        background: #2a2b2f;
                        border-radius: 15px;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        overflow: hidden;
                        transition: 0.5s;
                    }

                    .card-about .box:hover {
                        transform: translateY(-50px);
                    }

                    .card-about .box:before {
                        content: "";
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 50%;
                        height: 100%;
                        background: rgba(255, 255, 255, 0.03);
                    }

                    .card-about .box .content {
                        padding: 20px;
                        text-align: center;
                    }

                    .card-about .box .content h2 {
                        position: absolute;
                        top: -10px;
                        right: 30px;
                        font-size: 8rem;
                        color: rgba(255, 255, 255, 0.1);
                    }

                    .card-about .box .content h3 {
                        font-size: 1.8rem;
                        color: #fff;
                        z-index: 1;
                        transition: 0.5s;
                        margin-bottom: 15px;
                    }

                    .card-about .box .content p {
                        font-size: 1rem;
                        font-weight: 300;
                        color: rgba(255, 255, 255, 0.9);
                        z-index: 1;
                        transition: 0.5s;
                    }

                    .card-about .box .content a {
                        position: relative;
                        display: inline-block;
                        padding: 8px 20px;
                        background: black;
                        border-radius: 5px;
                        text-decoration: none;
                        color: white;
                        margin-top: 20px;
                        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
                        transition: 0.5s;
                    }

                    .card-about .box .content a:hover {
                        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
                        background: #fff;
                        color: #000;
                    }
                </style>
            </div>
        </div>
        {{-- <div class="movie-list section-pb-50">
            <div class="container">
                <div class="section-title-4 st-border-bottom">
                    <h2>Season 1</h2>
                </div>
                <div class="movie-slider-active-3 nav-style-3">
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-30.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Love Of Mine</a></h3>
                                <span>Episode: 01</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-31.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Love Of Mine</a></h3>
                                <span>Episode: 02</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-32.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Love Of Mine</a></h3>
                                <span>Episode: 03</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-33.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Love Of Mine</a></h3>
                                <span>Episode: 04</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-34.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Love Of Mine</a></h3>
                                <span>Episode: 05</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <x-courses-new />
        <br>
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
