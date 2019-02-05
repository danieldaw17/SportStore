
@extends("layouts.noadmin.layout")

@section('title')
	Sports
@stop
@section('styles')
	<link type="text/css" rel="stylesheet" href="{{url('css/inputFile.css')}}">
@stop


@section('js')
<script src="{{url('js/sportForm.js')}}"></script>

@stop

@section('content')
	@if (isset($sport))

	@else
	<form action="{{url('user/'.$userId.'/sports/create')}}" method='POST' onsubmit="return validateSportForm()" enctype="multipart/form-data">
		{{ csrf_field() }}
		{{ method_field('PATCH') }}

		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="list-group-item"><span class="fas fa-utensil-spoon" aria-hidden="true"></span></span>
				</div>
				<input type='text' name='name' id='name' class="form-control" placeholder="Sport name">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="list-group-item"><span class="far fa-image" aria-hidden="true"></span></span>
				</div>
				<input id="image" name="image" type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg">
			</div>
		</div>

		<input type="submit" value="Create" class="btn btn-default waves-effect waves-light">
	</form>
	@endif
@stop
