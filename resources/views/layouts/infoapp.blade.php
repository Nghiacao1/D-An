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
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="wrapper">
            <div id="app">
                <nav class="navbar-2 navbar-expand-md navbar-light bg-light shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}"><img style="margin-top: 45px; margin-left:-180px;margin-right:1px" alt="Khoá cửa thông minh Neolock" src={{asset('img/ditdang-footer.png')}}>
                        <a href="{{ url('/') }}" class="navbar-brand" style="margin-top: 50px; margin-left:-10px" ><h5>Trang chủ</h5></a>
                        <a href="{{ url('/product') }}" class="navbar-brand" style="margin-top: 50px; margin-left:-10px" ><h5>Sản phẩm</h5></a>
                        <a href="{{ url('/blog') }}" class="navbar-brand" style="margin-top: 50px; margin-left:-10px" ><h5>Blog</h5></a>
                        <a href="{{ url('/contact') }}" class="navbar-brand" style="margin-top: 50px; margin-left:-10px" ><h5>Liên hệ</h5></a>
                        <a href="{{ url('/carts/view') }}" class="navbar-brand" style="margin-top: 50px; margin-left:600px"><i class="fa fa-cart-plus"></i></a>
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
                                                {{auth()->guard('customer')->user()->fullname}}
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ url('/info') }}">
                                                    {{ __('Thông tin cá nhân') }}
                                                </a>
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
                <nav class="navbar-default navbar-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul class="nav" id="main-menu">
                            <li>
                                <a href="/customers"><i class="fa fa-user-circle fa-2x" aria-hidden="true" style="margin-right: 30lix"></i>Tổng quan tài khoản</a>
                            </li>
                            <li>
                                <a href="/orders"><i class="fa fa-file-text fa-2x" style="margin-right: 35lix"></i>Thông tin cá nhân</a>
                            </li>
                            <li>
                                <a href="/mailmanager"><i class="fa fa-unlock-alt fa-2x" style="margin-right: 38lix"></i> Mật khẩu và bảo mật</a>
                            </li>
                            <li>
                                <a href="/blogs"><i class="fa fa-file-text fa-2x" style="margin-right: 35lix" ></i>Đơn hàng của bạn</a> 
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
    @stack('scripts')
</body>
</html>
@extends('footer')
