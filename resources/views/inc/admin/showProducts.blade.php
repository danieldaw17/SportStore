<div class="textHeader">
	<h1>Products</h1>
</div>
<div class="row probootstrap-gutter60">
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		<a href="{{ url('user/'.Auth::user()->id.'/Categories/'.$categoryId.'/Sub_categories/'.$subCategoryId.'/Products/create') }}">
			<div class="service hover_service text-center firstItem">
				<div class="imgProduct">
					{{-- pasar datos de la imagen --}}
					<img src="{{ url('img/new.png') }}" alt="New item" title="New item">
				</div>
				<div class="contentProduct">
					<h3 class="titleProduct">Add product</h3>
				</div>
			</div>
		</a>
	</div>

	@foreach ($products as $product)
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		{{-- Pasar id del producto --}}

		<a href="{{ url('user/'.Auth::user()->id.'/Categories/'.$categoryId.'/Sub_categories/'.$subCategoryId.'/Products') }}">
			<div class="service hover_service text-center">
				<div class="imgProduct">
					{{-- pasar datos de la imagen --}}
					<img src="{{ url('storage/images/products/'.$product->id.'-front.jpg') }}" alt="" title="">
				</div>
				<div class="contentProduct">
					<h3 class="titleProduct">Title product</h3>
					<div class="optionsED">
						<a href="{{ url('user/'.Auth::user()->id.'/Categories/'.$categoryId.'/Sub_categories/'.$subCategoryId.'/Products/'.$product->id.'/edit') }}"><button type="button" class="btn btn-success">Edit</button></a>
						<a href="#deleteProduct" data-toggle="modal"><button type="button" class="btn btn-danger">Delete</button></a>
					</div>
				</div>
			</div>
		</a>
	</div>
	@endforeach
</div>
@include("inc/admin/modal/confirmDeleteProduct")
