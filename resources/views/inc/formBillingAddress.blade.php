<h1>Billing address</h1>
{{-- pasar action --}}
@if ($billingAddress==null)
	<form method="post" action="{{ url('profile/billingAddress') }}" onsubmit="return validateBillingAddress();">
		@csrf
	  {{-- Road type --}}
	  <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-prepend">
	        <span class="list-group-item"><i class="fa fa-road prefix grey-text fa-1g" aria-hidden="true"></i></span>
	      </div>
	      <select name="roadType" class="form-control" id="roadTypeBillingAddress" name="roadType">
			  @foreach ($roadTypes as $roadType)
			  	<option value="{{$roadType}}">{{$roadType}}</option>
			 @endforeach
	      </select>
	    </div>
	    <span id="errorRoadTypeBillingAddress"></span>
	  </div>
	  {{-- Road name --}}
	  <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-prepend">
	        <span class="list-group-item"><i class="fa fa-road prefix grey-text fa-1g" aria-hidden="true"></i></span>
	      </div>
	    <input name="roadName" type="text" id="roadNameBillingAddress" name="roadName" class="form-control" placeholder="Road name">
	    </div>
	    <span id="errorRoadNameBillingAddress"></span>
	  </div>
	  {{-- City --}}
	  <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-prepend">
	        <span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
	      </div>
	    <input name="city" type="text" id="cityBillingAddress" name="city" class="form-control" placeholder="City">
	    </div>
	    <span id="errorCityBillingAddress"></span>
	  </div>
	  {{-- Province --}}
	  <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-prepend">
	        <span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
	      </div>
	    <input name="province" type="text" id="provinceBillingAddress" name="province" class="form-control" placeholder="Province">
	    </div>
	    <span id="errorProvinceBillingAddress"></span>
	  </div>
	  {{-- Zip Code --}}
	  <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-prepend">
	        <span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
	      </div>
	    <input name="zipCode" type="text" id="zipCodeBillingAddress" name="zipCode" class="form-control" placeholder="Zip code">
	    </div>
	    <span id="errorZipCodeBillingAddress"></span>
	  </div>
	  {{-- Country --}}
	  <div class="form-group">
	    <div class="input-group">
	      <div class="input-group-prepend">
	        <span class="list-group-item"><i class="fa fa-flag prefix grey-text fa-1g" aria-hidden="true"></i></span>
	      </div>
	    <input name="country" type="text" id="countryBillingAddress" name="country" class="form-control" placeholder="Country">
	    </div>
	    <span id="errorCountryBillingAddress"></span>
	  </div>
	  <input type="submit" name="sendBillingAddress" value="Send changes" class="btn btn-default waves-effect waves-light">
	</form>

@else
<form method="post" action="{{ url('profile/billingAddress') }}" onsubmit="return validateBillingAddress();">
	@csrf
  {{-- Road type --}}
  <div class="form-group">
	<div class="input-group">
	  <div class="input-group-prepend">
		<span class="list-group-item"><i class="fa fa-road prefix grey-text fa-1g" aria-hidden="true"></i></span>
	  </div>
	  <select name="roadType" class="form-control" id="roadTypeBillingAddress" name="roadType">
		  @foreach ($roadTypes as $roadType)
		  	@if ($roadType==$billingAddress->roadType)
				<option value="{{$roadType}}" selected>{{$roadType}}</option>
			@endif
			<option value="{{$roadType}}">{{$roadType}}</option>
		 @endforeach
	  </select>
	</div>
	<span id="errorRoadTypeBillingAddress"></span>
  </div>
  {{-- Road name --}}
  <div class="form-group">
	<div class="input-group">
	  <div class="input-group-prepend">
		<span class="list-group-item"><i class="fa fa-road prefix grey-text fa-1g" aria-hidden="true"></i></span>
	  </div>
	<input name="roadName" type="text" id="roadNameBillingAddress" name="roadName" class="form-control" value="{{$billingAddress->roadName}}">
	</div>
	<span id="errorRoadNameBillingAddress"></span>
  </div>
  {{-- City --}}
  <div class="form-group">
	<div class="input-group">
	  <div class="input-group-prepend">
		<span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
	  </div>
	<input name="city" type="text" id="cityBillingAddress" name="city" class="form-control" value="{{$billingAddress->city}}">
	</div>
	<span id="errorCityBillingAddress"></span>
  </div>
  {{-- Province --}}
  <div class="form-group">
	<div class="input-group">
	  <div class="input-group-prepend">
		<span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
	  </div>
	<input name="province" type="text" id="provinceBillingAddress" name="province" class="form-control" value="{{$billingAddress->province}}">
	</div>
	<span id="errorProvinceBillingAddress"></span>
  </div>
  {{-- Zip Code --}}
  <div class="form-group">
	<div class="input-group">
	  <div class="input-group-prepend">
		<span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
	  </div>
	<input name="zipCode" type="text" id="zipCodeBillingAddress" name="zipCode" class="form-control" value="{{$billingAddress->zipCode}}">
	</div>
	<span id="errorZipCodeBillingAddress"></span>
  </div>
  {{-- Country --}}
  <div class="form-group">
	<div class="input-group">
	  <div class="input-group-prepend">
		<span class="list-group-item"><i class="fa fa-flag prefix grey-text fa-1g" aria-hidden="true"></i></span>
	  </div>
	<input name="country" type="text" id="countryBillingAddress" name="country" class="form-control" value="{{$billingAddress->country}}">
	</div>
	<span id="errorCountryBillingAddress"></span>
  </div>
  <input type="submit" name="sendBillingAddress" value="Send changes" class="btn btn-default waves-effect waves-light">
</form>
@endif
