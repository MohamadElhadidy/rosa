<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset('assets/imgs/template/favicon.svg')}}">
    <link href="{{ asset('/assets/css/style.css?v=1.0.0')}}" rel="stylesheet">
    <title>Rosa Store</title>
    {{-- @vite('resource/js/app.js') --}}
</head>

<body>
    <x-preloader />

    <x-header />

    <main class="main">
        {{ $slot }}
    </main>

    <x-footer />
    <x-popup-search />
    <x-popup-account />
    <x-popup-cart />
    <x-popup-wishlist />

    <script src="/assets/js/vendors/modernizr-3.6.0.min.js"></script>
    <script src="/assets/js/vendors/jquery-3.7.0.min.js"></script>
    <script src="/assets/js/vendors/jquery-migrate-3.3.0.min.js"></script>
    <script src="/assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/vendors/waypoints.js"></script>
    <script src="/assets/js/vendors/wow.js"></script>
    <script src="/assets/js/vendors/magnific-popup.js"></script>
    <script src="/assets/js/vendors/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/vendors/select2.min.js"></script>
    <script src="/assets/js/vendors/isotope.js"></script>
    <script src="/assets/js/vendors/swiper-bundle.min.js"></script>
    <script src="/assets/js/vendors/counterup.js"></script>
    <script src="/assets/js/vendors/jquery.countdown.min.js"></script>
    <script src="/assets/js/vendors/slick.js"></script>
    <script src="/assets/js/vendors/jquery.timepicker.min.js"></script>
    <script src="/assets/js/vendors/glightbox.min.js"></script>
    <script src="/assets/js/main.js?v=1.0.0"></script>
</body>

</html>
