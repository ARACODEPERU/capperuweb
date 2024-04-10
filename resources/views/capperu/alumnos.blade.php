@extends('layouts.capperu')

@section('content')

    <!-- preloader area start -->
    <x-capperu.preloader-area></x-capperu.preloader-area>
    <!-- preloader area end -->

    <!-- Encabezado inicio -->
    <x-capperu.header-area></x-capperu.header-area>
    <!-- Encabezado fin -->


    <section class="banner-area style-4 bg-gray-2" style="padding: 80px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 align-self-center">
                    <div class="banner-inner">
                        <h1>
                            Perfil público del
                            <span class="bottom-line">
                                Estudiante
                                <img src="{{ asset('themes/capperu/assets/img/banner/4.png') }}" alt="img">
                            </span>
                        </h1>

                        <form action="{{ route('web_alumnos') }}" method="POST">
                            @csrf
                            <div class="newslatter-inner mt-xl-4 me-xl-5">
                                <input type="text" name="search" id="search" placeholder="Ingresar nombres o apellidos del alumno">
                                <button type="submit" class="btn btn-base">Buscar</button>
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
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    @if ( count($results) > 0 )
                    <div id="results">
                    <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Alumno</th>
                            <th scope="col">...</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($results as $key => $student)
                          <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $student->full_name }}</td>
                            <td>
                                <a href="{{ route('web_perfil_alumno', $student->id) }}" target="_blank" class="btn-small btn-primary">Ver</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                    </div>
                    @endif
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->


    <!-- Más Populares Area Start-->
    <x-capperu.programas-populares-area></x-capperu.programas-populares-area>
    <!-- Más Populares Area End -->



    <x-capperu.footer-area></x-capperu.footer-area>

@endsection
