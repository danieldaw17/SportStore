@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/subcategories.css') }}">
@stop

@section("title")
Subcategories
@stop

@section("content")
	<div class="textHeader">
		<h1> {{$categories[$categoryId]->name}}</h1>
	</div>
	<div class="row probootstrap-gutter60">
		@if (isset($sub_categories))
			@foreach ($sub_categories as $sub_category)
			@php
				$sub_category->id = ($sub_category->id)-1
			@endphp
			<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
				<a href="{{ url('category/subcategorie/products') }}">
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
			@endforeach
		@else
			parguela
		@endif
	</div>
@stop