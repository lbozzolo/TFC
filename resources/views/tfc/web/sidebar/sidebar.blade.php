<div class="sidebar sidebar--shop col-md-3 col-md-pull-9">

    <!-- Widget: Categories -->
    @if(isset($torneo))
    <aside class="widget card widget--sidebar widget_categories">
        <div class="widget__title card__header">
            <h4>Torneo</h4>
        </div>
        <div class="widget__content card__content">
            <ul class="widget__list">
                <li class="has-children"><a href="#">{{ $torneo->name }}</a>
                    <ul>
                    @forelse($fases as $fase)
                        <li class="item-7">
                            <a href="{!! route("new.torneos",[$route,$torneo->id,$fase->id]) !!}">{!! $fase->name !!}</a>
                        </li>
                    @empty
                        <li class="item-7">
                            <a href="javascript:void(0)">SIN FASES</a>
                        </li>
                    @endforelse
                    </ul>
                </li>
            </ul>
        </div>
    </aside>
    @endif
    <!-- Widget: Categories / End -->


    <!-- Widget: Color Filter -->
    <aside class="widget card widget--sidebar widget_color-picker">
        <form action="#" class="color-picker-form">
            <div class="widget__title card__header card__header--has-btn">
                <h4>El Tiempo</h4>

            </div>
            <div class="widget__content card__content">

                <center>
                    <!-- www.tutiempo.net - Ancho:182px - Alto:364px -->
                    <div id="TT_JiGkkEEk1889WQjU7AzDDzjjDsaU1YcD56CeisCoaEDImI3oG">El tiempo - Tutiempo.net</div>
                    <script type="text/javascript" src="https://www.tutiempo.net/s-widget/l_JiGkkEEk1889WQjU7AzDDzjjDsaU1YcD56CeisCoaEDImI3oG"></script>
                </center>
            </div>
        </form>
    </aside>
    <!-- Widget: Color Filter / End -->


    <!-- Widget: Filter Size - Boxed -->
    <aside class="widget card widget--sidebar widget_filter-size">
        <form action="#" class="filter-size-form">
            <div class="widget__title card__header card__header--has-btn">
                <h4>Sponsors</h4>
            </div>
            <div class="widget__content card__content">
                <div class="checkbox-table">
                    <a href="https://www.thefutbolstore.com.ar/" target="_new"><img src="{{ asset('assets/images/thefutbolstore.jpg') }}"></a>
                </div>
            </div>
        </form>
    </aside>
    <!-- Widget: Filter Size - Boxed / End -->

</div>