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
				@if (isset($categoriesNav))
					@foreach($categoriesNav as $category)
						<li class="dropdown">
							<a href="{{ url('categories/'.$category->id) }}" id="navbardrop">{{$category->name}}</a>
							<div class="dropdown-menu">
								@foreach($sub_categoriesNav as $sub_category)
									@if ($sub_category->categoryId == $category->id)
										<a class="dropdown-item" href="{{ url('sub_categories/'.$sub_category->id) }}">{{$sub_category->name}}</a>
									@endif
								@endforeach
							</div>
						</li>
					@endforeach
				@endif
				<li><a href="{{ route('cart.index') }}"><img src="{{ url('img/shopping-cart.png') }}" alt="Shopping cart" title="Shopping cart" class="imgHeader">
					@if(Cart::content()->count()>0)
<span class="badge badge-warning">{{Cart::content()->count()}}</span>
					@endif
					</a></li>
				{{-- Si no existe la sesion del usuario--}}
				@if (!Auth::check())
					<li id="lastLi"><a href="#" id="login"><img src="{{ url('img/login.png') }}" alt="Login" title="Login" class="imgHeader"></a></li>

				@else
					<li class="dropdown login" id="lastLi">
						<a href="#" id="navbardrop">
							<img src="{{ url('img/login.png') }}" alt="Login" title="Login" class="imgHeader">
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="{{ url('user/'.Auth::user()->id) }}">My perfil</a>
							<a class="dropdown-item" href="#">My shopping</a>
							<a class="dropdown-item" href="/logout">Log out</a>
						</div>
					</li>
				@endif
			</ul>
		</div>
	</nav>
</header>
@include("inc/modal/login")
