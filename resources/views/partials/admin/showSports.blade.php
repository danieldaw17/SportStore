@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/productManagement.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/products.css') }}">
@stop

@section("title")
Sports
@stop

@section("content")

{{-- Menu options management --}}
@include("inc/admin/headerProductManagement")

{{-- Searcher advanced --}}


{{-- Show sports --}}
@include("inc/admin/showSports")

@stop