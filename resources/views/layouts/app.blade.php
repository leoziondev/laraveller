<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <header class="bg-white shadow-sm">
        <div class="container mx-auto flex items-center justify-between h-14">
            <div class="text-2xl text-indigo-500 font-bold">mylogo</div>
            <nav class="space-x-4">
                <a class="text-sm font-semibold text-gray-500 hover:text-indigo-500 transition" href="/">Home</a>
                <a class="text-sm font-semibold text-gray-500 hover:text-indigo-500 transition" href="about">About</a>
                <a class="text-sm font-semibold text-gray-500 hover:text-indigo-500 transition" href="{{ route('users.index') }}">Users</a>
                <a class="text-sm font-semibold text-gray-500 hover:text-indigo-500 transition" href="{{ route('posts.index') }}">Post</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto mt-8">
        @yield('content')
    </main>
</body>
</html>
