@extends('layouts.webpage')

@section('content')

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <!-- header area start -->
        <x-header />
        <!-- slider area start -->

        <!-- Breadcrumb -->
        <div class="breadcrumb-area breadcrumb-modify-padding bg-black-3">
            <div class="container">
                <div class="in-breadcrumb">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumb-style-2">
                                <h2>Programas de Especialización</h2>
                                <!-- breadcrumb-list start -->
                                {{-- <ul class="breadcrumb-list-2">
                                    <li>Total 5 Episodes</li>
                                    <li>1 hr 45 Min</li>
                                    <li>2021</li>
                                    <li>Romantic Drama</li>
                                </ul> --}}
                                <!-- breadcrumb-list end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Banner Area Start-->
        {{-- <section class="breadcrumb-area"
            style="background-image: url('{{ asset('themes/webpage/assets/images/bg/breadcrumb-bg-1.jpg') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h2 class="breadcrumb-title">Catálogo de Cursos</h2>
                            <ul class="breadcrumb-list">
                                <li><a href="{{ route('web_home') }}">Home</a></li>
                                <li>Catálogo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Banner Area End -->

        <!-- Catalog Area Start -->
        <div class="catalog-area section-padding-lr section-pt-50 section-pb-50">
            <div class="container-fluid">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-lg-3" data-aos="fade-right">
                        <aside class="sidebar-widget">
                            <h4 class="sidebar-title">Categorías</h4>
                            <ul class="category-list">
                                <li><a href="{{ route('web_catalog') }}" class="{{ request()->is('catalogo') && !request()->has('category') ? 'active' : '' }}">Todas las categorías</a></li>
                                @foreach ($categories as $category)
                                    <li><a href="{{ route('web_catalog', ['category' => $category->id]) }}" class="{{ request('category') == $category->id ? 'active' : '' }}">{{ $category->description }}</a></li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                    <!-- Main Content -->
                    <div class="col-lg-9">
                        <div class="section-title-4">
                            <h2>Nuestros Cursos</h2>
                        </div>
                        <div class="row">
                            @forelse ($courses as $course)
                                <!-- Single Course Card -->
                                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="movie-wrap text-center">
                                        <div class="movie-img">
                                            <a href="{{ route('web_program_description', $course->id) }}">
                                                <img src="{{ asset($course->image) }}" alt="{{ $course->name }}">
                                            </a>
                                        </div>
                                        <div class="movie-content">
                                            <h3 class="title"><a href="{{ route('web_program_description', $course->id) }}">{{ $course->name }}</a></h3>
                                            <span>Sector: {{ $course->course->category->description ?? 'N/A' }}</span>
                                            <div class="movie-btn">
                                                <a href="{{ route('web_program_description', $course->id) }}" class="btn-style-hm4-2 animated">Más Información</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <p>No se encontraron cursos.</p>
                                </div>
                            @endforelse
                        </div>
                        <!-- Pagination -->
                        <div class="pagination-style-1" data-aos="fade-up">
                            {{ $courses->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Catalog Area End -->


        <div data-aos="fade-up" data-aos-duration="1000">
            <x-footer />
        </div>


        <!-- Modal -->
        {{-- <div class="modal fade" id="exampleModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="subscribe-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="zmdi zmdi-close s-close"></i></button>
                    </div>
                    <div class="modal-body">
                        <h5 id="exampleModalLabel">Ready to watch? Enter your email to create or restart your
                            membership.</h5>
                        <div class="create-membership-wrap modify">
                            <input placeholder="Email Address">
                            <button class="landing-btn-style" type="button">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- Main Wrapper End -->
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            mirror: true,
            once: false
        });
    </script>
    <style>
        .breadcrumb-area {
            padding: 80px 0;
        }

        .breadcrumb-content h2 {
            color: #fff;
            font-size: 48px;
        }

        .breadcrumb-content .breadcrumb-list {
            color: #eee;
        }

        .breadcrumb-content .breadcrumb-list a {
            color: #fff;
        }

        .sidebar-widget {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 8px;
            border: 1px solid #e9ecef;
        }

        .sidebar-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e4a800;
            /* Accent color */
            color: #333;
        }

        .category-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .category-list li {
            margin-bottom: 10px;
        }

        .category-list a {
            display: block;
            padding: 10px 15px;
            color: #555;
            font-weight: 500;
            border-radius: 5px;
            transition: all 0.3s ease;
            text-decoration: none;
            border-left: 3px solid transparent;
        }

        .category-list a:hover,
        .category-list a.active {
            background-color: #e9ecef;
            color: #000;
            border-left: 3px solid #e4a800;
        }

        .movie-wrap {
            margin-bottom: 30px;
            border: 1px solid #eee;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.3s ease;
            background: #fff;
        }

        .movie-wrap:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
        }

        .movie-wrap .movie-img img {
            width: 100%;
            height: 200px;
            /* Fixed height for consistency */
            object-fit: cover;
        }

        .movie-wrap .movie-content {
            padding: 20px;
        }

        .movie-wrap .movie-content .title {
            font-size: 18px;
            min-height: 44px;
            /* To align titles with 1 or 2 lines */
        }

        .movie-wrap .movie-content span {
            font-size: 14px;
            color: #777;
            margin-bottom: 15px;
            display: block;
        }

        .pagination-style-1 {
            margin-top: 30px;
        }
    </style>

@endsection