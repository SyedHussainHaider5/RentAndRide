@extends('layout')
<head>
<link href="{{ asset('css/signup.css') }}" rel="stylesheet">
</head>
@section('content')
<div id = "login-form">
    <img src="images/image_3.jpg" width = "700" height = "595"alt="">
    <div id = "credentials">
        <h2>Sign Up</h2>
            <form class = "pure-form" action="/store" id = "login" method = "POST" name = "signup_form" onsubmit = "SignupSuccessful();">
            @csrf    
            <label for="">First Name</label>
                <input type="text" name = "first_name" placeholder = "Enter First Name" required>
                <label for="">Last Name</label>
                <input type="text" name = "last_name" placeholder = "Enter Last Name" required>
                <label for="">Email</label>
                <input type="email" name = "email" placeholder= "Enter your email id" required>
                <label for="">Password</label>
                <input type="password" name = "password" id = "password" placeholder = "Enter password" required>
                <label for="">Confirm Password</label>
                <input type="password" name = "confirm_password" id = "confirm_password"placeholder = "Re-enter password" required>
                <button id = "login_button" type = "submit">Sign Up</button>
                <p>Already have an account?</p>
                <a href="{{url("/login")}}" class = "tags">Login</a>
            </form>
    </div>
</div>
<script>
//   function matchPassword() {  
//   var p = document.getElementsByName("password")  
//   var cp = document.getElementsByName("confirm_password");  
//   if(p.value != cp.value)  
//   {   
//     alert("Passwords did not match");
//     return false;
      
//   } else {  
//     return true;
//   }  
// }
var password = document.getElementById("password");
var confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

function SignupSuccessful(){
    Swal.fire(
  'Done!',
  'Signed up Successfully!',
  'success'
)
}
</script>
@endsection