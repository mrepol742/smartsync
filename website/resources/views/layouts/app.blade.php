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
    @vite(['resources/sass/app.scss', 'resources/css/app.css'])
</head>

<body style="background-image: url('/background.svg'); background-repeat: no-repeat; background-size: 50%;">
    <div id="app">
        @yield('content')
    </div>
    @vite(['resources/js/app.js'])
</body>

</html>