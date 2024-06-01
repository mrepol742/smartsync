@extends('layouts.app')

@section('pageTitle', 'Reset Password')

@section('content')
<div class="container">
    @include('layouts.nav')
    <div class="row">
        <div class="mx-auto col-md-3"></div>
        <div class="mx-auto col-md-6 col-lg-5 col-xl-4">
            <div class="card p-4 rounded">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="text-md-end">{{ __('Email Address') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-0">
                            <button type="submit" class="btn btn-primary w-100 bg-custom">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
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