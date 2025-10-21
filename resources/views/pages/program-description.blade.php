@extends('layouts.webpage')

@section('content')
    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <x-header />

        <!-- Breadcrumb -->
        <div class="breadcrumb-area breadcrumb-modify-padding bg-black-3">
            <div class="container">
                <div class="in-breadcrumb">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumb-style-2">
                                <h2>{{ $course->description }}</h2>
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
        <!--// Breadcrumb -->
        <div class="movie-details-wrap section-ptb-50 section-padding-lr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <img style="width: 100%;" src="{{ asset('themes/webpage/assets/images/product/movie-17.jpg') }}"
                            alt="Imagen">
                    </div>
                    <div class="col-md-8">
                        <!-- Nav tabs -->
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
                                        @php
                                            $modules = $course->modules;
                                            $c = 1;
                                        @endphp
                                        @foreach ($modules as $k => $module)
                                            <p style="padding: 0px 15px;">
                                                {{ $c . '. ' . $module->description }}
                                            </p>
                                            @php
                                                $c++;
                                            @endphp
                                        @endforeach
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
                                                        <h6>{{ $teach->teacher->person->father_lastname . ' ' . $teach->teacher->person->mother_lastname . ' ' . $teach->teacher->person->names }}
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
                    {{-- <div class="col-md-8">
                        <div class="row">
                            <ul class="course-tab nav nav-pills">
                                <li class="nav-item">
                                    <button class="nav-link active" id="pill-1" data-bs-toggle="pill"
                                        data-bs-target="#pills-01" type="button" role="tab" aria-controls="pills-01"
                                        aria-selected="true">
                                        Presentación <span style="color: #8B0E06;"> ></span>
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="pill-2" data-bs-toggle="pill" data-bs-target="#pills-02"
                                        type="button" role="tab" aria-controls="pills-02" aria-selected="true">
                                        Malla Curricular <span style="color: #8B0E06;"> ></span>
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="pill-3" data-bs-toggle="pill" data-bs-target="#pills-03"
                                        type="button" role="tab" aria-controls="pills-03" aria-selected="false">
                                        Beneficios <span style="color: #8B0E06;"> ></span>
                                    </button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="pill-4" data-bs-toggle="pill"
                                        data-bs-target="#pills-04" type="button" role="tab"
                                        aria-controls="pills-04" aria-selected="false">
                                        Plana Docente <span style="color: #8B0E06;"> ></span>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" id="pill-5" data-bs-toggle="pill"
                                        data-bs-target="#pills-05" type="button" role="tab"
                                        aria-controls="pills-05" aria-selected="false">
                                        Preguntas Frecuentes
                                    </button>
                                </li>
                            </ul>
                            <br><br>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-01" role="tabpanel"
                                    aria-labelledby="pill-1">
                                    @if ($course->brochure)
                                        <div class="overview-area">
                                            {!! $course->brochure->presentation !!}
                                        </div>
                                    @endif
                                </div>
                                <div class="tab-pane fade" id="pills-02" role="tabpanel" aria-labelledby="pill-2">
                                    @php
                                        $modules = $course->modules;
                                        $c = 1;
                                    @endphp
                                    @foreach ($modules as $k => $module)
                                        <div class="accordion-item">
                                            <p style="padding: 5px 15px;"><b>{{ $c . '. ' . $module->description }}</b></p>
                                        </div>
                                        @php
                                            $c++;
                                        @endphp
                                    @endforeach
                                </div>
                                <div class="tab-pane fade" id="pills-03" role="tabpanel" aria-labelledby="pill-3">
                                    @if ($course->brochure)
                                        {!! $course->brochure->benefits !!}
                                    @endif
                                </div>
                                <div class="tab-pane fade" id="pills-04" role="tabpanel" aria-labelledby="pill-4">
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
                                                    <h6>{{ $teach->teacher->person->father_lastname . ' ' . $teach->teacher->person->mother_lastname . ' ' . $teach->teacher->person->names }}
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
                                <div class="tab-pane fade" id="pills-05" role="tabpanel" aria-labelledby="pill-5">
                                    @if ($course->brochure)
                                        {!! $course->brochure->frequent_questions !!}
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if ($item->additional1 == 'E-Learning')
                            <br>
                            <div class="row bg-gray" style="padding: 15px;">
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
                                            El proceso de aprendizaje se lleve a cabo a través de cualquier dispositivo
                                            electrónico. (laptop, Tablet, PC o dispositivo móvil).
                                        </li>
                                        <li>
                                            FLEXIBILIDAD DE ESTUDIO: permite que el estudiante pueda estudiar conforme a su
                                            disponibilidad de tiempo y desde el lugar físico que él elija.
                                            (las 24 horas y los 7 días de la semana).
                                        </li>
                                        <li>
                                            DISPOSICIÓN DE RECURSOS ON-LINE Y MULTIMEDIA, como PPTS, PDF, formatos en Excel
                                            y
                                            Word, que forman parte de los estudios.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        @else
                            <div class="row">
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
                        <br>

                        <div class="row overview-area">
                            <div class="col-md-12 bg-gray">
                                El alumno obtendrá su diplomado con la siguiente mención:
                                <h5>"{{ $course->description }}"</h5>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <br><br>
                <div class="movie-details-video-content-wrap">
                    {{-- <div class="video-wrap">
                        <video controls loop="loop" poster="assets/images/bg/bg-5.jpg">
                            <source src="assets/video/video.mp4" type="video/mp4">
                        </video>
                    </div> --}}
                    <div class="movie-details-content">
                        <div class="row overview-area">
                            <div class="col-md-12"  style="padding: 15px; background: #f5f5f5;">
                                El alumno obtendrá su diplomado con la siguiente mención:
                                <h4>"{{ $course->description }}"</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="movie-list section-pb-50">
            <div class="container">
                <div class="section-title-4 st-border-bottom">
                    <h2>Season 1</h2>
                </div>
                <div class="movie-slider-active-3 nav-style-3">
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-30.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Love Of Mine</a></h3>
                                <span>Episode: 01</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-31.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Love Of Mine</a></h3>
                                <span>Episode: 02</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-32.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Love Of Mine</a></h3>
                                <span>Episode: 03</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-33.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Love Of Mine</a></h3>
                                <span>Episode: 04</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-34.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Love Of Mine</a></h3>
                                <span>Episode: 05</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <x-courses-new />
        <br>
        <!-- Footer Area -->
        <x-footer />

        <!--// Footer Area -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal">
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
        </div>
    </div>
    <!-- Main Wrapper End -->
@endsection
