<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="{{asset('assets/fontawsome_css/all.css')}}">


    @stack('third_party_css')
    @vite('resources/css/admin.css')
    @stack('css')
</head>
<body>

<div class="h-[100vh] overflow-hidden">
    @include('admin.inc.sidebar')

    <div class="float-left w-[calc(100%-300px)] h-full">
        @include('admin.inc.header')
        <main class="h-full overflow-auto">
            @yield('main')
        </main>
    </div>

</div>

@stack('third_party_js')
@vite('resources/js/admin.js')
@stack('js')

</body>
</html>
