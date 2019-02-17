
@extends("layouts.noadmin.layout")

@section("styles")


@section ('js')
<script src="https://js.stripe.com/v3/"></script>
  @if($shippingAddress == null || $billingAddress==null )
    <script>
      $('#complete-order').hide();
    </script>
  @else 
    <script>
      $('#complete-order').show();
    </script>
  @endif
@stop
@section("title","checkout")



@section('content')
<div class="row">
    <div class="col-sm-1"></div>
  <div class="col-sm-6">
    <div class="container">
      @if(session()->has('success_message'))
          <div class="alert alert-success">
              {{session()->get('success_message')}}
          </div>
      @endif
      @if( count($errors)> 0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

        <h1 class="checkout-heading stylish-heading">Checkout</h1>
        <div class="checkout-section">
            <div>
                <form action="{{route('checkout.store')}}" method="POST" id="payment-form">
                    {{ csrf_field() }}
                    <h2>Billing Details</h2>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        @if (auth()->user())
                            <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                        @else
                            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        @if (auth()->user())
                          <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()->name }}" readonly>
                        @else
                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required >
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="shippingaddress">Shipping address</label>
                        @if($shippingAddress != null )
                        <input type="text" class="form-control" id="shippingAddress" name="shippingaddress" value="{{ $shippingAddress->roadName }}" readonly>
                        @else 
                        <input type="text" class="form-control text-danger" id="shippingAddress" name="shippingaddress" value="You need to go to your profile a set up your shipping address" readonly >
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="billingaddress">Billing address</label>
                        @if($billingAddress!=null )
                        <input type="text" class="form-control" id="billingAddress" name="billingaddress" value="{{ $billingAddress->roadName }}" readonly >
                        @else 
                        <input type="text" class="form-control text-danger" id="billingAddress" name="billingaddress" value="You need to go to your profile and set up your billing address" readonly >
                        @endif
                    </div>
                       <div class="half-form">
                        <div class="form-group">
                         <label for="delivery">Deliveries : </label> <!--insertar los deliveries id para que funcione -->
                           <select name="deliveryId" required>
                             @foreach($deliveries as $delivery)
                             <option value="{{$delivery->id}}">{{$delivery->name}}</option>
                             @endforeach
                           </select>
                            <!--termina aqui-->
                        </div>
                        
                    </div>
                    <!-- DE AQUI HACIA ADELANTE SON COSAS NECESARIAS PARA STRIPE PAYMENTS  -->
                    <div class="form-group">
                        <label for="province">province</label>
                        @if($billingAddress['province'] == null)
                           <input type="text" class="form-control" id="province" name="province" value="{{old('province')}}" required>
                        @else
                         <input type="text" class="form-control" id="province" name="province" value="{{$billingAddress->province}}" readonly>
                        @endif
                    </div>
                     <div class="form-group">
                        <label for="city">city</label>
                        @if ($billingAddress['city'] == null)
                            <input type="text" class="form-control" id="city" name="city" value="{{old('city')}}" required>
                        @else
                        <input type="text" class="form-control" id="city" name="city" value="{{$billingAddress->city}}" readonly>
                            
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="postalcode">postalcode</label>
                        @if ($billingAddress['zipCode'] == null)
                            <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{old('postalcode')}}" required>
                        @else
                        <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{$billingAddress->zipCode}}" readonly>
                            
                        @endif
                    </div>

                 <!-- end half-form -->
                    <div class="checkout-section">
                
                    <h2>Payment details</h2>
                      <div class="form-group">
                          <label for="name_on_card">Name on Card</label>
                          <input type="text" class="form-control" id="name_on_card" name="name_on_card">
                    </div>

                       <div class="form-group">
                            <label for="card-element">
                              Credit or debit card
                            </label>
                        <div id="card-element">
                         <!-- A Stripe Element will be inserted here. -->
                        </div>

                            <!-- Used to display form errors. -->
                         <div id="card-errors" role="alert">
                             
                         </div>

                    </div>
                </div>    
                    <button type="submit" id="complete-order" class="btn btn-success btn-block">Complete Order</button>

          </form>
                    <div class="container"> 
                      </div>
                    
                   <div class="mt-32">or</div>
                    <div class="mt-32">
                        <h2>Pay with PayPal</h2>

                        <form method="post" id="paypal-payment-form" action="{{--route('checkout.paypal')--}}">
                            @csrf
                            <div class="form-group">
                                <section>
                                    <div class="bt-drop-in-wrapper">
                                        <div id="bt-dropin"></div>
                                    </div>
                                </section>
                            </div>

                            <input id="nonce" name="payment_method_nonce" type="hidden" />
                            <button class="btn btn-primary " type="submit"><span>Pay with PayPal</span></button>
                        </form>
                    </div>
               
            </div>
        </div>
    </div>
    
</div>
        
       <div class="col-sm-1"></div>     
        <div class="col-sm-4">
            <div class="checkout-table-container">
                <h2>Your Order</h2>

                <div class="checkout-table">
                    @foreach (Cart::content() as $item)
                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <div class="checkout-item-details">
                                <div class="checkout-table-img">
                                    @foreach ($images as $image)
                                        @if ($image->productId==$item->model->id && $image->name=="front")
                                            <img src="{{ url($image->path) }}" alt="{{$image->name}}" class="imgCart">
                                         @php
                                        break;
                                        @endphp
                                        @endif
                                     @endforeach
                                </div>
                                <div class="checkout-table-item">{{$item->model->name}}</div>
                                <div class="checkout-table-description">{{ $item->model->shortDescription }}</div>
                                <div class="checkout-table-price">{{$item->model->basePrice}}</div>
                            </div>
                        </div> <!-- end checkout-table -->

                        <div class="checkout-table-row-right">
                           <strong>quantity:</strong><div class="checkout-table-quantity">{{ $item->qty }}</div>
                        </div>
                    </div>
                    <hr> <!-- end checkout-table-row -->
                  @endforeach

                </div> <!-- end checkout-table -->
    
                <div class="checkout-totals">
                    <div class="checkout-totals-left">
                       <strong> Subtotal</strong> {{ Cart::subtotal()}} <br>
                        <strong>Tax:</strong> {{ Cart::tax()}} <br>
                        <span class="checkout-totals-total"><strong>Total:</strong> {{Cart::total()}}</span>
                    </div>

                    <div class="checkout-totals-right">
                        <br>
                       
                             <br>
                            <hr>
                          <br>
                     
                         <br>
                        <span class="checkout-totals-total">{{--presentPrice($newTotal)--}}</span>

                    </div>
                </div> <!-- end checkout-totals -->
            </div>
         </div>
        </div> <!-- end checkout-section -->
    </div>
</div>
@section('extra-js')

<script>
    (function(){
        // Create a Stripe client.
var stripe = Stripe('pk_test_ujRSjoDzk8qHV5PDAZ11erVG');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    lineHeight: '18px',
    fontFamily: '"Roboto",Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', 
    {style: style,
      hidePostalCode: true
});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  document.getElementById('complete-order').disabled =true;

  var options = {
    name: document.getElementById('name_on_card').value,
     address_line1: document.getElementById('billingAddress').value,
      address_city: document.getElementById('city').value,
      address_state: document.getElementById('province').value,
      address_zip: document.getElementById('postalcode').value

  }



  stripe.createToken(card,options).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
      document.getElementById('complete-order').disabled =false;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
        function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

  // Submit the form
        form.submit();
        }

    })();

</script>

@endsection
@stop
