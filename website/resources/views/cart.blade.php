@extends('layouts.app')

@section('pageTitle', 'Payment Success')

@section('content')
<div class="container">
    <div class="container d-flex h-100">
        <div class="row justify-content-center align-self-center">

            @include('layouts.nav')

            <div class="col-md-5 col-lg-4 col-lx-3 mt-4">
                <div class="card p-4 rounded highlight text-white">
                    <img src="/product.png" class="card-img-top" alt="SmartSync">
                    <div class="card-body">
                        <h1 class="card-title">Your Cart</h1>
                        <p class="card-text">SmartSync is a multipurpose centralized IOT device that makes your appliances remotely available anywhere & anytime.</p>
                        @if ($carts->isEmpty())
                        <a href="/cart/add" class="btn btn-primary w-100 bg-custom text-white px-4 mt-2">Order Now!</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-7 mt-4">
                @if ($carts->isEmpty())
                <div class="card p-4 rounded mb-4">
                    <div class="card-header">You have not yet place an order!</div>
                </div>
                @endif
                @foreach ($carts as $cart)
                <div class="card p-4 rounded mb-4">
                    <div class="card-header">Payment Success</div>
                    <div class="card-body">
                        <h5 class="card-title">Thank You for Your Order!</h5>
                        <p class="card-text">Your SmartSync order has been successfully processed.</p>
                        <p class="card-text">Order ID: {{ $cart->id }}</p>
                        <p class="card-text">Total Amount: 5.700₱</p>

                        @foreach ($paymentMethods as $paymentMethod)
                        @if ($paymentMethod->cart_id == $cart->id)
                        <p class="card-text">Delivery Address: {{ $paymentMethod->address }}</p>

                        @php
                        $cardNumber = $paymentMethod->card;
                        $maskedCardNumber = substr($cardNumber, 0, -4) . str_repeat('*', strlen($cardNumber) - 4);
                        $firstDigit = substr($cardNumber, 0, 1);
                        $paymentMethodType = '';

                        if ($firstDigit == '4') {
                        $paymentMethodType = 'Visa';
                        } elseif ($firstDigit == '5') {
                        $paymentMethodType = 'Mastercard';
                        } else {
                        $paymentMethodType = 'Card';
                        }
                        @endphp

                        <p class="card-text">Payment Method: {{ $paymentMethodType }} {{ substr($cardNumber, 0, 5) . str_repeat('*', strlen($cardNumber)) }}</p>

                        @php
                        $createdTime = \Carbon\Carbon::parse($paymentMethod->created_time);
                        $currentTime = \Carbon\Carbon::now();

                        $createdTime->addWeek();

                        $toReceived = explode(' ', $createdTime)[0];
                        @endphp

                        @if ($createdTime->lt($currentTime))
                        <p class="card-text">Delivery Status: Received</p>
                        @else
                        <p class="card-text">Delivery Status: To Received {{ $toReceived }}</p>
                        @endif

                        @endif
                        @endforeach
                        <p class="card-text">For any inquiries, please contact our support team.</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
<div class="footer m-3 p-2 text-custom">
    &copy; 2024 SmartSync. All Rights Reserved.
</div>
</div>
@endsection