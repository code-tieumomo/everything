<!doctype html>
<html lang="{{ config('app.locale') }}" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <title>Everything - CMS platform for everything</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CMS platform for everything"/>
    <meta name="keywords" content="CMS, Software, multi-uses, HTML, Laravel, Clean, Modern"/>
    <meta name="author" content="qv"/>
    <meta name="email" content="qv@gmail.com"/>
    <meta name="website" content="https://qv.com"/>
    <meta name="Version" content="v1.0.0"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('storage/landing/favicon.ico') }}"/>

    <!-- CSS -->
    <link href="{{ asset('storage/landing/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('storage/landing/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('storage/landing/css/bootstrap.min.css') }}" class="theme-opt" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS -->
    <link href="{{ asset('storage/landing/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('storage/landing/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet"/>
    <!-- Style CSS-->
    <link href="{{ asset('storage/landing/css/style.css') }}" class="theme-opt" rel="stylesheet" type="text/css"/>
</head>
<body>
<!-- Navbar Start -->
@yield('header')
<!-- Navbar End -->

<!-- Hero Start -->
@yield('hero')
<!-- Hero End -->

<!-- Feature Start -->
@yield('feature')
<!-- Feature End -->

<!-- Faq Start -->
@yield('faq')
<!-- Faq End -->

<!-- Footer Start -->
@yield('footer')
<!-- Footer End -->

<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
<!-- Back to top -->

<!-- JAVASCRIPT -->
<script src="{{ asset('storage/landing/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('storage/landing/libs/feather-icons/feather.min.js') }}"></script>
<!-- SLIDER -->
<script src="{{ asset('storage/landing/libs/tiny-slider/min/tiny-slider.js') }}"></script>
<!-- Lightbox -->
<script src="{{ asset('storage/landing/libs/tobii/js/tobii.min.js') }}"></script>
<!-- Main Js -->
<script src="{{ asset('storage/landing/js/plugins.init.js') }}"></script>
<script src="{{ asset('storage/landing/js/app.js') }}"></script>
</body>
</html>
