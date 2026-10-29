<div>
    <div data-aos="fade-up" data-aos-duration="1000" class="section-bg-gray">
        <div class="section-padding-lr section-ptb-50 modern-themed-section">
            <div class="container-fluid">

                <div class="modern-section-header">
                    <div class="section-icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="16" height="20" x="4" y="2" rx="2"/>
                            <path d="M9.5 7h5"/>
                            <path d="M9.5 11h5"/>
                            <path d="M9.5 15h5"/>
                        </svg>
                    </div>
                    <div class="section-texts">
                        <span class="section-tag">Sectores</span>
                        <h2>Programas para el Sector Público</h2>
                        <p>Capacitación especializada para el servicio estatal</p>
                    </div>
                    <a href="{{ route('web_catalog') }}" class="section-link">Ver todos →</a>
                </div>

                <div class="swiper sectorPublicSwiper">
                    <div class="swiper-wrapper">
                        @foreach ($programs as $program)
                            <div class="swiper-slide">
                                <div class="program-card">
                                    <div class="program-img">
                                        <a href="{{ route('web_program_description', $program->route_slug) }}">
                                            <x-webp-image src="{{ asset($program->image) }}" alt="{{ $program->name }}" />
                                        </a>
                                    </div>
                                    <div class="program-body">
                                        <h3 class="program-title"><a href="{{ route('web_program_description', $program->route_slug) }}">{{ $program->name }}</a></h3>
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
            new Swiper('.sectorPublicSwiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                navigation: {
                    nextEl: '.sectorPublicSwiper .swiper-button-next',
                    prevEl: '.sectorPublicSwiper .swiper-button-prev',
                },
                pagination: {
                    el: '.sectorPublicSwiper .swiper-pagination',
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
