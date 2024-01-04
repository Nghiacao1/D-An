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

                <nav class="navbar-2 navbar-expand-md navbar-light bg-light shadow-sm">
                    <div class="container">
                        <a  class="navbar-brand" href="{{ url('/') }}"><h2 style="margin-top: 45px; margin-left:-100px;margin-right:50px">Neolock</h2>
                        </a>
                        <a href="{{ url('/') }}" class="navbar-brand" style="margin-top: 50px; margin-left:-10px" ><h5>Trang chủ</h5></a>
                        <a href="{{ url('/product') }}" class="navbar-brand" style="margin-top: 50px; margin-left:-10px" ><h5>Sản phẩm</h5></a>
                        <a href="{{ url('/blog') }}" class="navbar-brand" style="margin-top: 50px; margin-left:-10px" ><h5>Blog</h5></a>
                        <a href="{{ url('/contact') }}" class="navbar-brand" style="margin-top: 50px; margin-left:-10px" ><h5>Liên hệ</h5></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">
                                <ul class="nav navbar-top-links navbar-right">
                                
                            </ul>
                            
                            <!-- Right Side Of Navbar -->

                            <div style="margin-top: 50px" class="d-flex flex-row-reverse">
                                <ul class="navbar-nav ms-auto"  >
                                    <!-- Authentication Links -->
                                    @guest('customer')
                                        @if (Route::has('customer-login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('customer-login') }}"><h5>{{ __('Login') }}</h5></a>
                                            </li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}"><h5>{{ __('Register') }}</h5></a>
                                            </li>
                                        @endif
                                    @else                     
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{$cus->fullname}}
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
                    </div>
                </nav>
                <!-- /. NAV SIDE  -->
                    <main class="py-4">
                        @yield('content')
                    </main>
                </div>
        
        </div>
    @stack('scripts')
</body>
</html>
@extends('footer')