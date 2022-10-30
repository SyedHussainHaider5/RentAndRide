@extends('layout')
<head>
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
</head>
@section('content')
<div id = "login-form">
    <img src="images/image_3.jpg" width = "500" height = "497"alt="">
    <div id = "credentials">
        <h2>Login Here</h2>
            <form action="/userlogin" id = "login" method = "POST">
                @csrf
                <label for="">Email/username</label>
                <input type="text" placeholder= "Enter your email id" name = "email">
                <label for="">Password</label>
                <input type="password" placeholder = "Enter your password" name = "password">
                <button id = "login_button">Login</button>
                <a href="" class = "tags">Forgot Password?</a>
                <a href="{{url("/admin_login")}}" class = "tags">Admin login</a>
                <p>Don't have an account?</p>
                <a href="{{url("/signup")}}" class = "tags">Sign Up</a>
                <p>Now!</p>
            </form>
    </div>
</div>
@endsection