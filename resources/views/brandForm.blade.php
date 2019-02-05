
@extends("layouts.noadmin.layout")

@section('title')
	Brands
@stop

@section('js')
<script src="{{url('js/brandForm.js')}}"></script>
@stop

@section('content')
	@if (isset($brand))
	<form action('BrandsController@update') method='post' onsubmit="return validateBrandForm()">
		{{ csrf_field() }}
		{{-- method_field('PUT') --}}

		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="list-group-item"><span class="fas fa-utensil-spoon" aria-hidden="true"></span></span>
				</div>
				<input type='text' name='name' id='name' class="form-control" value="{{$brand->name}}">
			</div>
		</div>
	</form>

	@else
	<form action('BrandsController@store') method='post' onsubmit="return validateBrandForm()">
		{{ csrf_field() }}
		{{-- method_field('PUT') --}}

		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="list-group-item"><span class="fas fa-utensil-spoon" aria-hidden="true"></span></span>
				</div>
				<input type='text' name='name' id='name' class="form-control" placeholder="Sport name">
			</div>
		</div>
	</form>
	@endif
@stop
