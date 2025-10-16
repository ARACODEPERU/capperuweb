<div>
    <div class="movie-list section-padding-lr section-pt-50">
        <div class="container-fluid">
            <div class="section-title-4 st-border-bottom">
                <h2>Nuevos programas</h2>
            </div>
            <div class="movie-slider-active nav-style-2">

                @if (count($programs) > 0)
                    @foreach ($programs as $key => $program)
                        <div class="movie-wrap-plr">
                            <div class="movie-wrap text-center">
                                <div class="movie-img">
                                    <a href="{{ route('web_descripcion_programa', $program->id) }}">
                                        <img src="{{ asset('themes/webpage/assets/images/product/movie-17.jpg') }}"
                                            alt="">
                                    </a>
                                    <button title="Watchlist" class="Watch-list-btn" type="button">
                                        <i class="zmdi zmdi-plus"></i>
                                    </button>
                                </div>
                                <div class="movie-content">
                                    <h3 class="title">
                                        <a href="{{ route('web_descripcion_programa', $program->id) }}">
                                            {{ $program->name }}
                                        </a>
                                    </h3>
                                    <span>Precio : {{ $program->price }}</span>
                                    <div class="movie-btn">
                                        <a href="{{ route('web_descripcion_programa', $program->id) }}" class="btn-style-hm4-2 animated">
                                            Más Información
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                {{-- <div class="movie-wrap-plr">
                    <div class="movie-wrap text-center">
                        <div class="movie-img">
                            <a href="movie-details.html">
                                <img src="{{ asset('themes/webpage/assets/images/product/movie-17.jpg') }}"
                                    alt="">
                            </a>
                            <button title="Watchlist" class="Watch-list-btn" type="button">
                                <i class="zmdi zmdi-plus"></i>
                            </button>
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
                            <a href="movie-details.html">
                                <img src="{{ asset('themes/webpage/assets/images/product/movie-17.jpg') }}"
                                    alt="">
                            </a>
                            <button title="Watchlist" class="Watch-list-btn" type="button">
                                <i class="zmdi zmdi-plus"></i>
                            </button>
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
                            <a href="movie-details.html">
                                <img src="{{ asset('themes/webpage/assets/images/product/movie-17.jpg') }}"
                                    alt="">
                            </a>
                            <button title="Watchlist" class="Watch-list-btn" type="button">
                                <i class="zmdi zmdi-plus"></i>
                            </button>
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
                            <a href="movie-details.html">
                                <img src="{{ asset('themes/webpage/assets/images/product/movie-17.jpg') }}"
                                    alt="">
                            </a>
                            <button title="Watchlist" class="Watch-list-btn" type="button">
                                <i class="zmdi zmdi-plus"></i>
                            </button>
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
                            <a href="movie-details.html">
                                <img src="{{ asset('themes/webpage/assets/images/product/movie-17.jpg') }}"
                                    alt="">
                            </a>
                            <button title="Watchlist" class="Watch-list-btn" type="button">
                                <i class="zmdi zmdi-plus"></i>
                            </button>
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
                            <a href="movie-details.html">
                                <img src="{{ asset('themes/webpage/assets/images/product/movie-17.jpg') }}"
                                    alt="">
                            </a>
                            <button title="Watchlist" class="Watch-list-btn" type="button">
                                <i class="zmdi zmdi-plus"></i>
                            </button>
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
                            <a href="movie-details.html">
                                <img src="{{ asset('themes/webpage/assets/images/product/movie-17.jpg') }}"
                                    alt="">
                            </a>
                            <button title="Watchlist" class="Watch-list-btn" type="button">
                                <i class="zmdi zmdi-plus"></i>
                            </button>
                        </div>
                        <div class="movie-content">
                            <h3 class="title"><a href="movie-details.html">Top Of The World</a></h3>
                            <span>Quality : HD</span>
                            <div class="movie-btn">
                                <a href="movie-details.html" class="btn-style-hm4-2 animated">Watch Now</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
