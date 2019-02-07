<div class="space" id="formUser">
  <div class="col-xs-12 ">
    <nav>
      <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#infoProfile" role="tab" aria-controls="nav-home" aria-selected="true">Personal information</a>
        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#infoShippingAdress" role="tab" aria-controls="nav-profile" aria-selected="false">Shipping address</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#infoBillingAdress" role="tab" aria-controls="nav-contact" aria-selected="false">Billing address</a>
        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#infoAccount" role="tab" aria-controls="nav-contact" aria-selected="false">Account</a>
      </div>
    </nav>
    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
      {{-- Personal information --}}
      <div class="tab-pane fade show active info" id="infoProfile" role="tabpanel" aria-labelledby="nav-home-tab">
        @include("inc.admin.formInfoProfile")
      </div>
      {{-- Shipping Address --}}
      <div class="tab-pane fade info" id="infoShippingAdress" role="tabpanel" aria-labelledby="nav-profile-tab">
        @include("inc.admin.formShippingAddress")
      </div>
      {{-- Billing Address --}}
      <div class="tab-pane fade info" id="infoBillingAdress" role="tabpanel" aria-labelledby="nav-contact-tab">
        @include("inc.admin.formBillingAddress")
      </div>
      {{-- Account --}}
      <div class="tab-pane fade info" id="infoAccount" role="tabpanel" aria-labelledby="nav-contact-tab">
        @include("inc.admin.formAccount")
      </div>
    </div>
  </div>
</div>