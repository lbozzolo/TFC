@extends('tfc.web.layout')


@section('page-heading')

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h1 class="page-heading__title">Noticias  <span class="highlight">The Futbol Company</span></h1>

        </div>
      </div>
    </div>
  </div>

@endsection

@section('content')

    <div class="site-content">
      <div class="container">

        <div class="posts posts--cards post-grid post-grid--fitRows row">


            @if($noticias->count() > 0)
                @foreach($noticias as $noticia)

                    <div class="post-grid__item col-md-4 col-lg-4 col-xs-12 col-sm-6">
                        <div class="posts__item posts__item--card posts__item--category-1 card" style="height: 500px; overflow: hidden">
                            <figure class="posts__thumb">
                                <a href="#"><img src="{{ asset(($noticia->Images->first())? $noticia->Images->first()->image : 'assets/web/images/noticiasDefault.jpg') }}"  alt=""></a>
                            </figure>
                            <div class="posts__inner card__content">
                                <time datetime="2016-08-23" class="posts__date">{!! $noticia->date !!}</time>
                                <h6 class="posts__title"><a href="#">{!! $noticia->title !!}</a></h6>
                                <div class="posts__excerpt">
                                    {!! str_limit($noticia->description, 180) !!}
                                </div>
                            </div>

                        </div>
                    </div>

                @endforeach
            @endif

      </div>
    </div>
</div>

@endsection
