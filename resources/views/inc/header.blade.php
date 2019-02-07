<header class="default-header">
	<div class="headerweb">
		<a href="{{ url('/') }}"><img src="{{ url('img/logo.png') }}" class="logo" alt="SportStore" title="SportStore"></a>
	</div>
	<nav class="navbar navbar-expand-lg  navbar-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="dropdown">
					{{-- Pasar id de la categoria --}}
					<a href="{{ url('category') }}" id="navbardrop">
						Clothes
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Men</a>
						<a class="dropdown-item" href="#">Women</a>
						<a class="dropdown-item" href="#">Unisex</a>
					</div>
				</li>	
				<li class="dropdown">
					{{-- Pasar id de la categoria --}}
					<a href="{{ url('category') }}" id="navbardrop">
						Vehicles
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Men</a>
						<a class="dropdown-item" href="#">Women</a>
						<a class="dropdown-item" href="#">Unisex</a>
					</div>
				</li>
				<li class="dropdown">
					{{-- Pasar id de la categoria --}}
					<a href="{{ url('category') }}" id="navbardrop">
						Accesories
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Men</a>
						<a class="dropdown-item" href="#">Women</a>
						<a class="dropdown-item" href="#">Unisex</a>
					</div>
				</li>
				<li>
					{{-- Pasar id de la categoria --}}
					<a href="{{ url('category') }}" id="navbardrop">
					Supplements
					</a>
				</li>	
				<li><a href="#" data-toggle="modal" data-target="#shoppingCart"><img src="{{ url('img/shopping-cart.png') }}" alt="Shopping cart" title="Shopping cart" class="imgHeader"></a></li>
				{{-- Si no existe la sesion del usuario 	
				<li id="lastLi"><a href="#" data-toggle="modal" data-target="#loginModal"><img src="{{ url('img/login.png') }}" alt="Login" title="Login" class="imgHeader"></a></li>
				--}}
				{{-- Si existe la sesion del usuario --}}
				<li class="dropdown login" id="lastLi">
					<a href="#" id="navbardrop">
						<img src="{{ url('img/login.png') }}" alt="Login" title="Login" class="imgHeader">
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{ url('profile') }}">My perfil</a>
						<a class="dropdown-item" href="#">My shopping</a>
						<a class="dropdown-item" href="#">Log out</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
</header>
@include("inc/modal/login")
@include("inc/modal/shoppingCart")