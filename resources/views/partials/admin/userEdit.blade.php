@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/profile.css') }}">
@stop

@section("title")
User management
@stop

@section("content")
@include("inc/admin/optionsFormUser")
@stop