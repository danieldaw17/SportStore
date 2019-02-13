<div class="textHeader">
	<h1>Products</h1>
</div>
<div class="row probootstrap-gutter60">
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		<a href="{{ url('user/'.Auth::user()->id.'/Categories/'.$categoryId.'/Sub_categories/'.$subCategoryId.'/Products/create') }}">
			<div class="service hover_service text-center firstItem">
				<div class="imgProduct">
					<img src="{{ url('img/new.png') }}" alt="New item" title="New item">
				</div>
				<div class="contentProduct">
					<h3 class="titleProduct">Add product</h3>
				</div>
			</div>
		</a>
	</div>

	@foreach ($products as $product)
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
						<a href="{{ url('user/'.Auth::user()->id.'/Categories/'.$categoryId.'/Sub_categories/'.$subCategoryId.'/Products/'.$product->id.'/edit') }}"><button type="button" class="btn btn-success">Edit</button></a>
						<a href="#deleteProduct" data-toggle="modal"><button type="button" class="btn btn-danger">Delete</button></a>
					</div>
				</div>
			</div>
		</div>
	@endforeach
</div>
@include("inc/admin/modal/confirmDeleteProduct")
