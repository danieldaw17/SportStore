@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/product-detail.css') }}">
@stop

@section("title")
Detalles del pedido
@stop

@section("content")
<h1>Order number #{{$invoice->id}}</h1>
<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Product</th>
				<th>Unit price</th>
				<th>Quantity</th>
				<th>Total</th>
			</tr>
		</thead>

		{{--@foreach ($invoices as $invoice)
			
			<tr>
				@foreach ($product as $product)
					<td>{{$product->name}}</td>
					<td>{{$product->basePrice}}€</td>
				@endforeach
				<td>{{$invoice->amount}}</td>
				
			</tr>
			
		@endforeach--}}

		@foreach ($products as $product)
				<tr>
			@foreach ($invoice_lines as $invoice_line)
				@if ($product->id==$invoice_line->productId)
					<td>{{$product->name}}</td>
					<td>{{$product->basePrice}}€</td>
					<td>{{$invoice_line->amount}}</td>
					<td>
						@php
							echo $total = $product->basePrice * $invoice_line->amount . "€";
						@endphp
					</td>
				@endif
			@endforeach
				</tr>
		@endforeach

	</table>
</div>

@stop
