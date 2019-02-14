@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/product-detail.css') }}">
@stop

@section("title")
{{-- Pasar titulo del producto --}}
{{$product->name}}
@stop

@section("content")
<script>

	loadAmount(null);
</script>
<form action="{{ route('cart.store') }}" method ="POST">
	@csrf
<div class="row">
	<div class="col-sm-4">
		<input type="hidden" name="id" value="{{$product->id}}">
		@foreach ($images as $image)
			@if ($image->name=="front")
			<a name="image" href="#" data-toggle="modal" data-target="#imgProductModal" ><img class="imgProduct" id="imgProduct" src="{{ url($image->path) }}" alt="Product" title="Product" onclick="imgBigProduct(this.src, this.alt, this.title)" /></a>
			@endif
			<div class="smallPictures">
		    <div class="col-3 float-left"><a href="#imgProduct"><img class="imgSmall" src="{{ url($image->path) }}" alt="Product" title="Product" onclick="changePic(this.src, this.alt, this.title)"></a></div>
		    </div>
		@endforeach
	</div>
	<div class="col-sm-8">
		<p><input type="hidden" name="name" value="{{$product->name}}"><strong>{{$product->name}}</strong></p>
		<p  name="description" class="description"><strong>Description: </strong>{{$product->description}}</p>
		<p><input type="hidden" name="price" value="{{$product->basePrice}}"><strong>{{$product->asEuros()}}</strong></p>
		<p>
			<strong>Size: </strong>
			<select name="size" id="size" onChange="loadAmount(this, event)";>
				<option>Select a size</option>
				@php
					$stockAvailable=true;
				@endphp
				@if (count($stocks) < 1)
					@php
						$stockAvailable=false;
					@endphp
				@else
					@foreach ($stocks as $stock)
						<option amount="{{$stock->amount}}">{{$stock->size}}</option>
					@endforeach
				@endif
			</select>
			<span>
				@if ($stockAvailable==false)
					There is not any stock available. I am sorry
				@endif
			</span>
		</p>
		<p>
			<strong>Quantity: </strong>
			<input name="qty" id="amount" type="number">
			</select>
		</p>
		{{-- pasar el producto al carro de la compra --}}
		@if ($stockAvailable==true)

		<button type="submit" class="button button-success">Add to cart</button>


		@endif

	</div>
</div>
</form>
@include("inc/modal/imgProduct")
@stop

@section("js")
<script src="{{ url('js/product-detail.js') }}"></script>
@stop
