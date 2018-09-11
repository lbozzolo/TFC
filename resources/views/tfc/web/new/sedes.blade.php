@extends('tfc.web.layout')

@section('page-heading')

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="page-heading__title">Sedes de <span class="highlight">TFC</span></h1>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('content')

    <div class="gallery row">

        @foreach($sedes as $sede)

            <div class="gallery__item col-xs-6 col-sm-4">
                <a href="{!! route('new.sedeDetalle',[$route,$sede->id]) !!}" class="gallery__item-inner card">
                    <figure class="gallery__thumb">
                        @if($sede->Images->first())
                            <img src="{{ $sede->Images->first()->image }}" alt="" class="">
                        @endif
                        <span class="btn-fab gallery__btn-fab"></span>
                    </figure>
                    <div class="gallery__content card__content">
                        <span class="gallery__icon">
                          <span class="icon-camera"></span>
                        </span>
                        <div class="gallery__details">
                            <h4 class="gallery__name">{!! $sede->name !!}</h4>
                            <div class="gallery__date">Ver mapa</div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>


@endsection