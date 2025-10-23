@extends('layouts.webpage')

@section('content')
    <!-- Main Wrapper Start -->
    <div class="main-wrapper">

        <x-header />

        <!-- Breadcrumb -->
        <div class="breadcrumb-area breadcrumb-modify-padding bg-black-3">
            <div class="container">
                <div class="in-breadcrumb">
                    <div class="row">
                        <div class="col">
                            <div class="breadcrumb-style-2">
                                <h2>¿QUIENES SOMOS?</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Breadcrumb -->

        <x-welcome />

        <x-vision-mission-values />
        {{-- <div class="movie-list section-pb-50">
            <div class="container">
                <div class="section-title-4 st-border-bottom">
                    <h2>Season 1</h2>
                </div>
                <div class="movie-slider-active-3 nav-style-3">
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-30.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Love Of Mine</a></h3>
                                <span>Episode: 01</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-31.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Love Of Mine</a></h3>
                                <span>Episode: 02</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-32.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Love Of Mine</a></h3>
                                <span>Episode: 03</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-33.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Love Of Mine</a></h3>
                                <span>Episode: 04</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="movie-wrap-plr">
                        <div class="movie-wrap text-center">
                            <div class="movie-img">
                                <a href="movie-details.html"><img src="assets/images/product/movie-34.jpg"
                                        alt=""></a>
                                <button title="Watchlist" class="Watch-list-btn" type="button"><i
                                        class="zmdi zmdi-plus"></i></button>
                            </div>
                            <div class="movie-content">
                                <h3 class="title"><a href="movie-details.html">The Love Of Mine</a></h3>
                                <span>Episode: 05</span>
                                <div class="movie-btn">
                                    <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        
        <!-- Footer Area -->
        <x-footer />

        <!--// Footer Area -->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="subscribe-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="zmdi zmdi-close s-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 id="exampleModalLabel">Ready to watch? Enter your email to create or restart your membership.
                        </h5>
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
