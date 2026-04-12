@extends('layouts.webpage')

@section('content')
    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <x-header />

        {{-- <div class="breadcrumb-area breadcrumb-modify-padding bg-black-3">
            <div class="container">
                <div class="in-breadcrumb">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumb-style-2">
                                <h2>{{ $course->description }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="movie-details-wrap section-ptb-50 section-padding-lr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <img style="width: 100%;" src="{{ asset('storage/' . $course->image) }}"
                            alt="{{ $course->description }}">
                    </div>
                    <div class="col-md-8">
                        <ul role="tablist" class="nav dashboard-list white mb--10">
                            <li class="active" role="presentation">
                                <a href="#presentacion" data-bs-toggle="tab" class="tablist-btn active">Presentación ></a>
                            </li>
                            <li role="presentation">
                                <a href="#malla" data-bs-toggle="tab" class="tablist-btn">Malla Curricular ></a>
                            </li>
                            <li role="presentation">
                                <a href="#beneficios" data-bs-toggle="tab" class="tablist-btn">Beneficios ></a>
                            </li>
                            <li role="presentation">
                                <a href="#docentes" data-bs-toggle="tab" class="tablist-btn">Plana Docente ></a>
                            </li>
                            <li role="presentation">
                                <a href="#preguntas" data-bs-toggle="tab" class="tablist-btn">Preguntas Frecuentes ></a>
                            </li>
                        </ul>
                        <div class="tab-content dashboard-content">
                            <div class="tab-pane active" id="presentacion">
                                <div class="row">
                                    <div class="col-md-12">
                                        @if ($course->brochure)
                                            <div class="overview-area">
                                                {!! $course->brochure->presentation !!}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="malla">
                                <div class="row">
                                    <div class="col-md-12">
                                        @if ($course->brochure)
                                            <div class="overview-area">
                                                {!! $course->brochure->curriculum_plan !!}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="beneficios">
                                <div class="row">
                                    <div class="col-md-12">
                                        @if ($course->brochure)
                                            {!! $course->brochure->benefits !!}
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="docentes">
                                <div class="row">
                                    <div class="col-md-12">
                                        @if (count($course->teachers) > 0)
                                            @foreach ($course->teachers as $teach)
                                                <div class="row" style="margin-bottom: 20px;">
                                                    <div class="col-md-2">
                                                        <a href="{{ route('web_perfil_docente', 1) }}">
                                                            <img style="width: 90px; margin-bottom: 10px; margin-left: 10px;"
                                                                src="{{ $teach->teacher->person->image }}" alt="img">
                                                        </a>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <h6>{{ $teach->teacher->person->names . ' ' . $teach->teacher->person->father_lastname . ' ' . $teach->teacher->person->mother_lastname }}
                                                        </h6>
                                                        @if (count($teach->teacher->person->resumes))
                                                            <ul>
                                                                @foreach ($teach->teacher->person->resumes as $resume)
                                                                    <li>
                                                                        {{ $resume->description }}
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="preguntas">
                                <div class="row">
                                    <div class="col-md-12">
                                        @if ($course->brochure)
                                            {!! $course->brochure->frequent_questions !!}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-md-12">
                                @if ($item->additional1 == 'E-Learning')
                                    <br>
                                    <div class="row" style="padding: 15px; background: #c3c3c3;">
                                        <div class="col-md-12">
                                            <h5><b>¿En qué consiste la modalidad de estudios E-Learning?</b></h5>
                                        </div>
                                        <div class="col-md-12">
                                            <h6>ESTA MODALIDAD PERMITE:</h6>
                                            <ul>
                                                <li>
                                                    Una formación completamente a distancia, donde los alumnos acceden a
                                                    los contenidos, actividades, tareas, tutores del curso, etc.
                                                </li>
                                                <li>
                                                    El proceso de aprendizaje se lleve a cabo a través de cualquier
                                                    dispositivo
                                                    electrónico. (laptop, Tablet, PC o dispositivo móvil).
                                                </li>
                                                <li>
                                                    FLEXIBILIDAD DE ESTUDIO: permite que el estudiante pueda estudiar
                                                    conforme a su
                                                    disponibilidad de tiempo y desde el lugar físico que él elija.
                                                    (las 24 horas y los 7 días de la semana).
                                                </li>
                                                <li>
                                                    DISPOSICIÓN DE RECURSOS ON-LINE Y MULTIMEDIA, como PPTS, PDF, formatos
                                                    en Excel
                                                    y
                                                    Word, que forman parte de los estudios.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @else
                                    <div class="row" style="padding: 15px; background: #f5f5f5;">
                                        <div class="reviewers-area">
                                            <div class="meta-area d-flex">
                                                <div class="user-rating ms-0">
                                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                                    <b>Modalidad de Estudios Mixta</b>
                                                </div>
                                                <div class="ms-auto">
                                                    <i class="fa fa-video" aria-hidden="true"></i>
                                                    Google Meet
                                                </div>
                                                <div class="ms-md-5 ms-auto mb-0">
                                                    <a href="">
                                                        <i class="fa fa-laptop" aria-hidden="true"></i>
                                                        Campus Virtual
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="movie-details-video-content-wrap">
                    <div class="movie-details-content">
                        <div class="row overview-area">
                            <div class="col-md-12" style="padding: 15px; background: #f5f5f5;">
                                El alumno obtendrá su diplomado con la siguiente mención:
                                <h4>"{{ $course->description }}"</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- ============================================================== -->
        <!-- SEPARADOR PARA COMPARACIÓN (BORRAR LUEGO) -->
        <!-- ============================================================== -->
        {{-- <div style="background: #000; color: #fff; padding: 40px; text-align: center; margin: 50px 0;">
            <h2>⬇️ PROPUESTA DE DISEÑO MODERNO (LANDING PAGE) ⬇️</h2>
            <p>Estructura enfocada en conversión con Sidebar "Sticky" y contenido vertical.</p>
        </div> --}}

        <!-- ============================================================== -->
        <!-- INICIO PROPUESTA MODERNA -->
        <!-- ============================================================== -->
        <!-- 1. HERO SECTION -->
        <div class="modern-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <span class="badge bg-danger mb-3" style="font-size: 0.9rem; padding: 8px 12px;">DIPLOMADO / CURSO</span>
                        <h1>{{ $course->description }}</h1>
                        <p class="mb-4">Especialízate con los mejores profesionales y lleva tu carrera al siguiente nivel con nuestra metodología práctica.</p>
                        
                        <div class="hero-meta">
                            <span><i class="fa fa-clock-o"></i> Duración: Consultar</span>
                            <span><i class="fa fa-laptop"></i> Modalidad: {{ $item->additional1 ?? 'Online / Mixta' }}</span>
                            <span><i class="fa fa-certificate"></i> Certificado Incluido</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. CONTENIDO PRINCIPAL + SIDEBAR -->
        <div class="container pb-5">
            <div class="row">
                <!-- COLUMNA IZQUIERDA (CONTENIDO) -->
                <div class="col-lg-8">
                    
                    <!-- Presentación -->
                    <div class="modern-section">
                        <h3>Presentación</h3>
                        @if ($course->brochure)
                            <div class="overview-area">
                                {!! $course->brochure->presentation !!}
                            </div>
                        @endif
                    </div>

                    <!-- Malla Curricular -->
                    <div class="modern-section">
                        <h3>Malla Curricular</h3>
                        @if ($course->brochure)
                            <div class="overview-area">
                                {!! $course->brochure->curriculum_plan !!}
                            </div>
                        @endif
                    </div>

                    <!-- Beneficios -->
                    <div class="modern-section">
                        <h3>Beneficios y Objetivos</h3>
                        @if ($course->brochure)
                            <div class="overview-area">
                                {!! $course->brochure->benefits !!}
                            </div>
                        @endif
                    </div>

                    <!-- Docentes -->
                    <div class="modern-section">
                        <h3>Plana Docente</h3>
                        <div class="teacher-grid">
                            @if (count($course->teachers) > 0)
                                @foreach ($course->teachers as $teach)
                                    <div class="teacher-card-modern">
                                        <img src="{{ $teach->teacher->person->image ? asset($teach->teacher->person->image) : asset('img/avatar_default.jpg') }}" alt="{{ $teach->teacher->person->names }}">
                                        <h5>{{ $teach->teacher->person->names }} {{ $teach->teacher->person->father_lastname }}</h5>
                                        <span>Docente</span>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-muted">Docentes por confirmar.</p>
                            @endif
                        </div>
                    </div>

                    <!-- Preguntas Frecuentes -->
                    <div class="modern-section">
                        <h3>Preguntas Frecuentes</h3>
                        @if ($course->brochure)
                            {!! $course->brochure->frequent_questions !!}
                        @endif
                    </div>

                </div>

                <!-- COLUMNA DERECHA (SIDEBAR STICKY) -->
                <div class="col-lg-4">
                    <div class="sticky-sidebar-wrapper">
                        <div class="purchase-card">
                            <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->description }}">
                            
                            <div class="text-center mb-4">
                                <span class="price-label">Inversión</span>
                                {{-- Lógica simple para mostrar precio si existe --}}
                                @if(isset($course->price) && $course->price > 0)
                                    <span class="price-tag">S/ {{ $course->price }}</span>
                                @else
                                    <span class="price-tag">Consultar</span>
                                @endif
                            </div>

                            <div class="features-list mb-4">
                                <p><i class="fa fa-check-circle"></i> Acceso inmediato al campus</p>
                                <p><i class="fa fa-check-circle"></i> Material descargable</p>
                                <p><i class="fa fa-check-circle"></i> Soporte académico</p>
                                <p><i class="fa fa-check-circle"></i> Certificación válida</p>
                            </div>

                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSecTVbgfJpQjsvDj7zJ9onAU318dOrhlU6B6FWlbzJ8yXtnpA/viewform?usp=header" target="_blank" class="btn-modern-cta">
                                INSCRIBIRME AHORA <i class="fa fa-arrow-right ms-2"></i>
                            </a>
                            
                            <div class="text-center mt-3">
                                <small class="text-muted">Compra 100% segura</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- FIN PROPUESTA MODERNA -->
        <!-- ============================================================== -->

        <x-courses-new />
        <br>
        <!-- Footer Area -->
        <x-footer />

        <!--// Footer Area -->
        <!-- Modal -->
        {{-- <div class="modal fade" id="exampleModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="subscribe-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="zmdi zmdi-close s-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 id="exampleModalLabel">Ready to watch? Enter your email to create or restart your membership.
                        </h5>
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
@endsection
