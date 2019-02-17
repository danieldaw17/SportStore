<div class="textHeader">
	<h1>Sports</h1>
</div>
<div class="row probootstrap-gutter60">
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		<a href="{{ url('user/'.Auth::user()->id.'/sports/create') }}">
			<div class="service hover_service text-center firstItem">
				<div class="imgProduct">
					<img src="{{ url('img/new.png') }}" alt="New item" title="New item">
				</div>
				<div class="contentProduct">
					<h3 class="titleProduct">Add sport</h3>
				</div>
			</div>
		</a>
	</div>
	@foreach ($sports as $sport)
	<div class="col-md-3 probootstrap-animate" data-animate-effect="fadeIn">
		<div class="service hover_service text-center">
			<div class="imgProduct">
				<img src="{{ url('storage/images/sports/'.$sport->id.'.jpg') }}" alt="{{$sport->name}}" title="{{$sport->name}}">
			</div>
			<div class="contentProduct">
				<h3 class="titleProduct">{{$sport->name}}</h3>
				<div class="optionsED">
					<a href="{{ url('user/'.Auth::user()->id.'/sports/'.$sport->id.'/edit') }}"><button type="button" class="btn btn-success">Edit</button></a>
					{{--<a href="#deleteSport" data-toggle="modal"><button type="button" class="btn btn-danger">Delete</button></a>--}}
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>
@include("inc/admin/modal/confirmDeleteSport")
