<div>
    
    <div class="movie-list section-padding-lr section-ptb-50">
        <div class="container-fluid">
            <div class="section-title-4 st-border-bottom">
                <h2>Sector: Publico</h2>
            </div>
            <div class="movie-slider-active nav-style-2">
                @if (count($programs) > 0)
                    @foreach ($programs as $key => $program)
                        <div class="movie-wrap-plr">
                            <div class="movie-wrap text-center">
                                <div class="movie-img">
                                    <a href="{{ route('web_program_description', $program->id) }}">
                                        <img src="{{ asset($program->image) }}"
                                            alt="{{ $program->name }}">
                                    </a>
                                    <a href="{{ route('web_program_description', $program->id) }}">
                                        <button title="Watchlist" class="Watch-list-btn" type="button">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </a>
                                </div>
                                <div class="movie-content">
                                    <h3 class="title">
                                        <a href="{{ route('web_program_description', $program->id) }}">
                                            {{ $program->name }}
                                        </a>
                                    </h3>
                                    <span>Precio : {{ $program->price }}</span>
                                    <div class="movie-btn">
                                        <a href="{{ route('web_program_description', $program->id) }}"
                                            class="btn-style-hm4-2 animated">
                                            Más Información
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>