@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
@stop

@section("title")
Home
@stop

@section("content")
	@include("inc/carousel")
	@include("inc/searcher")
	@include("inc/relevants")
@stop

@section("js")

@stop