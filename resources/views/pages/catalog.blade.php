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

                    <aside class="catalog-help" data-aos="fade-right" data-aos-delay="150">
                        <h5>¿Necesitas ayuda?</h5>
                        <p>Te asesoramos para elegir tu programa ideal.</p>
                        <a class="cta-btn whatsapp" href="https://api.whatsapp.com/send?phone=51977662460&text=Hola%20CapPeru!%20quiero%20informaci%C3%B3n%20sobre%20los%20programas" target="_blank" rel="noopener">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor" aria-hidden="true">
                                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                            </svg>
                            Hablar con un asesor
                        </a>
                    </aside>
                </div>

                <!-- Grid de Cursos -->
                <div class="col-lg-9">
                    @php
                        $activeCategory = request('category') ? $categories->firstWhere('id', request('category')) : null;
                    @endphp
                    <div class="catalog-toolbar" data-aos="fade-up">
                        <p class="catalog-count">
                            <strong>{{ $courses->total() }}</strong>
                            {{ $courses->total() === 1 ? 'programa encontrado' : 'programas encontrados' }}
                        </p>
                        @if ($activeCategory)
                            <a href="{{ route('web_catalog') }}" class="filter-chip" title="Limpiar filtro">
                                {{ $activeCategory->description }} <span>&times;</span>
                            </a>
                        @endif
                    </div>

                    <div class="row g-4"> <!-- g-4 añade espacio entre columnas y filas -->
                        @forelse ($courses as $course)
                            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="program-card">
                                    <div class="program-img">
                                        <a href="{{ route('web_program_description', $course->route_slug) }}">
                                            <x-webp-image src="{{ asset($course->image) }}" alt="{{ $course->name }}" class="w-100" />
                                        </a>
                                    </div>
                                    <div class="program-body">
                                        <h3 class="program-title">
                                            <a href="{{ route('web_program_description', $course->route_slug) }}">{{ $course->name }}</a>
                                        </h3>
                                        <div class="program-price">
                                            <span class="amount"><small>S/</small> {{ number_format($course->price, 0) }}</span>
                                        </div>
                                        <a href="{{ route('web_program_description', $course->route_slug) }}" class="program-btn">Más Información</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="catalog-empty" data-aos="fade-up">
                                    <div class="catalog-empty-icon" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="11" cy="11" r="8"/>
                                            <path d="m21 21-4.3-4.3"/>
                                        </svg>
                                    </div>
                                    <h4>No encontramos programas aquí</h4>
                                    <p>Prueba con otra categoría o explora el catálogo completo.</p>
                                    <a href="{{ route('web_catalog') }}" class="program-btn">Ver todo el catálogo</a>
                                </div>
                            </div>
                        @endforelse
                    </div>
                    
                    <!-- Paginación -->
                    <div class="pagination-style-1 mt-5" data-aos="fade-up">
                        {{ $courses->links('vendor.pagination.bootstrap-5') }}
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