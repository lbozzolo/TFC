@extends('tfc.web.layout')

@section('page-heading')

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="page-heading__title">Galerias de  <span class="highlight">Futbol</span></h1>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('content')


    <div class="site-content">
        <div class="container">

            <!-- Gallery -->
            <div class="gallery row">

                @foreach($galeria as $imagen)
                <div class="gallery__item col-xs-6 col-sm-4">

                    <figure class="gallery__thumb">
                        <a href="{!! ($imagen->Images->first())? asset($imagen->Images->first()->image) : '' !!}" data-uk-lightbox="{group:'my-group'}" class="img-0">
                            <img src="{!! ($imagen->Images->first())? asset($imagen->Images->first()->image) : '' !!}" alt="{!! $imagen->name !!}">
                        </a>
                        <span class="btn-fab gallery__btn-fab"></span>
                    </figure>
                    <div class="gallery__content card__content">
                        <span class="gallery__icon">

                        </span>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- Gallery / End -->


            <div class="text-center">
                <!-- Team Pagination -->
                <nav class="team-pagination">
                    <ul class="pagination pagination--condensed pagination--lg">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><span>...</span></li>
                        <li><a href="#">16</a></li>
                    </ul>
                </nav>
                <!-- Team Pagination / End -->

            </div>
        </div>
    </div>

@endsection