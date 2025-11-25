
    {{-- <header class="navbar-area">
        <div style="border-bottom: 4px solid orange; background: #0c161f; padding: 10px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{route('web_contacto')}}" style="text-transform: none; color: #fff;">
                            <i class="fa fa-envelope" aria-hidden="true" style="color: orange;"></i>
                            capperuacademica@gmail.com
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="" style="text-transform: none; color: #fff;">
                            <i class="fa fa-phone" aria-hidden="true" style="color: orange;"></i>
                            (01)7397026 – (043) 200324 - 977 66 24 60 - 946 94 38 87
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#themefie_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                    <a class="main-logo" href="{{ route('cms_principal') }}">
                        <img style="width:196px; height:61px;"
                            src="{{ asset('themes/capperu/assets/img/logo-cap.png') }}" alt="img">
                    </a>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <ul>
                        <li>
                            <a href="{{ env('URL_CAMPUS') }}" class="btn btn-primary" title="Campus Virtual">
                                <i class="fa fa-university"></i> Campus
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('web_carrito') }}" class="btn btn-base"><i
                                    class="fa fa-cart-plus"></i>&nbsp;&nbsp;
                                <b>
                                    <span id="contadorCarritoMovil" class="contador" style="font-size: 18px;"></span>
                                </b>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="themefie_main_menu">
                    <div class="single-input-wrap">
                        <input type="text" placeholder="buscar programa">
                        <button><i class="fa fa-search"></i></button>
                    </div>

                    <ul class="navbar-nav menu-open text-end">
                        <li>
                            <a href="{{ route('cms_principal') }}">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Nosotros</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('web_nosotros') }}">¿Quienes somos?</a>
                                </li>
                                <li>
                                    <a href="{{ route('web_politicas_calidad') }}">Política de Calidad</a>
                                </li>
                                <li>
                                    <a href="{{ route('web_gestion_calidad') }}">Alcance del SIG</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Diplomados / Cursos</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('web_categoria_sector', "Empresarial") }}">Sector: <b>Empresarial</b></a>
                                </li>
                                <li>
                                    <a href="{{ route('web_categoria_sector', "Derecho") }}">Sector: <b>Derecho</b></a>
                                </li>
                                <li>
                                    <a href="{{ route('web_categoria_sector', "Publico") }}">Sector: <b>Público</b></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('web_categorias') }}">Categorias</a>
                        </li> 
                        <li>
                            <a href="{{ route('web_convenios') }}">Convenios</a>
                        </li>
                        <li>
                            <a href="{{ route('web_blog') }}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('web_contacto') }}">Contacto</a>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <ul>
                        <li>
                            <a href="{{ route('web_carrito') }}" class="btn btn-base">
                                <i class="fa fa-cart-plus "></i>&nbsp;&nbsp;
                                <b>
                                    <span id="contadorCarritoWeb" class="contador" style="font-size: 18px;"></span>
                                </b>
                            </a>
                        </li>
                        <li>
                            <a href="{{ env('URL_CAMPUS') }}" class="btn btn-primary" target="_blank" >
                                Campus Virtual
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> --}}

    <header class="navbar-area header-pc">
        <div style=" background: #8B0E06; padding: 10px 0px;">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-3">
                        <div class="wrapper">
                            <a href="{{$header[1]->content }}" target="_blanck" class="icon facebook">
                                <div class="tooltip">Facebook</div>
                                <span><i class="fab fa-facebook-f"></i></span>
                            </a>
                            <a href="{{$header[3]->content }}" target="_blanck"  class="icon instagram">
                                <div class="tooltip">Instagram</div>
                                <span><i class="fab fa-instagram"></i></span>
                            </a>
                            <a href="{{$header[4]->content }}" target="_blanck"  class="icon linkedin">
                                <div class="tooltip">Linkedin</div>
                                <span><i class="fab fa-linkedin"></i></span>
                            </a>
                            <a href="{{$header[5]->content }}" target="_blanck"  class="icon tiktok">
                                <div class="tooltip">Tik Tok</div>
                                <span><i class="fab fa-tiktok"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <a href="" style="text-transform: none; color: #fff; line-height: 40px;">
                            <i class="fa fa-phone" aria-hidden="true" style="font-size: 18px;"></i>&nbsp;
                            {{$header[6]->content }}
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="{{route('web_contacto')}}" style="text-transform: none; color: #fff; line-height: 40px;">
                            <i class="fa fa-envelope" aria-hidden="true" style="font-size: 18px;"></i>&nbsp;
                            {{$header[7]->content }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#themefie_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                    <a class="main-logo" href="{{ route('cms_principal') }}">
                        <img style="width:196px; height:61px;"
                            src="{{ asset('storage/'.$header[0]->content) }}" alt="Logo">
                    </a>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <ul>
                        <li>
                            <a href="{{ env('URL_CAMPUS') }}" class="btn btn-primary" title="Campus Virtual">
                                <i class="fa fa-university"></i> Campus
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('web_carrito') }}" class="btn btn-base"><i
                                    class="fa fa-cart-plus"></i>&nbsp;&nbsp;
                                <b>
                                    <span id="contadorCarritoMovil" class="contador" style="font-size: 18px;"></span>
                                </b>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="themefie_main_menu">
                    <ul class="navbar-nav menu-open text-end">
                        <li>
                            <a href="{{ route('cms_principal') }}">Inicio</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Nosotros</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('web_nosotros') }}">¿Quienes somos?</a>
                                </li>
                                <li>
                                    <a href="{{ route('web_politicas_calidad') }}">Política de Calidad</a>
                                </li>
                                <li>
                                    <a href="{{ route('web_gestion_calidad') }}">Alcance del SIG</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Diplomados / Cursos</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('web_categoria_sector', "Empresarial") }}">Sector: <b>Empresarial</b></a>
                                </li>
                                <li>
                                    <a href="{{ route('web_categoria_sector', "Derecho") }}">Sector: <b>Derecho</b></a>
                                </li>
                                <li>
                                    <a href="{{ route('web_categoria_sector', "Publico") }}">Sector: <b>Público</b></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('web_convenios') }}">Convenios</a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('login') }}">Aula Virtual</a>
                        </li> --}}
                        {{-- <li>
                            <a href="{{ env('URL_CAMPUS') }}">Aula Virtual</a>
                        </li> --}}
                        {{-- <li>
                            <a href="{{ route('web_blog') }}">Blog</a>
                        </li> --}}
                        <li>
                            <a href="{{ route('web_contacto') }}">Contacto</a>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <ul>
                        <li>
                            <a href="{{ route('login') }}" class="btn btn-base">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i> &nbsp;&nbsp;
                                <b>
                                    Aula Virtual
                                </b>
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="nav-right-part nav-right-part-desktop">
                    <ul>
                        <li>
                            <a href="{{ route('web_carrito') }}" class="btn btn-base">
                                <i class="fa fa-cart-plus "></i>&nbsp;&nbsp;
                                <b>
                                    <span id="contadorCarritoWeb" class="contador" style="font-size: 18px;"></span>
                                </b>
                            </a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </nav>
        <div class="container" style="margin-top: -40px; padding: 10px 0px;">
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/peru.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/argentina.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/bolivia.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/brasil.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/chile.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/colombia.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/costa.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/cuba.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/venezuela.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/guatemala.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/honduras.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/mexico.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/paraguay.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/redo.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/uruguay.png') }}" alt="">
                </div>
            </div>
        </div>
    </header>


    <header class="navbar-area header-mobile">
        <div style=" background: #8B0E06; padding: 10px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wrapper">
                            <a href="{{$header[1]->content }}" target="_blanck" class="icon facebook">
                                <div class="tooltip">Facebook</div>
                                <span><i class="fab fa-facebook-f"></i></span>
                            </a>
                            <a href="{{$header[2]->content }}" target="_blanck"  class="icon youtube">
                                <div class="tooltip">Youtube</div>
                                <span><i class="fab fa-youtube"></i></span>
                            </a>
                            <a href="{{$header[3]->content }}" target="_blanck"  class="icon instagram">
                                <div class="tooltip">Instagram</div>
                                <span><i class="fab fa-instagram"></i></span>
                            </a>
                            <a href="{{$header[5]->content }}" target="_blanck"  class="icon tiktok">
                                <div class="tooltip">Tik Tok</div>
                                <span><i class="fab fa-tiktok"></i></span>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#themefie_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                    <a class="main-logo" href="{{ route('cms_principal') }}">
                        <img style="width:196px; height:61px;"
                            src="{{$header[0]->content }}" alt="img">
                    </a>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <ul>
                        <li>
                            <a href="{{ route('web_carrito') }}" class="btn btn-base"><i
                                    class="fa fa-cart-plus"></i>&nbsp;&nbsp;
                                <b>
                                    <span id="contadorCarritoMovil" class="contador" style="font-size: 18px;"></span>
                                </b>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="themefie_main_menu">
                    <ul class="navbar-nav menu-open text-end">
                        <li>
                            <a href="{{ route('cms_principal') }}">Inicio</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Nosotros</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('web_nosotros') }}">¿Quienes somos?</a>
                                </li>
                                <li>
                                    <a href="{{ route('web_politicas_calidad') }}">Política de Calidad</a>
                                </li>
                                <li>
                                    <a href="{{ route('web_gestion_calidad') }}">Alcance del SIG</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Diplomados / Cursos</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('web_categoria_sector', "Empresarial") }}">Sector: <b>Empresarial</b></a>
                                </li>
                                <li>
                                    <a href="{{ route('web_categoria_sector', "Derecho") }}">Sector: <b>Derecho</b></a>
                                </li>
                                <li>
                                    <a href="{{ route('web_categoria_sector', "Publico") }}">Sector: <b>Público</b></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('web_convenios') }}">Convenios</a>
                        </li>
                        <li>
                            <a href="{{ env('URL_CAMPUS') }}">Aula Virtual</a>
                        </li>
                        <li>
                            <a href="{{ route('web_blog') }}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('web_contacto') }}">Contacto</a>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <ul>
                        <li>
                            <a href="{{ route('web_carrito') }}" class="btn btn-base">
                                <i class="fa fa-cart-plus "></i>&nbsp;&nbsp;
                                <b>
                                    <span id="contadorCarritoWeb" class="contador" style="font-size: 18px;"></span>
                                </b>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container" style="padding: 10px;">
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/peru.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/argentina.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/bolivia.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/brasil.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/chile.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/colombia.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/costa.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/cuba.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/venezuela.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/guatemala.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/honduras.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/mexico.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/paraguay.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/redo.png') }}" alt="">
                    <img style="width: 30px; padding: 0px 3px;" src="{{ asset('themes/capperu/assets/img/country/uruguay.png') }}" alt="">
                </div>
            </div>
        </div>
    </header>


    <script>
        function ocultarLoader() {
        loader.style.display = 'none';
        }
       try {
        var loader = document.getElementById('preloader');

        setTimeout(ocultarLoader, 1000); // Ocultar después de 1 segundo (1000 milisegundos)
       } catch (error) {

       }
    </script>
    <style>
        .contador {
            position: absolute;
            top: -10px;
            right: -10px;
            background-color: rgba(98, 0, 255, 0.253);
            color: white;
            border-radius: 66%;
            padding: 2px 19px;
            font-size: 12px;
        }



        .wrapper{
            /* background: #ddd; */
            text-align: center;
            padding: 0px;
        }

        .wrapper .icon{
            position: relative;
            background-color: #ffffff;
            border-radius: 50%;
            margin: 5px;
            width: 27px;
            height: 27px;
            line-height: 27px;
            font-size: 17px;
            display: inline-block;
            align-items: center;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            color: #8B0E06;
            text-decoration: none;
        }

        .wrapper .tooltip {
            position: absolute;
            top: 0;
            line-height: 1.5;
            font-size: 9px;
            background-color: #ffffff;
            color: #ffffff;
            padding: 3px 8px;
            border-radius: 5px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        /* .wrapper .tooltip::before {
        position: absolute;
        content: "";
        height: 8px;
        width: 8px;
        background-color: #ffffff;
        bottom: -3px;
        left: 50%;
        transform: translate(-50%) rotate(45deg);
        transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        } */

        .wrapper .icon:hover .tooltip {
            top: 30px;
            left: -8px;
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        .wrapper .icon:hover span,
        .wrapper .icon:hover .tooltip {
            text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
        }

        .wrapper .facebook:hover,
        .wrapper .facebook:hover .tooltip,
        .wrapper .facebook:hover .tooltip::before {
            background-color: #3b5999;
            color: #ffffff;
        }

        .wrapper .twitter:hover,
        .wrapper .twitter:hover .tooltip,
        .wrapper .twitter:hover .tooltip::before {
            background-color: #46c1f6;
            color: #ffffff;
        }

        .wrapper .instagram:hover,
        .wrapper .instagram:hover .tooltip,
        .wrapper .instagram:hover .tooltip::before {
            background-color: #e1306c;
            color: #ffffff;
        }

        .wrapper .github:hover,
        .wrapper .github:hover .tooltip,
        .wrapper .github:hover .tooltip::before {
        background-color: #333333;
        color: #ffffff;
        }

        .wrapper .youtube:hover,
        .wrapper .youtube:hover .tooltip,
        .wrapper .youtube:hover .tooltip::before {
        background-color: #de463b;
        color: #ffffff;
        }
    </style>

