@extends('frontend.master')

@section('content')

   <!-- Order Details -->
   <div class="col-md-3"></div>
   <div class="col-md-6  order-details" style="margin-top: 80px;">
    <div class="section-title text-center">
        <h3 class="title">Your Order</h3>
    </div>
    <div class="order-summary">
        <div class="order-col">
            <div><strong>PRODUCT</strong></div>
            <div><strong>TOTAL</strong></div>
        </div>
        @foreach ($cart_array as $cart) 
        <div class="order-products">
            <div class="order-col">
                <div>{{$cart['quantity']}} x {{$cart['name']}}</div>
                <div> &#2547; {{Cart::get($cart['id'])->getPriceSum()}}</div>
            </div>
            
        </div>
        @endforeach
        <div class="order-col">
            <div>Shiping</div>
            <div><strong>50&#2547; </strong></div>
        </div>
        <div class="order-col">
            <div><strong>TOTAL</strong></div>
            <div><strong class="order-total"> &#2547; {{Cart::getTotal()+50}}</strong></div>
        </div>
    </div>
    <form action="{{url('/order-place')}}" method="post">
        @csrf

    <div class="section-title text-center" style="margin-top: 40px;">
        <h4 class="title" style="color: #d11024;">Please select a payment Method</h4>
    </div>
    <div class="payment-method">
        <div class="input-radio">
            <input type="radio" name="payment" id="payment-1" value="Cash">
            <label for="payment-1">
                <span></span>
                Cash On Delivary=
            </label>
            <div class="caption">
                <p>You Can Also Cash on Delivary</p>
            </div>
        </div>
        <div class="input-radio">
            <input type="radio" name="payment" id="payment-2">
            <label for="payment-2" value="Bkash">
                <span></span>
                Bkash=
            </label>
            <div class="caption">
                <p>Bkash No:- 01799238826</p>
            </div>
        </div>
        <div class="input-radio">
            <input type="radio" name="payment" id="payment-3">
            <label for="payment-3" value='Nogod'>
                <span></span>
                Nogod=
            </label>
            <div class="caption">
                <p>Nogod:- 01799238826</p>
            </div>
        </div>
    </div>
    <div class="input-checkbox">
        <input type="checkbox" id="terms">
        <label for="terms">
            <span></span>
            I've read and accept the <a href="#">terms & conditions</a>
        </label>
    </div>
    <input class="primary-btn order-submit" type="submit" value="Place order">
</form>
</div>
<div class="col-md-3"></div>
<!-- /Order Details --> 
@endsection