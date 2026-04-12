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

        <x-sector-public />

        <x-sector-right />

        <x-brand-logos />

        <div data-aos="fade-up" data-aos-duration="1000">
            <x-footer />
        </div>


    </div>
@endsection
