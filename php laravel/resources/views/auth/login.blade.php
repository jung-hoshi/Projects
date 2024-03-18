@extends('layout.main')

@section('page-title')
    Log in
@endsection

@section('content')
    <h1>Log in</h1>
    <a href="/" class="back-button">Main Page</a>

    <form method="POST" action="/login"  class="article-form">
        @csrf

        <label for="email">Email</label>
        <input id="email" type="email" value="{{ old('email') }}" name="email">

        <label for="password">Password</label>
        <input id="password" type="password" value="{{ old('passowrd') }}" name="password">

        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember">Remember me</label>

        <input type="submit" value="Log in" class="login-btn" />
    </form>
@endsection
