@extends('layouts.app')

@section('pageTitle', 'Home')

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
                        <a href="/cart/add" class="btn btn-primary w-100 bg-custom text-white px-4 mt-2">Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-7 mt-4">
                <div class="card p-4 rounded">
                    <div class="card-body">
                        <h3 class="card-title"><i class="fa-solid fa-download text-custom"></i> &nbsp; Download Smart App</h3>
                        <p class="card-text">SmartSync is an IoT smart application that seamlessly synchronizes and manages various internet-connected devices into SmartSync within a home or office environment.</p>
                        <a class="btn btn-primary bg-custom text-white" href="/download">Download</a>
                    </div>
                </div>
                <div class="card p-4 mt-4 rounded">
                    <div class="card-body">
                        <h3 class="card-title"><i class="fa-solid fa-question text-custom"></i> &nbsp; Why SmartSync?</h3>
                        <p class="card-text">SmartSync simplifies smart home management by consolidating control of IoT devices into one intuitive platform, optimizing energy usage and offering personalized automation. </p>
                    </div>
                </div>
                <div class="card p-4 mt-4 rounded">
                    <div class="card-body">
                        <h3 class="card-title"><i class="fa-solid fa-users text-custom"></i> &nbsp; About Us</h3>
                        <p class="card-text">Our company is committed to revolutionizing the way people interact with technology, providing innovative solutions that simplify and enhance daily life. With a focus on user-centric design and cutting-edge technology, we strive to empower individuals to seamlessly integrate smart devices into their homes and businesses for greater convenience and efficiency.</p>
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