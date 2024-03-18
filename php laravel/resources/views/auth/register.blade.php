@extends('layout.main')

@section('page-title')
    Registration
@endsection

@section('content')
    <h1>Registration</h1>
    <a href="/" class="back-button">Main Page</a>

    <form method="POST" action="/register" class="article-form">
        @csrf

        <label for="name">Name</label>
        <input id="name" type="text" value="{{ old('name') }}" name="name">

        <label for="email">Email</label>
        <input id="email" type="email" value="{{ old('email') }}" name="email">

        <label for="password">Password</label>
        <input id="password" type="password" value="{{ old('passowrd') }}" name="password">

        <label for="password-confirm">Repeat password </label>
        <input id="password-confirm" type="password" value="{{ old('password_confirmation') }}" name="password_confirmation">

        <input type="submit" value="Sign in" />
    </form>
@endsection
