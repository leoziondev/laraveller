<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="bg-gray-50 font-sans text-gray-700 antialiased">
    <header class="bg-white shadow-sm">
        <div class="container mx-auto flex items-center justify-between h-14">
            <div class="text-2xl text-indigo-500 font-bold">mylogo</div>
            <nav class="space-x-4">
                <a class="text-sm font-semibold text-gray-500 hover:text-indigo-500 transition" href="/">Home</a>
                <a class="text-sm font-semibold text-gray-500 hover:text-indigo-500 transition" href="about">About</a>
                <a class="text-sm font-semibold text-gray-500 hover:text-indigo-500 transition" href="services">Services</a>
                <a class="text-sm font-semibold text-gray-500 hover:text-indigo-500 transition" href="{{ route('posts.index') }}">Post</a>

                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                @endif
            </nav>
        </div>
    </header>
    <main>
        {{ $slot }}
    </main>
</body>
</html>
