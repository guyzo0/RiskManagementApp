<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Analyst Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{ asset('fontst/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('css/style.css')}}">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('/imagest/registration-form-2.jpg');">
			<div class="inner">
				<form method="POST" action="{{ route('register') }}">
                        @csrf
					<h3>Analyst Registration</h3>
						<div class="form-wrapper">
							<label for="">Name</label>
							<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
						</div>
					<div class="form-wrapper">
						<label for="">Email</label>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
					</div>
					<div class="form-wrapper">
							<label for="">Pseudo code</label>
							<input id="pseudo" type="text" class="form-control @error('pseudo') is-invalid @enderror" name="pseudo" value="{{ old('pseudo') }}" required autocomplete="pseudo" autofocus>
						</div>
					<div class="form-wrapper">
						<label for="">Password</label>
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
					</div>
					<div class="form-wrapper">
						<label for="">Confirm Password</label>
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
					</div>
					<button type="submit">Register Now</button><a class="txt1 text-center p-t-54 p-b-20" href="{{ route('login') }}">login-></a>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>