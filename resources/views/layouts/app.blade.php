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
        <footer class="flex flex-wrap items-center justify-between p-2 px-12 bg-teal-900">
            <div class="px-12 w-full lg:w-auto lg:mr-6 mb-2 lg:mb-0 text-center font-normal tracking-normal leading-6 antialiased text-base font-montserrat text-teal-300 text-sm">
                © {{ date('Y') }} Powered by Fursee Inc.
            </div>
            {{-- <div class="flex flex-col lg:flex-row items-center w-full lg:w-auto">
                <div class="mx-auto lg:mx-0 lg:ml-auto">
                    <a class="inline-block mt-0 text-blue-900 hover:text-blue-700" href="#"></a>
                    <a class="inline-block mt-0 ml-8 text-blue-900 hover:text-blue-700" href="#"></a>
                    <a class="inline-block mt-0 ml-8 text-blue-900 hover:text-blue-700" href="#"></a>
                </div>
                <div class="flex justify-center mt-4 lg:mt-0 lg:ml-8"><img class="w-6 h-6 mr-6" src="placeholders/icons/message.svg" alt="">
                    <img class="w-6 h-6" src="placeholders/icons/share.svg" alt="">
                </div>
            </div> --}}
      </footer>
    </div>

    <script src="{{ asset('js/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
