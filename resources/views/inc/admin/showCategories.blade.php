<div class="textHeader">
	<h1>Categories</h1>
</div>
<div class="row probootstrap-gutter60">	
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		<a href="{{ url('user/'.Auth::user()->id.'/Categories/create') }}">
			<div class="service hover_service text-center firstItem">
				<div class="imgProduct">
					<img src="{{ url('img/new.png') }}" alt="New item" title="New item">
				</div>
				<div class="contentProduct">
					<h3 class="titleProduct">Add Category</h3>
				</div>  
			</div>
		</a>
	</div>
	@foreach ($categories as $category)
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		<a href="{{ url('user/'.Auth::user()->id.'/Categories/'.$category->id) }}">
			<div class="service hover_service text-center">
				<div class="imgProduct">
					<img src="{{ url('storage/images/categories/'.$category->id.'.jpg') }}" alt="{{ $category->name }}" title="{{ $category->name }}">
				</div>
				<div class="contentProduct">
					<h3 class="titleProduct">{{ $category->name }}</h3>
					<div class="optionsED">
						<a href="{{ url('user/'.Auth::user()->id.'/Categories/'.$category->id.'/edit') }}"><button type="button" class="btn btn-success">Edit</button></a>
						<a href="#deleteCategory" data-toggle="modal"><button type="button" class="btn btn-danger">Delete</button></a>
					</div>
				</div>  
			</div>
		</a>
	</div>
	@endforeach
</div>
@include("inc/admin/modal/confirmDeleteCategory")