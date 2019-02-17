@extends("layouts.noadmin.layout")

@section("styles")
<link rel="stylesheet" type="text/css" href="{{ url('css/profile.css') }}">
@stop

@section("title")
My profile
@stop

@section("content")
<div class="space">
  <div class="col-xs-12 ">
    <nav>
      <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#infoProfile" role="tab" aria-controls="nav-home" aria-selected="true">Personal information</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#infoShippingAdress" role="tab" aria-controls="nav-profile" aria-selected="false">Shipping address</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#infoBillingAdress" role="tab" aria-controls="nav-contact" aria-selected="false">Billing address</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#infoAccount" role="tab" aria-controls="nav-contact" aria-selected="false">Account</a>
		<a class="nav-item nav-link" id="nav-myOrders-tab" data-toggle="tab" href="#myOrders" role="tab" aria-controls="nav-contact" aria-selected="false">My Orders</a>
      </div>
    </nav>
    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
      {{-- Personal information --}}
      <div class="tab-pane fade show active info" id="infoProfile" role="tabpanel" aria-labelledby="nav-home-tab">
        @include("inc.formInfoProfile")
      </div>
      {{-- Shipping Address --}}
      <div class="tab-pane fade info" id="infoShippingAdress" role="tabpanel" aria-labelledby="nav-profile-tab">
        @include("inc.formShippingAddress")
      </div>
      {{-- Billing Address --}}
      <div class="tab-pane fade info" id="infoBillingAdress" role="tabpanel" aria-labelledby="nav-contact-tab">
        @include("inc.formBillingAddress")
      </div>
      {{-- Account --}}
      <div class="tab-pane fade info" id="infoAccount" role="tabpanel" aria-labelledby="nav-contact-tab">
        @include("inc.formAccount")
      </div>

	  {{-- My orders --}}
	  <div class="tab-pane fade info" id="myOrders" role="tabpanel" aria-labelledby="nav-myOrders-tab">
        @include("inc.showOrders")
	</div>

    </div>
  </div>
</div>
@stop

@section("js")
<script src="{{ url('js/profile.js') }}"></script>
@stop
