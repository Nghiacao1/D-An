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
        <section style="background-image:url({{asset('/img/signup.jpg')}})" class="vh-9">
            <div class="container-fluid h-custom" style="height: 600px">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div style="margin-left: 250px; margin-top:80px" class="col-sm "> 
                </div>
                <div style="color: white" class="col-sm-1 col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                      <p class="lead fw-normal mb-0 me-3">Wellcome To My Shop</p>
                      
                    </div>
          
                    <div class="divider d-flex align-items-center my-4">
        
                    </div>
          
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
                        <div class="row mb-3">
                            <label for="fullname" class="col-md-3 col-form-label text-md-end">{{ __('Fullname') }}</label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>

                                @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-3 col-form-label text-md-end">{{ __('User Name') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-3 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-3 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-6 offset-md-7">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>    
            </form>
                </div>
              </div>
            </div>
            <div style="margin-top: 150px"
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


    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>

