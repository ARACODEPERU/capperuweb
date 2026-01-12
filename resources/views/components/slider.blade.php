<div>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <div class="slider-area-modern">
        <div class="swiper mainSwiper">
            <div class="swiper-wrapper">
                @foreach ($sliders as $k => $slide)
                    <div class="swiper-slide">
                        <a href="{{ $slide->item->items[1]->content ?? '#' }}" class="d-block">
                            <img src="{{ asset('storage/' . $slide->item->items[0]->content) }}" 
                                 alt="Slider {{ $k }}" 
                                 class="img-fluid w-100">
                        </a>
                    </div>
                @endforeach
            </div>
            
            <!-- Navigation buttons -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <style>
        .slider-area-modern {
            position: relative;
            width: 100%;
        }
        .swiper-slide img {
            width: 100%;
            height: auto;
            object-fit: cover;
            /* Ajusta la altura máxima según necesites */
            max-height: 600px; 
        }
        .swiper-button-next, .swiper-button-prev {
            color: #fff;
            text-shadow: 0 0 5px rgba(0,0,0,0.5);
        }
    </style>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const swiper = new Swiper('.mainSwiper', {
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
            });
        });
    </script>
</div>
