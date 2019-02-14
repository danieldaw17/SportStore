<div class="modal fade" id="registerModal">
	<div class="modal-dialog">
	    <div class="modal-content">
	    	<form method="post" action="{{url('register')}}" onsubmit="return validateRegister();">
				{{ csrf_field() }}
		    	<div id="registerForm">
					<div class="modal-header">
						<h3 class="text-center default-text py-3"><i class="fa fa-lock"></i> Sign up:</h3>
					</div>
					<div class="modal-body">
						<div class="md-form">
							<div class="form-group has-feedback ">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="list-group-item"><i class="fa fa-envelope prefix grey-text fa-1g" aria-hidden="true"></i></span>
									</div>
									<input type="text" id="emailRegister" name="email" class="form-control" placeholder="Email">
								</div>
							    <span id="errorEmailRegister"></span>
							</div>
						</div>
						<div class="md-form">
							<div class="form-group form-group has-feedback ">
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="list-group-item"><i class="fa fa-lock prefix grey-text fa-1g" aria-hidden="true"></i></span>
									</div>
									<input type="password" id="passRegister" name="password" class="form-control" placeholder="Password">
								</div>
								<span id="errorPassRegister"></span>
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
							<p class="text-center register-text">I remembered my account <a href="#" id="showFormLogin">Login</a></p>
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