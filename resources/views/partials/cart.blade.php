@extends("layouts.noadmin.layout")

@section("styles")

@stop

@section("title")
My cart
@stop

@section("content")

{{--@if(session()->has('cart'))--}}
@if(session()->has('success_message'))
	<div class="alert alert-success">
		{{session()->get('success_message')}}
	</div>
@endif
@if(count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
@if (Cart::count()>0)
<h2>{{ Cart::count() }} item(s) in the shopping Cart</h2>
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

	    	@foreach($Cart::content() as $item)
	    	<td>1</td>
	    	
	    	<td><a href="{{route()}}<img src="{{ url('img/product.png') }}" alt="Product image" title="title product" class="imgCart"></td>
	    	<td>{{--$product['name']--}}</td> {{-- title sql title product --}}
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
	    		<span id="total">0{{--$totalprice--}}</span>
	    	</td>
		</tr>

	</table>
	<hr>
	

	<div class="container">
	<button type="button" class="btn btn-success">Check-out</button>
	</div>
</div>
@else
	<div class="alert alert-danger">
		No items in Cart
	</div>
@endif

@stop
