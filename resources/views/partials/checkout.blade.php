
@extends("layouts.noadmin.layout")

@section("styles")

@stop

@section("title","checkout")



@section('content')

    <div class="container">

        <h1 class="checkout-heading stylish-heading">Checkout</h1>
        <div class="checkout-section">
            <div>
                <form action="{{--route('checkout.store')--}}" method="POST" id="payment-form">
                    {{ csrf_field() }}
                    <h2>Billing Details</h2>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        @if (auth()->user())
                            <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" readonly>
                        @else
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" required>
                    </div>

                    <div class="half-form">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}" required>
                        </div>
                        <div class="form-group">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" id="province" name="province" value="{{ old('province') }}" required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="half-form">
                        <div class="form-group">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode" value="{{ old('postalcode') }}" required>
                        </div>
                        
                    </div> <!-- end half-form -->

                    

                    <button type="submit" id="complete-order" class="btn btn-success full-width">Complete Order</button>


                </form>

               
                   <div class="mt-32">or</div>
                    <div class="mt-32">
                        <h2>Pay with PayPal</h2>

                        <form method="post" id="paypal-payment-form" action="{{--route('checkout.paypal')--}}">
                            @csrf
                            <section>
                                <div class="bt-drop-in-wrapper">
                                    <div id="bt-dropin"></div>
                                </div>
                            </section>

                            <input id="nonce" name="payment_method_nonce" type="hidden" />
                            <button class="btn btn-primary" type="submit"><span>Pay with PayPal</span></button>
                        </form>
                    </div>
               
            </div>

            <div class="checkout-table-container">
                <h2>Your Order</h2>

                <div class="checkout-table">
                    @foreach (Cart::content() as $item)
                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <img src="" alt="item" class="checkout-table-img">
                            <div class="checkout-item-details">
                                <div class="checkout-table-item">{{ $item->model->name }}</div>
                                <div class="checkout-table-description">{{ $item->model->details }}</div>
                                <div class="checkout-table-price">{{$item->model->basePrice}}</div>
                            </div>
                        </div> <!-- end checkout-table -->

                        <div class="checkout-table-row-right">
                           <strong>quantity:</strong> <div class="checkout-table-quantity">{{ $item->qty }}</div>
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

        </div> <!-- end checkout-section -->
    </div>


@stop
