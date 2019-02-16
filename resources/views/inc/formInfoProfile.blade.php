<h1>Personal information</h1>
{{-- pasar action --}}
<form method="post" action="{{ url('profile/personalInformation') }}" onsubmit="return validatePersonalInformation();">
	@csrf
  {{-- Name --}}
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="list-group-item"><i class="fa fa-user prefix grey-text fa-1g" aria-hidden="true"></i></span>
      </div>
	  @if ($user->name==null)
    	<input type="text" id="nameInfoProfile" name="name" class="form-control" placeholder="Name">
	  @else
	  	<input type="text" id="nameInfoProfile" name="name" class="form-control" value="{{$user->name}}">
	  @endif
    </div>
    <span id="errorNameInfoProfile"></span>
  </div>
  {{-- Surnames --}}
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="list-group-item"><i class="fa fa-user prefix grey-text fa-1g" aria-hidden="true"></i></span>
      </div>
	  @if ($user->lastName==null)
    	<input type="text" id="surnamesInfoProfile" name="lastName" class="form-control" placeholder="LastName">
	  @else
	  	<input type="text" id="surnamesInfoProfile" name="lastName" class="form-control" value="{{$user->lastName}}">
	  @endif
    </div>
    <span id="errorSurnamesInfoProfile"></span>
  </div>
  {{-- NIF --}}
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="list-group-item"><i class="fa fa-id-card prefix grey-text fa-1g" aria-hidden="true"></i></span>
      </div>
	@if ($user->nif==null)
    	<input type="text" id="nifInfoProfile" name="nif" class="form-control" placeholder="NIF">
	@else
		<input type="text" id="nifInfoProfile" name="nif" class="form-control" value="{{$user->nif}}">
	@endif
    </div>
    <span id="errorNifInfoProfile"></span>
  </div>
  <input type="submit" name="sendInfoProfile" value="Send changes" class="btn btn-default waves-effect waves-light">
</form>
