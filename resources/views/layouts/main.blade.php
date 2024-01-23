<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>
        ジーエーエス　カンパニーリミテッド (G A S COMPANY LIMITED) - @yield('title')
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon-aqua.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/woocommerce.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/royal-preload.css') }}" />
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution/css/settings.css') }}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/plugins/revolution/revolution/css/navigation.css') }}">
</head>

<body class="royal_preloader home-finance">
    <div id="page" class="site">

        @include('layouts.menu')

        @yield('content')

        @include('layouts.footer')

    </div>
    <a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow-2"></i></a>
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/header-mobile.js') }}"></script>
    <script src="{{ asset('assets/js/royal_preloader.min.js') }}"></script>
    <!-- REVOLUTION JS FILES -->

    <script src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('assets/plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script src="{{ asset('assets/js/rev-script-3.js') }}"></script>
    <script>
        window.jQuery = window.$ = jQuery;
        (function($) {
            "use strict";
            Royal_Preloader.config({
                mode: 'logo',
                logo: 'images/05_Black.svg',
                logo_size: [160, 75],
                showProgress: true,
                showPercentage: true,
                text_colour: '#000000',
                background: '#ffffff'
            });
        })(jQuery);
    </script>
</body>

</html>
