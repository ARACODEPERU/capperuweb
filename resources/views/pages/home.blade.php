@extends('layouts.webpage')

@section('content')

    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <!-- header area start -->
        <x-header />
        <!-- slider area start -->

        <div class="slider-area bg-black">
            <div class="container-fluid p-0">
                <div class="hero-slider-four dot-style-1 nav-style-1">
                    <div class="single-hero-slider-wrap single-animation-wrap slider-height-hm4 bg-image-hm4 slider-bg-color-black d-flex align-items-center slider-bg-position-1 bg-black"
                        style="background-image:url({{ asset('themes/webpage/assets/images/slider/slider-hm4-1.jpg') }});">
                        <div class="slider-content-hm4 slider-animated">
                            <h1 class="title animated">Out Of Network </h1>
                            <div class="sub-title-time-wrap">
                                <span class="sub-title animated">Feel Good</span>
                                <span class="time animated">45 Mins</span>
                            </div>
                            <div class="slider-button">
                                <a href="movie-details.html" class="btn-style-hm4 animated">Watch Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-hero-slider-wrap single-animation-wrap slider-height-hm4 bg-image-hm4 slider-bg-color-black d-flex align-items-center slider-bg-position-3 bg-black"
                        style="background-image:url({{ asset('themes/webpage/assets/images/slider/slider-hm4-2.jpg') }});">
                        <div class="slider-content-hm4 slider-animated">
                            <h1 class="title animated">The Love of Mind </h1>
                            <div class="sub-title-time-wrap">
                                <span class="sub-title animated">Romantic Movie</span>
                                <span class="time animated">1 hr 45 Mins</span>
                            </div>
                            <div class="slider-button">
                                <a href="movie-details.html" class="btn-style-hm4 animated">Watch Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-courses-new />

        <div class="series-list section-padding-lr section-pt-50">
            <div class="container-fluid">
                <div class="section-title-4 st-border-bottom">
                    <h2>Horror Series</h2>
                </div>
                <div class="movie-slider-active nav-style-2">
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="series-details.html"><img src="assets/images/product/horror-1.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="series-details.html">The Love Of Mine</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="series-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="series-details.html"><img src="assets/images/product/horror-2.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="series-details.html">The Adrift</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="series-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="series-details.html"><img src="assets/images/product/horror-3.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="series-details.html">She Film</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="series-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="series-details.html"><img src="assets/images/product/horror-4.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="series-details.html">Top Of The World</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="series-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="series-details.html"><img src="assets/images/product/horror-5.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="series-details.html"> Travel To Secrets</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="series-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="series-details.html"><img src="assets/images/product/horror-6.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="series-details.html">Wall Flower</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="series-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="series-details.html"><img src="assets/images/product/horror-3.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="series-details.html">Warm And Cozy</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="series-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="movie-list section-padding-lr section-ptb-50">
            <div class="container-fluid">
                <div class="section-title-4 st-border-bottom">
                    <h2>Old Movies</h2>
                </div>
                <div class="movie-slider-active nav-style-2">
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-07.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">Love Africa</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-08.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html"> Charging To Victory</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-09.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">Train To Hell</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-10.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">Into The Darkness</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-11.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html"> Way We Get Bye</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-12.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html"> Blood Bone & Beasts</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-13.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Locked</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-area">
            <div class="container-fluid p-0">
                <div class="hero-slider-four dot-style-1 nav-style-1">
                    <div class="single-hero-slider-wrap single-animation-wrap slider-height-hm4 bg-image-hm4 slider-bg-color-black d-flex align-items-center hero-overly slider-bg-position-2"
                        style="background-image:url(assets/images/slider/slider-hm4-3.png);">
                        <div class="slider-content-hm4 slider-animated">
                            <h1 class="title animated">3 in 1 Combo Pack</h1>
                            <div class="combo-pack-price">
                                <span class="new-price animated">200TK</span>
                                <span class="old-price animated">350TK</span>
                            </div>
                            <div class="slider-button">
                                <a href="movie-details.html" class="btn-style-hm4 animated">Watch Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-hero-slider-wrap single-animation-wrap slider-height-hm4 bg-image-hm4 slider-bg-color-black d-flex align-items-center hero-overly slider-bg-position-2 bg-black"
                        style="background-image:url(assets/images/slider/slider-hm4-4.png);">
                        <div class="slider-content-hm4 slider-animated">
                            <h1 class="title animated">5 in 1 Combo Pack</h1>
                            <div class="combo-pack-price">
                                <span class="new-price animated">450TK</span>
                                <span class="old-price animated">500TK</span>
                            </div>
                            <div class="slider-button">
                                <a href="movie-details.html" class="btn-style-hm4 animated">Watch Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="movie-list section-padding-lr section-ptb-50 bg-black">
            <div class="container-fluid">
                <div class="section-title-4 st-border-bottom">
                    <h2>Watch With Family</h2>
                </div>
                <div class="movie-slider-active nav-style-2">
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-14.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Love Of Mine</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-15.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Adrift</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-16.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">She Film</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-17.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">Top Of The World</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-18.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html"> Travel To Secrets</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-19.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">Wall Flower</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-20.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">Warm And Cozy</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area bg-black">
            <div class="series-banner-img">
                <a href="series-details.html"><img src="assets/images/slider/series-2.png" alt=""></a>
            </div>
        </div>
        <div class="movie-list section-padding-lr section-ptb-50 bg-black">
            <div class="container-fluid">
                <div class="section-title-4 st-border-bottom">
                    <h2>Award Winning Movie</h2>
                </div>
                <div class="movie-slider-active nav-style-2">
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-21.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Backwoods Mist</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-22.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Secrets</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-23.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">Dark Side & Winter</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-01.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Lost Girl</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-02.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html"> Land And Sea</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-03.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Walk</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-04.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">Never Stop Looking</a></h3>
                                <span>Quality : HD</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-area bg-black-2 section-padding-lr">
            <div class="footer-hm4-ptb">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <!-- footer-widget -->
                            <div class="footer-widget footer-about">
                                <div class="footer-logo">
                                    <a href="index-4.html"><img src="assets/images/logo/logo.png" alt=""></a>
                                </div>
                                <p>Eiusmod tempor incididunt ut la abore et minim ven exerc itation ulla mco lboris
                                    naliquip comm.</p>
                                <div class="social-style-1">
                                    <a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a>
                                    <a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                    <a class="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                            </div>
                            <!--// footer-widget -->
                        </div>
                        <div class="col-lg-9">
                            <div class="footer-top-right">
                                <div class="footer-quicklink">
                                    <ul>
                                        <li><a href="index-4.html">Home</a></li>
                                        <li><a href="about-2.html">About US</a></li>
                                        <li><a href="series.html">Series</a></li>
                                        <li><a href="contact-2.html">Contact Us</a></li>
                                        <li><a href="index-4.html">Tv Series</a></li>
                                        <li><a href="index-4.html">Tech</a></li>
                                        <li><a href="movie.html">Movie</a></li>
                                        <li><a href="index-4.html">Video</a></li>
                                        <li><a href="index-4.html">Live</a></li>
                                        <li><a href="index-4.html">Tv Series</a></li>
                                    </ul>
                                </div>
                                <div class="brand-logo-active brand-logo-wrap">
                                    <div class="brand-logo-plr">
                                        <div class="brand-logo">
                                            <a href="#"><img src="assets/images/brand/1.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="brand-logo-plr">
                                        <div class="brand-logo">
                                            <a href="#"><img src="assets/images/brand/2.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="brand-logo-plr">
                                        <div class="brand-logo">
                                            <a href="#"><img src="assets/images/brand/3.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="brand-logo-plr">
                                        <div class="brand-logo">
                                            <a href="#"><img src="assets/images/brand/4.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="brand-logo-plr">
                                        <div class="brand-logo">
                                            <a href="#"><img src="assets/images/brand/5.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="brand-logo-plr">
                                        <div class="brand-logo">
                                            <a href="#"><img src="assets/images/brand/6.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="brand-logo-plr">
                                        <div class="brand-logo">
                                            <a href="#"><img src="assets/images/brand/1.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="brand-logo-plr">
                                        <div class="brand-logo">
                                            <a href="#"><img src="assets/images/brand/2.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-quicklink-2">
                                    <ul>
                                        <li><a href="contact-2.html">Report a Bug</a></li>
                                        <li><a href="contact-2.html">Request a Feature</a></li>
                                        <li><a href="about-2.html">Content Grievance</a></li>
                                        <li><a href="contact-2.html">Movie Request</a></li>
                                        <li><a href="contact-2.html">Submit Your Story</a></li>
                                        <li><a href="contact-2.html">Privacy Policy</a></li>
                                        <li><a href="contact-2.html">Terms of Services</a></li>
                                        <li><a href="contact-2.html">Support</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom footer-bottom-ptb footer-black-hm4">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="copyright">
                                <p class="copyright-text">
                                    Copyright ©2025 All rights reserved | Made with <i class="zmdi zmdi-favorite"></i>
                                    by <a href=""> Aracode Smart Solutions</a>.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="login-alert">
                                <!-- <p>Already have an Account? <a href="login-and-register-2.html">LOGIN</a></p> -->
                                <div class="member-btn">
                                    <a class="member-btn-style" href="pricing-plan-2.html">WebMail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="subscribe-btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="zmdi zmdi-close s-close"></i></button>
                    </div>
                    <div class="modal-body">
                        <h5 id="exampleModalLabel">Ready to watch? Enter your email to create or restart your
                            membership.</h5>
                        <div class="create-membership-wrap modify">
                            <input placeholder="Email Address">
                            <button class="landing-btn-style" type="button">Get Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Wrapper End -->
@endsection
