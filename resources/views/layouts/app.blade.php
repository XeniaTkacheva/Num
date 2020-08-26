<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
{{--    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;300;500;700;900&display=swap" rel="stylesheet">--}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
@include('inc.sprite')
    <div id="app">
        @if(Route::is(!'main'))
            @include('layouts.menu.header')
        @endif
        <main @if(Route::is(!'home')) class="bg1" @else class="bg" @endif >

            <!-- Content Lending Page -->
            @yield('content')


        </main>
        <!-- Footer -->
        @include('layouts.footer.footer')
    </div>
</body>
</html>
