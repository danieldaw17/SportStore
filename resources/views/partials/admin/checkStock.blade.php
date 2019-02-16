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
	<input type='text' name='search' id='search' class="form-control" placeholder="Introduce stock">
	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Product</th>
					<th>Size</th>
					<th>Amount</th>
					<th>Change</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
@stop

@section("js")
<script src="{{ url('js/admin/stock.js') }}"></script>
@stop