<div>

    {{-- <a class="appFacebook" target="_blanck" href="https://web.facebook.com/capperuoficial">
        <img src="themes/capperu/assets/img/redes/facebook.png" alt="Facebook">
    </a>
    
    <a class="appInstagram" target="_blanck" href="">
        <img src="themes/capperu/assets/img/redes/instagram.png" alt="Instagram">
    </a>
    
    <a class="appYoutube" target="_blanck" href="">
        <img src="themes/capperu/assets/img/redes/youtube.png" alt="Youtube">
    </a> --}}
    
    
    {{-- <a class="appWhatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=51{{$footer[0]->content }}&text=Hola&nbsp;CapPeru!&nbsp;me&nbsp;pueden&nbsp;ayudar?">
        <img src="themes/capperu/assets/img/redes/whatsapp.png" alt="Whatsapp">
    </a> --}}

    <div id="whatsapp">
        <a href="" class="wtsapp" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <style type="text/css">
        #whatsapp .wtsapp{
            position: fixed;
            transform: all .5s ease;
            background-color: #25D366;
            display: block;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            border-radius: 50px;
            border-right: none;
            color: #fff;
            font-weight: 700;
            font-size: 30px;
            bottom: 70px;
            right: 20px;
            border: 0;
            z-index: 9999;
            width: 50px;
            height: 50px;
            line-height: 50px;
        }

        #whatsapp .wtsapp:before{
            content: "";
            position: absolute;
            z-index: -1;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            display: block;
            width: 60px;
            height: 60px;
            background-color: #25D366;
            border-radius: 50%;
            -webkit-animation: pulse-border 1500ms ease-out infinite;
            animation: pulse-border 1500ms ease-out infinite;
        }

        #whatsapp .wtsapp:focus{
            border: none;
            outline: none;
        }

        @keyframes pulse-border{
            0%{
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
                opacity: 1;
            }
            100%{
                transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
                opacity: 0;
            }
        }

    </style>

    
    {{-- <a class="appWhatsapp" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <img src="themes/capperu/assets/img/redes/whatsapp.png" alt="Whatsapp">
    </a> --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="padding: 0px 30px;">
            <div class="modal-content">
                <div class="modal-header" style="background: #00b147; padding: 10px 25px;">
                    <span style="color: #fff; padding: 5px 15px; font-size: 50px;">
                        <i class="fab fa-whatsapp"></i>
                    </span>
                    <div>
                        <h5 class="modal-title" id="exampleModalLabel" style=" color: #fff;">
                            Necesitas ayuda?
                        </h5>
                        <p style=" color: #fff;">
                            ¡Hola! Haga clic en el Whatsapp y chatee.
                        </p>
                    </div>
                    {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                </div>
                <div class="modal-body" style="padding: 20px 55px;">
                    <a href="https://api.whatsapp.com/send?phone=51977662460&text=Hola&nbsp;CapPeru!&nbsp;me&nbsp;pueden&nbsp;ayudar?" target="_blank"
                        class="animate__animated animate__fadeInUp">
                        <div class="row" style="padding: 10px 15px;
                                                border-left: 5px solid #25D366; 
                                                padding-left: 10px; 
                                                background: #f8f8f8;
                                                box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);">
                            <div class="col-md-2" style="display: flex; align-items: center;">
                                <img style="100%;" src="themes/capperu/assets/img/redes/whatsapp.png">
                            </div>
                            <div class="col-md-8" style="margin-top: 5px;">
                                <p style="font-size: 20px; display: flex; align-items: center;">Asesora 1</p>
                            </div>
                            <div class="col-md-2" style="display: flex; align-items: center;">
                                <span style="color: #989898; padding: 5px 15px; font-size: 20px;">
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                    <br>
                    <a href="https://api.whatsapp.com/send?phone=51908934095&text=Hola&nbsp;CapPeru!&nbsp;me&nbsp;pueden&nbsp;ayudar?" target="_blank"
                       class="animate__animated animate__fadeInUp">
                        <div class="row" style="padding: 10px 15px;
                                                border-left: 5px solid #25D366; 
                                                padding-left: 10px; 
                                                background: #f8f8f8;
                                                box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2); /* Sombra en todos los lados */">
                            <div class="col-md-2" style="display: flex; align-items: center;">
                                <img style="100%;" src="themes/capperu/assets/img/redes/whatsapp.png">
                            </div>
                            <div class="col-md-8" style="margin-top: 5px;">
                                <p style="font-size: 20px; display: flex; align-items: center;">Asesora 2</p>
                            </div>
                            <div class="col-md-2" style="display: flex; align-items: center;">
                                <span style="color: #989898; padding: 5px 15px; font-size: 20px;">
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                    <br>
                    <a href="https://api.whatsapp.com/send?phone=51963331758&text=Hola&nbsp;CapPeru!&nbsp;me&nbsp;pueden&nbsp;ayudar?" target="_blank"
                    class="animate__animated animate__fadeInUp">
                        <div class="row" style="padding: 10px 15px;
                                                border-left: 5px solid #25D366; 
                                                padding-left: 10px; 
                                                background: #f8f8f8;
                                                box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);">
                            <div class="col-md-2" style="display: flex; align-items: center;">
                                <img style="100%;" src="themes/capperu/assets/img/redes/whatsapp.png">
                            </div>
                            <div class="col-md-8" style="margin-top: 5px;">
                                <p style="font-size: 20px; display: flex; align-items: center;">Asesora 3</p>
                            </div>
                            <div class="col-md-2" style="display: flex; align-items: center;">
                                <span style="color: #989898; padding: 5px 15px; font-size: 20px;">
                                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    
          <!-- Load Facebook SDK for JavaScript -->
          {{-- <div id="fb-root"></div>
          <script>
            window.fbAsyncInit = function() {
              FB.init({
                xfbml            : true,
                version          : 'v10.0'
              });
            };
    
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
    
          <!-- Your Chat Plugin code -->
          <div class="fb-customerchat"
            attribution="setup_tool"
            page_id="1938133419799820">
          </div> --}}


    <!-- footer area start -->
    <footer class="footer-area">
        <div class="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-widget widget widget_link">
                            <h4 class="widget-title">SOBRE NOSOTROS?</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        {{$footer[1]->content }} 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-widget widget widget_link">
                            <h4 class="widget-title">OFICINAS</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="pe-5">
                                        <li>
                                            <b>
                                                <i class="fa fa-home" style="color: orange;"></i> 
                                                Sede Lima:
                                            </b>
                                            <br> 
                                            {{$footer[2]->content }}
                                        </li>
                                        <li>
                                            <b>
                                                <i class="fa fa-home" style="color: orange;"></i> 
                                                Sede Chimbote:
                                            </b> 
                                            <br>
                                            {{$footer[3]->content }}
                                        </li>
                                        <li>
                                            <b>
                                                <i class="fa fa-phone" style="color: orange;"></i> 
                                                Teléfonos:
                                            </b> 
                                            <br>{{$footer[4]->content }}
                                        </li>
                                        <li>
                                            <b>
                                                <i class="fa fa-envelope" style="color: orange;"></i> 
                                                E-mail:
                                            </b> 
                                            <br>{{$footer[5]->content }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-widget widget widget_link">
                            <h4 class="widget-title">HORARIOS</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <p>
                                        Nuestro equipo de profesionales estan listos para brindarle el mejor servicio.
                                    </p>
                                    <ul class="pe-4">
                                        <li>
                                            <b>
                                                <i class="fa fa-clock" style="color: orange;"></i> 
                                                Lunes - Viernes:
                                            </b> 
                                            <br> {{$footer[6]->content }}
                                            <br> {{$footer[7]->content }}
                                        </li>
                                        <li>
                                            <b>
                                                <i class="fa fa-clock" style="color: orange;"></i> 
                                                Sabados:
                                            </b> 
                                            <br> {{$footer[8]->content }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-widget widget widget_link">
                            <h4 class="widget-title">LEGAL</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="pe-4">
                                        <li>
                                            <a href="{{ route('web_gestion_calidad') }}">Alcance del SIG</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('web_politicas_calidad') }}">Política de Calidad</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('web_politicas_privacidad') }}">
                                                Politicas de Privacidad
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer bottom-->
        <div class="container">
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-8 align-self-center">
                        <div class="d-md-flex align-items-center mb-4 mb-xl-0">
                            <div class="copyright-area">
                                <p>© 2024 - CAP PERU. Todos los derechos reservados | por <a href="https://aracodeperu.com/">Aracode Smart Solutions</a></p>       
                            </div>
                        </div>                        
                    </div>
                    <div class="col-md-4 align-self-center text-xl-end">
                        <ul class="social-area d-inline-block">
                            <li>
                                <a class="active" href="{{$footer[9]->content }}" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            {{-- </li>
                            <li>
                                <a href="{{$footer[10]->content }}" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li> --}}
                            <li>
                                <a href="{{$footer[11]->content }}" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$footer[12]->content }}" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$footer[13]->content }}" target="_blank">
                                    <i class="fab fa-tiktok"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://capperu.com/login" target="_blank">
                                    <i class="fa fa-key"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>                
            </div>
        </div>
        <!--Footer bottom-->
    </footer>
    <!-- footer area end -->  
</div>