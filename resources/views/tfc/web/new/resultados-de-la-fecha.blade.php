<div class="card">
    <header class="card__header card__header--has-btn">
        <h4>Resultados de la Fecha</h4>

    </header>
    <div class="card__content">

        <!-- Game Result -->
        <div class="game-result">
            <section class="game-result__section pt-0">

                    @if(!$faseWeek  || $faseWeek->count() == 0)
                        <div class="va-latest-middle uk-flex uk-flex-middle text-center">
                            <p class="text-center">NO HAY PARTIDOS CARGADOS TODAVÍA</p>
                        </div>
                    @else

                    @foreach($faseWeek->matches as $partido)

                        <header class="game-result__header game-result__header--alt">
                            {{--@if($faseWeek)
                                <div class="wrap uk-vertical-align-middle">
                                    <font size="3">Fecha N° {!! $faseWeek->name     !!}</font>
                                </div>
                            @endif--}}
                        </header>

                        <div class="game-result__content">

                            <div class="game-result__team game-result__team--first">
                                <figure class="game-result__team-logo">
                                    <img width="81" height="100" src="{{ $partido->homeTeam->images->first() ? asset($partido->homeTeam->images->first()->image)  : 'assets/web/images/teamDefault.png' }}" alt="">
                                </figure>
                                <div class="game-result__team-info">
                                    <h5 class="game-result__team-name">{!! $partido->homeTeam->name !!}</h5>
                                </div>
                            </div>

                            <div class="game-result__score-wrap">
                                <div class="game-result__score game-result__score--lg">
                                    <span class="game-result__score-result game-result__score-result--winner">{!! $partido->home_goals or "-" !!}</span>
                                    <span class="game-result__score-dash">-</span>
                                    <span class="game-result__score-result game-result__score-result--loser">{!! $partido->away_goals or "-" !!}</span>
                                </div>
                            </div>

                            <div class="game-result__team game-result__team--second">
                                <figure class="game-result__team-logo">
                                    <img width="81" height="100" src="{{ $partido->awayTeam->images->first() ? asset($partido->awayTeam->images->first()->image)  : 'assets/web/images/teamDefault.png' }}" alt="">
                                </figure>
                                <div class="game-result__team-info">
                                    <h5 class="game-result__team-name">{!! $partido->awayTeam->name !!}</h5>
                                </div>
                            </div>

                        </div>

                    @endforeach

                @endif


            </section>
        </div>

    </div>
</div>