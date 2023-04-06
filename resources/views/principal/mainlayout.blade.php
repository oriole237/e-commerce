<!doctype html>
<html lang="en">

<!-- Mirrored from droitthemes.com/html/saasland/shop-grid-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 16:01:59 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.png') }}" type="image/x-icon">
    <title>Vos achats</title>

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}"> 

    <link rel="stylesheet" href="{{ asset('frontend/vendors/themify-icon/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/elagent/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/animation/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/owl-carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/magnify-pop/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/nice-select/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/ui-fliter/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/scroll/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <style>
        .navbar-main {
            background-color: #4d3dab !important;
            background-image: linear-gradient(80deg, #da0266, #4d3dab);
            padding: 8px;
        }
        .navbar-main {
            margin-bottom: 0;
            /* background-color: #0e5077; */
            border: 0;
            min-height: 38px;
            font-family: Raleway, "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 15px;
        }
        .navbar{
            position: relative;
        }
        nav {
            display: block;
            list-style: none;
        }
        .navbar:before, .navbar:after, .container:before, .container:after,
        .navbar-header:before, .navbar-header:after{
            display: table;
            content: "";
        }
        .container:after, .nav:after, .navbar-collapse:after, .navbar-header:after, .navbar:after{
            clear: both;
        }
        .container > .navbar-collapse, .container > .navbar-header {
            margin-right: -15px;
            margin-left: -15px;
        }
        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
        .navbar-main .navbar-toggle {
            border-color: transparent;
        }
        .navbar-default .navbar-toggle {
            border-color: #ddd;
        }
        .navbar-toggle {
            position: relative;
            float: right;
            padding: 9px 10px;
            margin-top: 8px;
            margin-right: 15px;
            margin-bottom: 8px;
            background-color: transparent;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        button {
            outline: none;
            transition: all 300ms ease-in-out 0s;
        }
        .navbar-default .navbar-collapse {
            border-color: #e7e7e7;
        }
        .navbar-collapse {
            padding-right: 15px;
            padding-left: 15px;
            /* overflow-x: visible;
            -webkit-overflow-scrolling: touch;
            border-top: 1px solid transparent;
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1); */
        }
        .nav > li {
            position: relative;
            display: block;
        }
        .navbar-main .navbar-nav > li > a {
            padding-top: 9px;
            padding-bottom: 9px;
            color: #fff;
        }
        .navbar-nav > li > a {
            /* padding-top: 10px;
            padding-bottom: 10px; */
            line-height: 20px;
        }
        .nav > li > a {
            position: relative;
            display: block;
            padding: 10px 15px;
        }
        a {
            outline: none;
            /* color: #da0266; */
            transition: all 300ms ease-in-out 0s;
            font-family: "Nunito", sans-serif;
            font-weight: 400;
            background-color: transparent;
        }
        .navbar-main li.account {
            background: #da0266;
            color: #fff;
        }
        /* .caret {
            display: inline-block;
            width: 0;
            height: 0;
            margin-left: 2px;
            vertical-align: middle;
            border-top: 4px dashed;
            border-right: 4px solid transparent;
            border-left: 4px solid transparent;
        } */
        @media (min-width: 992px){
            .container {
                width: 970px;
            }
        }
        @media (min-width: 768px){
            .container {
                width: 750px;
            }
            .container > .navbar-collapse, .container > .navbar-header {
                margin-right: 0;
                margin-left: 0;
            }
            .navbar-header {
                float: left;
            }
            .navbar {
                border-radius: 4px;
            }
            .navbar-toggle {
                display: none;
            }
            .navbar-collapse.collapse {
                display: block !important;
                height: auto !important;
                padding-bottom: 0;
                overflow: visible !important;
            }
            .navbar-collapse {
                width: auto;
                border-top: 0;
                /* -webkit-box-shadow: none; */
                box-shadow: none;
                padding-left: 0px;
                padding-right: 0px;
            }
            .navbar-nav {
                float: left;
                margin: 0;
                flex-direction: row;
            }
            .navbar-nav > li {
                float: left;
            }
            ul li{
            display: inline-block;
            text-decoration: none;
        }
        }
        


    </style>
    @yield('css')
</head>

<body>
    {{-- <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>
                </div>
                <p class="text-center">Loading</p>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="body_wrapper">
        <header class="header_area">
            @include('principal.navbar')
        </header>
        @yield('master')
        @include('principal.footer')
    </div>


    <script data-cfasync="false" src="{{ asset('frontend/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/propper.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/sckroller/jquery.parallax-scroll.js') }}"></script>
    <script src="{{ asset('frontend/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/isotope/isotope-min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/magnify-pop/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/nice-select/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/vendors/ui-fliter/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/vendors/scroll/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script> 
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"71ede37e5f52d669","version":"2022.6.0","r":1,"token":"327f02abe4ab496bb762653489d2ae1d","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from droitthemes.com/html/saasland/shop-grid-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jun 2022 16:02:03 GMT -->

</html>
