<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Neutrino</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{ asset('css/formStyle.css') }}">
</head>
<body>
	<!-- @yield('nav') -->
	@include('layouts.nav')
	<!-- @yield('headerImage') -->
	@include('layouts.headerImage')
	<div class="content">
		<div class="container">
			@yield('content')
		</div>
	</div>

	<footer>
		<div class="textfoo">
		<p>Roman Ivanovich</p>
		</div>
	</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('js/animateAnchor.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
</body>

</html>