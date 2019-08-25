@extends('layouts.layout')
<head>
     <title>@lang('Login')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="assets/img/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/iconic/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">   
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>

@section('content')

<header id="header">
    <div class="intro">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 login-text">
                        
                        <div class="limiter">
                            <div class="container-login100">
                                <div class="wrap-login100">
                                    
                                    <form action="{{ route('login') }}" method="POST" >
                                        <span class="login100-form-title p-b-26">@lang('Welcome')</span>
                                        <span class="login100-form-title p-b-48"><i class="zmdi zmdi-font"></i></span>
                                        {{ csrf_field() }}
                                <div class="wrap-input100 validate-input">
                                <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <span class="focus-input100" data-placeholder="Email"></span>
                                </div>

                                <div class="wrap-input100 validate-input">
                                <span class="btn-show-pass">
                                <i class="zmdi zmdi-eye"></i></span>
                                
                                <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span class="focus-input100" data-placeholder="Password"></span>
                            </div>

                            <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                            </div>
                        </div>




                                    </form>


                                </div>
                                
                            </div>
                        </div>


                    </div>
                    
                </div>
            </div>
            
        </div>
        
    </div>

<script src="assets/js/main.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</header>

@include('layouts.footer')

@endsection