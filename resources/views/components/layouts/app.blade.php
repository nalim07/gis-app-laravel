<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{ asset('images/logo.ico') }}">

    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    @livewireStyles
    @vite('resources/css/app.css')
    @vite('resources/css/custom.css')

</head>

<body class="m-0 overflow-x-hidden">
    <x-header></x-header>
    <x-navbar></x-navbar>

    {{ $slot }}

    @livewireScripts
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
