<div class="modal fade" id="shoppingCart">
	<div class="modal-dialog">
	    <div class="modal-content">
			<div class="modal-header">
				<h3 class="text-center default-text py-3"><i class="fa fa-lock"></i> Shopping cart:</h3>
			</div>
			<div class="modal-body">
				<div class="md-form">
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="list-group-item"><i class="fa fa-envelope prefix grey-text fa-1g" aria-hidden="true"></i></span>
							</div>
							<input type="text" id="emailLogin" class="form-control" placeholder="Email">
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
							<input type="password" id="passLogin" class="form-control" placeholder="Password">
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
	</div>
</div>