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
                    <h2>Convenios</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <section style="padding: 80px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3"> 
                    <a href="">
                        <img style="100%;" src="{{ asset('themes/capperu/assets/img/convenios/logoIng.png') }}" alt="img">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img style="100%;" src="{{ asset('themes/capperu/assets/img/convenios/logoCallao.png') }}" alt="img">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img style="100%;" src="{{ asset('themes/capperu/assets/img/convenios/logoAdm.png') }}" alt="img">
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="">
                        <img style="100%;" src="{{ asset('themes/capperu/assets/img/convenios/logoUnhv.png') }}" alt="img">
                    </a>
                </div>
            </div>
        </div>

    </section>


    
    <!-- Más Populares Area Start-->
    <x-capperu.programas-populares-area></x-capperu.programas-populares-area>
    <!-- Más Populares Area End -->



    <x-capperu.footer-area></x-capperu.footer-area>

@endsection