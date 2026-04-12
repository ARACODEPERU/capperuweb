@extends('layouts.webpage')

@section('content')

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <!-- header area start -->
        <x-header />
        <!-- slider area start -->

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

        <div data-aos="fade-up" data-aos-duration="1000">
            <x-footer />
        </div>


    </div>
    <!-- Main Wrapper End -->
    
@endsection