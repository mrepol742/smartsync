@extends('layouts.app')

@section('pageTitle', 'Download SmartSync App')

@section('content')
<div class="container">
    <div class="container d-flex h-100">
        <div class="row justify-content-center align-self-center">

            @include('layouts.nav')

            <div class="col-md-5 col-lg-4 col-lx-3 mt-4">
                <div class="card p-4 rounded highlight text-white">
                    <img src="/product.png" class="card-img-top" alt="SmartSync">
                    <div class="card-body">
                        <h1 class="card-title">SmartSync App
                            <span class="position-absolute top-0 translate-middle badge rounded-pill bg-danger">
                                Android App
                                <span class="visually-hidden">Support Mobile</span>
                            </span>
                        </h1>
                        <p class="card-text">IoT smart application that seamlessly synchronizes and manages various internet-connected devices into SmartSync within a home or office environment.</p>
                        <a rel=“nofollow” href="https://smartsync-download.netlify.app/" class="btn btn-primary w-100 bg-custom text-white px-4 mt-2">Download</a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-7 mt-4">
                <div class="card p-4 rounded">
                    <div class="card-body">
                        <h3 class="card-title"><i class="fa-solid fa-list-check text-custom"></i> &nbsp; Manage All Device</h3>
                    </div>
                </div>
                <div class="card p-4 mt-4 rounded">
                    <div class="card-body">
                        <h3 class="card-title"><i class="fa-solid fa-laptop-file text-custom"></i> &nbsp; Easy to control</h3>
                    </div>
                </div>
                <div class="card p-4 mt-4 rounded">
                    <div class="card-body">
                        <h3 class="card-title"><i class="fa-solid fa-calendar-xmark text-custom"></i> &nbsp; Set a Timer</h3>
                    </div>
                </div>
                <div class="card p-4 mt-4 rounded">
                    <div class="card-body">
                        <h3 class="card-title"><i class="fa-solid fa-shield-halved text-custom"></i> &nbsp; Security & Privacy</h3>
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