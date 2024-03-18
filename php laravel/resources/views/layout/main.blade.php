<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<header class="container">
    <span class="logo">Blog</span>
    <nav>
        <a href="/">Main</a>
        <a href="/about-us">About us</a>

        @guest
            <a href="/login">Log in </a>
            <a href="/register">Sign in </a>
        @else
            <a href="/home">{{ Auth::user()->name }}</a>
            <a href="/article/add">Add an article </a>

            <form action="/logout" method="POST">
                @csrf
                <button type="submit">Log out</button>
            </form>
        @endguest
    </nav>
</header>
<main class="container">
    @include('blocks.messages')
    @yield('content')
</main>
<footer>All rights reserved </footer>
</body>
</html>
