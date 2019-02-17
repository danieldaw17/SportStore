@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/productManagement.css') }}">
@stop

@section("title")
Make order
@stop

@section("content")

{{-- Menu options management --}}
@include("inc/admin/headerProductManagement")

{{-- Make order --}}
	<form action="{{url('makeOrder/')}}" method="post">
		@csrf
		{{ method_field('PUT') }}
		<input type='text' name='amount' id='updateStock' class="form-control" placeholder="Introduce stock">
		<input type="submit" name="makeOrder">
	</form>
@stop