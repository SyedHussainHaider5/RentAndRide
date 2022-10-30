@extends('layout')
<head>
<link href="{{ asset('css/user_profile.css') }}" rel="stylesheet">
</head>
@section('content')

<div id = "options">
    
    <button class = "optionbutton" id = "rentalhistory">RENTAL HISTORY</button>
</div>
<div class = "container" id = "form">
    <table class = "table table-bordered shadow text-center " id = "table">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email id</th>
            <th>Password</th>       
        </tr>
        
        <tr id = "information">
        <td>{{session("user")->id}}</td>
        <td>{{session("user")->first_name}}</td>
        <td>{{session("user")->last_name}}</td>
        <td>{{session("user")->email}}</td>
        <td>{{session("user")->password}}</td>
        <td><a href="/edituser/{{session('user')->id}}"class = "btn btn-success">Edit</a></td>               
        </tr>
        
    </table>
</div>
<div>   
@yield('data')
</div>
<style>
        #form{
            margin-top: 2%;
            background-color: white;
        }
        
    </style>
@endsection

@section('script')
<script>
    
      document.getElementById('Logintag').innerHTML ='{{session("user")->first_name}}'+' Logout';
      document.getElementById('Logintag').href = '/userlogout';
    //   document.getElementById("Logintag").innerHTML = "Login";
    //   document.getElementById("Logintag").href = "{{url("/login")}}";
    document.getElementById("rentalhistory").addEventListener("click", function() {
        window.location.href="{{url("/userrentalhistory")}}";
});
</script>
@endsection