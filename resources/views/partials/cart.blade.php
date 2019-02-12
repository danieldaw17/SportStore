@extends("layouts.noadmin.layout")

@section("styles")

@stop

@section("title")
My cart
@stop

@section("content")
@if(Session()->has('cart'))
<div class="datos">

	<table>
	    <tr>
	        <th>#</th>
	        <th>Product</th>{{-- short description sql --}}
	        <th>Image</th>
	        <th>Size</th>
	        <th>Price</th>{{-- price unitary --}}
	        <th>Quantity</th>
	        <th>Total</th>{{-- quantity * price --}}
	    </tr>
	    <tr>
	    	@foreach($products as $product)
	    	<td>1</td>
	    	<td>{{$product['name']}}</td>
	    	<td><img src="{{ url('img/product.png') }}" alt="Product image" title="title product" class="imgCart"></td> {{-- title sql title product --}}
	    	<td>
	    		<select>
	    			<option>XXL</option>
	    			<option>XL</option>
	    			<option>L</option>
	    			<option>M</option>
	    			<option>S</option>
	    			<option>XS</option>
	    		</select>
	    	</td>
	    	<td>
	    		<span id="unitPrice">{{$product['basePrice']}}</span>
	    	</td>
	    	<td>
	    		<div class="quantityButton"><strong><a href="#" onclick="add(), total()">+</a></strong></div>
	    		<span id="quantity">{{$product['qty']}}</span>
	    		<div class="quantityButton"><strong><a href="#" onclick="rest(),total()">-</a></strong></div>

	    	</td>
	    	<td>
	    		<span id="total">{{$totalprice}}</span>
	    	</td>
	    </tr>
	</table>
</div>
@else 

@endif
@stop