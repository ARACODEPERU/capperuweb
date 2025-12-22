<div>
    <header class="header-area section-padding-lr">
        <div class="container-fluid">
            <div class="header-wrap header-netflix-style">
                <div class="logo-menu-wrap">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="{{ route('web_home') }}">
                            {{-- <img src="{{ asset('themes/webpage/assets/images/logo/logo.png') }}" alt=""> --}}
                            <img style="height: 60px;" src="{{ asset('storage/'.$header[0]->content) }}" alt="Logo">
                        </a>
                    </div>
                    <!-- Logo -->
                    <div class="main-menu main-theme-color-four">
                        <nav class="main-navigation">
                            <ul>
                                <li class="active"><a href="{{ route('web_home') }}">Home</a></li>
                                <li>
                                    <a href="{{ route('web_about_us') }}">Sobre Nosotros</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('web_about_us') }}">¿Quienes Somos? </a></li>
                                        <li><a href="{{ route('web_quality_policies') }}">Politica De Calidad</a></li>
                                        <li><a href="{{ route('web_quality_management') }}">Alcance Del SIG</a></li>
                                    </ul>
                                </li>
                                {{-- <li><a href="movie.html">Movies</a>
                                    <ul class="sub-menu">
                                        <li><a href="horror-movie.html">Horror Movies</a></li>
                                        <li><a href="romantic-movie.html">Romantic Movies</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-2.html">About Us</a></li>
                                        <li><a href="pricing-plan-2.html">Pricing</a></li>
                                        <li><a href="watchlist.html">Watchlist</a></li>
                                        <li><a href="history.html">History</a></li>
                                        <li><a href="movie-details.html">Movie details</a></li>
                                        <li><a href="series-details.html">Series details</a></li>
                                        <li><a href="faq-2.html">FAQ</a></li>
                                        <li><a href="my-account-2.html">My Account</a></li>
                                        <li><a href="landing-page.html">Landing Page</a></li>
                                    </ul>
                                </li> --}}
                                {{-- <li><a href="">Blog</a></li> --}}
                                <li><a href="{{ route('web_catalog') }}">Programas de Especialización</a></li>
                                <li><a href="{{ route('web_contact') }}">Contacto</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="right-side d-flex">
                    <!-- search-input-box start -->
                    <!-- <div class="header-search-2">
                            <a class="search-toggle" href="#">
                                <i class="zmdi zmdi-search s-open"></i>
                                <i class="zmdi zmdi-close s-close"></i>
                            </a>
                            <div class="search-wrap-2">
                                <form action="#">
                                    <input placeholder="Search" type="text">
                                    <button class="button-search"><i class="fa fa-search-plus" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div> -->
                    <!-- search-input-box end -->
                    <!-- notifications start -->
                    {{-- <div class="notifications-bar btn-group">
                            <a href="#" class="notifications-iocn white" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>5</span>
                            </a>
                            <div class="dropdown-menu netflix-notifications-style red">
                                <h5>Notifications</h5>
                                <ul>
                                    <li class="single-notifications">
                                        <a href="#">
                                            <span class="image">
                                                <img
                                                    src="{{ asset('themes/webpage/assets/images/review/author-01.png') }}"
                                                    alt="">
                                            </span>
                                            <span class="notific-contents">
                                                <span>Lorem ipsum dolor sit amet consectetur.</span>
                                                <span class="time">21 hours ago</span>
                                            </span>

                                        </a>
                                    </li>
                                    <li class="single-notifications">
                                        <a href="#">
                                            <span class="image"><img src="assets/images/review/author-01.png"
                                                    alt=""></span>
                                            <span class="notific-contents">
                                                <span>Lorem ipsum dolor sit amet consectetur.</span>
                                                <span class="time">21 hours ago</span>
                                            </span>

                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                    {{-- <div class="notifications-bar btn-group">
                        <a href="{{ route('web_carrito') }}" class="notifications-iocn black">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>5</span>
                        </a>
                    </div> --}}
                    <!-- notifications end -->
                    <!-- our-profile-area start -->
                    <div class="our-profile-area ">
                        <a href="#" class="our-profile-pc" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img src="{{ asset('themes/webpage/assets/images/review/author-01.png') }}" alt="">
                        </a>
                        <div class="dropdown-menu netflix-profile-style red">
                            <ul>
                                {{-- <li class="single-list"><a href="history.html">History</a></li>
                                <li class="single-list"><a href="watchlist.html">Watchlist</a></li> --}}
                                <li class="single-list"><a href="">Mi Perfil</a></li>
                                <li class="single-list"><a href="">Cerrar Sesión</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- our-profile-area end -->
                    <div class="subscribe-btn-wrap">
                        <a href="{{ route('login') }}" class="subscribe-btn">Aula Virtual</a>
                    </div>
                    <!-- mobile-menu start -->
                    <div class="mobile-menu d-block d-lg-none"></div>
                    <!-- mobile-menu end -->
                </div>
            </div>
        </div>
    </header>
</div>
