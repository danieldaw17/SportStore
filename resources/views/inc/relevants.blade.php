<div class="space">
    <div class="col-xs-12 ">
      <nav>
        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#sales" role="tab" aria-controls="nav-home" aria-selected="true">Top sales</a>
          <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#prices" role="tab" aria-controls="nav-home" aria-selected="true">Top prices</a>
          <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#news" role="tab" aria-controls="nav-home" aria-selected="true">Top news</a>
        </div>
      </nav>
      <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
      	{{-- Productos top ventas --}}
        <div class="tab-pane fade show  info" id="sales" role="tabpanel" aria-labelledby="nav-home-tab">
      	
        </div>
        {{-- Productos top precios --}}
        <div class="tab-pane fade active show info" id="prices" role="tabpanel" aria-labelledby="nav-home-tab">
      		<div class="row probootstrap-gutter60 alignSpace">
	      		@if(isset($productsTopPrices))
	      			@foreach($productsTopPrices as $product)
	      				<div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
							<a href="{{ url('product/'.$product->id) }}">
							<div class="service hover_service text-center">
								<div class="imgProduct">
				      				@foreach ($images as $image)
										@if ($image->productId==$product->id && $image->name=="front")
											<img src="{{$image->path}}">
										@endif
										
									@endforeach
								</div>
								<div class="contentProduct">
									<h5 class="titleProduct">{{$product->name}}</h5>
									<p class="descriptionProduct">{{$product->shortDescription}}</p>
									<p class="prizeProduct">{{$product->basePrice}} €</p>
								</div>  
							</div>
							</a>
						</div>
	      			@endforeach
	      		@endif
      		</div>
        </div>
        {{-- Productos top novedades --}}
        <div class="tab-pane fade show info" id="news" role="tabpanel" aria-labelledby="nav-home-tab">
        	<div class="row probootstrap-gutter60 alignSpace">
	      		@if(isset($productsTopNews))
	      			@foreach($productsTopNews as $product)
	      				<div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
							<a href="{{ url('product/'.$product->id) }}">
							<div class="service hover_service text-center">
								<div class="imgProduct">
				      				@foreach ($images as $image)
										@if ($image->productId==$product->id && $image->name=="front")
											<img src="{{$image->path}}">
										@endif
										
									@endforeach
								</div>
								<div class="contentProduct">
									<h5 class="titleProduct">{{$product->name}}</h5>
									<p class="descriptionProduct">{{$product->shortDescription}}</p>
									<p class="prizeProduct">{{$product->basePrice}} €</p>
								</div>  
							</div>
							</a>
						</div>
	      			@endforeach
	      			{{$productsTopNews->render()}}
	      		@endif
      		</div>
        </div>
      </div>
    </div>
</div>