@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/subcategories.css') }}">
@stop

@section("title")
Subcategories
@stop

@section("content")
<div class="textHeader">
	<h1>{{-- titulo de la categoria principal --}} Clothes subcategories</h1>
</div>
<div class="row probootstrap-gutter60">	
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		{{-- Pasar id de la subcategoria --}}
		<a href="4/sub_categories/4">
			<div class="service hover_service text-center">
				<div class="imgProduct">
					{{-- Pasar datos de la imagen --}}
					<img src="{{ url('img/login.png') }}" alt="" title="">
				</div>
				<div class="text">
					<h3>Subcategorie title</h3>
				</div>  
			</div>
		</a>
	</div>
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		{{-- Pasar id de la subcategoria --}}
		<a href="categories/4/sub_categories/5">
			<div class="service hover_service text-center">
				<div class="imgProduct">
					{{-- Pasar datos de la imagen --}}
					<img src="{{ url('img/login.png') }}" alt="" title="">
				</div>
				<div class="text">
					<h3>Subcategorie title</h3>
				</div>  
			</div>
		</a>
	</div>
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		{{-- Pasar id de la subcategoria --}}
		<a href="categories/4/sub_categories/6">
			<div class="service hover_service text-center">
				<div class="imgProduct">
					{{-- Pasar datos de la imagen --}}
					<img src="{{ url('img/login.png') }}" alt="" title="">
				</div>
				<div class="text">
					<h3>Subcategorie title</h3>
				</div>  
			</div>
		</a>
	</div>
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		{{-- Pasar id de la subcategoria --}}
		<a href="categories/4/sub_categories/7">
			<div class="service hover_service text-center">
				<div class="imgProduct">
					{{-- Pasar datos de la imagen --}}
					<img src="{{ url('img/login.png') }}" alt="" title="">
				</div>
				<div class="text">
					<h3>Subcategorie title</h3>
				</div>  
			</div>
		</a>
	</div>
</div>
@stop