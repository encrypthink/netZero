<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="flex flex-col w-screen h-screen bg-gray-100">
            @include('layouts.navigation')
            <div class="flex h-full">
                <div class="hidden sm:flex md:w-64 bg-white drop-shadow-md">
                    @include('layouts.sidebar')
                </div>
                <div class="w-full">
                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>
    </body>
</html>
