@extends("layout")

@section("styles")
<link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
@stop

@section("title")
Home
@stop

@section("content")
{{-- START CAROUSEL --}}
<div class="section">
<div id="carouselIndex" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselIndex" data-slide-to="0" class="active">
		<li data-target="#carouselIndex" data-slide-to="1">
		<li data-target="#carouselIndex" data-slide-to="2">
	</ol>
	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<img src="img/login.png" alt="prueba" class="d-block w-100">
			<div class="carousel-caption">
				<div>
					<h3>Prueba</h3>
					<p>Maquina</p>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/login.png" alt="prueba" class="d-block w-100">
			<div class="carousel-caption">
				<div>
					<h3>Prueba 2</h3>
					<p>Maquina 2</p>
				</div>
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/login.png" alt="prueba" class="d-block w-100">
			<div class="carousel-caption">
				<div>
					<h3>Prueba 3</h3>
					<p>Maquina 3</p>
				</div>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselIndex" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
		<span class="sr-only">Anterior</span>
	</a>
	<a class="carousel-control-next" href="#carouselIndex" role="button" data-slide="next">
		<span class="carousel-control-next-icon"></span>
		<span class="sr-only">Siguiente</span>
	</a>
</div>
{{-- END CAROUSEL --}}
{{-- START SEARCHER --}}
<div class="searcher">
	<div id="custom-search-input">
	    <div class="input-group col-md-12">
	        <input type="text" class="  search-query form-control" placeholder="Search" />
	        <span class="input-group-btn">
	            <button class="btn btn-danger" type="button">
	                <span class=" glyphicon glyphicon-search">lupa</span>
	            </button>
	        </span>
	    </div>
	</div>
</div>
{{-- END SEARCHER --}}
{{-- START PRODUCTS --}}
	    <div class="row probootstrap-gutter60">
	      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
	        <div class="service hover_service text-center">
	          <div class="imgProduct">
	          	<img src="img/login.png">
          	  </div>
	          <div class="text">
	            <h3>Title product</h3>
	            <p>short description</p>
	          </div>  
	        </div>
	      </div>
	      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
	        <div class="service hover_service text-center">
	          <div class="imgProduct">
	          	<img src="img/login.png">
          	  </div>
	          <div class="text">
	            <h3>Title product</h3>
	            <p>short description</p>
	          </div>
	        </div>
	      </div>
	      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
	        <div class="service hover_service text-center">
	          <div class="imgProduct">
	          	<img src="img/login.png">
          	  </div>
	          <div class="text">
	            <h3>Title product</h3>
	            <p>short description</p>
	          </div>
	        </div>
	      </div>

	      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
	        <div class="service hover_service text-center">
	          <div class="imgProduct">
	          	<img src="img/login.png">
          	  </div>
	          <div class="text">
	            <h3>Title product</h3>
	            <p>short description</p>
	          </div>  
	        </div>
	      </div>
	      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
	        <div class="service hover_service text-center">
	          <div class="imgProduct">
	          	<img src="img/login.png">
          	  </div>
	          <div class="text">
	            <h3>Title product</h3>
	            <p>short description</p>
	          </div>
	        </div>
	      </div>
	      <div class="col-md-4 probootstrap-animate" data-animate-effect="fadeIn">
	        <div class="service hover_service text-center">
	          <div class="imgProduct">
	          	<img src="img/login.png">
          	  </div>
	          <div class="text">
	            <h3>Title product</h3>
	            <p>short description</p>
	          </div>
	        </div>
	      </div>
	    </div>
	    <!-- END row -->
	    <div class="row mt50">
	      <div class="col-md-12 text-center">
	        <a href="services.html" class="btn btn-primary btn-lg" role="button">View all our products</a>
	      </div>
	    </div>
    </div>
{{-- END PRODUCTS --}}
@stop

@section("js")

@stop