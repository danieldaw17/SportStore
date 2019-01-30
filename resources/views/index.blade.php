@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" href="{{ url('css/carousel.css') }}">
<link rel="stylesheet" href="{{ url('css/searcher.css') }}">
<link rel="stylesheet" href="{{ url('css/login.css') }}">
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
<script src="{{ url('js/login.js') }}"></script>
@stop