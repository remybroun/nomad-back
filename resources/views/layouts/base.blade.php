<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:site_name" content="Settle - Remote housing for creatives">
        <meta property="og:title" content="Settle - Remote housing for creatives">
        <meta property="og:description" content="">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="en">
        <meta property="og:url" content="https://settlestays.com/">
        <meta property="og:image" content="{{ asset('https://a-step-in.s3.us-east-2.amazonaws.com/nomadswap/888c9ba7-8d76-4eb1-b347-b6102d55f59f.jpeg') }}">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Settle - Remote housing for creatives">
        <meta name="twitter:image" content="{{ asset('https://a-step-in.s3.us-east-2.amazonaws.com/nomadswap/888c9ba7-8d76-4eb1-b347-b6102d55f59f.jpeg') }}">

        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Favicon -->
		<link rel="shortcut icon" href="{{ url(asset('public/favicon.ico')) }}">
        @vite(['resources/css/app.css', 'resources/js/app.jsx'])

        <!-- Fonts -->
        @stack('css')



        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Google tag (gtag.js) -->

        <script async src="https://www.googletagmanager.com/gtag/js?id=G-9DQVTTLN1V"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-9DQVTTLN1V');
        </script>

    </head>

    <body>
        @yield('body')


        @stack('js')
    </body>
</html>
