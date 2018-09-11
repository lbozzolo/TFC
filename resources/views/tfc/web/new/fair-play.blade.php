<aside class="widget card widget--sidebar widget-standings">
    <div class="widget__title card__header card__header--has-btn">
        <h4>Fairplay</h4>

    </div>
    <div class="widget__content card__content">
        <div class="table-responsive">
            <table class="table table-hover table-standings">
                <thead>
                <tr>
                    <th>Posicion / Equipos</th>
                    <th><img src="{{ asset('assets/images/samples/icon-yellow-card.svg') }}" alt=""></th>
                    <th><img src="{{ asset('assets/images/samples/icon-red-card.svg') }}" alt=""></th>
                    <th>Puntos</th>
                </tr>
                </thead>
                <tbody>
                @forelse($fairplay as $ind => $fp)
                    <tr>
                        <td>
                            <div class="team-meta">
                                <div class="team-meta__info">
                                    <h6 class="team-meta__name">{!! $fp->name !!}</h6>
                                </div>
                            </div>
                        </td>
                        <td>{!! $fp->yellow !!}</td>
                        <td>{!! $fp->red !!}</td>
                        <td>{{ $fp->puntos }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">
                            <p class="text-center">No hay registros en esta fecha</p>
                        </td>
                    </tr>
                @endforelse

                </tbody>
            </table>
        </div>
    </div>
</aside>