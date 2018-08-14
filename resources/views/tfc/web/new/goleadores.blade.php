<aside class="widget widget--sidebar card card--has-table widget-leaders">
    <div class="widget__title card__header">
        <h4>Goleadores del Torneo</h4>
    </div>
    <div class="widget__content card__content">

        <div class="table-responsive">
            <table class="table team-leader">
                <thead>
                <tr>
                    <th class="team-leader__type">Nombre y Equipo</th>
                    <th class="team-leader__goals">Goles</th>
                </tr>
                </thead>
                <tbody>
                @forelse($goleadores as $goleador)
                    <tr>
                        <td class="team-leader__player">
                            <div class="team-leader__player-info">
                                <figure class="team-leader__player-img team-leader__player-img--sm">
                                    <img src="{{ asset('assets/images/samples/goalscorer_01.png') }}" alt="">
                                </figure>
                                <div class="team-leader__player-inner">
                                    <h5 class="team-leader__player-name">{!! $goleador->players !!}</h5>
                                    <span class="team-leader__player-position">{!! $goleador->teams !!}</span>
                                </div>
                            </div>
                        </td>
                        <td class="team-leader__avg">
                            <div class="circular">
                                <div class="circular__bar" data-percent="100">
                                    <span class="circular__percents">{!! $goleador->goals !!}</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">
                            <p class="text-center">No hay goleadores en esta fecha</p>
                        </td>
                    </tr>
                @endforelse

                </tbody>
            </table>
        </div>

    </div>
</aside>