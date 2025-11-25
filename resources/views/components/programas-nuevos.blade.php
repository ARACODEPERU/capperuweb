<div>
    <section style="padding: 40px 0px 90px 0px;">
        <div class="section-title" style="padding: 0px 80px;">
            <h5 style="font-weight: 700; color: #8B0E06;">Programas Nuevos</h5>
            <div class="ara-linea-cap"></div>
        </div>
        <div class="grid-container">
            @if (count($programsnew) > 0)
                @foreach ($programsnew as $key => $program)
                <div class="grid-item">
                    <div class="single-course-wrap  box-zoom" style="background-color: #F9FAFD;">
                        <a  href="{{ route('web_descripcion_programa', $program->id) }}">
                            <img class="img" src="{{ asset($program->image) }}" alt="img">
                            <h6 title="{{ $program->name }}" class="texto-oculto2"
                                style="background: #8B0E06; color: #fff; padding: 15px;">
                                <a href="{{ route('web_descripcion_programa', $program->id) }}" style="font-size: 14px;">
                                    {{ $program->name }}
                                </a>
                            </h6>
                            <style>
                                h6 a:hover{
                                    color: #FAC823;
                                }
                            </style>
                        </a>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
        <div class="container" style="text-align: center;">
            {{ $programsnew->links() }}
        </div>
        
        <style>
            .grid-container {
            display: grid;
            gap: 10px;
            grid-template-columns: repeat(5, 1fr);
            grid-template-rows: repeat(3, auto);
            width: 100%;
            padding: 20px 80px;
            /* max-width: 600px; */
            }

            .grid-item {
            /* background-color: #007bff; */
            color: white;
            text-align: center;
            padding: 20px;
            border-radius: 5px;
            }

            /* Responsive Design for Mobile */
            @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: repeat(1, 1fr);
                grid-template-rows: repeat(1, auto);
                width: 98%;
                padding: 5px;
            }

            .grid-item {
                padding: 10px;
            }
            }
        </style>
    </section>
</div>