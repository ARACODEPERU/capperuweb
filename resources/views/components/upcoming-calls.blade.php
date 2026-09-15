<div>
    <section class="calls-section modern-themed-section">
        <div class="container-fluid section-padding-lr section-ptb-50">

            <div class="modern-section-header" data-aos="fade-up">
                <div class="section-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M8 2v4"/>
                        <path d="M16 2v4"/>
                        <rect width="18" height="18" x="3" y="4" rx="2"/>
                        <path d="M3 10h18"/>
                    </svg>
                </div>
                <div class="section-texts">
                    <span class="section-tag">No te quedes fuera</span>
                    <h2>Próximas Convocatorias</h2>
                    <p>Fechas de inicio confirmadas — cupos limitados</p>
                </div>
                <a href="{{ route('web_catalog') }}" class="section-link">Ver catálogo →</a>
            </div>

            @if (count($calls) > 0)
                <div class="row g-3">
                    @foreach ($calls as $index => $call)
                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="{{ 600 + $index * 100 }}">
                            <a href="{{ route('web_program_description', $call->slug) }}" class="call-card">
                                <div class="call-date">
                                    <span class="call-day">{{ str_pad($call->day, 2, '0', STR_PAD_LEFT) }}</span>
                                    <span class="call-month">{{ $call->month_name }}</span>
                                </div>
                                <div class="call-info">
                                    <span class="call-year">Inicio {{ $call->year }}</span>
                                    <span class="call-name">{{ $call->name }}</span>
                                </div>
                                <div class="call-arrow" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"/>
                                        <path d="m12 5 7 7-7 7"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-muted">Pronto anunciaremos nuevas fechas de inicio. Contáctanos para información.</p>
            @endif

        </div>
    </section>

    <style>
        .call-card {
            display: flex;
            align-items: center;
            gap: 14px;
            background: var(--bg-card);
            border: 1px solid var(--border-color);
            border-radius: 14px;
            padding: 14px 16px;
            text-decoration: none;
            height: 100%;
            transition: all 0.3s ease;
        }

        .call-card:hover {
            transform: translateY(-4px);
            border-color: rgba(206, 18, 18, 0.4);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.10);
        }

        .call-date {
            width: 56px;
            height: 60px;
            flex-shrink: 0;
            background: rgba(206, 18, 18, 0.10);
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .call-card:hover .call-date {
            background: #ce1212;
            box-shadow: 0 6px 14px rgba(206, 18, 18, 0.4);
        }

        .call-day {
            font-size: 1.3rem;
            font-weight: 800;
            line-height: 1;
            color: #ce1212;
            transition: color 0.3s ease;
        }

        .call-month {
            font-size: 0.68rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #ce1212;
            transition: color 0.3s ease;
        }

        .call-card:hover .call-day,
        .call-card:hover .call-month {
            color: #fff;
        }

        .call-info {
            flex: 1;
            min-width: 0;
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .call-year {
            font-size: 0.68rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: var(--text-muted);
        }

        .call-name {
            font-size: 0.86rem;
            font-weight: 600;
            color: var(--text-main);
            line-height: 1.35;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .call-arrow {
            flex-shrink: 0;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: rgba(206, 18, 18, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .call-arrow svg {
            width: 14px;
            height: 14px;
            color: #ce1212;
        }

        .call-card:hover .call-arrow {
            background: #ce1212;
        }

        .call-card:hover .call-arrow svg {
            color: #fff;
        }
    </style>
</div>
