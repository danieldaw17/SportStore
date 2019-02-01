<h1>Account</h1>
{{-- Change nickname and email --}}
{{-- pasar action --}}
<div id="changeEmail">
  <form method="post" action="" onsubmit="return validateAccount();">
    {{-- Nick --}}
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-user prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
      <input type="text" id="nickInfoProfile" name="nick" class="form-control" placeholder="Nickname">
      </div>
      <span id="errorNickInfoProfile"></span>
    </div>
    {{-- Email --}}
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="list-group-item"><i class="fa fa-envelope prefix grey-text fa-1g" aria-hidden="true"></i></span>
        </div>
      <input type="text" id="emailInfoProfile" name="email" class="form-control" placeholder="Email">
      </div>
      <span id="errorEmailInfoProfile"></span>
    </div>
    <p>If you want to change the password, <a href="#" onclick="showFormChangePassword()">click here</a></p>
    <input type="submit" name="sendChangeEmail" value="Send changes" class="btn btn-default waves-effect waves-light">
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
  </form>
</div>