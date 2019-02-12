
@extends("layouts.noadmin.layout")

@section('title')
	Brands
@stop

@section('content')
	@if (isset($brand))
		<h1>Edit brand</h1>
		<form action="{{url('user/'.$userId.'/brands/'.$brand->id.'/edit')}}" method='POST' onsubmit="return validateBrandForm()" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}

			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="list-group-item"><span class="fas fa-utensil-spoon" aria-hidden="true"></span></span>
					</div>
					<input type='text' name='name' id='name' class="form-control" value="{{$brand->name}}">
				</div>
			</div>
			<span id="errors">
				@if (!empty($errors) && count($errors)>0)
			        <ul>
			            @foreach ($errors as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
				@endif
			</span>

			<input type="submit" value="Modify" class="btn btn-default waves-effect waves-light">
		</form>

	@else
		<h1>New brand</h1>
		<form action="{{url('user/'.$userId.'/brands/create')}}" method='POST' onsubmit="return validateBrandForm()" enctype="multipart/form-data">
			{{ csrf_field() }}

			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="list-group-item"><span class="fab fa-bandcamp" aria-hidden="true"></span></span>
					</div>
					<input type='text' name='name' id='name' class="form-control" placeholder="Brand name">
				</div>
			</div>
			<span id="errors">
				@if (!empty($errors) && count($errors)>0)
			        <ul>
			            @foreach ($errors as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
				@endif
			</span>
				<input type="submit" value="Create" class="btn btn-default waves-effect waves-light">
		</form>
	@endif
@stop

@section('js')
	<script src="{{ url('js/brandForm.js') }}"></script>
@stop
