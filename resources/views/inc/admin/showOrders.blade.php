<div class="textHeader">
	<h1>Orders</h1>
</div>
	@foreach ($invoices as $invoice)
		<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
			<a href="{{ url('user/'.Auth::user()->id.'/Categories/'.$category->id) }}">
				<div class="service hover_service text-center">
					<div class="imgProduct">
						<img src="{{ url($category->imagePath) }}" alt="{{ $category->name }}" title="{{ $category->name }}">
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
