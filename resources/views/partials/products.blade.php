@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/products.css') }}">
@stop

@section("title")
{{-- Pasar nombre de la subcategoria --}} Clothes
@stop

@section("content")
<div class="textHeader">
	<h1>{{-- titulo de la subcategoria principal --}} Title of subcategorie</h1>
</div>
<div class="row probootstrap-gutter60">	
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		{{-- Pasar id del producto --}}
		<a href="4/product/2">
			<div class="service hover_service text-center">
				<div class="imgProduct">
					{{-- pasar datos de la imagen --}}
					<img src="{{ url('img/login.png') }}" alt="" title="">
				</div>
				<div class="contentProduct">
					<h3 class="titleProduct">Title product</h3>
					<p class="descriptionProduct">short description short description short description  short description  short description </p>
					<p class="prizeProduct">10.00€</p>
				</div>  
			</div>
		</a>
	</div>
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		{{-- Pasar id del producto --}}
		<a href="{{ url('category/subcategorie/product') }}">
			<div class="service hover_service text-center">
				<div class="imgProduct">
					{{-- pasar datos de la imagen --}}
					<img src="{{ url('img/login.png') }}" alt="" title="">
				</div>
				<div class="contentProduct">
					<h3 class="titleProduct">Title product</h3>
					<p class="descriptionProduct">short description short description short description  short description  short description </p>
					<p class="prizeProduct">10.00€</p>
				</div>  
			</div>
		</a>
	</div>
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		{{-- Pasar id del producto --}}
		<a href="{{ url('category/subcategorie/product') }}">
			<div class="service hover_service text-center">
				<div class="imgProduct">
					{{-- pasar datos de la imagen --}}
					<img src="{{ url('img/login.png') }}" alt="" title="">
				</div>
				<div class="contentProduct">
					<h3 class="titleProduct">Title product</h3>
					<p class="descriptionProduct">short description short description short description  short description  short description </p>
					<p class="prizeProduct">10.00€</p>
				</div>  
			</div>
		</a>
	</div>
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		{{-- Pasar id del producto --}}
		<a href="{{ url('category/subcategorie/product') }}">
			<div class="service hover_service text-center">
				<div class="imgProduct">
					{{-- pasar datos de la imagen --}}
					<img src="{{ url('img/login.png') }}" alt="" title="">
				</div>
				<div class="contentProduct">
					<h3 class="titleProduct">Title product</h3>
					<p class="descriptionProduct">short description short description short description  short description  short description </p>
					<p class="prizeProduct">10.00€</p>
				</div>  
			</div>
		</a>
	</div>
</div>
@stop