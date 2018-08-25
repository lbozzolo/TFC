<!DOCTYPE html>
<html lang="zxx">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>TheFutbolCompany. Profesionales en Futbol Amateurs.</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="TheFutbolCompany. Profesionales en Futbol Amateurs.">
    <meta name="author" content="Jorge Perez">
    <meta name="keywords" content="organizacion de torneos de futbol, torneos de futbol 5, torneos de futbol 11, torneos de futbol 7, torneos empresariales, torneos corporativos, futbol 5 futbol 11, organizacion" />
    <meta name="description" content="Organizacion integral de eventos sociales y deportivos">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('assets/images/soccer/favicons/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/soccer/favicons/favicon-120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/soccer/favicons/favicon-152.png') }}">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">

    <!-- Google Web Fonts
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CSource+Sans+Pro:400,700" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBuKekZN1wrg3gv4bo7tPQJm71j-WcXtbM	&sensor=false"></script>

    <!-- CSS
    ================================================== -->
    <!-- Preloader CSS -->
    {{--<link href="assets/css/preloader.css" rel="stylesheet">--}}
    <link href="{{ asset('assets/css/preloader.css') }}" rel="stylesheet">

    <!-- Vendor CSS -->
    {{--<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fonts/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/slick/slick.css') }}" rel="stylesheet">

    <!-- Template CSS-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Custom CSS-->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

</head>
<body class="template-soccer">

<div class="site-wrapper clearfix">
    <div class="site-overlay"></div>



    <!-- Header
    ================================================== -->

    <!-- Header Mobile -->
    <div class="header-mobile clearfix" id="header-mobile">
        <div class="header-mobile__logo">
            <a href="#"><img src="{{ asset('assets/images/soccer/logo.png') }}" srcset="{{ asset('assets/images/soccer/logo@2x.png 2x') }}" alt="The Futbol Company" class="header-mobile__logo-img"></a>
        </div>
        <div class="header-mobile__inner">
            <a id="header-mobile__toggle" class="burger-menu-icon"><span class="burger-menu-icon__line"></span></a>
            <span class="header-mobile__search-icon" id="header-mobile__search-icon"></span>
        </div>
    </div>

    <!-- Header Desktop -->
    <header class="header">

        <!-- Header Top Bar -->
        <div class="header__top-bar clearfix">
            <div class="container">

                <!-- Account Navigation -->
                <ul class="nav-account">
                    <li class="nav-account__item"><a href="http://www.thefutbolcompany.com/cpanel">Acceso</a></li>
                </ul>
                <!-- Account Navigation / End -->

            </div>
        </div>
        <!-- Header Top Bar / End -->

        <!-- Header Secondary -->
        <div class="header__secondary">
            <div class="container">
                <!-- Header Search Form -->
                <div class="header-search-form">
                    <img src="{{ asset('assets/images/profesionales.png') }}">
                </div>
                <!-- Header Search Form / End -->

            </div>
        </div>
        <!-- Header Secondary / End -->

        <!-- Header Primary -->
        <div class="header__primary">
            <div class="container">
                <div class="header__primary-inner">

                    <!-- Header Logo -->
                    <div class="header-logo">
                        <a href="#"><img src="{{ asset('assets/images/soccer/logo.png') }}" srcset="{{ asset('assets/images/soccer/logo@2x.png 2x') }}" alt="The Futbol Company" class="header-logo__img"></a>
                    </div>
                    <!-- Header Logo / End -->

                    @include('tfc.web.menu.navbar')

                </div>
            </div>
        </div>
        <!-- Header Primary / End -->

    </header>
    <!-- Header / End -->

    <!-- Pushy Panel - Dark -->
    <aside class="pushy-panel pushy-panel--dark">
        <div class="pushy-panel__inner">
            <header class="pushy-panel__header">
                <div class="pushy-panel__logo">
                    <a href="#"><img src="{{ asset('assets/images/soccer/logo.png') }}" srcset="{{ asset('assets/images/soccer/logo@2x.png 2x') }}" alt="The Futbol Company"></a>
                </div>
            </header>
            <div class="pushy-panel__content">




                <!-- Widget: Banner -->
                <aside class="widget widget--side-panel widget-banner">
                    <div class="widget__content">
                        <figure class="widget-banner__img">
                            <a href="#"><img src="{{ asset('assets/images/samples/banner.jpg') }}" alt="Banner"></a>
                        </figure>
                    </div>
                </aside>
                <!-- Widget: Banner / End -->

            </div>
            <a href="#" class="pushy-panel__back-btn"></a>
        </div>
    </aside>
    <!-- Pushy Panel - Dark / End -->



    @yield('page-heading')

    <!-- Content
    ================================================== -->
    <div class="site-content">
        <div class="container">
            <div class="row">

                @yield('content')

            </div>
        </div>
    </div>

        @include('tfc/web/footer/footer')

</div>

@yield('js')

<!-- Javascript Files
================================================== -->

<!-- Core JS -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/core-min.js') }}"></script>

<!-- Vendor JS -->
<script src="{{ asset('assets/vendor/twitter/jquery.twitter.js') }}"></script>


<!-- Template JS -->
<script src="{{ asset('assets/js/init.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

</body>
</html>

