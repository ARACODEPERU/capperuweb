<div>
        <div class="movie-details-wrap section-ptb-50 section-padding-lr modern-themed-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-about">
                            <div class="box">
                                <div class="content">
                                    <div class="about-icon" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
                                            <circle cx="12" cy="12" r="3"/>
                                        </svg>
                                    </div>
                                    <h2>01</h2>
                                    <h3>VISIÓN</h3>
                                    <p>
                                        El Centro de Actualización Profesional CAP será reconocida como una de las mejores
                                        entidades a nivel nacional debido a la calidad de sus productos académicos y
                                        contribución con el desarrollo de la sociedad.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-about">
                            <div class="box">
                                <div class="content">
                                    <div class="about-icon" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"/>
                                            <circle cx="12" cy="12" r="6"/>
                                            <circle cx="12" cy="12" r="2"/>
                                        </svg>
                                    </div>
                                    <h2>02</h2>
                                    <h3>MISIÓN</h3>
                                    <p>
                                        Formar profesionales idóneos con sentido humanista y científico, competitivos,
                                        creativos y comprometidos con el desarrollo socioeconómico del país. Contribuir en
                                        ampliar el saber mediante la capacitación constante en diversos programas como:
                                        diplomados, cursos y talleres.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card-about">
                            <div class="box">
                                <div class="content">
                                    <div class="about-icon" aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="8" r="6"/>
                                            <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/>
                                        </svg>
                                    </div>
                                    <h2>03</h2>
                                    <h3>VALORES</h3>
                                    <p>
                                        <b>• Excelencia Académica:</b> Es alcanzar el máximo logro de aprendizaje en todos y
                                        cada uno de los alumnos logrando una formación futura.
                                        <br>
                                        <b>• Equidad:</b> Proporcionar un trato justo en el trabajo, sin importar género,
                                        raza,
                                        discapacidades u otras características personales.
                                        <br>
                                        <b>• Ética:</b> Conjunto de normas morales que rigen la conducta de acciones de la
                                        empresa.
                                        <br>
                                        <b>• Liderazgo:</b> Establecer una meta común, inspirar al equipo de trabajo,
                                        retarlos y
                                        seguir avanzando.
                                        <br>
                                        <b>• Innovación:</b> Nos valemos del aprendizaje y la creatividad para encontrar
                                        nuevas
                                        formas de enseñanza generando un sistema de mejora continua.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    .modern-themed-section {
                        background-color: var(--bg-body);
                        transition: background-color 0.3s ease;
                    }

                    .card-about {
                        position: relative;
                        min-width: 320px;
                        height: 440px;
                        box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
                            inset -5px -5px 15px rgba(255, 255, 255, 0.1),
                            5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
                        border-radius: 15px;
                        margin: 30px;
                        transition: 0.5s;
                    }

                    .card-about:nth-child(1) .box .content a {
                        background: #2196f3;
                    }

                    .card-about:nth-child(2) .box .content a {
                        background: #e91e63;
                    }

                    .card-about:nth-child(3) .box .content a {
                        background: #23c186;
                    }

                    .card-about .box {
                        position: absolute;
                        top: 20px;
                        left: 20px;
                        right: 20px;
                        bottom: 20px;
                        background: var(--bg-card);
                        border-radius: 15px;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        overflow: hidden;
                        transition: 0.5s;
                    }

                    .card-about .box:hover {
                        transform: translateY(-50px);
                    }

                    .card-about .box:before {
                        content: "";
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 50%;
                        height: 100%;
                        background: rgba(255, 255, 255, 0.03);
                    }

                    .card-about .box .content {
                        padding: 20px;
                        text-align: center;
                    }

                    /* Icono moderno de las tarjetas (mismo lenguaje que panel de Información) */
                    .about-icon {
                        width: 64px;
                        height: 64px;
                        margin: 0 auto 18px;
                        background: rgba(206, 18, 18, 0.10);
                        border-radius: 16px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        transition: all 0.3s ease;
                    }

                    .about-icon svg {
                        width: 28px;
                        height: 28px;
                        color: #ce1212;
                        display: block;
                        transition: color 0.3s ease;
                    }

                    .card-about .box:hover .about-icon {
                        background: #ce1212;
                        transform: scale(1.1) rotate(-4deg);
                        box-shadow: 0 8px 20px rgba(206, 18, 18, 0.4);
                    }

                    .card-about .box:hover .about-icon svg {
                        color: #fff;
                    }

                    .card-about .box .content h2 {
                        position: absolute;
                        top: -10px;
                        right: 30px;
                        font-size: 8rem;
                        color: rgba(255, 255, 255, 0.1);
                    }

                    .card-about .box .content h3 {
                        font-size: 1.8rem;
                        color: var(--text-main);
                        z-index: 1;
                        transition: 0.5s;
                        margin-bottom: 15px;
                    }

                    .card-about .box .content p {
                        font-size: 1rem;
                        font-weight: 300;
                        color: var(--text-muted);
                        z-index: 1;
                        transition: 0.5s;
                    }

                    .card-about .box .content a {
                        position: relative;
                        display: inline-block;
                        padding: 8px 20px;
                        background: black;
                        border-radius: 5px;
                        text-decoration: none;
                        color: white;
                        margin-top: 20px;
                        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
                        transition: 0.5s;
                    }

                    .card-about .box .content a:hover {
                        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
                        background: #fff;
                        color: #000;
                    }
                </style>
            </div>
        </div>
</div>