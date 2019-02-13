<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>@yield("title") | SportStore</title>
		{{-- css --}}
		<link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('css/style.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('css/styles.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('css/login.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('css/shopping-cart.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('css/admin/header.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('css/admin/searcher.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('css/products.css') }}">
		<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
		@yield("styles")
	</head>
	<body>
		<div class="container">
			{{-- Include header --}}

			@if (Auth::check() && Auth::user()->role=="root")
				@include("inc/admin/header")
			@else
				@include("inc/header")
			@endif
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
		<script src="{{ url('js/cart.js') }}"></script>
		@yield("js")
	</body>
</html>
