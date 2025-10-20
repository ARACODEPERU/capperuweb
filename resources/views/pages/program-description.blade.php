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
                                <h2>{{ $course->description }}</h2>
                                <!-- breadcrumb-list start -->
                                {{-- <ul class="breadcrumb-list-2">
                                    <li>Total 5 Episodes</li>
                                    <li>1 hr 45 Min</li>
                                    <li>2021</li>
                                    <li>Romantic Drama</li>
                                </ul> --}}
                                <!-- breadcrumb-list end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Breadcrumb -->
        <div class="movie-details-wrap section-ptb-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        
                                <div class="movie-img">
                                    <img src="{{ asset('storage/'.$item->image) }}"
                                            alt="Imagen">
                                </div>
                    </div>
                </div>
                <div class="movie-details-video-content-wrap">
                    {{-- <div class="video-wrap">
                        <video controls loop="loop" poster="assets/images/bg/bg-5.jpg">
                            <source src="assets/video/video.mp4" type="video/mp4">
                        </video>
                    </div> --}}
                    <div class="movie-details-content">
                        <div class="movie-details-info">
                            <ul>
                                <li><span>Director: </span>Brent Robinson</li>
                                <li><span>Starring: </span> Sangel Juergens, Joel McGill, Sandra Keller, Roy Johnson, Jerry
                                    Matherne, Cheryl Pope, Edward D. Kivi </li>
                            </ul>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions of
                            Lorem Ipsum.</p>
                        {{-- <div class="like-share-wrap">
                            <div class="social-share-wrap">
                                <span>Share:</span>
                                <div class="social-style-1">
                                    <a class="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    <a class="pinterest" href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                    <a class="linkedin" href="#"><i class="zmdi zmdi-linkedin"></i></a>
                                    <a class="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                            </div>
                            <div class="like-dislike-wrap">
                                <button class="like-dislike-style"><i class="zmdi zmdi-thumb-up"></i></button>
                                <button class="like-dislike-style"><i class="zmdi zmdi-thumb-down"></i></button>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
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

        <x-courses-new />
        <br>
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
