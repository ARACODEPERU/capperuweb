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
    
    
    <a class="appWhatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=51{{$footer[0]->content }}&text=Hola&nbsp;CapPeru!&nbsp;me&nbsp;pueden&nbsp;ayudar?">
        <img src="themes/capperu/assets/img/redes/whatsapp.png" alt="Whatsapp">
    </a>
    
          <!-- Load Facebook SDK for JavaScript -->
          <div id="fb-root"></div>
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
          </div>


    <!-- footer area start -->
    <footer class="footer-area">
        <div class="footer-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-widget widget widget_link">
                            <h4 class="widget-title">Sobre Nosotros</h4>
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
                            <h4 class="widget-title">Oficinas</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="pe-5">
                                        <li>
                                            <b>
                                                <i class="fa fa-home" style="color: orange;"></i> 
                                                Sede Lima:
                                            </b> 
                                            {{$footer[2]->content }}
                                        </li>
                                        <li>
                                            <b>
                                                <i class="fa fa-home" style="color: orange;"></i> 
                                                Sede Nvo. Chimbote:
                                            </b> 
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
                            <h4 class="widget-title">Horarios</h4>
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
                            <h4 class="widget-title">Blog & Noticias</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="pe-4">
                                        <li>
                                            <a href="">
                                                Planificación de Posible escasez de refrigerantes
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Planificación de Posible escasez de refrigerantes
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Planificación de Posible escasez de refrigerantes
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                Planificación de Posible escasez de refrigerantes
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
                    <div class="col-md-6 align-self-center">
                        <div class="d-md-flex align-items-center mb-4 mb-xl-0">
                            <div class="copyright-area">
                                <p>© 2024 - CAP PERU. Todos los derechos reservados | por <a href="https://aracodeperu.com/">Aracode Peru</a></p>       
                            </div>
                        </div>                        
                    </div>
                    <div class="col-md-6 align-self-center text-xl-end">
                        <ul class="social-area d-inline-block">
                            <li>
                                <a class="active" href="{{$footer[9]->content }}" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$footer[10]->content }}" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
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
                                <a href="#" target="_blank">
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