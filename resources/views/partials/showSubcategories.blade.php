@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/subcategories.css') }}">
@stop

@section("title")
{{$categoryName}}
@stop

@section("content")
	<div class="textHeader">
		<h1> {{$categoryName}}</h1>
	</div>
	<div class="row probootstrap-gutter60">
		@if (isset($sub_categories))
			@foreach ($sub_categories as $sub_category)
			<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
				<a href="{{ url('sub_categories/'.$sub_category->id) }}">
					<div class="service hover_service text-center">
						<div class="imgProduct">
							<img src="{{$sub_category->imagePath}}" alt="{{$sub_category->name}}" title="{{$sub_category->name}}">
						</div>
						<div class="text">
							<h3>{{$sub_category->name}}</h3>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		@endif
	</div>
@stop
