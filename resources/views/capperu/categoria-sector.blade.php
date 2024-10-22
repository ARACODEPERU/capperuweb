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
    <section class="head-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><b>Sector:</b>  {{ ucfirst($sector) }}</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->


    
    <!-- trending courses Area Start-->
    <section class="trending-courses-area pd-top-135 pd-bottom-130">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="single-course-wrap">
                                <div class="thumb">
                                    <a href="{{ route ('web_sectors', [$sector, 'Curso']) }}">
                                        <img src="{{ asset('themes/capperu/assets/img/course/1.png') }}" alt="img">
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ route ('web_sectors', [$sector, 'Curso']) }}" class="btn btn-base" style="width: 100%; text-align:center; border-radius: 0px;">
                                            CURSOS DEL SECTOR <b>{{ strtoupper($sector) }}</b>  
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single-course-wrap">
                                <div class="thumb">
                                    <a href="{{ route ('web_sectors', [$sector, 'Diplomado']) }}">
                                        <img src="{{ asset('themes/capperu/assets/img/course/5.png') }}" alt="img">
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ route ('web_sectors', [$sector, 'Diplomado']) }}" class="btn btn-base2" style="width: 100%; text-align:center; border-radius: 0px;">
                                        DIPLOMADOS DEL SECTOR <b>{{ strtoupper($sector) }}</b>      
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <!-- trending courses Area End -->

    
    <!-- Más Populares Area Start-->
    <x-capperu.programas-populares-area></x-capperu.programas-populares-area>
    <!-- Más Populares Area End -->



    <x-capperu.footer-area></x-capperu.footer-area>

@endsection