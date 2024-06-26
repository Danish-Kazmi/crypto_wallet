<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Dashboard</title>

        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
            ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <!-- educate icon CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/educate-custon-icon.css') }}">
        <!-- morrisjs CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/morrisjs/morris.css') }}">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
        <!-- metisMenu CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu-vertical.css') }}">
        <!-- calendar CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.print.min.css') }}">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        @yield('css')

    </head>
    <body>

        @include('layout.sidebar')

        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            <a href="index.html"><img class="main-logo" src="{{ asset('custom/img/logo.png') }}" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>

            @include('layout.navbar')

            @yield('content')

            <div class="footer-copyright-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-copy-right">
                                <p>Copyright © {{ date('Y') }}. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scripts -->

        <!-- modernizr JS
            ============================================ -->
        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>

        <!-- jquery
            ============================================ -->
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- wow JS
            ============================================ -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <!-- price-slider JS
            ============================================ -->
        <script src="{{ asset('js/jquery-price-slider.js') }}"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
        <!-- owl.carousel JS
            ============================================ -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
        <!-- counterup JS
            ============================================ -->
        <script src="{{ asset('js/counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/counterup/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/counterup/counterup-active.js') }}"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="{{ asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('js/scrollbar/mCustomScrollbar-active.js') }}"></script>
        <!-- metisMenu JS
            ============================================ -->
        <script src="{{ asset('js/metisMenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('js/metisMenu/metisMenu-active.js') }}"></script>
        <!-- morrisjs JS
            ============================================ -->
        {{-- <script src="{{ asset('js/morrisjs/raphael-min.js') }}"></script>
        <script src="{{ asset('js/morrisjs/morris.js') }}"></script>
        <script src="{{ asset('js/morrisjs/morris-active.js') }}"></script> --}}
        <!-- morrisjs JS
            ============================================ -->
        <script src="{{ asset('js/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('js/sparkline/jquery.charts-sparkline.js') }}"></script>
        <script src="{{ asset('js/sparkline/sparkline-active.js') }}"></script>
        <!-- calendar JS
            ============================================ -->
        <script src="{{ asset('js/calendar/moment.min.js') }}"></script>
        <script src="{{ asset('js/calendar/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('js/calendar/fullcalendar-active.js') }}"></script>
        <!-- plugins JS
            ============================================ -->
        <script src="{{ asset('js/plugins.js') }}"></script>
        <!-- main JS
            ============================================ -->
        <script src="{{ asset('js/main.js') }}"></script>
        <!-- tawk chat JS
            ============================================ -->
        {{-- <script src="{{ asset('js/tawk-chat.js') }}"></script> --}}

        @yield('scripts')
    </body>
</html>
