@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/product-detail.css') }}">
@stop

@section("title")
{{-- Pasar titulo del producto --}}
{{$product->name}}
@stop

@section("content")
<div class="row">
	<div class="col-sm-4">
		@foreach ($images as $image)
			@if ($image->name=="front")
			<a href="#" data-toggle="modal" data-target="#imgProductModal" ><img class="imgProduct" id="imgProduct" src="{{ url($image->path) }}" alt="Product" title="Product" onclick="imgBigProduct(this.src, this.alt, this.title)" /></a>
			@endif
			<div class="smallPictures">
		    <div class="col-3 float-left"><a href="#imgProduct"><img class="imgSmall" src="{{ url($image->path) }}" alt="Product" title="Product" onclick="changePic(this.src, this.alt, this.title)"></a></div>
		@endforeach
		</div>
	</div>
	<div class="col-sm-8">
		<h2>{{$product->name}}</h2>
		{{--<p class="description"><strong>Description: </strong>{{$product->description</p>--}}
		<p><strong>Prize: </strong>{{$product->basePrice}}</p>
		<p>
			<strong>Size: </strong>
			<select>
				@php
					$stockAvailable="yes";
				@endphp
				@if (count($stocks) < 1)
					@php
						$stockAvailable="no";
					@endph
				@else
					@foreach ($stocks as $stock)
						<option>{{$stock->size}}</option>
					@endforeach
				@endif
			</select>
			<span>
				@if ($stockAvailable=="no")
					There is not any stock available. I am sorry
				@endif
			</span>
		</p>
		<p>
			<strong>Quantity: </strong>
			<select>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
			</select>
		</p>
		{{-- pasar el producto al carro de la compra --}}
		<a class="btn btn-success" href="{{route('product.addToCart', array('productId' =>$product->id))}}">Add to cart</a>
	</div>
</div>
@include("inc/modal/imgProduct")
@stop

@section("js")
<script src="{{ url('js/product-detail.js') }}"></script>
@stop
