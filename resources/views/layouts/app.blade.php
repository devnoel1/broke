<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Indonez">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#FCB42D" />
    <!-- Site Properties -->
    <title>GlobalCrypto</title>
    <!-- critical preload -->
    <link rel="preload" href="{{ asset('front/js/vendors/uikit.min.js') }}" as="script">
    <link rel="preload" href="{{ asset('front/css/vendors/uikit.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('front/css/style.css') }}" as="style">
    <!-- icon preload -->
    <link rel="preload" href="{{ asset('front/fonts/fa-brands-400.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('front/fonts/fa-solid-900.woff2') }}" as="font" type="font/woff2" crossorigin>
    <!-- font preload -->
    <link rel="preload" href="{{ asset('front/fonts/archivo-v9-latin-regular.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('front/fonts/archivo-v9-latin-300.woff2') }}" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{ asset('front/fonts/archivo-v9-latin-700.woff2') }}" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('front/css/vendors/uikit.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    @yield('content')
        <!-- totop begin -->
        <div class="uk-visible@m">
            <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
        </div>
        <!-- totop end -->
    </footer>
    <!-- javascript -->
    <script src="{{ asset('front/js/vendors/uikit.min.js') }}"></script>
    <script src="{{ asset('front/js/vendors/utilities.min.js') }}"></script>
    <script src="{{ asset('front/js/vendors/trading-widget.min.js') }}"></script>
    <script src="{{ asset('front/js/vendors/market-plugin.min.js') }}"></script>
    <script src="{{ asset('front/js/vendors/particles.min.js') }}"></script>
    <script src="{{ asset('front/js/config-particles.js') }}"></script>
    <script src="{{ asset('front/js/config-theme.js') }}"></script>
</body>


</html>
