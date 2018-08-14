<aside class="widget widget--sidebar card card--has-table widget-leaders">
    <div class="widget__title card__header">
        <h4>Sancionados de la Fecha</h4>
    </div>
    <div class="widget__content card__content">

        <!-- Leader: Points -->
        <div class="table-responsive">
            <table class="table team-leader">
                <thead>
                <tr>
                    <th class="team-leader__type">Nombre y Equipo</th>
                    <th class="team-leader__avg">Desde Fecha</th>
                    <th class="team-leader__gp">Hasta Fecha</th>
                    <th class="team-leader__gp">Motivo</th>
                </tr>
                </thead>
                <tbody>

                @if(!is_null($fasesWeek))
                    @forelse(\App\Entities\tfc\Sanciones::whereHas('endSancion', function($q) use ($faseActual){
                    $q->where('fases_id', $faseActual->id);})->get() as $p)
                        <tr>
                            <td class="team-leader__player">
                                <div class="team-leader__player-info">
                                    <figure class="team-leader__player-img team-leader__player-img--sm">
                                        <img src="{{ asset('assets/images/samples/goalscorer_02.png') }}" alt="">
                                    </figure>
                                    <div class="team-leader__player-inner">
                                        <h5 class="team-leader__player-name">{!! $p->players->FullName() !!}</h5>
                                        <span class="team-leader__player-position">{!! $p->players->teams->name !!}</span>
                                    </div>
                                </div>
                            </td>
                            <td class="team-leader__goals">{!! $p->StartSancion->name!!}</td>
                            <td class="team-leader__gp">{!! $p->EndSancion->name!!}</td>
                            <td class="team-leader__gp">{!! $p->sancion!!}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <p class="text-center">No hay sanciones en esta fecha</p>
                            </td>
                        </tr>
                    @endforelse
                @else

                @endif

                </tbody>
            </table>
        </div>
    </div>
</aside>
