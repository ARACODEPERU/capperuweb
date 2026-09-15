<div>
    <div data-aos="fade-up" data-aos-duration="1000">
        <div class="section-padding-lr section-ptb-50 modern-themed-section">
            <div class="container-fluid">

                <div class="modern-section-header">
                    <div class="section-icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m16 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/>
                            <path d="m2 16 3-8 3 8c-.87.65-1.92 1-3 1s-2.13-.35-3-1Z"/>
                            <path d="M7 21h10"/>
                            <path d="M12 3v18"/>
                            <path d="M3 7h2c2 0 5-1 7-2 2 1 5 2 7 2h2"/>
                        </svg>
                    </div>
                    <div class="section-texts">
                        <span class="section-tag">Sectores</span>
                        <h2>Programas para el Sector Derecho</h2>
                        <p>Actualización jurídica para abogados y funcionarios</p>
                    </div>
                    <a href="{{ route('web_catalog') }}" class="section-link">Ver todos →</a>
                </div>

                <div class="swiper sectorRightSwiper">
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
            new Swiper('.sectorRightSwiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                navigation: {
                    nextEl: '.sectorRightSwiper .swiper-button-next',
                    prevEl: '.sectorRightSwiper .swiper-button-prev',
                },
                pagination: {
                    el: '.sectorRightSwiper .swiper-pagination',
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
