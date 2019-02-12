<div class="textHeader">
	<h1>Brands</h1>
</div>
<div class="row probootstrap-gutter60">	
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		<a href="{{ url('user/'.Auth::user()->id.'/brands/create') }}">
			<div class="service hover_service text-center firstItem">
				<div class="imgProduct">
					<img src="{{ url('img/new.png') }}" alt="New item" title="New item">
				</div>
				<div class="contentProduct">
					<h3 class="titleProduct">Add brand</h3>
				</div>  
			</div>
		</a>
	</div>
	@foreach ($brands as $brand)
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		<div class="service hover_service text-center">
			<div class="contentProduct">
				<h3 class="titleProduct">{{$brand->name}}</h3>
				<div class="optionsED">
					<a href="{{ url('user/'.Auth::user()->id.'/brands/'.$brand->id.'/edit') }}"><button type="button" class="btn btn-success">Edit</button></a>
					<a href="#deleteBrand" data-toggle="modal"><button type="button" class="btn btn-danger">Delete</button></a>
				</div>
			</div>  
		</div>
	</div>
	@endforeach
</div>
@include("inc/admin/modal/confirmDeleteBrand")