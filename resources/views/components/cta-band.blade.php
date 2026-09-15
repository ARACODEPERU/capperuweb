<div>
    <section class="cta-band">
        <div class="container-fluid section-padding-lr">
            <div class="cta-inner" data-aos="zoom-in" data-aos-duration="900">
                <div class="cta-texts">
                    <span class="cta-tag">Da el siguiente paso</span>
                    <h2>Impulsa tu carrera profesional hoy</h2>
                    <p>
                        Únete a miles de profesionales que ya se capacitaron con CAP PERU.
                        Matrícula abierta en todas las modalidades.
                    </p>
                </div>
                <div class="cta-actions">
                    <a href="{{ route('web_catalog') }}" class="cta-btn primary">
                        Ver Programas
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=51977662460&text=Hola%20CapPeru!%20quiero%20informaci%C3%B3n%20sobre%20los%20programas"
                       target="_blank" rel="noopener" class="cta-btn whatsapp">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="currentColor" aria-hidden="true">
                            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
                        </svg>
                        Asesoría por WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <style>
        .cta-band {
            padding: 30px 0 60px;
            background: var(--bg-body);
        }

        .cta-inner {
            background: linear-gradient(120deg, #14161d 0%, #2a1215 55%, #3d0d0f 100%);
            border-radius: 22px;
            padding: 52px 56px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 32px;
            position: relative;
            overflow: hidden;
        }

        .cta-inner::before {
            content: '';
            position: absolute;
            top: -70px;
            right: -70px;
            width: 240px;
            height: 240px;
            border-radius: 50%;
            background: rgba(206, 18, 18, 0.25);
            filter: blur(50px);
        }

        .cta-inner::after {
            content: '';
            position: absolute;
            bottom: -80px;
            left: 30%;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: rgba(206, 18, 18, 0.15);
            filter: blur(46px);
        }

        .cta-texts {
            position: relative;
            z-index: 1;
            max-width: 560px;
        }

        .cta-tag {
            display: inline-block;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #ff8a8d;
            margin-bottom: 10px;
        }

        .cta-texts h2 {
            color: #fff;
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 12px;
            line-height: 1.25;
        }

        .cta-texts p {
            color: rgba(255, 255, 255, 0.75);
            font-size: 1rem;
            line-height: 1.7;
            margin: 0;
        }

        .cta-actions {
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            gap: 12px;
            min-width: 250px;
        }

        .cta-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 15px 30px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 0.98rem;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .cta-btn svg {
            width: 18px;
            height: 18px;
        }

        .cta-btn.primary {
            background: #ce1212;
            color: #fff;
        }

        .cta-btn.primary:hover {
            background: #fff;
            color: #ce1212;
            transform: translateY(-2px);
            box-shadow: 0 10px 26px rgba(255, 255, 255, 0.18);
        }

        .cta-btn.whatsapp {
            background: rgba(255, 255, 255, 0.08);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        .cta-btn.whatsapp:hover {
            background: #25D366;
            border-color: #25D366;
            transform: translateY(-2px);
        }

        @media (max-width: 991px) {
            .cta-inner {
                flex-direction: column;
                text-align: center;
                padding: 40px 28px;
            }

            .cta-actions {
                width: 100%;
                max-width: 340px;
            }
        }
    </style>
</div>
