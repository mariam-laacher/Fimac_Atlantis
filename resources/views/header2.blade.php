<!doctype html>
<html lang="en">


<!-- Mirrored from unicoderbd.com/template/uniland/fullwidth/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Dec 2024 20:45:51 GMT -->
<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Uniland - Real Estate HTML5 Template">
    <meta name="google-site-verification" content="oKUogvjmGsNKW_KL4M4i6PHvFlGUsmsUEO0Ho17Yp1A" />      
    <meta name="author" content="unicoder">
    <title>@yield('title', 'Fimac Atlentis')</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logo/fimaclogo3-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logo/fimaclogo3-16x16.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/fimaclogo3.ico') }}">
    
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&amp;display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,700;1,400&amp;display=swap" rel="stylesheet">

    <!-- Required style of the theme -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/webfonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/layerslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/template.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/colors/color.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/loader.css') }}">
</head>

<body>

    <div class="preloader">
        <div class="loader xy-center"></div>
    </div>

    <div id="page_wrapper" class="bg-light">
        <!--============== Header Section Start ==============-->
        <header class="header-style nav-on-top bg-white">
            <div class="main-nav xs-p-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <nav class="navbar navbar-expand-lg nav-secondary nav-primary-hover nav-line-active">
                                <a class="navbar-brand" href="{{route('home')}}"><img class="nav-logo" src="{{ asset('assets/images/logo/fimaclogo3.png') }}" alt="Image not found !"></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
                                  </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav ms-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('home')}}">Acceuil</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#"> Nos Projet</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown"> <a class="dropdown-toggle dropdown-item" href="#">Projet Haut Standing</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Residence Riyad</a></li>
                                                        <li><a class="dropdown-item" href="#">Residence Medinova </a></li>
                                                    </ul>
                                                </li>

                                                <li class="dropdown"> <a class="dropdown-toggle dropdown-item" href="property-grid-v1.html">Villa</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="property-grid-v1.html">Villa A</a></li>
                                                        <li><a class="dropdown-item" href="property-grid-v2.html">Villa B </a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="{{route('localisation')}}">Nos localisation</a>
                                        </li>
                                        <li class="nav-item dropdown mega-dropdown">
                                            <a class="nav-link dropdown-toggle"href="{{route('aboutus')}}">A propos de nous </a>
                                            
                                        </li>
                                    </ul>
                                    <a href="{{ route('contactus') }}" class="btn btn-primary add-listing-btn">Contactez-nous</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')