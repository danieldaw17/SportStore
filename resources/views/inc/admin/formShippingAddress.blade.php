<h1>Shipping address</h1>
{{-- pasar action --}}
<form method="post" action="" onsubmit="return validateShippingAddress();">
  {{-- Road type --}}
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="list-group-item"><i class="fa fa-road prefix grey-text fa-1g" aria-hidden="true"></i></span>
      </div>
        <select class="form-control" id="roadTypeShippingAddress" name="roadType">
          <option value="1">Select road type</option>
          <option value="calle">Street</option>
          <option value="avenida">Avenue</option>
          <option value="paseo">Walk</option>
          <option value="callejon">Alley</option>
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
    <input type="text" id="roadNameShippingAddress" name="roadName" class="form-control" placeholder="Road name">
    </div>
    <span id="errorRoadNameShippingAddress"></span>
  </div>
  {{-- City --}}
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
      </div>
    <input type="text" id="cityShippingAddress" name="city" class="form-control" placeholder="City">
    </div>
    <span id="errorCityShippingAddress"></span>
  </div>
  {{-- Province --}}
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
      </div>
    <input type="text" id="provinceShippingAddress" name="province" class="form-control" placeholder="Province">
    </div>
    <span id="errorProvinceShippingAddress"></span>
  </div>
  {{-- Zip Code --}}
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="list-group-item"><i class="fa fa-home prefix grey-text fa-1g" aria-hidden="true"></i></span>
      </div>
    <input type="text" id="zipCodeShippingAddress" name="zipCode" class="form-control" placeholder="Zip code">
    </div>
    <span id="errorZipCodeShippingAddress"></span>
  </div>
  {{-- Country --}}
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-prepend">
        <span class="list-group-item"><i class="fa fa-flag prefix grey-text fa-1g" aria-hidden="true"></i></span>
      </div>
    <input type="text" id="countryShippingAddress" name="country" class="form-control" placeholder="Country">
    <input type="hidden" name="type" id="shipping" value="shipping">
    </div>
    <span id="errorCountryShippingAddress"></span>
  </div>
  <input type="submit" name="sendShippingAddress" value="Send changes" class="btn btn-default waves-effect waves-light">
</form>