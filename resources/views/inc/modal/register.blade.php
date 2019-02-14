<div class="modal fade" id="registerModal">
	<div class="modal-dialog">
	    <div class="modal-content">
            <form method="POST" action="{{ route('register') }}" onsubmit="return validateRegister();">
                @csrf
                <div id="registerForm">
                	<div class="modal-header">
						<h3 class="text-center default-text py-3"><i class="fa fa-lock"></i> Sign up:</h3>
					</div>
					<div class="modal-body">
						{{-- EMAIL --}}
						<div class="md-form">
							<div class="form-group">
								<label for="emailRegister">{{ __('E-Mail Address') }}</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="list-group-item"><i class="fa fa-envelope prefix grey-text fa-1g" aria-hidden="true"></i></span>
									</div>
									<input id="emailRegister" type="email" class="form-control" name="email" placeholder="Email" required>
		                        </div>
		                        <span id="errorEmailRegister"></span>
	                        </div>
                        </div>
                        {{-- PASSWORD --}}
                        <div class="md-form">
							<div class="form-group">
								<label for="passRegister">{{ __('Password') }}</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="list-group-item"><i class="fa fa-envelope prefix grey-text fa-1g" aria-hidden="true"></i></span>
									</div>
									<input id="passRegister" type="password" class="form-control" name="password" placeholder="******" required>
		                        </div>
		                        <span id="errorPassRegister"></span>
	                        </div>
                        </div>
                        {{-- CONFIRM PASSWORD --}}
                        <div class="md-form">
							<div class="form-group">
								<label for="confirmPass">{{ __('Confirm Password') }}</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="list-group-item"><i class="fa fa-envelope prefix grey-text fa-1g" aria-hidden="true"></i></span>
									</div>
									<input id="confirmPass" type="password" class="form-control" name="password_confirmation" placeholder="******" required>
		                        </div>
		                        <span id="errorConfirmPass"></span>
	                        </div>
                        </div>
                    </div>
                    <div class="modal-footer text-center">
						<button type="submit" class="btn btn-default waves-effect waves-light">
                            {{ __('Register') }}
                        </button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>