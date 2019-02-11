<div class="textHeader">
	<h1>Products</h1>
</div>
<div class="row probootstrap-gutter60">
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		{{-- Pasar id del producto --}}
		<a href="{{ url('user/'.Auth::user()->id.'/Products/create') }}">
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
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		{{-- Pasar id del producto --}}
		<a href="{{ url('category/subcategorie/product') }}">
			<div class="service hover_service text-center">
				<div class="imgProduct">
					{{-- pasar datos de la imagen --}}
					<img src="{{ url('img/login.png') }}" alt="" title="">
				</div>
				<div class="contentProduct">
					<h3 class="titleProduct">Title product</h3>
					<div class="optionsED">
						<a href="{{ url('user/4/product') }}"><button type="button" class="btn btn-success">Edit</button></a>
						<a href="#deleteProduct" data-toggle="modal"><button type="button" class="btn btn-danger">Delete</button></a>
					</div>
				</div>
			</div>
		</a>
	</div>
</div>
@include("inc/admin/modal/confirmDeleteProduct")
