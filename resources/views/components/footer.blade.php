<div>
<!-- CSS para el nuevo footer -->
<style>
    .footer-modern {
        background-color: var(--footer-bg);
        color: var(--text-muted);
        font-size: 0.95rem;
        border-top: 1px solid var(--border-color);
    }
    .footer-modern .footer-widget h4 {
        color: #fff;
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
    .footer-modern .social-style-1 {
        display: flex;
        gap: 10px;
    }
    .footer-modern .social-style-1 a {
        background-color: rgba(255, 255, 255, 0.1);
        color: #fff;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }
    .footer-modern .social-style-1 a svg {
        width: 17px;
        height: 17px;
        fill: currentColor;
        display: block;
    }
    .footer-modern .social-style-1 a:hover {
        background-color: #ce1212;
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 6px 16px rgba(206, 18, 18, 0.45);
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
                            <a class="facebook" href="#" aria-label="Facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" aria-hidden="true"><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg>
                            </a>
                            <a class="instagram" href="#" aria-label="Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-hidden="true"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
                            </a>
                            <a class="linkedin" href="#" aria-label="LinkedIn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-hidden="true"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
                            </a>
                            <a class="tiktok" href="#" aria-label="TikTok">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" aria-hidden="true"><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg>
                            </a>
                            <a class="youtube" href="#" aria-label="YouTube">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" aria-hidden="true"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
                            </a>
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
                            <li><i class="fa fa-envelope"></i><a href="mailto:capperuacademica@gmail.com">capperuacademica@gmail.com</a></li>
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
