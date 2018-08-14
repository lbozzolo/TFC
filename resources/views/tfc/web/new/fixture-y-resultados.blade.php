<aside class="widget card widget--sidebar widget-results">
    <div class="widget__title card__header card__header--has-btn">
        <h4>Fixture y Resultados</h4>
        <ul class="team-result-filter">
            <li class="team-result-filter__item">
                <select class="form-control input-xs">
                    @foreach($fasesWeek as $ind => $fase)
                        <option value="{!! $ind !!}">Fecha {!! $ind + 1 !!}</option>
                    @endforeach
                </select>
            </li>
        </ul>
    </div>
    <div class="widget__content card__content">
        <ul class="widget-results__list">


            @foreach($fasesWeek as $fase)

                @forelse($fase->Matches as $partido)

                    <li class="widget-results__item {!! $fase->id == $faseActual->id ? "uk-active " : "" !!}" aria-hidden="false">
                        <h5 class="widget-results__title">ACÁ VA LA FECHA</h5>
                        <div class="widget-results__content">
                            <div class="widget-results__team widget-results__team--first">
                                <figure class="widget-results__team-logo">
                                    <img width="30" height="100" src="{{ $partido->homeTeam->images->first() ? asset($partido->homeTeam->images->first()->image)  : 'assets/web/images/teamDefault.png' }}" alt="">
                                </figure>
                                <div class="widget-results__team-details">
                                    <h5 class="widget-results__team-name">{!! $partido->homeTeam->name !!}</h5>
                                </div>
                            </div>
                            <div class="widget-results__result">
                                <div class="widget-results__score">
                        <span class="widget-results__score-loser">
                          {!! $partido->home_goals or "-" !!}
                          </span> - <span class="widget-results__score-loser">
                          {!! $partido->away_goals or "-" !!}
                        </span>
                                </div>
                            </div>
                            <div class="widget-results__team widget-results__team--second">
                                <figure class="widget-results__team-logo">
                                    <img width="30" height="100" src="{{ $partido->awayTeam->images->first() ? asset($partido->awayTeam->images->first()->image)  : 'assets/web/images/teamDefault.png' }}" alt="">
                                </figure>
                                <div class="widget-results__team-details">
                                    <h5 class="widget-results__team-name">{!! $partido->awayTeam->name !!}</h5>
                                </div>
                            </div>
                        </div>
                    </li>

                @empty
                @endforelse

            @endforeach

        </ul>
    </div>
</aside>