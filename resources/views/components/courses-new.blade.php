<div>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <div class="movie-list section-padding-lr section-pt-50">
        <div class="container-fluid">
            <div class="section-title-4 st-border-bottom">
                <h2>Nuevos programas</h2>
            </div>
            <div class="swiper coursesSwiper">
                <div class="swiper-wrapper">
                    @if (count($programs) > 0)
                        @foreach ($programs as $key => $program)
                            <div class="swiper-slide">
                                <div class="movie-wrap-plr">
                                    <div class="movie-wrap text-center">
                                        <div class="movie-img">
                                            <a href="{{ route('web_program_description', $program->id) }}">
                                                <img src="{{ asset($program->image) }}"
                                                    alt="{{ $program->name }}">
                                            </a>
                                            <a href="{{ route('web_program_description', $program->id) }}">
                                                <button title="Watchlist" class="Watch-list-btn" type="button">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </a>
                                        </div>
                                        <div class="movie-content">
                                            <h3 class="title">
                                                <a href="{{ route('web_program_description', $program->id) }}">
                                                    {{ $program->name }}
                                                </a>
                                            </h3>
                                            <span>Precio : {{ $program->price }}</span>
                                            <div class="movie-btn">
                                                <a href="{{ route('web_program_description', $program->id) }}"
                                                    class="btn-style-hm4-2 animated">
                                                    Más Información
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const swiper = new Swiper('.coursesSwiper', {
                slidesPerView: 1,
                spaceBetween: 10,
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                },
            });
        });
    </script>
    <style>
        .coursesSwiper {
            padding-bottom: 40px;
        }
        .coursesSwiper .swiper-button-next,
        .coursesSwiper .swiper-button-prev {
            color: #000;
        }
    </style>
</div>
