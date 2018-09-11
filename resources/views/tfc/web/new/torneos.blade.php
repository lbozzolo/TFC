@extends('tfc/web/layout')

@section('page-heading')

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h1 class="page-heading__title">Profesionales del  <span class="highlight">Futbol Amateur</span></h1>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <div class="col-md-9 col-md-push-3">

      <div class="card card--clean">
      <!-- Posiciones -->
          @include('tfc.web.new.posiciones')
      </div>
      <!-- Inicio Resultados de la Fecha -->
          @include('tfc.web.new.resultados-de-la-fecha')
      <!-- Inicio Proxima Fecha -->
          @include('tfc.web.new.proxima-fecha')
      <!-- Fixture y resultados -->
          @include('tfc.web.new.fixture-y-resultados')
      <!-- Inicio Sancionados de la Fecha -->
          @include('tfc.web.new.sancionados')
      <!-- Inicio FairPlay -->
          @include('tfc.web.new.fair-play')
      <!-- Inicio Goleadores -->
          @include('tfc.web.new.goleadores')

    </div>

    @include('tfc/web/sidebar/sidebar')

@endsection

@section('js')

    <script>

        $('#seleccion-fecha').change(function(){
            var data= $(this).val();
            var fase = parseInt(data.substring(5)) + 1;
            $('.fechas').hide();
            $('#' + data).show();
            $('#fase-actual').text(" - Fase " + fase);
        });

    </script>

@endsection