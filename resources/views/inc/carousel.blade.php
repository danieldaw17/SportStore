<div id="carouselIndex" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		@if(isset($categoriesNav))
			@foreach($categoriesNav as $category)
				@if($category->id == 1)
					<li data-target="#carouselIndex" data-slide-to="{{$category->id}}" class="active">
				@else
					<li data-target="#carouselIndex" data-slide-to="{{$category->id}}">
				@endif
			@endforeach
		@endif
	</ol>
	<div class="carousel-inner" role="listbox">
		@if(isset($categoriesNav))
			@foreach($categoriesNav as $category)
				@if($category->id == 1)
					<div class="carousel-item active">
						<img src="{{$category->imagePath}}" alt="prueba" class="d-block w-100">
						<div class="carousel-caption">
							<div>
								<h3>{{$category->name}}</h3>
							</div>
						</div>
					</div>
				@else
					<div class="carousel-item">
						<img src="{{$category->imagePath}}" alt="prueba" class="d-block w-100">
						<div class="carousel-caption">
							<div>
								<h3>{{$category->name}}</h3>
							</div>
						</div>
					</div>
				@endif
			@endforeach
		@endif
	</div>
	<a class="carousel-control-prev" href="#carouselIndex" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselIndex" role="button" data-slide="next">
		<span class="carousel-control-next-icon"></span>
		<span class="sr-only">Next</span>
	</a>
</div>