@extends('layouts.capperu')

@section('content')

    <!-- preloader area start -->
    <x-capperu.preloader-area></x-capperu.preloader-area>
    <!-- preloader area end -->
    
    <x-capperu.body-overlay-area></x-capperu.body-overlay-area>

    <!-- search popup area start -->
    <x-capperu.search-popup-area></x-capperu.search-popup-area>
    <!-- //. search Popup -->
    
    <!-- Encabezado inicio -->
    <x-capperu.header-area></x-capperu.header-area>
    <!-- Encabezado fin -->

    
    <!-- Banner Area Start-->
    <section class="head-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>LIBRO DE RECLAMACIONES</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
    
    
    <section class="potential-area-2" style="padding: 50px;">
        <div class="container">
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <h3>1. INFORMACIÓN DEL CONSUMIDOR RECLAMANTE</h3>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="formGroupExampleInput">Tu Nombre *</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="formGroupExampleInput">Tus Apellidos *</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleFormControlSelect1">Tipo documento *</label>
                      <select class="form-control" id="exampleFormControlSelect1">
                        <option>DNI</option>
                        <option>C.E.</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="formGroupExampleInput">Número de documento *</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="exampleInputEmail1">Tu correo electrónico *</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="formGroupExampleInput">Teléfono *</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="col-md-12">
                        <h3>2. IDENTIFICACIÓN DEL BIEN CONTRATADO</h3>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="formGroupExampleInput">Tipo del producto *</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="formGroupExampleInput">Nombre del producto *</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="formGroupExampleInput">Monto reclamado *</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Detalle de la reclamación:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                    </div>
                    <div class="form-group col-md-3">
                        <br>
                        <button class="btn btn-base me-4">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar
                        </button>
                    </div>
                </div>
            </form>
        </div>            
    </section>


    <x-capperu.footer-area></x-capperu.footer-area>

@endsection