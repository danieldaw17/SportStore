<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>@yield("title") | SportStore</title>
		{{-- css --}}
		<link rel="stylesheet" href="{{ asset('css/main.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
		@yield("styles")
	</head>
	<body>
		{{-- Include header --}}
		@include("inc/header")

		<div class="container">
			<div class="section">
				@yield("content")
			</div>
		</div>

		{{-- Include footer --}}
		@include("inc/footer")

		{{-- js --}}
		<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ asset('js/popper.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		@yield("js")
	</body>
</html>