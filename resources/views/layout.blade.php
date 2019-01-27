<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>@yield("title") | SportStore</title>
		{{-- START CSS --}}
		<link rel="stylesheet" href="{{ asset('css/main.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
		@yield("styles")
		{{-- END CSS --}}
	</head>
	<body>
			{{-- START HEADER --}}
			<header class="default-header">
				<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container">
						  <a class="navbar-brand" href="index.html">
						  	<img src="img/logo.png" alt="">
						  	LOGO
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
							    <li class="dropdown">
							      <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							        Clothes
							      </a>
							      <div class="dropdown-menu">
							        <a class="dropdown-item" href="#">Men</a>
							        <a class="dropdown-item" href="#">Women</a>
							        <a class="dropdown-item" href="#">Unisex</a>
							      </div>
							    </li>	
							    <li class="dropdown">
							      <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							        Vehicles
							      </a>
							      <div class="dropdown-menu">
							        <a class="dropdown-item" href="#">Men</a>
							        <a class="dropdown-item" href="#">Women</a>
							        <a class="dropdown-item" href="#">Unisex</a>
							      </div>
							    </li>
							    <li class="dropdown">
							      <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							        Accesories
							      </a>
							      <div class="dropdown-menu">
							        <a class="dropdown-item" href="#">Men</a>
							        <a class="dropdown-item" href="#">Women</a>
							        <a class="dropdown-item" href="#">Unisex</a>
							      </div>
							    </li>
							    <li><a href="#team">Supplements</a></li>								
							    <li><a href="#" data-target="#"><img src="{{ asset('img/login.png') }}" alt="Login" title="Login" class="loginIMG"></a></li>
						    </ul>
						  </div>						
					</div>
				</nav>
			</header>
			{{-- END HEADER --}}
			<div class="container">
				@yield("content")
			</div>
			{{-- START FOOTER --}}
			<footer class="probootstrap-footer">
		      <div class="container">
		        <div class="row">
		          <div class="col-md-12">
		            <div class="row">
		              <div class="col-md-4">
		                <div class="probootstrap-footer-widget">
		                  <h3>Links</h3>
		                  <ul>
		                    <li><a href="#">Knowledge Base</a></li>
		                    <li><a href="#">Career</a></li>
		                    <li><a href="#">Press Releases</a></li>
		                    <li><a href="#">Terms of services</a></li>
		                    <li><a href="#">Privacy Policy</a></li>
		                  </ul>
		                </div>
		              </div>
		              <div class="col-md-4">
		                <div class="probootstrap-footer-widget">
		                  <h3>Links</h3>
		                  <ul>
		                    <li><a href="#">Knowledge Base</a></li>
		                    <li><a href="#">Career</a></li>
		                    <li><a href="#">Press Releases</a></li>
		                    <li><a href="#">Terms of services</a></li>
		                    <li><a href="#">Privacy Policy</a></li>
		                  </ul>
		                </div>
		              </div>
		              <div class="col-md-4">
		                <div class="probootstrap-footer-widget">
		                  <h3>Links</h3>
		                  <ul>
		                    <li><a href="#">Knowledge Base</a></li>
		                    <li><a href="#">Career</a></li>
		                    <li><a href="#">Press Releases</a></li>
		                    <li><a href="#">Terms of services</a></li>
		                    <li><a href="#">Privacy Policy</a></li>
		                  </ul>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
		    </footer>
			{{-- END FOOTER --}}
		{{-- START JS --}}
		<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
		<script src="{{ asset('js/popper.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		@yield("js")
		{{-- END JS --}}
	</body>
</html>