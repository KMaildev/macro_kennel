<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Macro Kennel @yield('title')</title>

    <meta name="description"
        content="Pets is responsive multi-purpose HTML5 template compatible with Bootstrap 4. Take your Startup business website to the next level. it is designed for pet care, clinic, veterinary, shop, store, adopt, food, pets, businesses or any type of person or business who wants to showcase their work, services and professional way">

    <meta name="keywords"
        content="animals, business, cats, dogs, ecommerce, modern, pet care, pet services, pet shop, pet sitting, pets, shelter animals, store, veterinary">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <script src="{{ asset('assets/js/vendor/modernizr.min.js') }}"></script>

</head>

<body>

    <a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

    <!-- Menu -->
    @include('layouts.menu')
    @include('layouts.includes.alert')
    @if (URL::current() == route('home'))
        @include('layouts.slider')
    @endif

    @yield('content')

    @include('layouts.footer')

    <!-- JS VENDOR -->
    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>

    <!-- SENDMAIL -->
    <script src="{{ asset('assets/js/vendor/validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/form-scripts.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    @yield('script')
</body>

</html>
