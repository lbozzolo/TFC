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

<div class="site-content">
    <div class="container">
        <h4 class="gallery__name">{!! $sedes->name !!}</h4>
        <br>
        <!-- Gallery -->
        <div class="gallery row">
            <div class="gallery__item col-xs-12 col-sm-12">
                <div class="contact-text">Dirección: {!! ($sedes->address)? $sedes->address : '---' !!}</div>
                <div class="contact-text">Telefono: {!! ($sedes->phone)? $sedes->phone : '---' !!}</div>
            </div>
        </div>
    </div>
</div>

<div class="tm-bottom-b-box tm-full-width">
    <div class="uk-container uk-container-center">
        <section id="tm-bottom-b">
            <div id="map_canvas" class="center-block" data-direccion="{!! $sedes->address !!}" style="width:800px;height:600px;"></div>
        </section>
    </div>
</div>

@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
    <script>




            var address = $('#map_canvas').attr('data-direccion');

            // Creamos el Objeto Geocoder
            var geocoder = new google.maps.Geocoder();
            // Hacemos la petición indicando la dirección e invocamos la función
            // geocodeResult enviando todo el resultado obtenido
            if(geocoder.geocode({ 'address': address}, geocodeResult))
                geocoder.geocode({ 'address': address}, geocodeResult);
            else{
                var coords = address.split(",");
                var lat = parseFloat(coords[0]);
                var lng = parseFloat(coords[1]);
                var latlng = new google.maps.LatLng(lat, lng);
                geocoder.geocode({ 'latLng': latlng}, geocodeResult);
            }

            function geocodeResult(results, status) {

                // Verificamos el estatus
                if (status == 'OK') {
                    // Si hay resultados encontrados, centramos y repintamos el mapa
                    // esto para eliminar cualquier pin antes puesto
                    var mapOptions = {
                        zoom: 16,
                        center: results[0].geometry.location,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    map = new google.maps.Map($("#map_canvas").get(0), mapOptions);
                    // fitBounds acercará el mapa con el zoom adecuado de acuerdo a lo buscado
//                map.fitBounds(results[0].geometry.viewport);
                    // Dibujamos un marcador con la ubicación del primer resultado obtenido
                    var markerOptions = { position: results[0].geometry.location }
                    var marker = new google.maps.Marker(markerOptions);
                    marker.setMap(map);
                } else {
                    // En caso de no haber resultados o que haya ocurrido un error
                    // lanzamos un mensaje con el error
//                alert("No se encontrá la ubicación");
                }
            }

            google.maps.event.addDomListener(window, 'load', initialize);



    </script>
@endsection