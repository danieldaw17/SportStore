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

	    	@foreach( Cart::content() as $item)
	    	<td>1</td>
	    	
	    	<td>{{$item->model->name}}</td> 
	    	<td>
	    		
	    	</td>
	    	<td>
	    		<span id="unitPrice">{{$item->options->size}}</span>
	    	</td>
	    	<td>
	    		<span class="well">{{$item->model->basePrice}}€</span>

	    	</td>
	    	<td>
	    		<div class="quantityButton"><strong><a href="#" onclick="add(), total()">+</a></strong></div>
	    		<span id="quantity">{{$item->qty}}</span>
	    		<div class="quantityButton"><strong><a href="#" onclick="rest(),total()">-</a></strong></div>
	    		<form action="{{route('cart.destroy',$item->rowId)}}" method="POST">
	    			@csrf
	    			{{ method_field('DELETE')}}

				<button type="submit" class="btn btn-danger">remove</button></a>
					</form>

	    	</td>
	    	
		<tr>
	    @endforeach
	    <tr>
	    	<th>Subtotal:</th>
			<td>
	    		<span id="total">{{Cart::subtotal()}}€</span>
	    	</td>
		</tr>
		<tr>
	    	<th>Tax:</th>
			<td>
	    		<span id="total">{{Cart::tax()}}€</span>
	    	</td>
		</tr>
		<tr>
	    	<th>Total:</th>
			<td>
	    		<span id="total">{{Cart::total()}}€</span>
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
	<a class="btn btn-success" href="{{url('/')}}" role="button">Continue Shopping</a>
@endif

@stop
