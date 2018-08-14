<aside class="widget card widget--sidebar widget-standings">
    <div class="widget__title card__header card__header--has-btn">
        <h4>{!! $torneo->name !!} - <span>{!! $faseActual->name !!}</span></h4>

    </div>
    <div class="widget__content card__content">
        <div class="table-responsive">
            <table class="table table-hover table-standings">
                <thead>
                <tr>
                    <th>Posicion de Equipos</th>
                    <th>PTS</th>
                    <th>PJ</th>
                    <th>PG</th>
                    <th>PE</th>
                    <th>PP</th>
                    <th>GF</th>
                    <th>GC</th>
                    <th>DIF</th>
                </tr>
                </thead>
                <tbody>
                @forelse($tablas as $tabla)
                    <tr>
                        <td>
                            <div class="team-meta">
                                <figure class="team-meta__logo">
                                    <img src="{!! asset(($tabla->teams->images->first())? $tabla->teams->images->first()->image : 'assets/web/images/teamDefault.png') !!}" alt="" class="img-responsive">
                                </figure>
                                <div class="team-meta__info">
                                    <a href="{!! route("new.equipo",[$route,$tabla->teams->id]) !!}"><h6 class="team-meta__name">{!! $tabla->teams->name or '' !!}</h6></a>
                                </div>
                            </div>
                        </td>
                        {{--<td><img src="{!! $tabla->teams->images->first()->image or 'assets/web/images/teamDefault.png'!!}" width="35" height="35"></td>
                        <td><a class="white" href="{!! route("new.equipo",[$route,$tabla->teams->id]) !!}">{!! $tabla->teams->name or '' !!}</a></td>--}}
                        <td>{!! $tabla->pts or '0' !!}</td>
                        <td>{!! $tabla->pj or '0' !!}</td>
                        <td>{!! $tabla->pg or '0' !!}</td>
                        <td>{!! $tabla->pe or '0' !!}</td>
                        <td>{!! $tabla->pp or '0' !!}</td>
                        <td>{!! $tabla->gf or '0' !!}</td>
                        <td>{!! $tabla->gc or '0' !!}</td>
                        <td>{!! $tabla->dg or '0' !!}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="10">Sin resultados</td>
                    </tr>
                @endforelse


                </tbody>
            </table>
        </div>
    </div>
</aside>