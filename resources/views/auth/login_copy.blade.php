@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title></title>
	<link rel="shortcut icon" type="image/x-icon" href="img/smkn4.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="css/feathericon.min.css">
	<link rel="stylesheet" href="plugins/morris/morris.css">
	<link rel="stylesheet" href="css/style.css"> </head>

<body>
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid" src="img/smkn4.png" alt="Logo"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1>{{ __('Login') }}</h1>
							<p class="account-subtitle">Access to our dashboard</p>
							<form method="POST" action="{{ route('login') }}">
                                @csrf
								<div class="form-group">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email"> </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								<div class="form-group">
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password"> </div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
								<div class="form-group">
									<button class="btn btn-primary btn-block" type="submit">Login</button>
								</div>
							</form>
							<div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a> </div>
							<div class="login-or"> <span class="or-line"></span> <span class="span-or">or</span> </div>
							<div class="text-center dont-have">Belum Punya Akun? <a href="{{ route('register') }}">Register</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="js/script.js"></script>
</body>

</html>
@endsection
