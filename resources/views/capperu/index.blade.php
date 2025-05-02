@extends('layouts.capperu')

@section('content')

    <!-- preloader area start -->
    <x-capperu.preloader-area></x-capperu.preloader-area>
    <!-- preloader area end -->
    <!-- Modal-->
    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" 
            style="display: flex; justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 20%;">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <img style="width: 100%;" src="{{ asset($popup[0]->content) }}" alt="">
            </div>
            <div class="modal-footer">
              <a href="{{ $popup[1]->content }}" type="button" class="btn btn-secondary">Más Información</a>
              <a href="{{ $popup[2]->content }}" type="button" class="btn btn-primary">Matricularse</a>
            </div>
          </div>
        </div>
    </div>
    {{-- <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" >
        <div class="modal-content" style="width: 100%;">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Promoción del Mes</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <img style="width: 100%;" src="images/promo/diplomado.jpg" alt="">
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="https://forms.gle/y1HZf5UBxZYFxs5G6" class="main-btn">inscribete</a>
            </div>
        </div>
        </div>
    </div> --}}
     

    <x-capperu.body-overlay-area></x-capperu.body-overlay-area>

    <!-- search popup area start -->
    <x-capperu.search-popup-area></x-capperu.search-popup-area>
    <!-- //. search Popup -->

    <!-- Encabezado inicio -->
    <x-capperu.header-area></x-capperu.header-area>
    <!-- Encabezado fin -->


    <!-- Banner Area Start-->
    {{-- <section class="banner-area style-3"
        style="background-image: url({{ asset('themes/capperu/assets/img/elearning.jpg') }}); margin-top: 90px;">
        <br>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 align-self-center">
                    <div class="banner-inner text-center">
                        <h1>¿En que deseas especializarte?</h1>
                        <div class="banner-content">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <p class="text-center">Puedes acceder a más de 150 cursos y más de 30 diplomados especializados.</p>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Banner Area End -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-top: 160px;">
        <div class="carousel-inner">
            {{-- @foreach ($sliders as $key => $slide)
            <div class="carousel-item {{ $key==0 ? 'active' : '' }}">
                <a href="https://www.capperu.com/descripcion-programa/105"><img src="{{ $slide->content }}" class="d-block w-100" alt="..."></a>
            </div>
            @endforeach --}}
            @foreach ($sliders as $key => $slide)
            <div class="carousel-item {{ $key==0 ? 'active' : '' }}">
                <a href="{{ $slide->item->items[1]->content }}">
                    <img src="{{ $slide->item->items[0]->content }}" class="d-block w-100" alt="...">
                </a>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-top: 160px;">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('themes/capperu/assets/img/elearning2.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('themes/capperu/assets/img/elearning2.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('themes/capperu/assets/img/elearning2.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div> --}}

    <script>
        var myCarousel = document.querySelector('#myCarousel')
        var carousel = new bootstrap.Carousel(myCarousel)
    </script>

    <!-- intro Area Start-->
    {{-- <div class="container">
        <div class="intro-area-2">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="intro-slider owl-carousel">
                        <div class="item">
                            <a href="{{ route('web_categoria_sector', "Empresarial") }}">
                                <div class="single-intro-wrap">
                                    <div class="thumb">
                                        <img src="{{ asset('themes/capperu/assets/img/intro/001.png') }}" alt="img">
                                    </div>
                                    <div class="wrap-details">
                                        <h6><a href="{{ route('web_categoria_sector', "Empresarial") }}">Empresarial</a></h6>
                                        <!--<p>236 Programas</p>-->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ route('web_categoria_sector', "Derecho") }}">
                                <div class="single-intro-wrap">
                                    <div class="thumb">
                                        <img src="{{ asset('themes/capperu/assets/img/intro/004.png') }}" alt="img">
                                    </div>
                                    <div class="wrap-details">
                                        <h6><a href="{{ route('web_categoria_sector', "Derecho") }}">Derecho</a></h6>
                                        <!--<p>236 Programas</p>-->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="{{ route('web_categoria_sector', "Publico") }}">
                                <div class="single-intro-wrap">
                                    <div class="thumb">
                                        <img src="{{ asset('themes/capperu/assets/img/intro/005.png') }}" alt="img">
                                    </div>
                                    <div class="wrap-details">
                                        <h6><a href="#">Público</a></h6>
                                        <!--<p>236 Programas</p>-->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- intro Area End -->

    <br>
    <!-- enllor courses Area Start-->

    {{-- <section class="enllor-courses-area pd-top-50 pd-bottom-100">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4>Programas de Especialización</h4>
                        <div class="ara-linea-cap"></div>
                    </div>
                </div>
                @if (count($programs) > 0)
                    @foreach ($programs as $key => $program)
                        <div class="col-md-3">
                            <div class="single-course-wrap" style="background-color: #F9FAFD;">
                                <div class="thumb ara-portada-programas-exterior">
                                    <a href="{{ route('web_categoria_programa_cursos') }}" class="cat cat-blue" style="font-size: 16px;">
                                        {{ $program->additional }}
                                    </a>
                                    <a  href="{{ route('web_descripcion_programa', $program->id) }}">
                                        <img class="img" src="{{ asset($program->image) }}" alt="img">
                                    </a>
                                </div>
                                <div class="wrap-details">
                                    <h6 title="{{ $program->name }}" class="texto-oculto2">
                                        <a href="{{ route('web_descripcion_programa', $program->id) }}">{{ $program->name }}</a>
                                    </h6>
                                    <div>
                                        <p class="texto-oculto3">{{ $program->description }}</p>
                                    </div>
                                    <div class="user-area" style="padding: 3px;">
                                        <div class="user-details">
                                            <img style="width: 30px; height: 30px; border-radius: 50%;" src="{{ $program->avatar }}" alt="img">
                                            <a href="{{ route('web_perfil_docente', $program->teacher_id) }}">{{ $program->teacher }}</a>
                                        </div>
                                        <div class="user-rating">
                                            <span style="color:orange;">
                                                <i class="fa fa-users"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="user-area" style="padding: 3px;">
                                        <div class="user-details">
                                            <a href="">
                                                <span style="color:orange;">
                                                    Sector:
                                                </span>
                                                <br>
                                                <b>{{ $program->category_description }}</b>
                                            </a>
                                        </div>
                                        <div class="user-rating">
                                            <a href="">
                                                <span style="color:orange;">
                                                    <i>Modalidad:</i>
                                                </span>
                                                <br>
                                                <b>
                                                    <div style="text-align: right;">{{ $program->additional1 }}</div>
                                                </b>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="price-wrap">
                                        <div class="row align-items-center">
                                            <div class="col-md-12">
                                                <button
                                                    onclick="agregarAlCarrito({ id: {{ $program->id }}, nombre: '{{ $program->name }}', precio: {{ $program->price }} })"
                                                    class="btn btn-primary">
                                                    <i class="fa fa-cart-plus"></i>
                                                    Comprar Ahora S/. {{ $program->price }}
                                                </button>
                                                <div id="wallet_container"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            {{ $programs->links() }}
        </div>
    </section> --}}

    {{-- <section class="enllor-courses-area pd-top-50 pd-bottom-100">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5 style="font-weight: 700; color: #8B0E06;">Programas de Especialización</h5>
                        <div class="ara-linea-cap"></div>
                    </div>
                </div>
                @if (count($programs) > 0)
                    @foreach ($programs as $key => $program)
                        <div class="col-md-3">
                            <div class="single-course-wrap  box-zoom" style="background-color: #F9FAFD;">
                                <a  href="{{ route('web_descripcion_programa', $program->id) }}">
                                    <img class="img" src="{{ asset($program->image) }}" alt="img">
                                    <h6 title="{{ $program->name }}" class="texto-oculto2"
                                        style="background: #8B0E06; color: #fff; padding: 15px;">
                                        <a href="{{ route('web_descripcion_programa', $program->id) }}" style="font-size: 14px;">
                                            {{ $program->name }}
                                        </a>
                                    </h6>
                                    <style>
                                        h6 a:hover{
                                            color: #FAC823;
                                        }
                                    </style>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            {{ $programs->links() }}
        </div>
    </section> --}}
    <!-- enllor courses Area End -->

    <section style="padding: 40px 0px 90px 0px;">
        <div class="section-title" style="padding: 0px 80px;">
            <h5 style="font-weight: 700; color: #8B0E06;">Programas de Especialización</h5>
            <div class="ara-linea-cap"></div>
        </div>
        <div class="grid-container">
            @if (count($programs) > 0)
                @foreach ($programs as $key => $program)
                <div class="grid-item">
                    <div class="single-course-wrap  box-zoom" style="background-color: #F9FAFD;">
                        <a  href="{{ route('web_descripcion_programa', $program->id) }}">
                            <img class="img" src="{{ asset($program->image) }}" alt="img">
                            <h6 title="{{ $program->name }}" class="texto-oculto2"
                                style="background: #8B0E06; color: #fff; padding: 15px;">
                                <a href="{{ route('web_descripcion_programa', $program->id) }}" style="font-size: 14px;">
                                    {{ $program->name }}
                                </a>
                            </h6>
                            <style>
                                h6 a:hover{
                                    color: #FAC823;
                                }
                            </style>
                        </a>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
        <div class="container" style="text-align: center;">
            {{ $programs->links() }}
        </div>
        
        <style>
            .grid-container {
            display: grid;
            gap: 10px;
            grid-template-columns: repeat(5, 1fr);
            grid-template-rows: repeat(3, auto);
            width: 100%;
            padding: 20px 80px;
            /* max-width: 600px; */
            }

            .grid-item {
            /* background-color: #007bff; */
            color: white;
            text-align: center;
            padding: 20px;
            border-radius: 5px;
            }

            /* Responsive Design for Mobile */
            @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: repeat(1, 1fr);
                grid-template-rows: repeat(1, auto);
                width: 98%;
                padding: 5px;
            }

            .grid-item {
                padding: 10px;
            }
            }
        </style>
    </section>

    <!-- Más Populares Area Start-->
    <x-capperu.programas-populares-area></x-capperu.programas-populares-area>
    <!-- Más Populares Area End -->

    <!-- Nuestros Beneficios Area Start-->
    <x-capperu.nuestros-beneficios-area></x-capperu.nuestros-beneficios-area>
    <!-- Nuestros Beneficios Area End -->

    <!-- Testimonios Area Start-->
    <x-capperu.testimonios-area></x-capperu.testimonios-area>
    <!-- Testimonios Area End -->

    <!-- Convenios Area - HOME - Start-->
    <x-capperu.convenios-area-home></x-capperu.convenios-area-home>
    <!-- Convenios Area - HOME - End -->

    <!-- Banner Area Start-->
    <section class="banner-area style-4 bg-gray-2" style="padding: 80px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 align-self-center">
                    <div class="banner-inner">
                        <h1>
                            Perfil público del
                            <span class="bottom-line">
                                Estudiante
                                <img src="{{ asset('themes/capperu/assets/img/banner/4.png') }}" alt="img">
                            </span>
                        </h1>

                        <form action="{{ route('web_alumnos') }}" method="POST">
                            @csrf
                            <div class="newslatter-inner mt-xl-4 me-xl-5">
                                <input type="text" name="search" id="search" placeholder="Ingresar nombres o apellidos del alumno">
                                <button type="submit" class="btn btn-base">Buscar</button>
                            </div>
                        </form>

                        <div class="banner-multi-user mt-xl-5 mt-4">
                            <div class="media">
                                <div class="media-left me-3">
                                    <img src="{{ asset('themes/capperu/assets/img/banner/5.png') }}" alt="img">
                                </div>
                                <div class="media-body align-self-center">
                                    Record de certificados
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            <br>

        </div>
        <script>
          document.addEventListener('DOMContentLoaded', function() {
        // Enfocar al componente con id="results" si existe
        var resultsComponent = document.getElementById('results');
        if (resultsComponent) {
            resultsComponent.focus();
        }
        });
            </script>
    </section>
    <!-- Banner Area End -->

    <x-capperu.footer-area></x-capperu.footer-area>


@endsection
