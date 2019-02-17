@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" href="{{ url('css/carousel.css') }}">
@stop

@section("title")
Index
@stop

@section("content")
	@include("inc/carousel")
	@include("inc/searcher")
	@include("inc/relevants")


	@if (session()->has('loginRequire'))
		<h1>loginRequire</h1>
	@else
		<h1>NO loginRequire</h1>
	@endif
@stop

@section("js")
	<script src="{{ url('js/loginRequire.js') }}"></script>

	@if (session()->has('loginRequire'))
		@if (!Auth::check())
			<script>$('#loginModal').modal('show');</script>
		@else 
			<script>
    			window.location = "{{ url('checkout') }}";//here double curly bracket
			</script>
		@endif
	@endif	
	
@stop
