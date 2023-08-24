<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming Courses Platform</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header class="shadow-lg">
        <div class="py-1 bg-blue-900"></div>
        <nav class="py-2 bg-blue-800">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/isotipo-platzi.png') }}" class="h-8 mx-auto">
            </a>
        </nav>
    </header>

    <main class="py-10">
        <div class="container px-4 mx-auto">
            @yield('content')
        </div>
    </main>

    <footer class="py-4 text-center">
        @auth
            <a href="{{ url('dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
        </footer>
    </body>

    </html>
