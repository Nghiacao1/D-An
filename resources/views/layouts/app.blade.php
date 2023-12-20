<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="wrapper">
            <div id="app">
                <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
                    <div class="container">
                        <a  class="navbar-brand" href="{{ url('/home') }}"><h2> Neotech</h2>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">
                                <ul class="nav navbar-top-links navbar-right">
                                
                            </ul>
                            
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
                <nav class="navbar-default navbar-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul class="nav" id="main-menu">

                            <li>
                                <a href="/customers"><i class="fa fa-user-circle" aria-hidden="true"></i>Quản lí khách hàng</a>
                            </li>
                            <li>
                                <a href="/buildings"><i class="fa fa-home"></i>Quản lý tòa nhà</a>
                            </li>
                            <li>
                                <a href="/category"><i class="fa fa-cubes"></i>Quản lý thông tin sản phẩm</a>
                            </li>
                            <li>
                                <a href="/agencies"><i class="fa fa-map-marker"></i>Quản lý thông tin agencies</a>
                            </li>
                            <li>
                                <a href="/macs"><i class="fa fa-home"></i>Quản lý thông tin macs</a>
                            </li>
                            <li>
                                <a href="/orderdetails"><i class="fa fa-sticky-note"></i>Chi tiết hóa đơn</a>
                            </li>
                            <li>
                                <a href="/banners"><i class="fa fa-file-image-o"></i>Quản lý Banner</a>
                            </li>
                        </ul>
        
                    </div>
        
                </nav>
                <!-- /. NAV SIDE  -->
                <div id="page-wrapper">
                    <div id="page-inner">
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
        
        </div>
</body>
</html>
@extends('footer')
