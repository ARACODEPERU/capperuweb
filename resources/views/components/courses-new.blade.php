<div>
    <div data-aos="fade-up" data-aos-duration="1000" class="section-bg-gray">
        <div class="section-padding-lr section-ptb-50 modern-themed-section">
            <div class="container-fluid">

                {{-- Encabezado moderno de la sección --}}
                <div class="modern-section-header">
                    <div class="section-icon" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"/>
                        </svg>
                    </div>
                    <div class="section-texts">
                        <span class="section-tag">Lo más reciente</span>
                        <h2>Nuevos Programas</h2>
                        <p>Las especializaciones más recientes de nuestra oferta académica</p>
                    </div>
                    <a href="{{ route('web_catalog') }}" class="section-link">Ver todos →</a>
                </div>

                {{-- Carrusel (clase única por sección) --}}
                <div class="swiper coursesNewSwiper">
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
            new Swiper('.coursesNewSwiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                navigation: {
                    nextEl: '.coursesNewSwiper .swiper-button-next',
                    prevEl: '.coursesNewSwiper .swiper-button-prev',
                },
                pagination: {
                    el: '.coursesNewSwiper .swiper-pagination',
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
