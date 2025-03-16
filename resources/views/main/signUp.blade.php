@extends('layouts.main')

@section('title', 'E-Garage - Signup')

@section('content')
    <div class="signup-content" id="content">
        <h1>SIGN UP</h1>
        <div class="underline"></div>
        <form action="{{ route('driver.home') }}">
            <input class="text-design" type="text" placeholder="First Name" autofocus required>
            <input type="text" placeholder="Last Name" required>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <div class="signup">
                Already have an account? <a href="{{ route('signin') }}">Sign in</a>
            </div>
            <button type="submit">SIGN UP</button>
        </form>
    </div>
@endsection
