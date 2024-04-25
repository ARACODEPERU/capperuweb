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
    <section class="banner-area style-3"
        style="padding: 80px; background-image: url({{ asset('themes/capperu/assets/img/elearning.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 align-self-center">
                    <div class="banner-inner text-center">
                        <h1>Blog & Noticias</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->



    <div class="blog-cat">
        <div class="category-navbar navbar-area mt-0 border-top-0">
            <nav class="navbar navbar-expand-lg">
                <div class="container nav-container">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav menu-open">
                            <li>
                                <h6 class="mb-0">Mantente siempre informado</h6>
                            </li>
                        </ul>
                        <div class="single-input-wrap bg-transparent">
                            <input type="text" placeholder="Search your best courses">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- blog Area Start-->
    <section class="pd-top-70 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($articles as $article)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="single-course-wrap">
                            <div class="thumb">
                                <img src="{{ asset($article->imagen) }}" alt="img">
                            </div>
                            <div class="wrap-details">
                                <h6><a href="{{ route('web_blog_descripcion', $article->url) }}">{{ $article->title }}</a>
                                </h6>
                                <p>{{ $article->description }}</p>
                                <div class="price-wrap">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <a href="#">{{ $article->author->name }}</a>
                                        </div>
                                        <div class="col-6 text-end">
                                            <div class="date">
                                                @php
                                                    $publication = \Carbon\Carbon::parse($article->created_at);

                                                    $fechaFormateada = $publication->isoFormat('DD MMM YYYY');
                                                @endphp
                                                {{ $fechaFormateada }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                {{ $articles->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </section>
    <!-- blog Area End -->



    <!-- Más Populares Area Start-->
    <x-capperu.programas-populares-area></x-capperu.programas-populares-area>
    <!-- Más Populares Area End -->



    <x-capperu.footer-area></x-capperu.footer-area>
@endsection
