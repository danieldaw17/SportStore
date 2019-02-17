@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/productManagement.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/products.css') }}">
@stop

@section("title")
Products deactivated
@stop

@section("content")

{{-- Menu options management --}}
@include("inc/admin/headerProductManagement")

{{-- Show products --}}

	@if(isset($products))
		<div class="row probootstrap-gutter60 alignSpace">
		@if(isset($message))
			<div class="alert alert-success activated" role="alert">
				{{$message}}
			</div>
		@endif
		@foreach($products as $product)
			@foreach ($images as $image)
				@if ($image->productId==$product->id && $image->name=="front")
					@php
						$auxImage = $image;
						break;
					@endphp
				@endif
			@endforeach
			<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
					<div class="service hover_service text-center">
						<div class="imgProduct">
							@if (isset($image))
								<img src="{{ url($auxImage->path) }}" alt="{{ $product->name }}" title="{{ $product->name }}">
							@else
								<img src="{{ url('img/login.png') }}" alt="{{ $product->name }}" title="{{ $product->name }}">
							@endif
						</div>
						<div class="contentProduct">
							<h5 class="titleProduct">{{ $product->name }}</h5>
							<div class="optionsED">
								<a href="{{ url('user/'.Auth::user()->id.'/product/'.$product->id.'/activate') }}"><button type="button" class="btn btn-success">Activate</button></a>
							</div>
						</div>
					</div>
				</a>
			</div>
		@endforeach
		</div>
	@endif

@stop
