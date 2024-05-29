@extends('layouts.app')

@section('pageTitle', 'Cart')

@section('content')
<div class="col-md-6 col-lg-4 col-lx-3">
    <div class="card p-4 rounded">
        <img src="/product.png" class="card-img-top" alt="SmartSync">
        <div class="card-body">
            <h1 class="card-title">SmartSync</h1>
            <p class="card-text">Multipurpose centralized IOT device that makes your appliances remotely available anywhere & anytime.</p>
        </div>
    </div>
</div>
<div class="col-md-4 col-sm-7">

    <h2 class="mb-4">Checkout</h2>
    <form>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="Enter your address">
        </div>
        <div class="form-group">
            <label for="card">Credit Card Number</label>
            <input type="text" class="form-control" id="card" placeholder="Enter your card number">
        </div>
        <div class="form-group">
            <label for="expiry">Expiration Date</label>
            <input type="text" class="form-control" id="expiry" placeholder="MM/YY">
        </div>
        <div class="form-group mb-4">
            <label for="cvv">CVV</label>
            <input type="text" class="form-control" id="cvv" placeholder="Enter CVV">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Complete Purchase</button>
    </form>
</div>
@endsection