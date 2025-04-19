<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Home Page')</title>
    <link rel="stylesheet" href="{{asset('assets/fontawsome_css/all.css')}}">


    @stack('third_party_css')
    @vite('resources/css/app.css')
    @stack('css')
</head>
<body>
    @include('frontend.inc.header')


    @yield('main')


    @stack('third_party_js')
    @vite('resources/js/app.js')
    @stack('js')

</body>
</html>
