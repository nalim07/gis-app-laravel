<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? Route::currentRouteName() }}</title>

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
