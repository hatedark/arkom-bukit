<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400&f[]=general-sans@400&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/css/modern-normalizes.css', 'resources/css/var.css', 'resources/css/components/header.css', 'resources/js/app.js'])
    </head>

    <body>
        <header x-data="{ open: false }" class="bg-header">
            <div class="header container">
                @include('layouts.header')
            </div>
        </header>

        <div style="margin: 3rem 0 3rem 0;"></div>

        <main>
            {{ $slot }}
        </main>

        <footer x-data="{ open: false }" class="footer container section">
            @include('layouts.footer')
        </footer>
    </body>

</html>
