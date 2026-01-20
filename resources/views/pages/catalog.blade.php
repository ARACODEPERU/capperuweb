@extends('layouts.webpage')

@section('content')

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <!-- header area start -->
        <x-header />
        <!-- slider area start -->

        {{-- <div class="breadcrumb-area breadcrumb-modify-padding bg-black-3">
            <div class="container">
                <div class="in-breadcrumb">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumb-style-2">
                                <h2>Programas de Especialización</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="catalog-area section-padding-lr section-pt-50 section-pb-50">
            <div class="container-fluid">
                <div class="row">
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
                    <div class="col-lg-9">
                        <div class="section-title-4">
                            <h2>Nuestros Cursos</h2>
                        </div>
                        <div class="row">
                            @forelse ($courses as $course)
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
                        <div class="pagination-style-1" data-aos="fade-up">
                            {{ $courses->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- ============================================================== -->
        <!-- SEPARADOR PARA COMPARACIÓN (BORRAR LUEGO) -->
        <!-- ============================================================== -->
        {{-- <div style="background: #000; color: #fff; padding: 40px; text-align: center; margin: 50px 0;">
            <h2>⬇️ PROPUESTA DE DISEÑO MODERNO ⬇️</h2>
            <p>Encabezado Hero, Sidebar estilizado y Tarjetas de curso con efecto hover.</p>
        </div> --}}

        <!-- ============================================================== -->
        <!-- INICIO PROPUESTA MODERNA -->
        <!-- ============================================================== -->
        <style>
            /* Hero Section Styles (Igual que Contacto) */
            .catalog-hero {
                background: linear-gradient(180deg, #111 0%, #2a2a2a 100%);
                padding: 100px 0 180px; /* Espacio extra abajo para el efecto overlap */
                text-align: center;
                color: #fff;
                position: relative;
            }
            .catalog-hero h1 { font-size: 3.5rem; font-weight: 800; margin-bottom: 15px; color: #fff; }
            .catalog-hero p { font-size: 1.2rem; color: rgba(255,255,255,0.7); max-width: 600px; margin: 0 auto 25px; }
            
            .modern-breadcrumb { display: inline-flex; list-style: none; padding: 10px 25px; background: rgba(255,255,255,0.05); border-radius: 50px; margin: 0; border: 1px solid rgba(255,255,255,0.1); }
            .modern-breadcrumb li { color: #fff; font-size: 0.9rem; font-weight: 500; }
            .modern-breadcrumb li a { color: #ccc; text-decoration: none; transition: 0.3s; }
            .modern-breadcrumb li a:hover { color: #fff; }
            .modern-breadcrumb li + li::before { content: '/'; margin: 0 10px; color: #555; }
            .modern-breadcrumb li span { color: #ce1212; }

            /* Contenedor Principal con Overlap */
            .catalog-container-overlap { margin-top: -100px; position: relative; z-index: 10; padding-bottom: 80px; }

            /* Sidebar Moderno */
            .modern-sidebar { background: #fff; padding: 30px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border: 1px solid #eee; }
            .modern-sidebar h4 { font-weight: 800; margin-bottom: 25px; font-size: 1.2rem; color: #222; position: relative; padding-bottom: 15px; }
            .modern-sidebar h4::after { content: ''; position: absolute; bottom: 0; left: 0; width: 40px; height: 3px; background: #ce1212; border-radius: 2px; }
            
            .modern-category-list { list-style: none; padding: 0; margin: 0; }
            .modern-category-list li { margin-bottom: 8px; }
            .modern-category-list a { display: flex; justify-content: space-between; align-items: center; padding: 12px 15px; background: #f8f9fa; border-radius: 8px; color: #555; text-decoration: none; transition: all 0.3s ease; font-weight: 500; font-size: 0.95rem; }
            .modern-category-list a:hover, .modern-category-list a.active { background: #ce1212; color: #fff; transform: translateX(5px); box-shadow: 0 4px 10px rgba(206, 18, 18, 0.2); }
            .modern-category-list a i { font-size: 0.8rem; opacity: 0.7; }

            /* Tarjetas de Curso Modernas */
            .modern-course-card { background: #fff; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.05); transition: all 0.3s ease; height: 100%; border: 1px solid #f0f0f0; display: flex; flex-direction: column; }
            .modern-course-card:hover { transform: translateY(-10px); box-shadow: 0 20px 40px rgba(0,0,0,0.12); border-color: transparent; }
            
            .course-img-wrapper { position: relative; overflow: hidden; height: 220px; flex-shrink: 0; }
            .course-img-wrapper img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
            .modern-course-card:hover .course-img-wrapper img { transform: scale(1.1); }
            
            .course-badge { position: absolute; top: 15px; left: 15px; background: rgba(255,255,255,0.95); color: #ce1212; padding: 6px 14px; border-radius: 30px; font-size: 0.75rem; font-weight: 700; box-shadow: 0 4px 10px rgba(0,0,0,0.1); text-transform: uppercase; letter-spacing: 0.5px; }

            .course-content { padding: 25px; flex-grow: 1; display: flex; flex-direction: column; }
            .course-content h3 { font-size: 1.15rem; font-weight: 700; margin-bottom: 15px; line-height: 1.4; color: #222; }
            .course-content h3 a { color: inherit; text-decoration: none; transition: 0.3s; }
            .course-content h3 a:hover { color: #ce1212; }
            
            .course-footer { margin-top: auto; padding-top: 20px; border-top: 1px solid #f5f5f5; display: flex; align-items: center; justify-content: space-between; }
            .btn-course-link { color: #ce1212; font-weight: 700; font-size: 0.9rem; text-decoration: none; display: inline-flex; align-items: center; transition: 0.3s; }
            .btn-course-link i { margin-left: 5px; transition: 0.3s; }
            .btn-course-link:hover i { transform: translateX(5px); }
        </style>

        <!-- HERO SECTION -->
        <div class="catalog-hero">
            <div class="container">
                <h1>Catálogo de Cursos</h1>
                <p>Explora nuestros programas de especialización y lleva tu carrera al siguiente nivel.</p>
                <ul class="modern-breadcrumb">
                    <li><a href="{{ route('web_home') }}">Inicio</a></li>
                    <li><span>Catálogo</span></li>
                </ul>
            </div>
        </div>

        <!-- CONTENIDO PRINCIPAL (OVERLAP) -->
        <div class="container catalog-container-overlap">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-3 mb-4" data-aos="fade-right">
                    <aside class="modern-sidebar">
                        <h4>Categorías</h4>
                        <ul class="modern-category-list">
                            <li>
                                <a href="{{ route('web_catalog') }}" class="{{ request()->is('catalogo') && !request()->has('category') ? 'active' : '' }}">
                                    Todas las categorías <i class="fa fa-chevron-right"></i>
                                </a>
                            </li>
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('web_catalog', ['category' => $category->id]) }}" class="{{ request('category') == $category->id ? 'active' : '' }}">
                                        {{ $category->description }} <i class="fa fa-chevron-right"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </aside>
                </div>

                <!-- Grid de Cursos -->
                <div class="col-lg-9">
                    <div class="row g-4"> <!-- g-4 añade espacio entre columnas y filas -->
                        @forelse ($courses as $course)
                            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="modern-course-card">
                                    <div class="course-img-wrapper">
                                        <a href="{{ route('web_program_description', $course->id) }}">
                                            <img src="{{ asset($course->image) }}" alt="{{ $course->name }}">
                                        </a>
                                        <span class="course-badge">{{ $course->course->category->description ?? 'Curso' }}</span>
                                    </div>
                                    <div class="course-content">
                                        <h3><a href="{{ route('web_program_description', $course->id) }}">{{ $course->name }}</a></h3>
                                        <div class="course-footer">
                                            <a href="{{ route('web_program_description', $course->id) }}" class="btn-course-link">
                                                Más Información <i class="fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12 text-center py-5">
                                <h4 class="text-muted">No se encontraron cursos en esta categoría.</h4>
                            </div>
                        @endforelse
                    </div>
                    
                    <!-- Paginación -->
                    <div class="pagination-style-1 mt-5" data-aos="fade-up">
                        {{ $courses->links() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- FIN PROPUESTA MODERNA -->
        <!-- ============================================================== -->

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