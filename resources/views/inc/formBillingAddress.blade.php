<h1>Billing address</h1>
{{-- pasar action --}}
<form method="post" action="" onsubmit="return validateBillingAddress();">
  {{-- Road type --}}
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="list-group-item"><i class="fa fa-road prefix grey-text fa-1g" aria-hidden="true"></i></span>
      </div>
      <select class="form-control" id="roadTypeBillingAddress" name="roadTypeBillingAddress">
        <option value="1">Select road type</option>
        <option value="2">Street</option>
        <option value="3">Avenue</option>
        <option value="4">Walk</option>
        <option value="5">Alley</option>
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
    <input type="text" id="roadNameBillingAddress" name="roadNameBillingAddress" class="form-control" placeholder="Road name">
    </div>
    <span id="errorRoadNameBillingAddress"></span>
  </div>
  {{-- City --}}
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
      </div>
    <input type="text" id="cityBillingAddress" name="cityBillingAddress" class="form-control" placeholder="City">
    </div>
    <span id="errorCityBillingAddress"></span>
  </div>
  {{-- Province --}}
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
      </div>
    <input type="text" id="provinceBillingAddress" name="provinceBillingAddress" class="form-control" placeholder="Province">
    </div>
    <span id="errorProvinceBillingAddress"></span>
  </div>
  {{-- Zip Code --}}
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
      </div>
    <input type="text" id="zipCodeBillingAddress" name="zipCodeBillingAddress" class="form-control" placeholder="Zip code">
    </div>
    <span id="errorZipCodeBillingAddress"></span>
  </div>
  {{-- Country --}}
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="list-group-item"><i class="fa fa-flag prefix grey-text fa-1g" aria-hidden="true"></i></span>
      </div>
    <input type="text" id="countryBillingAddress" name="countryBillingAddress" class="form-control" placeholder="Country">
    </div>
    <span id="errorCountryBillingAddress"></span>
  </div>
  <input type="submit" name="sendBillingAddress" value="Send changes" class="btn btn-default waves-effect waves-light">
</form>