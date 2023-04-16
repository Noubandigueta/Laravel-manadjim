<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}-@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('assets/app.css')}}">

        <link rel="stylesheet" href="{{ asset('styles/style.css') }}">

    </head>
    <body>
        <header >
            {{--Bar de navigation--}}
             @include('navbar/navbar')

            {{--Tous nos contenus seront affichés ici--}}
            @yield('content')

            <div style="position: fixed;
            width: 25px;
            height: 25px;
            bottom: 50px;
            right: 30px;">
            <a href="#" class="btn btn-default"><img src="/images/fleche1.jpg" alt="Retour en haut" height="30" width="80%" style="width: 25px;"></a>
            </div>
            @include('footer/footer')

            {{--Mon script javaScript--}}
            @include('script')
        </header>
        {{--  <div id="content" class="site-content" style="height: auto !important;">
            @yield('mainContent')
        </div>  --}}
    </body>
</html>
