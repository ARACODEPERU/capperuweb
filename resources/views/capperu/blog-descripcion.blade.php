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

    <!-- breabcrumb Area Start-->
    <section class="breadcrumb-area" style="background-color: #F9FAFD;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 align-self-center">
                    <ul class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detalles</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- breabcrumb Area End -->

    <div class="blog-details-area pd-bottom-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="author-area px-30">
                        <ul>
                            <li>
                                @if ($article->author->avatar)
                                    <img src="{{ asset($article->author->avatar) }}" style="width: 40px" alt="img" />
                                @else
                                    <img
                                        src="https://ui-avatars.com/api/?name={{ $article->author->name }}&size=40&rounded=true" />
                                @endif
                                {{ $article->author->name }}
                            </li>
                            <li>
                                @php
                                    $publication = \Carbon\Carbon::parse($article->created_at);

                                    $fechaFormateada = $publication->isoFormat('DD MMM YYYY');
                                @endphp
                                {{ $fechaFormateada }}
                            </li>
                            <li>{{ $article->category->description }}</li>
                        </ul>
                        <h2>{{ $article->title }}</h2>
                    </div>
                    <div class="thumb">
                        <img src="{{ asset($article->imagen) }}" alt="img">
                    </div>
                    <div class="px-30">
                        {!! $article->content_text !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Más Populares Area Start-->
    <x-capperu.programas-populares-area></x-capperu.programas-populares-area>
    <!-- Más Populares Area End -->



    <x-capperu.footer-area></x-capperu.footer-area>
@endsection
