<!DOCTYPE html>
<html lang="en-gb">

<head>
    <base href="{!! asset('') !!}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Futbol Company. Profesionales en Futbol Amateurs.</title>
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="assets/web/new/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="assets/web/new/css/akslider.css" rel="stylesheet" type="text/css" />
    <link href="assets/web/new/css/donate.css" rel="stylesheet" type="text/css" />
    <link href="assets/web/new/css/theme.css" rel="stylesheet" type="text/css" />

    @yield('css')
    <script type="text/javascript" src="assets/web/new/js/jquery.js"></script>

    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/mootools/1.3.1/mootools-yui-compressed.js'></script>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
</head>

<body class="tm-isblog">

    <div class="preloader">
        <div class="loader"></div>
    </div>


    <div class="over-wrap">
        <div class="toolbar-wrap">
            <div class="uk-container uk-container-center">
                <div class="tm-toolbar uk-clearfix uk-hidden-small">

                    <div class="uk-float-right">
                        <div class="uk-panel">
                            <div class="social-top">
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="tm-menu-box">

            <div style="height: 70px;" class="uk-sticky-placeholder">
                <nav style="margin: 0px;" class="tm-navbar uk-navbar" data-uk-sticky="">
                    <div class="uk-container uk-container-center">
                        <a class="tm-logo uk-float-left" href="{!! route('web') !!}">
                            <img src="assets/web/new/images/club-logo2.png" alt="The Futbol Company" title="logo">
                        </a>
                        <ul class="uk-navbar-nav uk-hidden-small">
                            <li><a href="{!! route('web') !!}">Home</a></li>
                            <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="#">Torneos</a>
                                <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
                                    <div class="uk-grid uk-dropdown-grid">
                                        <div class="uk-width-1-1">
                                            <ul class="uk-nav uk-nav-navbar">

                                                @foreach(\App\Entities\tfc\Tournaments::where('categories_id',$route)->get() as $torneos)

                                                    <li>
                                                        <a href="torneos.html">{!! strtoupper($torneos->name) !!}</a>
                                                    </li>

                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="uk-parent uk-active"><a href="{!! route("noticias",$route) !!}">Noticias</a></li>
                            <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{!! route("web.sedes",$route) !!}">Sedes</a></li>
                            <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{!! route('galeria',$route) !!}">Galerias</a></li>
                            <li  class="uk-parent"><a href="{!! route('reglamento',$route) !!}">Reglamento</a></li>
                            <li class="uk-parent" data-uk-dropdown="{'preventflip':'y'}" aria-haspopup="true" aria-expanded="false"><a href="{!! route('inscripcion',$route) !!}">Inscripcion</a></li>
                            
                            <li class="uk-parent"><a href="{!! route('contactanos',$route) !!}">Contactanos</a>
                            </li>
                        </ul>
                        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                    </div>
                </nav>
            </div>

        </div>

        <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('images/head-bg02.jpg');">
                                <img class="uk-invisible" src="assets/web/new/images/head-bg.jpg" alt="" height="290" width="1920">
                                <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        <div class="uk-container uk-container-center alt">
            <ul class="uk-breadcrumb">
                <li><a href="{!! route('web') !!}">Home</a></li>
                <li class="uk-active"><span>Noticias</span></li>
            </ul>
        </div>

        @yield('content')

        <div class="bottom-wrapper">
            

            <div class="tm-bottom-f-box  ">
                <div class="uk-container uk-container-center">
                    <section id="tm-bottom-g" class="tm-bottom-f uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                        <div class="uk-width-1-1 uk-width-large-1-2">
                            <div class="uk-panel">
                                <div>
                                    <a href="{!! route('web') !!}"><img src="assets/web/new/images/logo-white.png" alt="The Futbol Company" title="logo"> </a>
                                </div>
                                <div class="footer-socials">
                                    <div class="social-top">
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-facebook"></span></a>
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-twitter"></span></a>
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-youtube"></span></a>
                                        <a href="#"><span class="uk-icon-small uk-icon-hover uk-icon-instagram"></span></a>
                                    </div>
                                </div>
                                <div class="clear"></div>

                                <p class="footer-about-text">
                                    Contactenos<br>
                                    Tel.: 4504.9683<br>
                                    Jose Cubas N° 3680 - 3ero B
                                </p>
                            </div>
                        </div>

                        {{--<div class="uk-width-1-1 uk-width-large-1-2">--}}
                            {{--<div  class="uk-panel">--}}
                                {{--<div class="acymailing_module" id="acymailing_module_formAcymailing54111">--}}
                                    {{--<div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing54111">--}}
                                        {{--<form id="formAcymailing54111" method="post" name="formAcymailing54111">--}}
                                            {{--<div class="acymailing_module_form">--}}
                                                {{--<div class="mail-title">Newsletters</div>--}}
                                                {{--<div class="acymailing_introtext">Ingrese su email y reciba todas las noticias del Futbol de TFC.</div>--}}
                                                {{--<div class="clear"></div>--}}
                                                {{--<div class="space"></div>--}}
                                                {{--<table class="acymailing_form">--}}
                                                    {{--<tbody>--}}
                                                        {{--<tr>--}}
                                                            {{--<td class="acyfield_email acy_requiredField">--}}
                                                                {{--<span class="mail-wrap">--}}
                                                                    {{--<input id="user_email_formAcymailing54111" onfocus="if(this.value == 'Ingrese su email') this.value = '';" onblur="if(this.value=='') this.value='Ingrese su email';" class="inputbox" name="user[email]" style="width:80%" value="Ingrese su email" title="Ingrese su email" type="text">--}}
                                                            {{--</span>--}}
                                                            {{--</td>--}}
                                                        {{--</tr>--}}
                                                        {{--<tr>--}}

                                                            {{--<td class="acysubbuttons">--}}
                                                                {{--<span class="submit-wrap">--}}
                                                                    {{--<span class="submit-wrapper">--}}
                                                                        {{--<input class="button subbutton btn btn-primary" value="Suscribirse" name="Submit" onclick="try{ return submitacymailingform('optin','formAcymailing54111'); }catch(err){alert('Ingrese un email valido '+err);return false;}" type="submit">--}}
                                                                    {{--</span>--}}
                                                                {{--</span>--}}
                                                            {{--</td>--}}
                                                        {{--</tr>--}}
                                                    {{--</tbody>--}}
                                                {{--</table>--}}
                                            {{--</div>--}}
                                        {{--</form>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </section>
                </div>
            </div>

           <footer id="tm-footer" class="tm-footer">


                <div class="uk-panel">
                    <div class="uk-container uk-container-center">
                        <div class="uk-grid">
                            <div class="uk-width-1-1">
                                <div class="footer-wrap">
                                    <div class="foot-menu-wrap">
                                        <ul class="nav menu">
                                            <li class="item-165"><a href="{!! route('web',$route) !!}">Home</a>
                                            </li>
                                            <li class="item-166"><a href="{!! route('reglamento',$route) !!}">Reglamento</a>
                                            </li>
                                            <li class="item-167"><a href="{!! route('noticias',$route) !!}">Noticias</a>
                                            </li>
                                            <li><a href="{!! route('sedes',$route) !!}">Sedes</a>
                                            </li>
                                            <li><a href="{!! route('galeria',$route) !!}">Galerias</a>
                                            </li>
                                             <li><a href="{!! route('contactanos',$route) !!}">Contactanos</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="copyrights">Copyright � 2016 <a href="http://www.thefutbolcompany.com">Thefutbolcompany.com</a>. Derechos Reservados.</div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>

        
    </div>

    

<script type="text/javascript" src="assets/web/new/js/uikit.js"></script>
<script type="text/javascript" src="assets/web/new/js/SimpleCounter.js"></script>
<script type="text/javascript" src="assets/web/new/js/components/grid.js"></script>
<script type="text/javascript" src="assets/web/new/js/components/slider.js"></script>
<script type="text/javascript" src="assets/web/new/js/components/slideshow.js"></script>
<script type="text/javascript" src="assets/web/new/js/components/slideset.js"></script>
<script type="text/javascript" src="assets/web/new/js/components/sticky.js"></script>
<script type="text/javascript" src="assets/web/new/js/components/lightbox.js"></script>
<script type="text/javascript" src="assets/web/new/js/components/accordion.js"></script>
<script type="text/javascript" src="assets/web/new/js/isotope.pkgd.min.js"></script>


    <script type="text/javascript" src="assets/web/new/js/components/autocomplete.js"></script>
    <script type="text/javascript" src="assets/web/new/js/components/datepicker.js"></script>
    <script type="text/javascript" src="assets/web/new/js/components/form-password.js"></script>
    <script type="text/javascript" src="assets/web/new/js/components/form-select.js"></script>
    <script type="text/javascript" src="assets/web/new/js/components/paralax.js"></script>
    <script type="text/javascript" src="assets/web/new/js/components/upload.js"></script>

    <script type="text/javascript" src="assets/web/new/js/theme.js"></script>

<script type="text/javascript">
    new SimpleCounter("countdown4", 1447448400, {
      'continue': 0,
      format: '{D} {H} {M} {S}',
      lang: {
          d: {
              single: 'day',
              plural: 'days'
          }, //days
          h: {
              single: 'hr',
              plural: 'hrs'
          }, //hours
          m: {
              single: 'min',
              plural: 'min'
          }, //minutes
          s: {
              single: 'sec',
              plural: 'sec'
          } //seconds
      },
      formats: {
          full: "<span class='countdown_number' style='color:  '>{number} </span> <span class='countdown_word' style='color:  '>{word}</span> <span class='countdown_separator'>:</span>", //Format for full units representation
          shrt: "<span class='countdown_number' style='color:  '>{number} </span>" //Format for short unit representation
      }
  });
</script>

@yield('js')

</body>

</html>