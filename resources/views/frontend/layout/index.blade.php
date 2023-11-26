<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" width=device-width, initial-scale=1.0, minimum-scale=1.0>
    <title>Portfolio | Selim Reza</title>
    <link rel="shortcut icon" href="{{ asset('frontend/images/fav.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('frontend/images/fav.jpg') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slider/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slider/css/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">
</head>

<body>

    @include('frontend.layout.header')
    @yield('content')
    @include('frontend.layout.footer')


    <script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/scroll-fixed/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('frontend/plugins/slider/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>

</body>

</html>
