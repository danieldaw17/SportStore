<h1>Account</h1>
{{-- Change nickname and email --}}
{{-- pasar action --}}
<div id="changeEmail">
  <form method="post" action="{{ url('profile/account') }}" onsubmit="return validateAccount();">
	  @csrf
    {{-- Nick --}}
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-user prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
		@if ($user->nick==null)
      		<input type="text" name="nick" id="nickInfoProfile" name="nick" class="form-control" placeholder="Nickname">
		@else
			<input type="text" nick="nick" id="nickInfoProfile" name="nick" class="form-control" value="{{$user->nick}}">
		@endif
      </div>
      <span id="errorNickInfoProfile"></span>
    </div>
    {{-- Email --}}
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-envelope prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
		@if ($user->email==null)
      		<input type="text" name="email" id="emailInfoProfile" name="email" class="form-control" placeholder="Email">
		@else
			<input type="text" name="email" id="emailInfoProfile" name="email" class="form-control" value="{{$user->email}}">
		@endif
      </div>
      <span id="errorEmailInfoProfile"></span>
    </div>
    <p>If you want to change the password, <a href="#" onclick="showFormChangePassword()">click here</a></p>
    <input type="submit" name="sendChangeEmail" value="Send changes" class="btn btn-default waves-effect waves-light">
    @if ($user->email_verified_at==null)
  <a href="{{url('confirmEmail')}}">
  <button class="btn btn-warning">CONFIRM EMAIL</button>
  </a>
  @else
  <button class="btn btn-success" disabled="disabled">EMAIL CONFIRMED</button>
  @endif
  </form>
  
</div>
{{-- Change passwords --}}
{{-- pasar action --}}
<div id="changePass">
  <form method="post" action="" onsubmit="return validateChangePassword();">
    {{-- Actual password --}}
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-user prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
      <input type="password" id="actualPass" name="actualPass" class="form-control" placeholder="Actual pass">
      </div>
      <span id="errorActualPass"></span>
    </div>
    {{-- New password --}}
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-user prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
      <input type="password" id="newPassword" name="password" class="form-control" placeholder="New password">
      </div>
      <span id="errorNewPassword"></span>
    </div>
    {{-- Confirm new password --}}
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-user prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
      <input type="password" id="confirmNewPassword" name="confirmNewPassword" class="form-control" placeholder="Confirm new password">
      </div>
      <span id="errorConfirmNewPassword"></span>
    </div>
    <p>If you want to change the email, <a href="#" onclick="showFormChangeEmail()">click here</a></p>
    <input type="submit" name="sendChangePass" value="Send changes" class="btn btn-default waves-effect waves-light">
    @if ($user->email_verified_at==null)
  <a href="{{url('confirmEmail')}}">
  <button class="btn btn-warning">CONFIRM EMAIL</button>
  </a>
  @else
  <button  class="btn btn-success" disabled="disabled">EMAIL CONFIRMED</button>
  @endif
  </form>
  
</div>
