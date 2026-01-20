@extends('layouts.webpage')

@section('content')

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <div class="main-wrapper">

        <!-- header area start -->
        <x-header />
        <!-- slider area start -->

        <div data-aos="zoom-in" data-aos-duration="1200">
            <x-slider />
        </div>

        <div data-aos="fade-right" data-aos-duration="1500">
            <x-courses-new />
        </div>

        <div data-aos="fade-left" data-aos-duration="1500">
            <x-graduates />
        </div>

        <div data-aos="fade-up" data-aos-duration="1000">
            <x-courses />
        </div>

        <div data-aos="zoom-in-up" data-aos-duration="1300">
            <x-promotion />
        </div>

        <div data-aos="fade-right" data-aos-duration="1800">
            <x-sector-business />
        </div>

        <div data-aos="fade-right" data-aos-duration="2500">
            <x-sector-public />
        </div>

        <div data-aos="fade-left" data-aos-duration="2200">
            <x-sector-right />
        </div>

        <div data-aos="fade-up" data-aos-duration="1000">
            <x-brand-logos />
        </div>

        <div data-aos="fade-up" data-aos-duration="1000">
            <x-footer />
        </div>


    </div>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            mirror: true,
            once: false
        });
    </script>

@endsection
