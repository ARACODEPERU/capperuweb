@extends('layouts.webpage')

@section('content')

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <div class="main-wrapper">

        <!-- header area start -->
        <x-header />
        <!-- slider area start -->

        <div data-aos="zoom-in" data-aos-duration="1200" >
            <section class="banner-area style-4" style="padding: 80px 0px; background-color: #f0f4f8;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 align-self-center">
                            <div class="banner-inner" >
                                <h1>
                                    Perfil público del
                                    <span class="bottom-line">
                                        Estudiante
                                        <img src="{{ asset('themes/capperu/assets/img/banner/4.png') }}" alt="img">
                                    </span>
                                </h1>

                                <form action="{{ route('web_alumnos') }}" method="POST">
                                    @csrf                                    
                                    <div class="input-group mt-xl-4 me-xl-5">
                                        <input type="text" name="search" id="search"
                                            placeholder="Ingresar nombres o apellidos del alumno" class="form-control rounded-start">
                                        <button type="submit" class="btn btn-primary rounded-end" style="background-color: #007bff; border-color: #007bff;">Buscar</button>
                                    </div>
                                </form>

                                <div class="banner-multi-user mt-xl-5 mt-4">
                                    <div class="media">
                                        <div class="media-left me-3">
                                            <img src="{{ asset('themes/capperu/assets/img/banner/5.png') }}" alt="img">
                                        </div>
                                        <div class="media-body align-self-center">
                                            Record de certificados
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            @if (count($results) > 0)
                                <div id="results">
                                    <table class="table table-striped table-hover" style="box-shadow: 0 4px 8px rgba(0,0,0,0.05);">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="font-weight: bold;">#</th>
                                                <th scope="col" style="font-weight: bold;">Alumno</th>
                                                <th scope="col" style="font-weight: bold;">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody >
                                            @foreach ($results as $key => $student)
                                                <tr>
                                                    <th scope="row">{{ $key + 1 }}</th>
                                                    <td>{{ $student->full_name }}</td>
                                                    <td>
                                                        <a href="{{ route('web_perfil_alumno', $student->id) }}"
                                                            target="_blank" class="btn-small btn-primary">Ver</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </section>
        </div>

        <div data-aos="fade-up" data-aos-duration="1000">
            <x-footer />
        </div>


    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            mirror: true,
            once: false
        });
    </script>

@endsection
