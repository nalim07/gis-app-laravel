<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="{{ asset('images/logo.ico') }}">

    <title>{{ $title ?? 'Page Title' }}</title>

    @livewireStyles
    @vite('resources/css/app.css')
    @vite(['resources/css/custom.css'])
</head>

<body>
    {{ $slot }}

    @livewireScripts
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
