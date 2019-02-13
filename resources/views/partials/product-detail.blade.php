@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/product-detail.css') }}">
@stop

@section("title")
{{-- Pasar titulo del producto --}}
Producto
@stop

@section("content")
<div class="row">
	<div class="col-sm-4">
		<a href="#" data-toggle="modal" data-target="#imgProductModal" ><img class="imgProduct" id="imgProduct" src="{{ url('img/product.png') }}" alt="Product" title="Product" onclick="imgBigProduct(this.src, this.alt, this.title)" /></a>
        <div class="smallPictures">
                <div class="col-3 float-left"><a href="#imgProduct"><img class="imgSmall" src="{{ url('img/product.png') }}" alt="Product" title="Product" onclick="changePic(this.src, this.alt, this.title)"></a></div>
                <div class="col-3 float-left"><a href="#imgProduct"><img class="imgSmall" src="{{ url('img/product2.png') }}" alt="Product2" title="Product2" onclick="changePic(this.src, this.alt, this.title)"></a></div>
                <div class="col-3 float-left"><a href="#imgProduct"><img class="imgSmall" src="{{ url('img/product3.png') }}" alt="Product3" title="Product3" onclick="changePic(this.src, this.alt, this.title)"></a></div>
                <div class="col-3 float-left"><a href="#imgProduct"><img class="imgSmall" src="{{ url('img/product4.png') }}" alt="Product4" title="Product4" onclick="changePic(this.src, this.alt, this.title)"></a></div>
        </div>
	</div>
	<div class="col-sm-8">
		<h2>Title product</h2>
		<p class="description"><strong>Description: </strong>{{$product['description']}}</p>
		<p><strong>Prize: {{$product['price']}} </strong>10€</p>
		<p>
			<strong>Size: </strong>
			<select>
				<option>XXL</option>	
				<option>XL</option>	
				<option>L</option>	
				<option>M</option>	
				<option>S</option>	
				<option>XS</option>	
			</select>
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
		<a class="btn btn-success" href="{{route('product.addToCart',['productId' =>$product->id])}}">Add to cart</a>
	</div>
</div>
@include("inc/modal/imgProduct")
@stop

@section("js")
<script src="{{ url('js/product-detail.js') }}"></script>
@stop