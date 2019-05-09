<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title> SIAKAD SMK </title>
    <link rel="stylesheet" href="{{ asset('css/css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/css/classy-nav.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/css/custom-icon.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/css/magnific-popup.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/css/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/css/style.css') }}"/>

    {{-- File Bawaan--}}
    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}"/>--}}

    <link rel="stylesheet" href="{{ asset('css/scss/_mixin.scss') }}"/>
    <link rel="stylesheet" href="{{ asset('css/scss/_responsive.scss') }}"/>
    <link rel="stylesheet" href="{{ asset('css/scss/_theme_color.scss') }}"/>
    <link rel="stylesheet" href="{{ asset('css/scss/_variables.scss') }}"/>
    <link rel="stylesheet" href="{{ asset('css/scss/style.scss') }}"/>

    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}"/>

    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}"/>

</head>
<body>
    {{-- Loading Animations--}}
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    @include('website.layout.header')

    @yield('content')

    @include('website.layout.footer')

<script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>

<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>

<script src="{{ asset('js/google-map/map-active.js') }}"></script>

<script src="{{ asset('js/plugins/plugins.js') }}"></script>

<script src="{{ asset('js/active.js') }}"></script>

{{--<script src="{{ asset('js/app.js') }}"></script>--}}

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


</body>
</html>


