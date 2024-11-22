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
    <div >
        <section style="background-image:url({{asset('/img/login.jpg')}})" class="vh-9">
            <div class="container-fluid h-custom" style="height: 500px">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div style="margin-left: 250px; margin-top:80px" class="col-sm ">
                  {{-- <img width="400px" height="150px" src={{asset('/img/anya.jpg')}}
                    class="img-fluid" alt="Sample image"> --}}
                </div>
                    <div class="col-sm-1 col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <h3 style="color: white" >Chào mừng bạn đến với</h3>
                            <img  alt="" src={{asset('img/ditdang-footer.png')}}>
                        </div>
            
                        <div class="divider d-flex align-items-center my-4">
            
                        </div>
            
                        <form method="POST" action="{{ route('customer-login') }}">
                            @csrf
                            <div class="row mb-3">
                                <label style="color: white" for="email" class="col-md-3 col-form-label text-md-end">{{ __('Email') }}</label>
        
                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="Email của bạn" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <div class="row mb-3">
                                <label style="color: white" for="password" class="col-md-3 col-form-label text-md-end">{{ __('Mật Khẩu') }}</label>
        
                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="Mật khẩu của bạn" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                        <label style="color: rgb(146, 149, 155)" class="form-check-label" for="remember">
                                            {{ __('Ghi nhớ tài khoản') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
        
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-3">
                                    <button style="width: 33rem; height: 4rem" type="submit" class="btn btn-primary">
                                        {{ __('Đăng nhập') }}
                                    </button>
        
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Bạn quên mật khẩu à?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <center style="margin-top: 100px"><h4 style="color: white">Long time no see!!!</h4></center>
            </div>
            <div style="margin-top: 200px"
              class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
              <!-- Copyright -->
              <div class="text-white mb-3 mb-md-0">
                Copyright © 2020. All rights reserved.
              </div>
              <!-- Copyright -->
          
              <!-- Right -->
              <div>
                <a href="#!" class="text-white me-4">
                  <i class="fa fa-facebook fa-2x"></i>
                </a>
                <a href="#!" class="text-white me-4">
                  <i class="fa fa-twitch fa-2x"></i>
                </a>
                <a href="#!" class="text-white me-4">
                  <i class="fa fa-instagram fa-2x"></i>
                </a>
              </div>
              <!-- Right -->
            </div>
          </section>
    </div>


    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>