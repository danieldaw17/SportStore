<header class="default-header">
	<nav class="navbar navbar-expand-lg  navbar-light">
		<div class="container">
			<a class="navbar-brand" href="{{ asset('/') }}">
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
					<li><a href="{{ asset('/login') }}"><img src="{{ asset('img/login.png') }}" alt="Login" title="Login" class="loginIMG"></a></li>
				</ul>
			</div>						
		</div>
	</nav>
</header>