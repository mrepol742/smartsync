@extends('layouts.app')

@section('pageTitle', 'Home')

@section('content')
<div class="col-md-6 col-lg-4 col-lx-3">
    <div class="card p-4 rounded">
        <img src="/product.png" class="card-img-top" alt="SmartSync">
        <div class="card-body">
            <h1 class="card-title">SmartSync</h1>
            <p class="card-text">Multipurpose centralized IOT device that makes your appliances remotely available anywhere & anytime.</p>
            <a href="/cart" class="btn btn-primary px-4">Add to cart</a>
        </div>
    </div>
</div>
<div class="col">
    <div class="card p-4 rounded">
        <div class="card-body">
            <h3 class="card-title">Download Smart App</h3>
            <p class="card-text">SmartSync is an IoT smart application that seamlessly synchronizes and manages various internet-connected devices within a home or office environment, providing users with centralized control and automation capabilities for enhanced convenience and efficiency.</p>
      <a class="btn btn-outline-primary px-4" href="/download">Download</a>
        </div>
    </div>
    <div class="card p-4 mt-4 rounded">
        <div class="card-body">
            <h3 class="card-title">Why SmartSync?</h3>
            <p class="card-text">SmartSync simplifies smart home management by consolidating control of IoT devices into one intuitive platform, optimizing energy usage and offering personalized automation. </p>
        </div>
    </div>
    <div class="card p-4 mt-4 rounded">
        <div class="card-body">
            <h3 class="card-title">About Us</h3>
            <p class="card-text">Our company is committed to revolutionizing the way people interact with technology, providing innovative solutions that simplify and enhance daily life. With a focus on user-centric design and cutting-edge technology, we strive to empower individuals to seamlessly integrate smart devices into their homes and businesses for greater convenience and efficiency.</p>
        </div>
    </div>
</div>
@endsection