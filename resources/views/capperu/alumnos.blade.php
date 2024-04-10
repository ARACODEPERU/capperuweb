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
                            Perfil publico del
                            <span class="bottom-line">
                                Estudante
                                <img src="{{ asset('themes/capperu/assets/img/banner/4.png') }}" alt="img">
                            </span>
                        </h1>
                        <div class="newslatter-inner mt-xl-4 me-xl-5">
                            <input type="text" placeholder="Ingresar nombres y apellidos del alumno">
                            <button class="btn btn-base">Buscar</button>
                        </div>
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
                    <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">...</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>
                                <button class="btn-small btn-primary">Ver</button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>
                                <button class="btn-small btn-primary">Ver</button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>
                                <button class="btn-small btn-primary">Ver</button>
                            </td>
                          </tr>
                        </tbody>
                    </table>
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