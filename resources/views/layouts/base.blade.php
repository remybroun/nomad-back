<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.jsx'])
    @stack('css')
    {{--        @livewireStyles--}}
    <title>{{ config('app.name', 'Nomad Stay - Accomodation for Remote Workers') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:site_name" content="Nomad Stay - Accomodation for Remote Workers">
    <meta property="og:title" content="Nomad Stay - Accomodation for Remote Workers">
    <meta property="og:description"
          content=""
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en">
    <meta property="og:url" content="https://boundra.com/">
    @hasSection('image')
        <meta property="og:image" content="@yield('image')">
    @else
        <meta property="og:image" content="{{ asset('images/boundra_black_background.png') }}">
    @endif
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Boundra - Remote housing for creatives">
    <meta name="twitter:image" content="{{ asset('images/boundra_black_background.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,900;0,9..40,1000;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,700;1,9..40,1000&display=swap"
        rel="stylesheet">
    @hasSection('title')
        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif

    <meta name="description"
          content="@yield('meta_description', 'Boundra is a community of creatives who live and work remotely. We provide housing, workspaces, and community for creatives who want to live and work remotely.')">


    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url(asset('public/favicon.ico')) }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url(asset('public/apple-touch-icon.png')) }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url(asset('public/favicon-32x32.png')) }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url(asset('public/favicon-16x16.png')) }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>


    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=TAG_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-FE03BJ67DM');
    </script>
    <!-- Meta Pixel Code -->
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1667508710404355');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" alt="facebook-pixel"
             src="https://www.facebook.com/tr?id=1667508710404355&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body>
@yield('body')

{{--        @livewireScripts--}}
@stack('js')
</body>
</html>
