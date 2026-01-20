
<div style="position: sticky; top: 0; z-index: 1000; background-color: #fff;">
    <style>
        .mean-container .mean-bar a.meanmenu-reveal span {
            display: none; /* Oculta las barras span originales */
        }

        /* Reemplaza el botón del menú móvil con un ícono SVG de hamburguesa */
        .mean-container .mean-bar a.meanmenu-reveal {
            color: #000 !important;
            width: 28px;
            height: 28px;
            padding: 0 !important;
            background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") no-repeat center;
            background-size: 100%;
        }
    </style>
    <header class="header-area section-padding-lr">
        <div class="container-fluid">
            <div class="header-wrap header-netflix-style">
                <div class="logo-menu-wrap">
                    <div class="logo">
                        <a href="{{ route('web_home') }}">
                            @if(isset($header[0]) && $header[0]->content)
                                <img style="height: 60px;" src="{{ asset('storage/'.$header[0]->content) }}" alt="Logo">
                            @else
                                <img style="height: 60px;" src="{{ asset('themes/webpage/assets/images/logo/logo.png') }}" alt="Logo">
                            @endif
                        </a>
                    </div>
                    <div class="main-menu main-theme-color-four">
                        <nav class="main-navigation">
                            <ul>
                                <li class="{{ request()->routeIs('web_home') ? 'active' : '' }}"><a href="{{ route('web_home') }}">Home</a></li>
                                <li class="{{ request()->routeIs('web_about_us') ? 'active' : '' }}">
                                    <a href="{{ route('web_about_us') }}">Sobre Nosotros</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('web_about_us') }}">¿Quienes Somos? </a></li>
                                        <li><a href="{{ route('web_quality_policies') }}">Politica De Calidad</a></li>
                                        <li><a href="{{ route('web_quality_management') }}">Alcance Del SIG</a></li>
                                    </ul>
                                </li>
                                <li class="{{ request()->routeIs('web_catalog') ? 'active' : '' }}"><a href="{{ route('web_catalog') }}">Programas de Especialización</a></li>
                                <li class="{{ request()->routeIs('web_contact') ? 'active' : '' }}"><a href="{{ route('web_contact') }}">Contacto</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="right-side d-flex">
                    @auth
                    <div class="our-profile-area ">
                        <a href="#" class="our-profile-pc" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img src="{{ Auth::user()->avatar ? asset('storage/'.Auth::user()->avatar) : asset('themes/webpage/assets/images/review/author-01.png') }}" alt="{{ Auth::user()->name }}" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                        </a>
                        <div class="dropdown-menu netflix-profile-style red">
                            <ul>
                                <li class="single-list"><a href="{{ route('dashboard') }}">Mi Panel</a></li>
                                <li class="single-list">
                                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                        @csrf
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @else
                    <div class="subscribe-btn-wrap">
                        <a href="{{ route('login') }}" class="subscribe-btn">Aula Virtual</a>
                    </div>
                    @endauth
                    <div class="mobile-menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </header>
</div>
