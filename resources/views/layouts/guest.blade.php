<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/logos/logo.svg') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/logos/logo.svg') }}">

    <title>@yield('title') | SMP Kebangsaan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-white">

    <div class="font-sans antialiased text-gray-900 bg-white">
        {{ $slot }}
    </div>

    @livewireScripts
</body>

</html>
