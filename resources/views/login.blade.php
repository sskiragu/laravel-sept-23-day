@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="status">
            {{ session('status') }}
        </div>
    @endif
    <h1>Login page</h1>

    <form action="/login" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Enter email">
        @error('email')
            <span style="color:red;">
                {{ $message }}
            </span>
        @enderror
        <input type="password" name="password" placeholder="Enter password">
        @error('password')
            <span>
                {{ $message }}
            </span>
        @enderror
        <input type="submit" name="login" value="Login">
    </form>
@endsection
