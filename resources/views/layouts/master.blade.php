<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <title>Robby's webshop</title>
</head>

<body class="d-flex flex-column h-100">
    @include("partials.navbar-partial")
    <div class="container mb-5">

        <div class="content">
            @yield('about-content')
            @yield('content')
        </div>
    </div>

</body>

</html>