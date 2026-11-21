<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Destinasi Kita Travel')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/icon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-navbar></x-navbar>

    <main>
        @section('content')
            <x-hero-section></x-hero-section>
            <x-about-section></x-about-section>
        @show
    </main>

    <x-footer></x-footer>
</body>

</html>