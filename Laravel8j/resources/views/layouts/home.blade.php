<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') </title>
    <meta name="description" content=" @yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Bukiye Barak">
    <!--favicon-->
    <link rel="icon" href="{{asset('assets')}}/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{asset('assets')}}/plugins/OwlCarousel/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('assets')}}/css/pace.min.css" rel="stylesheet" />
    <script src="{{asset('assets')}}/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{asset('assets')}}/css/app.css" rel="stylesheet">
    <link href="{{asset('assets')}}/css/icons.css" rel="stylesheet">
    <title>eTrans - eCommerce HTML Template</title>

    @yield('css')
    @yield('headerjs')
</head>

<body class="bg-theme bg-theme1">	<b class="screen-overlay"></b>
@include('home._header')
@include('home._menu')

@section('content')
içerik alanı
@show


@include('home._footer')
@yield('footerjs')
</body>
</html>
