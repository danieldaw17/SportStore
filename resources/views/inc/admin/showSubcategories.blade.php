<div class="textHeader">
	<h1>Subcategories</h1>
</div>
<div class="row probootstrap-gutter60">	
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		<a href="{{ url('user/'.Auth::user()->id.'/Categories/'.$categoryId.'/Sub_categories/create') }}">
			<div class="service hover_service text-center firstItem">
				<div class="imgProduct">
					<img src="{{ url('img/new.png') }}" alt="New item" title="New item">
				</div>
				<div class="contentProduct">
					<h3 class="titleProduct">Add subcategory</h3>
				</div>  
			</div>
		</a>
	</div>
	@foreach ($sub_categories as $subcategory)
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		<a href="{{ url('user/'.Auth::user()->id.'/Categories/'.$categoryId.'/Sub_categories/'.$subcategory->id.'/Products') }}">
			<div class="service hover_service text-center">
				<div class="imgProduct">
					<img src="{{ url('storage/images/subcategories/'.$subcategory->id.'.jpg') }}" alt="{{ $subcategory->name }}" title="{{ $subcategory->name }}">
				</div>
				<div class="contentProduct">
					<h3 class="titleProduct">{{$subcategory->name}}</h3>
					<div class="optionsED">
						<a href="{{url('user/'.Auth::user()->id.'/Categories/'.$categoryId.'/Sub_categories/'.$subcategory->id.'/edit') }}"><button type="button" class="btn btn-success">Edit</button></a>
						<a href="#deleteSubcategory" data-toggle="modal"><button type="button" class="btn btn-danger">Delete</button></a>
					</div>
				</div>  
			</div>
		</a>
	</div>
	@endforeach
</div>
@include("inc/admin/modal/confirmDeleteSubcategory")