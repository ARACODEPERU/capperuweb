<div>

    <div data-aos="fade-right" data-aos-duration="1800">

        <div class="movie-list section-padding-lr section-ptb-50 modern-themed-section">
            <div class="container-fluid">
                <div class="section-title-4 st-border-bottom">
                    <h2>Sector: Empresarial</h2>
                </div>
                <div class="swiper coursesSwiper">
                    <div class="swiper-wrapper">
                        @if (count($programs) > 0)
                            @foreach ($programs as $key => $program)
                                <div class="swiper-slide">
                                    <div class="movie-wrap-plr">
                                        <div class="movie-wrap text-center modern-card-elevation">
                                            <div class="movie-img">
                                                <a href="{{ route('web_program_description', $program->id) }}">
                                                    <img src="{{ asset($program->image) }}" alt="{{ $program->name }}">
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
                                                <span class="price-text">Precio : {{ $program->price }}</span>
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

    </div>
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
        .modern-themed-section {
            background-color: var(--bg-body);
            transition: background-color 0.3s;
        }

        .section-title-4.st-border-bottom {
            border-color: var(--border-color);
        }

        .section-title-4 h2 {
            color: var(--text-main);
        }

        .modern-card-elevation {
            background-color: var(--bg-card);
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .movie-content .title a {
            color: var(--text-main);
            transition: color 0.3s;
        }

        .movie-content .price-text {
            color: var(--text-muted);
            font-size: 0.9rem;
            display: block;
            margin-bottom: 15px;
        }

        .Watch-list-btn {
            background-color: rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
        }

        .coursesSwiper {
            padding-bottom: 40px;
        }

        .coursesSwiper .swiper-button-next,
        .coursesSwiper .swiper-button-prev {
            color: var(--text-main);
        }

        .coursesSwiper .swiper-pagination-bullet {
            background: var(--text-muted);
            opacity: 0.5;
        }

        .coursesSwiper .swiper-pagination-bullet-active {
            background: #ce1212;
            opacity: 1;
        }

        [data-bs-theme="dark"] .modern-card-elevation:hover {
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.7);
            border-color: #ce1212;
        }
    </style>
</div>
