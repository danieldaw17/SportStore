
@extends("layouts.noadmin.layout")

@section('title')
	Deliveries
@stop


@section('js')
<script src="{{url('js/deliveryForm.js')}}"></script>

@stop

@section('content')
	@if (isset($delivery))
		<form action="{{url('user/'.$userId.'/deliveries/'.$delivery->id.'/edit')}}" method='POST' onsubmit="return validateDeliveryForm()">
			{{ csrf_field() }}
			{{ method_field('PUT') }}

			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="list-group-item"><span class="fas fa-truck" aria-hidden="true"></span></span>
					</div>
					<input type='text' name='name' id='name' class="form-control" value="{{$delivery->name}}">
				</div>
			</div>

			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="list-group-item"><span class="fas fa-clock" aria-hidden="true"></span></span>
					</div>
					<input type='number' step="0.01" name='hoursMax' id='hoursMax' class="form-control" value="{{$delivery->hoursMax}}">
				</div>
			</div>

			<div class="form-group">
				<div class="input-group">
					<div class="input-group-prepend">
						<span class="list-group-item"><span class="fas fa-euro-sign" aria-hidden="true"></span></span>
					</div>
					<input type='number' step="0.01" name='price' id='price' class="form-control" value="{{$delivery->price}}">
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
	<form action="{{url('user/'.$userId.'/deliveries/create')}}" method='POST' onsubmit="return validateDeliveryForm()">
		{{ csrf_field() }}

		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="list-group-item"><span class="fas fa-truck" aria-hidden="true"></span></span>
				</div>
				<input type='text' name='name' id='name' class="form-control" placeholder="Delivery name">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="list-group-item"><span class="fas fa-clock" aria-hidden="true"></span></span>
				</div>
				<input type='number' step="0.01" name='hoursMax' id='hoursMax' class="form-control" placeholder="Hours max">
			</div>
		</div>

		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="list-group-item"><span class="fas fa-euro-sign" aria-hidden="true"></span></span>
				</div>
				<input type='number' step="0.01" name='price' id='price' class="form-control" placeholder="price">
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
