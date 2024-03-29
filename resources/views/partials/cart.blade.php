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
	    		@foreach ($images as $image)
					@if ($image->productId==$item->model->id && $image->name=="front")
					<img src="{{ url($image->path) }}" alt="{{$image->name}}" class="imgCart">
					@php
					break;
					@endphp
					@endif
				@endforeach
	    	</td>
	    	<td>
	    		<span id="unitPrice">{{$item->options->size}}</span>
	    	</td>
	    	<td>
	    		<span class="well">{{$item->subtotal}}€</span>

	    	</td>
	    	<td>
	    		
	    		<select class="quantity" data-id="{{$item->rowId}}">
	    			@for($i=1 ;$i < 10 + 1; $i++)
						<option {{$item->qty == $i ? 'selected' : ''}}>{{$i}}</option>

	    			@endfor
				
					
	    		</select>
	    		
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
	<a href="{{route('checkout.index')}}" class="btn btn-success">Check-out</button></a>
	</div>
</div>
@else
	<div class="alert alert-danger">
		No items added in the cart
	</div>
	<a class="btn btn-success" href="{{url('/')}}" role="button">Continue Shopping</a>
@endif
@endsection
@section('extra-js')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>
<script>
	(function(){

	 const classname=document.querySelectorAll('.quantity')

	 Array.from(classname).forEach(function(element){

	 	element.addEventListener('change',function(){
	 		const id=element.getAttribute('data-id')
	 		axios.patch(`mycart/${id}`, {
   			 quantity: this.value
   			 
  				})
  			.then(function (response) {
    		//console.log(response);
    		window.location.href='{{ route("cart.index") }}';
  				})
  			.catch(function (error) {
   			 
   			 window.location.href='{{ route("cart.index") }}';
  				});
	 	})

	 })
	})();





</script>


@stop
