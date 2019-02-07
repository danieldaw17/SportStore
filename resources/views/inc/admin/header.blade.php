<header class="default-header">
	<div class="headerweb">
		<a href="{{ url('/') }}"><img src="{{ url('img/logo.png') }}" class="logo" alt="SportStore" title="SportStore"></a>
	</div>
	<nav class="navbar navbar-expand-lg  navbar-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
			<ul class="navbar-nav headerAdmin">
				<li><a href="{{ url('user/{id}') }}">User management</a></li>	
				<li><a href="{{ url('user/{id}/productManagement') }}">Product management</a></li>
				<li><a href="{{ url('user/{id}/orders') }}">Orders</a></li>
				<li><a href="{{ url('user/{id}/providers') }}">Providers</a></li>
			</ul>
		</div>
	</nav>
</header>