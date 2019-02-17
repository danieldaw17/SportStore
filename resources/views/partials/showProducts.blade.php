@extends("layouts.noadmin.layout")

@section("title")
{{$subCategoryName}}
@stop

@section("content")
<div class="textHeader">
	<h1>{{$subCategoryName}}</h1>
</div>

<div class="row probootstrap-gutter60">

	@foreach ($products as $product)
		@foreach ($images as $image)
			@if ($image->productId==$product->id && $image->name=="front")
				@php
					break;
				@endphp
			@endif
		@endforeach
		<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
			{{-- Pasar id del producto --}}
			<a href="{{ url('product/'.$product->id) }}">
				<div class="service hover_service text-center">
					<div class="imgProduct">
						{{-- pasar datos de la imagen --}}
						<img src="{{ url($image->path) }}" alt="" title="">
					</div>
					<div class="contentProduct">
						<h5 class="titleProduct">{{$product->name}}</h5>
						<p class="descriptionProduct">{{$product->shortDescription}}</p>
						<p class="prizeProduct">{{$product->basePrice}} €</p>
					</div>
				</div>
			</a>
		</div>
	@endforeach
</div>

@stop
