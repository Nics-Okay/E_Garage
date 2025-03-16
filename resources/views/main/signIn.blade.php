@extends('layouts.main')

@section('title', 'E-Garage - Signin')

@section('content')
    <div class="signin-content" id="content">
        <h1>SIGN IN</h1>
        <div class="underline"></div>
        <form action="{{ route('driver.home') }}">
            <input class="text-style" type="email" placeholder="Email" autofocus required>
            <input type="password" placeholder="Password" required>
            <div class="signup">
                Don't have an account? <a href="{{ route('signup') }}">Sign up</a>
            </div>
            <button type="submit">SIGN IN</button> 
        </form>
    </div>
@endsection