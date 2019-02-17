<h1>Personal information</h1>
{{-- pasar action --}}
<form method="post" action="" enctype="multipart/form-data" onsubmit="return validatePersonalInformation();">
  {{-- Name --}}
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="list-group-item"><i class="fa fa-user prefix grey-text fa-1g" aria-hidden="true"></i></span>
      </div>
    <input type="text" id="nameInfoProfile" name="name" class="form-control" placeholder="Name">
    </div>
    <span id="errorNameInfoProfile"></span>
  </div>
  {{-- Surnames --}}
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="list-group-item"><i class="fa fa-user prefix grey-text fa-1g" aria-hidden="true"></i></span>
      </div>
    <input type="text" id="surnamesInfoProfile" name="lastName" class="form-control" placeholder="Surnames">
    </div>
    <span id="errorSurnamesInfoProfile"></span>
  </div>
  {{-- NIF --}}
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="list-group-item"><i class="fa fa-id-card prefix grey-text fa-1g" aria-hidden="true"></i></span>
      </div>
    <input type="text" id="nifInfoProfile" name="nif" class="form-control" placeholder="NIF (Ex: 12345678Q)">
    </div>
    <span id="errorNifInfoProfile"></span>
  </div>
  <input type="submit" name="sendInfoProfile" value="Send changes" class="btn btn-default waves-effect waves-light">
</form>