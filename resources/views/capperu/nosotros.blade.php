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
                    <h2>¿Quienes Somos?</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
    
    
    
    <!-- Bienvenidos Area Start-->
    <x-capperu.bienvenidos-area></x-capperu.bienvenidos-area>
    <!-- Bienvenidos Area End -->

    
    <!-- Visión, Misión, Valores - Start-->
    <x-capperu.vision-mision-valores-area></x-capperu.vision-mision-valores-area>
    <!-- Visión, Misión, Valores - End -->


    
    <!-- Más Populares Area Start-->
    <x-capperu.programas-populares-area></x-capperu.programas-populares-area>
    <!-- Más Populares Area End -->



    <x-capperu.footer-area></x-capperu.footer-area>

@endsection