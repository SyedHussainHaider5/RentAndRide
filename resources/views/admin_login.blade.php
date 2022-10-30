@extends('layout')
<head>
<link href="{{ asset('css/admin_login.css') }}" rel="stylesheet">
</head>
@section('content')
<div id = "login-form">
    <img src="images/image_3.jpg" width = "400" height = "367"alt="">
    <div id = "credentials">
        <h2>Admin Login</h2>
            <form action="/adminlogin" id = "login" method = "POST">
                @csrf
                <label for="">Username</label>
                <input type="text" placeholder= "Enter your email id" name = "admin_username" required>
                <label for="">Password</label>
                <input type="password" placeholder = "Enter your password" name = "password" required>
                <button id = "login_button">Login</button>
                <a href="" class = "tags">Forgot Password?</a>
            </form>
    </div>
</div>
@endsection