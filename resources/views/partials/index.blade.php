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
@stop
