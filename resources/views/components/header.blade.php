<div class="header-sticky-container" style="position: sticky; top: 0; z-index: 1000; background-color: var(--header-bg); transition: background-color 0.3s;">
    <style>
        .header-sticky-container { border-bottom: 1px solid var(--border-color); }
        .mean-container .mean-bar a.meanmenu-reveal span {
            display: none; /* Oculta las barras span originales */
        }

        /* Reemplaza el botón del menú móvil con un ícono SVG adaptable */
        .mean-container .mean-bar a.meanmenu-reveal {
            width: 28px;
            height: 28px;
            padding: 0 !important;
            background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgb(51, 51, 51)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") no-repeat center;
            background-size: 100%;
            transition: transform 0.3s ease;
        }

        [data-bs-theme="dark"] .mean-container .mean-bar a.meanmenu-reveal {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgb(240, 246, 252)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        /* Estilos de navegación adaptables */
        .main-navigation ul li a { color: var(--text-main); transition: color 0.3s; }
        .main-navigation ul li a:hover { color: #ce1212; }
        
        .main-navigation ul li .sub-menu { 
            background-color: var(--bg-card); 
            border: 1px solid var(--border-color);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        .main-navigation ul li .sub-menu li a { color: var(--text-main); }

        .dropdown-menu.netflix-profile-style { 
            background-color: var(--bg-card); 
            border: 1px solid var(--border-color); 
        }

        .table-striped>tbody>tr:nth-child(odd)>* {
            background-color: rgba(0, 0, 0, 0.03);
        }

        /* Theme Toggle Styles */
        .theme-toggle-wrap {
            display: flex;
            align-items: center;
            margin-right: 15px;
        }
        .theme-btn-toggle {
            background: none;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            color: var(--text-main);
            padding: 5px;
            transition: color 0.3s;
        }
        [data-bs-theme="dark"] .theme-btn-toggle { color: #ffc107; }
        .theme-btn-toggle .fa-sun-o { display: none; }
        .theme-btn-toggle .fa-moon-o { display: block; }
        
        [data-bs-theme="dark"] .theme-btn-toggle .fa-sun-o { display: block; }
        [data-bs-theme="dark"] .theme-btn-toggle .fa-moon-o { display: none; }

        [data-bs-theme="dark"] .header-area { background-color: var(--header-bg) !important; }
        
        /* Ajuste de logo en modo oscuro si es necesario (opcional) */
        [data-bs-theme="dark"] .logo img {
            filter: brightness(1.1);
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
                                <li class="{{ request()->routeIs('web_alumnos') ? 'active' : '' }}"><a href="{{ route('web_alumnos') }}">Verificar</a></li>
                                <li class="{{ request()->routeIs('web_contact') ? 'active' : '' }}"><a href="{{ route('web_contact') }}">Contacto</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="right-side d-flex">
                    <div class="theme-toggle-wrap">
                        <button id="themeToggle" class="theme-btn-toggle" title="Cambiar modo">
                            <i class="fa fa-moon-o"></i>
                            <i class="fa fa-sun-o"></i>
                        </button>
                    </div>
                    @auth
                    <div class="our-profile-area ">
                        <a href="#" class="our-profile-pc" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img src="{{ Auth::user()->avatar ? asset('storage/'.Auth::user()->avatar) : asset('themes/webpage/assets/images/review/author-01.png') }}" alt="{{ Auth::user()->name }}" style="width: 40px; height: 40px; border-radius: 50%; object-fit: cover;">
                        </a>
                        <div class="dropdown-menu netflix-profile-style red" style="background-color: var(--bg-card);">
                            <ul>
                                <li class="single-list"><a href="{{ route('dashboard') }}" style="color: var(--text-main);">Mi Panel</a></li>
                                <li class="single-list">
                                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                        @csrf
                                        <a href="#" style="color: var(--text-main);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesión</a>
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

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const themeToggle = document.getElementById('themeToggle');
            
            themeToggle.addEventListener('click', () => {
                const currentTheme = document.documentElement.getAttribute('data-bs-theme');
                const newTheme = currentTheme === 'light' ? 'dark' : 'light';
                
                document.documentElement.setAttribute('data-bs-theme', newTheme);
                localStorage.setItem('theme', newTheme);
            });
        });
    </script>
</div>
