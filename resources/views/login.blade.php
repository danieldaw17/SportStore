@extends("layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
@stop

@section("js")

@stop

@section("title")
Login
@stop

@section("content")
<!-- Grid row -->
<div class="row justify-content-center">
    <!-- Grid column -->
    <div class="col-md-6 mt-5">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center default-text py-3"><i class="fa fa-lock"></i> Login:</h3>
                <!--Body-->
                <div class="md-form">
                	<div class="form-group">
	                	<div class="input-group">
		                	<div class="input-group-prepend">
								<span class="list-group-item"><i class="fa fa-envelope prefix grey-text fa-1g" aria-hidden="true"></i></span>
							</div>
		                    <input type="text" id="defaultForm-email" class="form-control" placeholder="Email">
		                </div>
		            </div>
                </div>
                <div class="md-form">
                	<div class="form-group">
	                	<div class="input-group">
		                	<div class="input-group-prepend">
								<span class="list-group-item"><i class="fa fa-lock prefix grey-text fa-1g" aria-hidden="true"></i></span>
							</div>
		                    <input type="password" id="defaultForm-pass" class="form-control" placeholder="*****">
		                </div>
		            </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-default waves-effect waves-light">next</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Grid column -->
</div>
@stop