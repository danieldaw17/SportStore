@extends("layouts.noadmin.layout")

@section("styles")

@stop

@section("title")
results
@stop

@section("content")

	<div class="container">
		<div class="row probootstrap-gutter60 alignSpace">
		    @if(isset($details))
			    @foreach ($details as $product)
					@foreach ($images as $image)
						@if ($image->productId==$product->id && $image->name=="front")
							@php
								break;
							@endphp
						@endif
					@endforeach
					<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
						<a href="{{ url('product/'.$product->id) }}">
							<div class="service hover_service text-center">
								<div class="imgProduct">
									<img src="{{ url($image->path) }}" alt="{{$product->name}}" title="{{$product->name}}">
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
				{{$details->render()}}
		    @endif
	    </div>
	</div>

@stop
