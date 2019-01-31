@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" href="{{ url('css/carousel.css') }}">
<link rel="stylesheet" href="{{ url('css/searcher.css') }}">
@stop

@section("title")
Home
@stop

@section("content")
	@include("inc/carousel")
	@include("inc/searcher")
	@include("inc/relevants")
@stop