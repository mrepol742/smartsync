@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.nav')
    <div class="row">
        <div class="mx-auto col-md-3"></div>
        <div class="mx-auto col-md-6 col-lg-5 col-xl-4">
            <div class="card p-4 rounded">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
            <div class="footer m-3 p-2 text-custom">
                &copy; 2024 SmartSync. All Rights Reserved.
            </div>
        </div>

        <div class="mx-auto col-md-3"></div>

    </div>
</div>
@endsection