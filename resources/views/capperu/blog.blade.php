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
    <section class="banner-area style-3" style="padding: 80px; background-image: url({{ asset('themes/capperu/assets/img/banner/bg-2.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 align-self-center">
                    <div class="banner-inner text-center">
                        <h1>Blog & Noticias</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    

    <div class="blog-cat">
        <div class="category-navbar navbar-area mt-0 border-top-0">
            <nav class="navbar navbar-expand-lg">
                <div class="container nav-container">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav menu-open">
                            <li>
                                <h6 class="mb-0">Mantente siempre informado</h6>
                            </li>
                        </ul>
                        <div class="single-input-wrap bg-transparent">
                            <input type="text" placeholder="Search your best courses">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- blog Area Start-->
    <section class="pd-top-70 pd-bottom-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-course-wrap">
                        <div class="thumb">
                            <img src="{{ asset('themes/capperu/assets/img/course/1.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h6><a href="{{ route('web_blog_descripcion') }}">Your Guide to Using the Right DevOps Tools 2021</a></h6>
                            <p>Guide to Using the Right sit amet, elit. Velit sit ornare tortor arcu, euismod...</p>
                            <div class="price-wrap">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <a href="{{ route('web_blog_descripcion') }}">By Edufie</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="date">05 May, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-course-wrap">
                        <div class="thumb">
                            <img src="{{ asset('themes/capperu/assets/img/course/2.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h6><a href="{{ route('web_blog_descripcion') }}">Guide to Using the Right Your DevOps Tools 2021</a></h6>
                            <p>Your DevOps Tools sit amet, elit. Velit sit ornare tortor arcu, euismod...</p>
                            <div class="price-wrap">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <a href="{{ route('web_blog_descripcion') }}">By Edufie</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="date">05 May, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-course-wrap">
                        <div class="thumb">
                            <img src="{{ asset('themes/capperu/assets/img/course/4.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h6><a href="{{ route('web_blog_descripcion') }}">Using the Right DevOps Tools Your Guide 2021</a></h6>
                            <p>Right DevOps Tools Your amet, elit. Velit sit ornare tortor arcu, euismod...</p>
                            <div class="price-wrap">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <a href="{{ route('web_blog_descripcion') }}">By Edufie</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="date">05 May, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-course-wrap">
                        <div class="thumb">
                            <img src="{{ asset('themes/capperu/assets/img/course/7.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h6><a href="{{ route('web_blog_descripcion') }}">The Right DevOps Tools 2021 Your Guide to Using </a></h6>
                            <p>Your Guide to Using  amet, elit. Velit sit ornare tortor arcu, euismod...</p>
                            <div class="price-wrap">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <a href="{{ route('web_blog_descripcion') }}">By Edufie</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="date">05 May, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-course-wrap">
                        <div class="thumb">
                            <img src="{{ asset('themes/capperu/assets/img/course/3.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h6><a href="{{ route('web_blog_descripcion') }}">The Right DevOps Tools 2021 Your Guide to Using </a></h6>
                            <p>Your Guide to Using  amet, elit. Velit sit ornare tortor arcu, euismod...</p>
                            <div class="price-wrap">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <a href="{{ route('web_blog_descripcion') }}">By Edufie</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="date">05 May, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-course-wrap">
                        <div class="thumb">
                            <img src="{{ asset('themes/capperu/assets/img/course/5.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h6><a href="{{ route('web_blog_descripcion') }}">Your Guide to Using the Right DevOps Tools 2021</a></h6>
                            <p>Guide to Using the Right sit amet, elit. Velit sit ornare tortor arcu, euismod...</p>
                            <div class="price-wrap">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <a href="{{ route('web_blog_descripcion') }}">By Edufie</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="date">05 May, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-course-wrap">
                        <div class="thumb">
                            <img src="{{ asset('themes/capperu/assets/img/course/6.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h6><a href="{{ route('web_blog_descripcion') }}">Guide to Using the Right Your DevOps Tools 2021</a></h6>
                            <p>Your DevOps Tools sit amet, elit. Velit sit ornare tortor arcu, euismod...</p>
                            <div class="price-wrap">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <a href="{{ route('web_blog_descripcion') }}">By Edufie</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="date">05 May, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-course-wrap">
                        <div class="thumb">
                            <img src="{{ asset('themes/capperu/assets/img/course/4.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h6><a href="{{ route('web_blog_descripcion') }}">Using the Right DevOps Tools Your Guide 2021</a></h6>
                            <p>Right DevOps Tools Your amet, elit. Velit sit ornare tortor arcu, euismod...</p>
                            <div class="price-wrap">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <a href="{{ route('web_blog_descripcion') }}">By Edufie</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="date">05 May, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-course-wrap">
                        <div class="thumb">
                            <img src="{{ asset('themes/capperu/assets/img/course/1.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h6><a href="{{ route('web_blog_descripcion') }}">Your Guide to Using the Right DevOps Tools 2021</a></h6>
                            <p>Guide to Using the Right sit amet, elit. Velit sit ornare tortor arcu, euismod...</p>
                            <div class="price-wrap">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <a href="{{ route('web_blog_descripcion') }}">By Edufie</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="date">05 May, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-course-wrap">
                        <div class="thumb">
                            <img src="{{ asset('themes/capperu/assets/img/course/2.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h6><a href="{{ route('web_blog_descripcion') }}">Guide to Using the Right Your DevOps Tools 2021</a></h6>
                            <p>Your DevOps Tools sit amet, elit. Velit sit ornare tortor arcu, euismod...</p>
                            <div class="price-wrap">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <a href="{{ route('web_blog_descripcion') }}">By Edufie</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="date">05 May, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-course-wrap">
                        <div class="thumb">
                            <img src="{{ asset('themes/capperu/assets/img/course/4.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h6><a href="{{ route('web_blog_descripcion') }}">Using the Right DevOps Tools Your Guide 2021</a></h6>
                            <p>Right DevOps Tools Your amet, elit. Velit sit ornare tortor arcu, euismod...</p>
                            <div class="price-wrap">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <a href="{{ route('web_blog_descripcion') }}">By Edufie</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="date">05 May, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-course-wrap">
                        <div class="thumb">
                            <img src="{{ asset('themes/capperu/assets/img/course/7.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h6><a href="{{ route('web_blog_descripcion') }}">The Right DevOps Tools 2021 Your Guide to Using </a></h6>
                            <p>Your Guide to Using  amet, elit. Velit sit ornare tortor arcu, euismod...</p>
                            <div class="price-wrap">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <a href="{{ route('web_blog_descripcion') }}">By Edufie</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="date">05 May, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-course-wrap">
                        <div class="thumb">
                            <img src="{{ asset('themes/capperu/assets/img/course/3.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h6><a href="{{ route('web_blog_descripcion') }}">The Right DevOps Tools 2021 Your Guide to Using </a></h6>
                            <p>Your Guide to Using  amet, elit. Velit sit ornare tortor arcu, euismod...</p>
                            <div class="price-wrap">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <a href="{{ route('web_blog_descripcion') }}">By Edufie</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="date">05 May, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-course-wrap">
                        <div class="thumb">
                            <img src="{{ asset('themes/capperu/assets/img/course/5.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h6><a href="{{ route('web_blog_descripcion') }}">Your Guide to Using the Right DevOps Tools 2021</a></h6>
                            <p>Guide to Using the Right sit amet, elit. Velit sit ornare tortor arcu, euismod...</p>
                            <div class="price-wrap">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <a href="{{ route('web_blog_descripcion') }}">By Edufie</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="date">05 May, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-course-wrap">
                        <div class="thumb">
                            <img src="{{ asset('themes/capperu/assets/img/course/6.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h6><a href="{{ route('web_blog_descripcion') }}">Guide to Using the Right Your DevOps Tools 2021</a></h6>
                            <p>Your DevOps Tools sit amet, elit. Velit sit ornare tortor arcu, euismod...</p>
                            <div class="price-wrap">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <a href="#">By Edufie</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="date">05 May, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="single-course-wrap">
                        <div class="thumb">
                            <img src="{{ asset('themes/capperu/assets/img/course/4.png') }}" alt="img">
                        </div>
                        <div class="wrap-details">
                            <h6><a href="#">Using the Right DevOps Tools Your Guide 2021</a></h6>
                            <p>Right DevOps Tools Your amet, elit. Velit sit ornare tortor arcu, euismod...</p>
                            <div class="price-wrap">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <a href="#">By Edufie</a>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div class="date">05 May, 2021</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <nav aria-label="...">
                    <ul class="pagination">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- blog Area End -->


    
    <!-- Más Populares Area Start-->
    <x-capperu.programas-populares-area></x-capperu.programas-populares-area>
    <!-- Más Populares Area End -->



    <x-capperu.footer-area></x-capperu.footer-area>

@endsection