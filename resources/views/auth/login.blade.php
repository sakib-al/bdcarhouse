<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('assets/web/assets/images/img/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{ URL::asset('assets/login')}}/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{ URL::asset('assets/login')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{ URL::asset('assets/login')}}/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/login')}}/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{ URL::asset('assets/login')}}/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{ URL::asset('assets/login')}}/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/login')}}/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="{{ URL::asset('assets/login')}}/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/login')}}/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/login')}}/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('{{ URL::asset('assets/login')}}/images/bg-01.jpg');">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('post.login') }}">
                @csrf
                <span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

                <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input placeholder="Enter email" id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email"
                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror

                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input id="password" placeholder="Password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror


                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="contact100-form-checkbox">

                    <input class="input-checkbox100" type="checkbox" name="remember" id="ckb1" {{ old('remember') ? 'checked' : '' }}>
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-90">
                    <a class="txt1" href="#">
                        Forgot Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{ URL::asset('assets/login')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('assets/login')}}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('assets/login')}}/vendor/bootstrap/js/popper.js"></script>
<script src="{{ URL::asset('assets/login')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('assets/login')}}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('assets/login')}}/vendor/daterangepicker/moment.min.js"></script>
<script src="{{ URL::asset('assets/login')}}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('assets/login')}}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="{{ URL::asset('assets/login')}}/js/main.js"></script>

</body>
</html>
