@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/productManagement.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/products.css') }}">
@stop

@section("title")
Check stock
@stop

@section("content")

{{-- Menu options management --}}
@include("inc/admin/headerProductManagement")

{{-- Show products --}}

	<form action="" method='POST'>
		{{ csrf_field() }}
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="list-group-item"><span class="fas fa-utensil-spoon" aria-hidden="true"></span></span>
				</div>
				<input type='text' name='stock' id='stock' class="form-control" value="">
			</div>
		</div>
	</form>
	<div id="resultSearch">
		
	</div>

@stop

@section("js")
<script src="{{ url('js/admin/stock.js') }}"></script>
@stop