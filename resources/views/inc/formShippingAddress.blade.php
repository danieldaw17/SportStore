<h1>Shipping address</h1>
{{-- pasar action --}}
@if ($shippingAddress==null)
	<form method="post" action="{{ url('profile/shippingAddress') }}" onsubmit="return validateShippingAddress();">
		@csrf
	  {{-- Road type --}}
	  <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-prepend">
	        <span class="list-group-item"><i class="fa fa-road prefix grey-text fa-1g" aria-hidden="true"></i></span>
	      </div>
	      <select name="roadType" class="form-control" id="roadTypeShippingAddress" name="roadType">
			  @foreach ($roadTypes as $roadType)
			  	<option value="{{$roadType}}">{{$roadType}}</option>
			 @endforeach
	      </select>
	    </div>
	    <span id="errorRoadTypeShippingAddress"></span>
	  </div>
	  {{-- Road name --}}
	  <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-prepend">
	        <span class="list-group-item"><i class="fa fa-road prefix grey-text fa-1g" aria-hidden="true"></i></span>
	      </div>
	    <input name="roadName" type="text" id="roadNameShippingAddress" name="roadName" class="form-control" placeholder="Road name">
	    </div>
	    <span id="errorRoadNameShippingAddress"></span>
	  </div>
	  {{-- City --}}
	  <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-prepend">
	        <span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
	      </div>
	    <input name="city" type="text" id="cityShippingAddress" name="city" class="form-control" placeholder="City">
	    </div>
	    <span id="errorCityShippingAddress"></span>
	  </div>
	  {{-- Province --}}
	  <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-prepend">
	        <span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
	      </div>
	    <input name="province" type="text" id="provinceShippingAddress" name="province" class="form-control" placeholder="Province">
	    </div>
	    <span id="errorProvinceShippingAddress"></span>
	  </div>
	  {{-- Zip Code --}}
	  <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-prepend">
	        <span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
	      </div>
	    <input name="zipCode" type="text" id="zipCodeShippingAddress" name="zipCode" class="form-control" placeholder="Zip code">
	    </div>
	    <span id="errorZipCodeShippingAddress"></span>
	  </div>
	  {{-- Country --}}
	  <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-prepend">
	        <span class="list-group-item"><i class="fa fa-flag prefix grey-text fa-1g" aria-hidden="true"></i></span>
	      </div>
	    <input name="country" type="text" id="countryShippingAddress" name="country" class="form-control" placeholder="Country">
	    </div>
	    <span id="errorCountryShippingAddress"></span>
	  </div>
	  <input type="submit" name="sendShippingAddress" value="Send changes" class="btn btn-default waves-effect waves-light">
	</form>

@else
<form method="post" action="{{ url('profile/shippingAddress') }}" onsubmit="return validateShippingAddress();">
	@csrf
  {{-- Road type --}}
  <div class="form-group">
	<div class="input-group">
	  <div class="input-group-prepend">
		<span class="list-group-item"><i class="fa fa-road prefix grey-text fa-1g" aria-hidden="true"></i></span>
	  </div>
	  <select name="roadType" class="form-control" id="roadTypeShippingAddress" name="roadType">
		  @foreach ($roadTypes as $roadType)
		  	@if ($roadType==$shippingAddress->roadType)
				<option value="{{$roadType}}" selected>{{$roadType}}</option>
			@endif
			<option value="{{$roadType}}">{{$roadType}}</option>
		 @endforeach
	  </select>
	</div>
	<span id="errorRoadTypeShippingAddress"></span>
  </div>
  {{-- Road name --}}
  <div class="form-group">
	<div class="input-group">
	  <div class="input-group-prepend">
		<span class="list-group-item"><i class="fa fa-road prefix grey-text fa-1g" aria-hidden="true"></i></span>
	  </div>
	<input name="roadName" type="text" id="roadNameShippingAddress" name="roadName" class="form-control" value="{{$shippingAddress->roadName}}">
	</div>
	<span id="errorRoadNameShippingAddress"></span>
  </div>
  {{-- City --}}
  <div class="form-group">
	<div class="input-group">
	  <div class="input-group-prepend">
		<span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
	  </div>
	<input name="city" type="text" id="cityShippingAddress" name="city" class="form-control" value="{{$shippingAddress->city}}">
	</div>
	<span id="errorCityShippingAddress"></span>
  </div>
  {{-- Province --}}
  <div class="form-group">
	<div class="input-group">
	  <div class="input-group-prepend">
		<span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
	  </div>
	<input name="province" type="text" id="provinceShippingAddress" name="province" class="form-control" value="{{$shippingAddress->province}}">
	</div>
	<span id="errorProvinceShippingAddress"></span>
  </div>
  {{-- Zip Code --}}
  <div class="form-group">
	<div class="input-group">
	  <div class="input-group-prepend">
		<span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
	  </div>
	<input name="zipCode" type="text" id="zipCodeShippingAddress" name="zipCode" class="form-control" value="{{$shippingAddress->zipCode}}">
	</div>
	<span id="errorZipCodeShippingAddress"></span>
  </div>
  {{-- Country --}}
  <div class="form-group">
	<div class="input-group">
	  <div class="input-group-prepend">
		<span class="list-group-item"><i class="fa fa-flag prefix grey-text fa-1g" aria-hidden="true"></i></span>
	  </div>
	<input name="country" type="text" id="countryShippingAddress" name="country" class="form-control" value="{{$shippingAddress->country}}">
	</div>
	<span id="errorCountryShippingAddress"></span>
  </div>
  <input type="submit" name="sendShippingAddress" value="Send changes" class="btn btn-default waves-effect waves-light">
</form>
@endif
