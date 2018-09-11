@if(isset($route))

<nav class="main-nav clearfix">
    <ul class="main-nav__list">
        <li><a href="http://www.thefutbolcompany.com/">Home</a></li>

        <li  class="uk-parent {!! (isset($categoria) && $categoria == 'torneos') ? "active" : "" !!}" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false">
            <a href="#">Torneos</a>
            <ul class="main-nav__sub">
                @foreach(\App\Entities\tfc\Tournaments::where('categories_id',$route)->orderBy('id','des')->get() as $torneo)
                    @if(strtotime($torneo->to) >= strtotime(date('Y-m-d')))
                        <li>
                            <a href="{!! route("new.torneos",[$route,$torneo->id]) !!}">{!! strtoupper($torneo->name) !!}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
        <li class="uk-parent {!! (isset($categoria) && $categoria == 'noticias') ? "active" : "" !!}">
            <a href="{!! route("new.noticias",$route) !!}">Noticias</a>
        </li>
        <li class="uk-parent {!! ( isset($categoria) && $categoria == 'sedes') ? "active" : "" !!}" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false">
            <a href="{!! route("new.sedes",$route) !!}">Sedes</a>
        </li>
        <li class="uk-parent {!! (isset($categoria) && $categoria == 'galeria') ? "active" : "" !!}" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false">
            <a href="{!! route('new.galeria',$route) !!}">Galerias</a>
        </li>
        <li  class="uk-parent {!! (isset($categoria) && $categoria == 'reglamento') ? "active" : "" !!}">
            <a href="{!! route('new.reglamento',$route) !!}">Reglamento</a>
        </li>
        <li class="uk-parent {!! (isset($categoria) && $categoria == 'inscripcion') ? "active" : "" !!}" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false">
            <a href="{!! route('new.inscripcion',$route) !!}">Inscripcion</a>
        </li>
        <li class="uk-parent {!! (isset($categoria) && $categoria == 'contactanos') ? "active" : "" !!}">
            <a href="{!! route('new.contactanos',$route) !!}">Contactanos</a>
        </li>
    </ul>


    <!-- Pushy Panel Toggle / Eng -->
</nav>

@endif