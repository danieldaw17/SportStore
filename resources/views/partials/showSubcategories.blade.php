@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/subcategories.css') }}">
@stop

@section("title")
Subcategories
@stop

@section("content")
	<div class="textHeader">
		<h1> {{$categoryName}}</h1>
	</div>
	<div class="row probootstrap-gutter60">
		@if (isset($sub_categories))
			@foreach ($sub_categories as $sub_category)
			<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
				<a href="{{ url('category/subcategorie/products') }}">
					<div class="service hover_service text-center">
						<div class="imgProduct">
							{{-- Pasar datos de la imagen --}}
							{{--<img src="{{ url($sub_category->imagePath) }}" alt="" title="">--}}
						</div>
						<div class="text">
							<h3>Subcategorie title</h3>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		@endif
	</div>
@stop
