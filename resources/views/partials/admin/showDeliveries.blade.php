@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/admin/productManagement.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/products.css') }}">
@stop

@section("title")
Deliveries
@stop

@section("content")

{{-- Menu options management --}}
@include("inc/admin/headerProductManagement")


{{-- Show deliveries --}}
<a href="{{url('user/'.Auth::user()->id.'/deliveries/create')}}"><button type="button" class="btn btn-success newDelivery"><div class="deliveryText"><i class="fas fa-plus" id="newDelivery"></i>New delivery</div></button></a>
<div class="table-responsive">
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Company</th>
				<th>Price</th>
				<th>Service</th>
				<th id="optionsDelivery">Edit</th>
				<th id="optionsDelivery">Delete</th>				
			</tr>
		</thead>
		<tbody>
			@foreach ($deliveries as $delivery)
				<tr>
					<td>{{$delivery->name}}</td>
					<td>{{$delivery->price}}€</td>
					<td>{{$delivery->hoursMax}}h</td>
					<td class="text-center"><a href="{{url('user/'.Auth::user()->id.'/deliveries/' .$delivery->id. '/edit')}}"><i class="fas fa-pencil-alt"></i></a></td>
					<td class="text-center"><a href="{{url('user/'.Auth::user()->id.'/deliveries/' .$delivery->id. '/delete')}}"><i class="far fa-trash-alt"></i></a></td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>


@stop