<div>
<!-- CSS para el nuevo footer -->
<style>
    .footer-modern {
        background-color: #1a1a1a; /* Un poco más claro que el negro puro */
        color: #a9a9a9;
        font-size: 0.95rem;
    }
    .footer-modern .footer-widget h4 {
        color: #ffffff;
        font-size: 1.1rem;
        font-weight: 600;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 10px;
        text-transform: uppercase;
    }
    .footer-modern .footer-widget h4::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 2px;
        width: 40px;
        background-color: #ce1212; /* Color de acento */
    }
    .footer-modern .footer-about p {
        margin-bottom: 25px;
        line-height: 1.8;
    }
    .footer-modern .social-style-1 a {
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
    }
    .footer-modern .social-style-1 a:hover {
        background-color: #ce1212;
        color: #fff;
    }
    .footer-modern .footer-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .footer-modern .footer-list li {
        margin-bottom: 12px;
    }
    .footer-modern .footer-list li a {
        color: #a9a9a9;
        transition: all 0.3s ease;
        display: inline-block;
    }
    .footer-modern .footer-list li a:hover {
        color: #ffffff;
        transform: translateX(5px);
    }
    .footer-modern .footer-list li i {
        color: #ce1212;
        margin-right: 10px;
        width: 20px;
        text-align: center;
    }
    .footer-modern .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 25px;
        padding-bottom: 25px;
    }
    .footer-modern .copyright-text {
        color: #a9a9a9;
        text-align: center;
    }
    .footer-modern .copyright-text a {
        color: #fff;
        font-weight: 500;
    }
</style>

<!-- =========== NUEVO FOOTER MODERNO =========== -->
<footer class="footer-area footer-modern section-padding-lr">
    <div class="container-fluid">
        <!-- Contenido principal del footer (4 columnas) -->
        <div class="footer-hm4-ptb">
            <div class="row">
                <!-- Columna 1: Identidad y Redes -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 mb-lg-0">
                    <div class="footer-widget footer-about">
                        <h4>CAP - PERÚ</h4>
                        <p>
                            Contribuimos a la actualización y perfeccionamiento académico de profesionales y egresados de las diferentes carreras.
                        </p>
                        <div class="social-style-1">
                            <a class="facebook" href="#" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
                            <a class="instagram" href="#" aria-label="Instagram"><i class="fa fa-instagram"></i></a>
                            <a class="linkedin" href="#" aria-label="LinkedIn"><i class="fa fa-linkedin"></i></a>
                            <a class="tiktok" href="#" aria-label="TikTok"><i class="fa fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Columna 2: Navegación Rápida -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 mb-lg-0">
                    <div class="footer-widget">
                        <h4>Explorar</h4>
                        <ul class="footer-list">
                            <li><a href="{{ route('web_home') }}">Inicio</a></li>
                            <li><a href="{{ route('web_about_us') }}">Nosotros</a></li>
                            <li><a href="{{ route('web_catalog') }}">Catálogo de Cursos</a></li>
                            <li><a href="{{ route('web_contact') }}">Contacto</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Columna 3: Legal y Calidad -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4 mb-md-0">
                    <div class="footer-widget">
                        <h4>Transparencia</h4>
                        <ul class="footer-list">
                            <li><a href="{{ route('web_quality_policies') }}">Política De Calidad</a></li>
                            <li><a href="{{ route('web_quality_management') }}">Alcance Del SIG</a></li>
                            <li><a href="#">Políticas de Privacidad</a></li>
                            <li><a href="#">Libro de Reclamaciones</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Columna 4: Contacto -->
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget">
                        <h4>Contacto</h4>
                        <ul class="footer-list">
                            <li><i class="fa fa-map-marker"></i><span><b>Sede Lima:</b><br> Av. 2 de Mayo 516, Miraflores</span></li>
                            <li><i class="fa fa-map-marker"></i><span><b>Sede Nuevo Chimbote:</b> <br> Av. Urb. Nicolas de Garatea Mz M, Lt 25</span></li>
                            <li><i class="fa fa-phone"></i><a href="tel:+51977662460">+51 977 662 460</a></li>
                            <li><i class="fa fa-phone"></i><a href="tel:+51946943887">+51 946 943 887</a></li>
                            <li><i class="fa fa-phone"></i><a href="tel:+51908934095">+51 908 934 095</a></li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:info@capperu.com">info@capperu.com</a></li>
                            <li><i class="fa fa-globe"></i><a href="#">WebMail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Barra de Copyright -->
        <div style="padding: 15px 0px 25px 0px;">
            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p class="copyright-text">
                            Copyright ©{{ date('Y') }} All rights reserved | Desarrollado con <i class="fa fa-heart" style="color: #ce1212;"></i>
                            por <a href="https://aracode.com.pe/" target="_blank" rel="noopener noreferrer">Aracode Smart Solutions</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
                       
</div>
