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
<div class="row">
	<div class="col-sm-4">
		@foreach ($images as $image)
			@if ($image->name=="front")
			<a href="#" data-toggle="modal" data-target="#imgProductModal" ><img class="imgProduct" id="imgProduct" src="{{ url($image->path) }}" alt="Product" title="Product" onclick="imgBigProduct(this.src, this.alt, this.title)" /></a>
			@endif
			<div class="smallPictures">
		    <div class="col-3 float-left"><a href="#imgProduct"><img class="imgSmall" src="{{ url($image->path) }}" alt="Product" title="Product" onclick="changePic(this.src, this.alt, this.title)"></a></div>
		    </div>
		@endforeach
	</div>
	<div class="col-sm-8">
		<h2>{{$product->name}}</h2>
		<p class="description"><strong>Description: </strong>{{$product->description}}</p>
		<p><strong>Prize: </strong>{{$product->basePrice}}€</p>
		<p>
			<strong>Size: </strong>
			<select id="size" onChange="loadAmount(this, event)";>
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
			<input id="amount" type="number">
			</select>
		</p>
		{{-- pasar el producto al carro de la compra --}}
		@if ($stockAvailable==true)
			<a class="btn btn-success" href="{{route('product.addToCart', array('productId' =>$product->id))}}">Add to cart</a>
		@endif

	</div>
</div>
@include("inc/modal/imgProduct")
@stop

@section("js")
<script src="{{ url('js/product-detail.js') }}"></script>
@stop
