@@ -0,0 +1,342 @@
@extends('layouts.capperu')

@section('content')

    <!-- preloader area start -->
    <x-capperu.preloader-area></x-capperu.preloader-area>
    <!-- preloader area end -->

    <x-capperu.body-overlay-area></x-capperu.body-overlay-area>

    <!-- search popup area start -->
    <x-capperu.search-popup-area></x-capperu.search-popup-area>
    <!-- //. search Popup -->

    <!-- Encabezado inicio -->
    <x-capperu.header-area></x-capperu.header-area>
    <!-- Encabezado fin -->


    <!-- Banner Area Start-->
    <section class="banner-area style-3" style="padding: 120px 0px; z-index: -1; background-image: url({{ asset('themes/capperu/assets/img/banner/bg-2.jpg') }});">
    </section>
    <!-- Banner Area End -->

    <!-- instructor Area Start-->
    <div class="pd-bottom-115" style="z-index: 9999999;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="instructor-details-area text-center">
                        <div class="thumb">
                            @if ($student[0]->student_image == null)
                                <img src="https://www.capperu.com/storage/uploads/students/20231206124645.png" alt="img">
                            @else
                                <img src="{{ $student[0]->student_image }}" alt="img">
                            @endif

                        </div>
                        <h3>{{ $student[0]->full_name }}
                        </h3>
                        <p>Alumno</p>

                        <ul class="achivement-fact">
                        </ul>

                        <div class="text-start px-30">
                            <h5> </h5>
                            <p> </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pd-top-120">
                    <h5>Lista de Diplomados y/o Cursos:</h5>
                    <br>
                    <div class="row">
                            @if (count($student)>0 && $student[0]->certificate_image !=null)
                                    @foreach ($student as $certificate)
                                    <div class="col-md-6">
                                        <div class="single-course-wrap">
                                            <div class="thumb">
                                                <a href="">
                                                    <a target="_blank" href="{{ $certificate->certificate_image }}"><img style="height: 260px; object-fit: cover;" src="{{ $certificate->certificate_image }}" alt="img"></a>
                                                </a>
                                            </div>
                                            <div class="wrap-details">
                                                <h6 title="" class="texto-oculto2">
                                                    <a href="">{{ $certificate->course }}</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                            @endif
                    </div>
                    {{-- <div class="row">
                        <div class="col-lg-12 text-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Nuevo</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div> --}}
                </div>
            </div>

        </div>
    </div>
    <!-- instructor Area End -->

    <!-- intro Area Start-->
    <div class="text-center pd-top-135 pd-top-50 pd-bottom-100" style="background-color: #F9FAFD;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h2>Nuestros Beneficios</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eget aenean accumsan bibendum gravida maecenas augue elementum et neque. Suspendisse imperdiet .</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-intro-wrap-2">
                        <div class="thumb">
                            <img style="width: 80px;" src="{{ asset('themes/capperu/assets/img/intro/convenio.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h4><a href="#">Convenios</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui praesent nam fermentum, est neque, dignissim. Phasellus feugiat elit vulputate convallis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-intro-wrap-2">
                        <div class="thumb">
                            <img style="width: 80px;" src="{{ asset('themes/capperu/assets/img/intro/aprender.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h4><a href="#">Campus Virtual</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui praesent nam fermentum, est neque, dignissim. Phasellus feugiat elit vulputate convallis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-intro-wrap-2">
                        <div class="thumb">
                            <img style="width: 80px;" src="{{ asset('themes/capperu/assets/img/intro/diploma.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h4><a href="#">Certificados</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dui praesent nam fermentum, est neque, dignissim. Phasellus feugiat elit vulputate convallis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- intro Area End -->

    <!-- Más Populares Area Start-->
    <x-capperu.programas-populares-area></x-capperu.programas-populares-area>
    <!-- Más Populares Area End -->



    <x-capperu.footer-area></x-capperu.footer-area>

@endsection
