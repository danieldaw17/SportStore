@extends("layouts.noadmin.layout")

@section("styles")

@stop

@section("title")
My cart
@stop

@section("content")

{{--@if(session()->has('cart'))--}}
<div class="datos">
	<table>
	    <tr>
	        <th></th>
	        <th>Product</th>{{-- short description sql --}}
	        <th>Image</th>
	        <th>Size</th>
	        <th>Price</th>{{-- price unitary --}}
	        <th>Quantity</th>

	    </tr>

	    	{{---@foreach($products as $product)--}}
	    	{{---@}}

	    	{{--
	    	@foreach($products as $product)--}}
	    	<td>1</td>
	    	<td>{{$product['name']}}</td>
	    	<td><img src="{{ url('img/product.png') }}" alt="Product image" title="title product" class="imgCart"></td> {{-- title sql title product --}}
	    	<td>
	    		<span class="well"> XL {{--$product['size']--}}</span>
	    	</td>
	    	<td>
	    		<span id="unitPrice">10 {{--$product['basePrice']--}}</span>
	    	</td>
	    	<td>
	    		<div class="quantityButton"><strong><a href="#" onclick="add(), total()">+</a></strong></div>
	    		<span id="quantity">5{{--$product['qty']--}}</span>
	    		<div class="quantityButton"><strong><a href="#" onclick="rest(),total()">-</a></strong></div>

	    	</td>
		<tr>


	    {{---@endforeach--}}
	    <tr>
	    	<th>TOTAL:</th>
			<td>
	    		<span id="total">{{$totalprice}}</span>
	    	</td>
		</tr>

	</table>
	<hr>
	<div class="container">
	<button type="button" class="btn btn-success">Check-out</button>
	</div>
</div>
{{--@else}}
	<div class="container">
		<div class="alert alert-warning">
    	<strong>Warning!</strong>No items added to the cart
  		</div>
	</div>
@endif--}}

@stop
