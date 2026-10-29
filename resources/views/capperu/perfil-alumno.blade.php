@extends('layouts.webpage')

@section('content')

    <div class="main-wrapper">

        <!-- header area start -->
        <x-header />

        @php
            $displayName = strlen($student[0]->full_name ?? '') > 0 ? $student[0]->full_name : $student[0]->full_name2;
            $initials = collect(explode(' ', trim((string) $displayName)))->filter()->map(fn($w) => mb_strtoupper(mb_substr($w, 0, 1)))->take(2)->implode('');
            $photo = null;
            if (($student[0]->student_image ?? null) !== null) {
                $photo = file_exists($student[0]->student_image) ? $student[0]->student_image : 'https://www.capperu.com/storage/uploads/students/20231206124645.png';
            } else {
                $photo = 'https://www.capperu.com/storage/uploads/students/20231206124645.png';
            }
            $certificates = $student->filter(fn($row) => ($row->certificate_image ?? null) !== null || ($row->link_pdf ?? null) !== null)->values();
        @endphp

        <!-- HERO SECTION -->
        <div class="catalog-hero">
            <div class="container">
                <h1>Perfil del Estudiante</h1>
                <p>Valida aquí los diplomados y cursos certificados por CAP PERU.</p>
                <ul class="modern-breadcrumb">
                    <li><a href="{{ route('web_home') }}">Inicio</a></li>
                    <li><a href="{{ route('web_alumnos') }}">Verificar</a></li>
                    <li><span>Perfil del Estudiante</span></li>
                </ul>
            </div>
        </div>

        <!-- PERFIL + CERTIFICADOS (OVERLAP) -->
        <div class="container catalog-container-overlap">
            <div class="profile-card" data-aos="fade-up">
                <div class="profile-photo">
                    @if ($photo)
                        <img src="{{ $photo }}" alt="{{ $displayName }}" loading="lazy">
                    @else
                        <span class="profile-initials" aria-hidden="true">{{ $initials }}</span>
                    @endif
                </div>
                <div class="profile-info">
                    <h2>{{ $displayName }}</h2>
                    <span class="profile-role">Alumno</span>
                    <p class="profile-count">
                        <strong>{{ $certificates->count() }}</strong>
                        {{ $certificates->count() === 1 ? 'certificado registrado' : 'certificados registrados' }}
                    </p>
                </div>
            </div>

            <div class="profile-section-head" data-aos="fade-up">
                <h3>Lista de Diplomados y/o Cursos</h3>
                <p>Documentos emitidos a nombre del estudiante.</p>
            </div>

            @if ($certificates->count() > 0)
                <div class="row g-4">
                    @foreach ($certificates as $certificate)
                        <div class="col-md-6 col-lg-4" data-aos="fade-up">
                            <div class="program-card">
                                <div class="program-img">
                                    <x-webp-image src="{{ asset('storage/' . $certificate->course_image) }}" alt="{{ $certificate->course }}" class="w-100" />
                                </div>
                                <div class="program-body">
                                    <h3 class="program-title">{{ $certificate->course }}</h3>
                                    @php
                                        $docUrl = ($certificate->link_pdf ?? null) ?: $certificate->certificate_image;
                                    @endphp
                                    @if ($docUrl)
                                        <a href="{{ $docUrl }}" target="_blank" rel="noopener" class="program-btn">Descargar Certificado</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="catalog-empty" data-aos="fade-up">
                    <div class="catalog-empty-icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"/>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                        </svg>
                    </div>
                    <h4>Sin certificados registrados</h4>
                    <p>Este perfil aún no tiene documentos asociados.</p>
                </div>
            @endif
        </div>

        <!-- Beneficios institucionales -->
        <x-why-us />

        <!-- Llamado a la acción -->
        <x-cta-band />

        <div data-aos="fade-up" data-aos-duration="1000">
            <x-footer />
        </div>

    </div>
    <!-- Main Wrapper End -->

@endsection
