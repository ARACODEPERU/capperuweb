@extends('layouts.webpage')

@section('content')

    <div class="main-wrapper">

        <!-- header area start -->
        <x-header />
        <!-- slider area start -->

        <!-- HERO SECTION -->
        <div class="catalog-hero">
            <div class="container">
                <h1>Perfil público del Estudiante</h1>
                <p>Busca por nombres o apellidos y valida la autenticidad de tus certificados.</p>
                <ul class="modern-breadcrumb">
                    <li><a href="{{ route('web_home') }}">Inicio</a></li>
                    <li><span>Verificar</span></li>
                </ul>
            </div>
        </div>

        <!-- CONTENIDO PRINCIPAL (OVERLAP) -->
        <div class="container catalog-container-overlap">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="verify-card" data-aos="fade-up">
                        <form action="{{ route('web_alumnos') }}" method="POST" role="search">
                            @csrf
                            <div class="verify-search">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="11" cy="11" r="8"/>
                                    <path d="m21 21-4.3-4.3"/>
                                </svg>
                                <input type="text" name="search" id="search" value="{{ request('search') }}"
                                    placeholder="Ingresar nombres o apellidos del alumno" required minlength="3"
                                    aria-label="Buscar alumno por nombres o apellidos">
                                <button type="submit" class="verify-btn">Buscar</button>
                            </div>
                        </form>

                        <div class="verify-proof">
                            <img src="{{ asset('themes/capperu/assets/img/banner/5.png') }}" alt="Egresados certificados">
                            <span>Récord de certificados verificables en línea</span>
                        </div>

                        @if (count($results) > 0)
                            <p class="verify-count" role="status">
                                <strong>{{ count($results) }}</strong>
                                {{ count($results) === 1 ? 'resultado encontrado' : 'resultados encontrados' }}
                            </p>
                            <ul class="verify-list">
                                @foreach ($results as $student)
                                    @php
                                        $initials = collect(explode(' ', trim($student->full_name)))->filter()->map(fn($w) => mb_strtoupper(mb_substr($w, 0, 1)))->take(2)->implode('');
                                    @endphp
                                    <li class="verify-item">
                                        <span class="verify-avatar" aria-hidden="true">{{ $initials }}</span>
                                        <span class="verify-name">{{ $student->full_name }}</span>
                                        <a href="{{ route('web_perfil_alumno', $student->id) }}" target="_blank" rel="noopener" class="program-btn verify-view-btn">Ver</a>
                                    </li>
                                @endforeach
                            </ul>
                        @elseif(request()->isMethod('post'))
                            <div class="catalog-empty" data-aos="fade-up">
                                <div class="catalog-empty-icon" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8"/>
                                        <path d="m21 21-4.3-4.3"/>
                                    </svg>
                                </div>
                                <h4>No encontramos coincidencias</h4>
                                <p>Revisa la ortografía o prueba solo con un apellido.</p>
                            </div>
                        @endif
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
