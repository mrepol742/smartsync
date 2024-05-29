<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('pageTitle') - SmartSync</title>

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="/vendor/components/font-awesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/vendor/components/font-awesome/css/brands.min.css">
    <link rel="stylesheet" href="/vendor/components/font-awesome/css/solid.min.css">
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="background-image: url('/background.svg'); background-repeat: no-repeat; background-size: cover;">
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 shadow">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        @if(!Auth::check())
                        <li class="nav-item">
                            <a class="nav-link text-black" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black">or</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-black" href="/register">Register</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a class="nav-link text-black">{{ Auth::user()->fullname}}</a>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>