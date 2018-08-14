<aside class="widget card widget--sidebar widget-results">
    <div class="widget__title card__header card__header--has-btn">
        <h4>Proxima Fecha - Fecha N°
            {!! ($faseWeekProxima)? $faseWeekProxima->name : '' !!}
        </h4>
    </div>
    <div class="widget__content card__content">


        @if(!$faseWeekProxima  || $faseWeekProxima->count() == 0)
            <p class="text-center"> NO HAY CARGADA UNA PRÓXIMA FECHA </p>
        @else

            <ul class="widget-results__list">
                @foreach($faseWeekProxima->matches as $partido)

                    <li class="widget-results__item">
                        <h5 class="widget-results__title">
                            <span>{!! date("d",strtotime($partido->date)) !!}</span>
                            {!! date("m",strtotime($partido->date)) !!}
                            / Foetra - Cancha 2
                        </h5>

                        <div class="widget-results__content">
                            <div class="widget-results__team widget-results__team--first">
                                <figure class="widget-results__team-logo">
                                    @if($partido->home_teams_id != null)
                                        @if($partido->homeTeam)
                                            <img width="30" src="{!! $partido->homeTeam->images->count() > 0 ? asset($partido->homeTeam->images->first()->image) : 'assets/web/images/teamDefault.png' !!}">
                                        @else
                                            <img src="{{ asset('assets/web/images/teamDefault.png') }}">
                                        @endif
                                    @endif
                                    {{--<img src="{{ asset('assets/images/samples/logos/logo008.png') }}" alt="">--}}
                                </figure>
                                <div class="widget-results__team-details">
                                    <h5 class="widget-results__team-name">{!! $partido->homeTeam->name  or "Libre" !!}</h5>
                                </div>
                            </div>
                            <div class="widget-results__result">
                                <div class="widget-results__score">

                                </div>
                            </div>
                            <div class="widget-results__team widget-results__team--second">
                                <figure class="widget-results__team-logo">
                                    @if($partido->away_teams_id != null)
                                        @if($partido->awayTeam)
                                            <img width="30" src="{!! $partido->awayTeam->images->count() > 0 ? asset($partido->awayTeam->images->first()->image) : 'assets/web/images/teamDefault.png' !!}">
                                        @else
                                            <img src="{{ asset('assets/web/images/teamDefault.png') }}">
                                        @endif
                                    @endif
                                </figure>
                                <div class="widget-results__team-details">
                                    <h5 class="widget-results__team-name">{!! $partido->awayTeam->name  or "Libre" !!}</h5>
                                </div>
                            </div>
                        </div>
                    </li>

                @endforeach
            </ul>

        @endif


    </div>
</aside>