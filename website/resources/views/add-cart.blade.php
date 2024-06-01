@extends('layouts.app')

@section('pageTitle', 'Cart')

@section('content')
<div class="container">
    <div class="container d-flex h-100">
        <div class="row justify-content-center align-self-center">

            @include('layouts.nav')

            <div class="col-md-5 col-lg-4 col-lx-3 mt-4">
                <div class="card p-4 rounded highlight text-white">
                    <img src="/product.png" class="card-img-top" alt="SmartSync">
                    <div class="card-body">
                        <h1 class="card-title">SmartSync
                            <span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger">
                                5.900 ₱
                                <span class="visually-hidden">SmartSync Price</span>
                            </span>
                        </h1>
                        <p class="card-text">Multipurpose centralized IOT device that makes your appliances remotely available anywhere & anytime.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-7 mt-4">
                <div class="card p-4 rounded">
                    <div class="card-header">{{ __('Please enter following details to complete the purchase') }}</div>
                    <div class="card-body">
                        <form method="POST" id="checkout">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="address">Address</label>
                                <input value="{{ isset($paymentMethods->address) ? $paymentMethods->address : '' }}" name="address" type="text" class="form-control" id="address" placeholder="1234 SmartSync St, City, State, Zip Code">
                            </div>
                            <div class="form-group mb-3">
                                <label for="card">Credit Card Number</label>
                                <input value="{{ isset($paymentMethods->card) ? $paymentMethods->card : '' }}" type="tel" inputmode="text"  autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" name="card" class="form-control" id="card" placeholder="Enter your card number">
                            </div>
                            <div class="form-group mb-3">
                                <label for="expiry">Expiration Date</label>
                                <input value="{{ isset($paymentMethods->expiry) ? $paymentMethods->expiry : '' }}" pattern="(0[1-9]|1[0-2])\/\d{2}" autocomplete="cc-exp" maxlength="7" name="expiry" type="text" class="form-control" id="expiry" placeholder="MM/YY">
                            </div>
                            <div class="form-group mb-3">
                                <label for="cvv">CVV</label>
                                <input value="{{ isset($paymentMethods->cvv) ? $paymentMethods->cvv : '' }}" placeholder="The 3-4 digit code located at the back of your card" type="tel" inputmode="numeric" max-length="4" auto-complete="cc-csc" name="cvv" class="form-control" id="cvv" placeholder="Enter CVV">
                            </div>
                            <button id="submit" type="submit" class="btn btn-primary bg-custom"><i class="fa-solid fa-circle-check"></i> &nbsp; Complete Purchase</button>
                        </form>
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