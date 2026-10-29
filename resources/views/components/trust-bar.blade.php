<div>
    <section class="trust-bar-section section-bg-white">
        <div class="container-fluid section-padding-lr">
            <div class="row g-4 justify-content-center">

                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-duration="700">
                    <div class="trust-item">
                        <div class="trust-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12 6 12 12 16 14"/>
                            </svg>
                        </div>
                        <div class="trust-texts">
                            <span class="trust-number"><span class="counter" data-target="12">0</span>+</span>
                            <span class="trust-label">Años de experiencia</span>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-duration="900">
                    <div class="trust-item">
                        <div class="trust-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                        <div class="trust-texts">
                            <span class="trust-number"><span class="counter" data-target="5000">0</span>+</span>
                            <span class="trust-label">Egresados capacitados</span>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-duration="1100">
                    <div class="trust-item">
                        <div class="trust-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/>
                                <path d="m9 12 2 2 4-4"/>
                            </svg>
                        </div>
                        <div class="trust-texts">
                            <span class="trust-number">100%</span>
                            <span class="trust-label">Certificación oficial</span>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-duration="1300">
                    <div class="trust-item">
                        <div class="trust-icon" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                                <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
                            </svg>
                        </div>
                        <div class="trust-texts">
                            <span class="trust-number"><span class="counter" data-target="50">0</span>+</span>
                            <span class="trust-label">Convenios interinstitucionales</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <style>
        .trust-bar-section {
            background: var(--bg-card);
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
            padding: 50px 0;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 16px;
            justify-content: center;
        }

        .trust-icon {
            width: 56px;
            height: 56px;
            flex-shrink: 0;
            background: rgba(206, 18, 18, 0.10);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .trust-item:hover .trust-icon {
            background: #ce1212;
            box-shadow: 0 6px 16px rgba(206, 18, 18, 0.4);
        }

        .trust-icon svg {
            width: 26px;
            height: 26px;
            color: #ce1212;
            transition: color 0.3s ease;
        }

        .trust-item:hover .trust-icon svg {
            color: #fff;
        }

        .trust-texts {
            display: flex;
            flex-direction: column;
        }

        .trust-number {
            font-size: 1.7rem;
            font-weight: 800;
            color: var(--text-main);
            line-height: 1.2;
        }

        .trust-label {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        @media (max-width: 991px) {
            .trust-number { font-size: 1.3rem; }
            .trust-icon { width: 46px; height: 46px; }
            .trust-label { font-size: 0.75rem; }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.trust-bar-section .counter');
            if (!counters.length) return;

            const animate = (el) => {
                const target = parseInt(el.dataset.target, 10) || 0;
                const duration = 1600;
                const start = performance.now();
                const step = (now) => {
                    const progress = Math.min((now - start) / duration, 1);
                    const eased = 1 - Math.pow(1 - progress, 3);
                    el.textContent = Math.round(target * eased).toLocaleString('es-PE');
                    if (progress < 1) requestAnimationFrame(step);
                };
                requestAnimationFrame(step);
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        animate(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.4 });

            counters.forEach((c) => observer.observe(c));
        });
    </script>
</div>
