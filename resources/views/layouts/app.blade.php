<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ACA') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="{{ asset('json_decode(json)') }}" defer></script> --}}

    <!-- Fonts -->
{{--     <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <style>
        .rotate-45 {
          transform: rotate(45deg);
        }
        .-rotate-45 {
          transform: rotate(-45deg);
        }
        .delay {
            animation-delay: .2s;
        }
    </style>
</head>
<body class="bg-gray-300">
    <div id="app">
        <main class="py-4 pt-0">
            @yield('content')
        </main>
        <footer-component></footer-component>
    </div>

    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
