<div>
    <div data-aos="fade-up" data-aos-duration="1000">
        <div class="section-padding-lr section-ptb-50 modern-themed-section">
            <div class="container-fluid">

                <div class="modern-section-header">
                    <div class="section-icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 7v14"/>
                            <path d="M3 18a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a4 4 0 0 1 4 4 4 4 0 0 1 4-4h5a1 1 0 0 1 1 1v13a1 1 0 0 1-1 1h-6a3 3 0 0 0-3 3 3 3 0 0 0-3-3z"/>
                        </svg>
                    </div>
                    <div class="section-texts">
                        <span class="section-tag">A tu ritmo</span>
                        <h2>Cursos</h2>
                        <p>Capacitaciones prácticas y certificables en horas o semanas</p>
                    </div>
                    <a href="{{ route('web_catalog') }}" class="section-link">Ver todos →</a>
                </div>

                <div class="swiper coursesSwiper">
                    <div class="swiper-wrapper">
                        @foreach ($programs as $program)
                            <div class="swiper-slide">
                                <div class="program-card">
                                    <div class="program-img">
                                        <div class="program-badges">
                                            <span class="program-badge type">{{ $program->additional ?? 'Programa' }}</span>
                                            @if($program->additional1)
                                                <span class="program-badge modality">{{ $program->additional1 }}</span>
                                            @endif
                                        </div>
                                        <a href="{{ route('web_program_description', $program->route_slug) }}">
                                            <x-webp-image src="{{ asset($program->image) }}" alt="{{ $program->name }}" />
                                        </a>
                                    </div>
                                    <div class="program-body">
                                        <h3 class="program-title">
                                            <a href="{{ route('web_program_description', $program->route_slug) }}">{{ $program->name }}</a>
                                        </h3>
                                        <div class="program-price">
                                            <span class="amount"><small>S/</small> {{ number_format($program->price, 0) }}</span>
                                        </div>
                                        <a href="{{ route('web_program_description', $program->route_slug) }}" class="program-btn">Más Información</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
            new Swiper('.coursesSwiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                navigation: {
                    nextEl: '.coursesSwiper .swiper-button-next',
                    prevEl: '.coursesSwiper .swiper-button-prev',
                },
                pagination: {
                    el: '.coursesSwiper .swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    640: { slidesPerView: 2, spaceBetween: 20 },
                    768: { slidesPerView: 3, spaceBetween: 24 },
                    1024: { slidesPerView: 4, spaceBetween: 24 },
                },
            });
        });
    </script>
</div>
