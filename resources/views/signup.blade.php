@extends('layouts.app')

@section('content')
    <form action="/signup" method="POST">
        @csrf
        <input type="text" name="username" placeholder="Enter username">
        @error('username')
            <span>
                {{ $message }}
            </span>
        @enderror
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
        <input type="submit" name="signup" value="Signup">
    </form>
@endsection
