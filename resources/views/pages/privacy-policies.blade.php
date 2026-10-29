@extends('layouts.webpage')

@section('content')

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <x-header />

        <!-- HERO SECTION -->
        <div class="policy-hero">
            <div class="container">
                <h1>Políticas de Privacidad</h1>
                <p>Transparencia total sobre cómo protegemos y tratamos tus datos personales.</p>
                <ul class="modern-breadcrumb">
                    <li><a href="{{ route('web_home') }}">Inicio</a></li>
                    <li><span>Políticas de Privacidad</span></li>
                </ul>
            </div>
        </div>

        <!-- CONTENIDO PRINCIPAL (OVERLAP) -->
        <div class="container policy-container-overlap">
            <div class="row justify-content-center">
                <div class="col-lg-10 policy-content" data-aos="fade-up">
                    <div class="quality-header">
                        <div class="quality-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect width="18" height="11" x="3" y="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                        </div>
                        <h2>POLÍTICA DE PRIVACIDAD Y PROTECCIÓN DE DATOS PERSONALES</h2>
                    </div>
                    <p>
                        Centro de Actualización Profesional &amp; Consultoría S.A.C. (en adelante, CAP PERU),
                        con domicilio en Av. 2 de Mayo 516, oficina 201, distrito de Miraflores, Lima, Perú,
                        respeta tu privacidad y protege tus datos personales conforme a la Ley N° 29733,
                        Ley de Protección de Datos Personales, y su Reglamento aprobado por
                        Decreto Supremo N° 003-2013-JUS.
                    </p>
                    <p>
                        Al brindarnos tus datos personales a través de nuestro sitio web, formularios de
                        contacto, matrícula, WhatsApp o cualquier otro medio, aceptas el tratamiento de
                        tus datos en los términos descritos en la presente política.
                    </p>
                    <h3>1. Datos que recopilamos</h3>
                    <p>
                        Recopilamos únicamente los datos necesarios para brindarte nuestros servicios
                        educativos, tales como: nombres y apellidos, documento de identidad, correo
                        electrónico, número de teléfono, dirección, datos académicos y laborales,
                        así como información de navegación (cookies) cuando visitas nuestro sitio web.
                    </p>
                    <h3>2. Finalidades del tratamiento</h3>
                    <ul>
                        <li>
                            Gestionar tu matrícula, certificaciones, constancias y demás servicios
                            académicos solicitados.
                        </li>
                        <li>
                            Enviarte información sobre nuestros cursos, diplomados, promociones y
                            novedades, siempre que nos hayas brindado tu consentimiento.
                        </li>
                        <li>
                            Mejorar continuamente nuestros servicios, plataformas y experiencia de usuario.
                        </li>
                        <li>
                            Cumplir con las obligaciones legales y contractuales que nos resulten aplicables.
                        </li>
                    </ul>
                    <h3>3. Tus derechos (ARCO)</h3>
                    <p>
                        Como titular de tus datos personales tienes derecho a acceder, rectificar,
                        cancelar u oponerte al tratamiento de tu información, así como a revocar
                        tu consentimiento en cualquier momento. Para ejercer estos derechos,
                        escríbenos a
                        <a href="mailto:capperuacademica@gmail.com">capperuacademica@gmail.com</a>
                        indicando tu nombre completo, documento de identidad y el derecho que
                        deseas ejercer. Atenderemos tu solicitud dentro de los plazos establecidos
                        por la normativa vigente.
                    </p>
                    <h3>4. Seguridad de tu información</h3>
                    <p>
                        Adoptamos las medidas técnicas, organizativas y legales necesarias para
                        garantizar la seguridad de tus datos personales y evitar su alteración,
                        pérdida, tratamiento o acceso no autorizado. El acceso a tu información
                        está restringido únicamente al personal autorizado.
                    </p>
                    <h3>5. Uso de cookies</h3>
                    <p>
                        Nuestro sitio web utiliza cookies propias y de terceros con fines estadísticos
                        y de mejora de la experiencia de navegación. Puedes configurar tu navegador
                        para rechazarlas; sin embargo, algunas funcionalidades del sitio podrían
                        verse limitadas.
                    </p>
                    <h3>6. Cambios en esta política</h3>
                    <p>
                        CAP PERU podrá actualizar la presente Política de Privacidad en cualquier
                        momento. Cualquier cambio será publicado en esta misma página, por lo que
                        te recomendamos revisarla periódicamente.
                    </p>
                    <span class="policy-date">Lima, 24 de enero del 2024</span>
                </div>
            </div>
        </div>

        <!-- Footer Area -->
        <div data-aos="fade-up" data-aos-duration="1000">
            <x-footer />
        </div>

        <!--// Footer Area -->
    </div>
    <!-- Main Wrapper End -->

@endsection
