<div class="modal fade" id="loginModal">
	<div class="modal-dialog">
	    <div class="modal-content">
	    	<form method="post" action="{{url('login')}}" onsubmit="return validateLogin();">
				{{ csrf_field() }}
		    	<div id="loginForm">
					<div class="modal-header">
						<h3 class="text-center default-text py-3"><i class="fa fa-lock"></i> Log in:</h3>
					</div>
					<div class="modal-body">
						<div class="md-form">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="list-group-item"><i class="fa fa-envelope prefix grey-text fa-1g" aria-hidden="true"></i></span>
									</div>
									<input type="text" id="emailLogin" name="email" class="form-control" placeholder="Email">
								</div>
								<span id="errorEmailLogin"></span>
							</div>
						</div>
						<div class="md-form">
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="list-group-item"><i class="fa fa-lock prefix grey-text fa-1g" aria-hidden="true"></i></span>
									</div>
									<input type="password" id="passLogin" name="password" class="form-control" placeholder="Password">
								</div>
								<span id="errorPassLogin"></span>
							</div>
						</div>
						<div>
							<p class="text-center register-text">¿Dont have an account? <a href="#" onclick="showFormRegister()">Sign up</a></p>
						</div>
					</div>
					<div class="modal-footer text-center">
						<input type="submit" name="sendLogin" value="Log in" class="btn btn-default waves-effect waves-light">
					</div>
				</div>
			</form>
			<form method="post" action="{{url('register')}}" onsubmit="return validateRegister();">
				{{ csrf_field() }}
				<div id="registerForm">
					<div class="modal-header">
						<h3 class="text-center default-text py-3" id="exampleModalLabel"><i class="fa fa-lock"></i> Sign up:</h3>
					</div>
					<div class="modal-body">
						<div class="md-form">
							<div class="form-group {{$errors->has('email') ? 'has-error' : ''}} has-feedback ">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="list-group-item"><i class="fa fa-envelope prefix grey-text fa-1g" aria-hidden="true"></i></span>
									</div>
									<input type="text" id="emailRegister" name="email" class="form-control" placeholder="Email">
								</div>
								@if ($errors->has('email'))
								  <span id="errorEmailRegister" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif
							</div>
						</div>
						<div class="md-form">
							<div class="form-group form-group {{$errors->has('password') ? 'has-error' : ''}} has-feedback ">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="list-group-item"><i class="fa fa-lock prefix grey-text fa-1g" aria-hidden="true"></i></span>
									</div>
									<input type="password" id="passRegister" name="password" class="form-control" placeholder="Password">
								</div>
								@if ($errors->has('password'))
								<span id="errorPassRegister" class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                 @endif
							</div>
							<div class="form-group">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="list-group-item"><i class="fa fa-lock prefix grey-text fa-1g" aria-hidden="true"></i></span>
									</div>
									<input type="password" id="confirmPass" name="confirmPass" class="form-control" placeholder="Confirm password">
								</div>
								<span id="errorConfirmPass"></span>
							</div>
						</div>
						<div>
							<p class="text-center register-text">I remembered my account <a href="#" onclick="showFormLogin()">Login</a></p>
						</div>
					</div>
					<div class="modal-footer text-center">
						<input type="submit" name="sendRegister" value="Sign up" class="btn btn-default waves-effect waves-light">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
