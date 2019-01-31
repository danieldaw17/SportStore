<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>@yield("title") | SportStore</title>
		{{-- css --}}
		<link rel="stylesheet" href="{{ url('css/main.css') }}">
		<link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ url('css/style.min.css') }}">
		<link rel="stylesheet" href="{{ url('css/styles.css') }}">
		<link rel="stylesheet" href="{{ url('css/login.css') }}">
		<link rel="stylesheet" href="{{ url('css/shopping-cart.css') }}">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
		@yield("styles")
	</head>
	<body>
		<div class="container">
			{{-- Include header --}}
			@include("inc/header")

			<div class="section">
				@yield("content")
			</div>

			{{-- Include footer --}}
			@include("inc/footer")
		</div>
		{{-- js --}}
		<script src="{{ url('js/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ url('js/popper.js') }}"></script>
		<script src="{{ url('js/bootstrap.min.js') }}"></script>
		<script src="{{ url('js/login.js') }}"></script>
		@yield("js")
	</body>
</html>