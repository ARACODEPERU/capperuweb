<div>
    <div data-aos="fade-up" data-aos-duration="1000" class="section-bg-white">
        <div class="section-padding-lr section-ptb-50 modern-themed-section">
            <div class="container-fluid">

                <div class="modern-section-header">
                    <div class="section-icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 20V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                            <rect width="20" height="14" x="2" y="6" rx="2"/>
                            <path d="M6 10h.01"/>
                            <path d="M10 10h.01"/>
                            <path d="M14 10h.01"/>
                            <path d="M18 10h.01"/>
                            <path d="M6 14h.01"/>
                            <path d="M10 14h.01"/>
                            <path d="M14 14h.01"/>
                            <path d="M18 14h.01"/>
                            <path d="M22 20H2"/>
                        </svg>
                    </div>
                    <div class="section-texts">
                        <span class="section-tag">Sectores</span>
                        <h2>Programas para el Sector Empresarial</h2>
                        <p>Formación gerencial y técnica para empresas</p>
                    </div>
                    <a href="{{ route('web_catalog') }}" class="section-link">Ver todos →</a>
                </div>

                <div class="swiper sectorBusinessSwiper">
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
            new Swiper('.sectorBusinessSwiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                navigation: {
                    nextEl: '.sectorBusinessSwiper .swiper-button-next',
                    prevEl: '.sectorBusinessSwiper .swiper-button-prev',
                },
                pagination: {
                    el: '.sectorBusinessSwiper .swiper-pagination',
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
