@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/productManagement.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/products.css') }}">
@stop

@section("title")
Products
@stop

@section("content")

{{-- Menu options management --}}
@include("inc/admin/headerProductManagement")

{{-- Searcher advanced --}}
@include("inc/admin/searcher")

{{-- Show products --}}
@include("inc/admin/showProducts")

@stop