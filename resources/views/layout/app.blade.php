<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
@include('layout.partials.nav')
@yield('content')

@stack('css_or_js')
</body>
</html>
