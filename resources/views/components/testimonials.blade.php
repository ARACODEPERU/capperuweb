<div>
    <section class="testimonials-section modern-themed-section section-bg-white">
        <div class="container-fluid section-padding-lr section-ptb-50">
            <div class="modern-section-header" data-aos="fade-up">
                <div class="section-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/>
                    </svg>
                </div>
                <div class="section-texts">
                    <span class="section-tag">Testimonios</span>
                    <h2>Lo que dicen nuestros egresados</h2>
                    <p>Historias reales de profesionales que impulsaron su carrera</p>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-duration="700">
                    <div class="testimonial-card">
                        <div class="stars" aria-label="5 de 5 estrellas">★★★★★</div>
                        <p class="quote">
                            “El diplomado me dio las herramientas prácticas que apliqué de inmediato en mi
                            trabajo. Los docentes dominan el tema y siempre están disponibles.”
                        </p>
                        <div class="author">
                            <img src="{{ asset('themes/webpage/assets/images/review/author-01.png') }}" alt="Egresado CAP PERU" loading="lazy">
                            <div>
                                <span class="author-name">Carlos Mendoza</span>
                                <span class="author-role">Diplomado en Gestión Pública</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-duration="900">
                    <div class="testimonial-card">
                        <div class="stars" aria-label="5 de 5 estrellas">★★★★★</div>
                        <p class="quote">
                            “La modalidad virtual me permitió estudiar desde provincias sin descuidar mi
                            trabajo. La certificación me ayudó a ascender en la entidad.”
                        </p>
                        <div class="author">
                            <img src="{{ asset('themes/webpage/assets/images/review/author-01.png') }}" alt="Egresada CAP PERU" loading="lazy">
                            <div>
                                <span class="author-name">Rosa Quispe</span>
                                <span class="author-role">Curso SSOMA en Minería</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-duration="1100">
                    <div class="testimonial-card">
                        <div class="stars" aria-label="5 de 5 estrellas">★★★★★</div>
                        <p class="quote">
                            “Contenido actualizado y casos reales de contrataciones con el Estado.
                            Totalmente recomendable para quienes trabajamos en el sector público.”
                        </p>
                        <div class="author">
                            <img src="{{ asset('themes/webpage/assets/images/review/author-01.png') }}" alt="Egresado CAP PERU" loading="lazy">
                            <div>
                                <span class="author-name">Jorge Flores</span>
                                <span class="author-role">Diplomado en Contrataciones</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .testimonial-card {
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 16px;
            padding: 26px 24px;
            height: 100%;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }

        .testimonial-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.10);
            border-color: rgba(206, 18, 18, 0.35);
        }

        .testimonial-card .stars {
            color: #f5a623;
            font-size: 1rem;
            letter-spacing: 3px;
            margin-bottom: 12px;
        }

        .testimonial-card .quote {
            font-size: 0.95rem;
            color: var(--text-main);
            line-height: 1.7;
            font-style: italic;
            flex: 1;
        }

        .testimonial-card .author {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 18px;
            padding-top: 16px;
            border-top: 1px solid var(--border-color);
        }

        .testimonial-card .author img {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            object-fit: cover;
        }

        .testimonial-card .author-name {
            display: block;
            font-weight: 700;
            font-size: 0.95rem;
            color: var(--text-main);
        }

        .testimonial-card .author-role {
            display: block;
            font-size: 0.8rem;
            color: #ce1212;
            font-weight: 600;
        }
    </style>
</div>
