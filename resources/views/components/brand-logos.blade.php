<div data-aos="fade-up" data-aos-duration="1000">
    <div class="brand-logo-area section-padding-lr section-ptb-50 modern-themed-section">
        <div class="container-fluid">
            <div class="section-title-2 text-center mb-50">
                <h2>Nuestros Aliados</h2>
                <p>Colaboramos con las mejores marcas e instituciones.</p>
            </div>
            <div class="brand-logo-active brand-logo-wrap">
                @forelse ($logos ?? [] as $logo)
                    <div class="brand-logo-plr">
                        <div class="brand-logo">
                            <a href="#" title="{{ $logo->name }}"><img
                                    src="{{ \Illuminate\Support\Str::startsWith($logo->image, ['http://', 'https://']) ? $logo->image : asset($logo->image) }}"
                                    alt="{{ $logo->name }}" loading="lazy"></a>
                        </div>
                    </div>
                @empty
                    <div class="brand-logo-plr">
                        <div class="brand-logo">
                            <a href="#"><img src="{{ asset('themes/webpage/assets/images/brand/1.png') }}"
                                    alt="Logo de aliado"></a>
                        </div>
                    </div>
                    <div class="brand-logo-plr">
                        <div class="brand-logo">
                            <a href="#"><img src="{{ asset('themes/webpage/assets/images/brand/1.png') }}"
                                    alt="Logo de aliado"></a>
                        </div>
                    </div>
                    <div class="brand-logo-plr">
                        <div class="brand-logo">
                            <a href="#"><img src="{{ asset('themes/webpage/assets/images/brand/1.png') }}"
                                    alt="Logo de aliado"></a>
                        </div>
                    </div>
                    <div class="brand-logo-plr">
                        <div class="brand-logo">
                            <a href="#"><img src="{{ asset('themes/webpage/assets/images/brand/1.png') }}"
                                    alt="Logo de aliado"></a>
                        </div>
                    </div>
                    <div class="brand-logo-plr">
                        <div class="brand-logo">
                            <a href="#"><img src="{{ asset('themes/webpage/assets/images/brand/1.png') }}"
                                    alt="Logo de aliado"></a>
                        </div>
                    </div>
                    <div class="brand-logo-plr">
                        <div class="brand-logo">
                            <a href="#"><img src="{{ asset('themes/webpage/assets/images/brand/1.png') }}"
                                    alt="Logo de aliado"></a>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <style>
        .modern-themed-section {
            background-color: var(--bg-body);
            transition: background-color 0.3s ease;
        }

        .section-title-2 h2 {
            color: var(--text-main);
            transition: color 0.3s ease;
        }

        .section-title-2 p {
            color: var(--text-muted);
            transition: color 0.3s ease;
        }

        [data-bs-theme="dark"] .brand-logo img {
            filter: grayscale(1) brightness(1.8);
            opacity: 0.6;
            transition: all 0.3s ease;
        }

        [data-bs-theme="dark"] .brand-logo img:hover {
            filter: grayscale(0) brightness(1);
            opacity: 1;
        }
    </style>
</div>
