<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Hydro') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-100 font-jakarta">

        <!-- Main Content -->
        <div class="min-h-screen flex flex-col">

            <!-- Navbar -->
            @include('layouts.partials.navbar')

            <!-- Page Content -->
            <main class="flex flex-col items-center justify-center flex-1 w-full">
                @yield('main')
            </main>

            <!-- Footer -->
            @include('layouts.partials.footer')
        </div>

        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.10.5/dist/cdn.min.js" defer></script>


    </body>
</html>
