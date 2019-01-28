<header class="default-header">
	<div class="headerweb">
		<a href="{{ asset('/') }}"><p>LOGO</p></a>
	</div>
	<nav class="navbar navbar-expand-lg  navbar-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="dropdown">
					<a href="#" id="navbardrop" data-toggle="dropdown">
						Clothes
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Men</a>
						<a class="dropdown-item" href="#">Women</a>
						<a class="dropdown-item" href="#">Unisex</a>
					</div>
				</li>	
				<li class="dropdown">
					<a href="#" id="navbardrop" data-toggle="dropdown">
						Vehicles
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Men</a>
						<a class="dropdown-item" href="#">Women</a>
						<a class="dropdown-item" href="#">Unisex</a>
					</div>
				</li>
				<li class="dropdown">
					<a href="#" id="navbardrop" data-toggle="dropdown">
						Accesories
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Men</a>
						<a class="dropdown-item" href="#">Women</a>
						<a class="dropdown-item" href="#">Unisex</a>
					</div>
				</li>
				<li><a href="#team">Supplements</a></li>			
				<li><a href="#" data-toggle="modal" data-target="#exampleModal"><img src="{{ asset('img/login.png') }}" alt="Login" title="Login" class="loginIMG"></a></li>
			</ul>
		</div>
	</nav>
</header>
@include("inc/modal/login")