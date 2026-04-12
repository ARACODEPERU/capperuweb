@extends('layouts.webpage')

@section('content')
    <div class="main-wrapper">

        <!-- header area start -->
        <x-header />

        <!-- slider area start -->
        <x-slider />


        <x-courses-new />

        <x-graduates />

        <x-courses />


        {{-- <div data-aos="zoom-in-up" data-aos-duration="1300">
            <x-promotion />
        </div> --}}
        
        <x-sector-business />

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
@endsection
