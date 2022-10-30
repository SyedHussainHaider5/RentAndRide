@extends('layout')
<head>
<link href="{{ asset('css/admin_profile.css') }}" rel="stylesheet">
</head>
@section('content')

<div id = "options">
    <button class = "optionbutton" id = "carsdata">CARS DATA</button>
    <button class = "optionbutton" id = "usersdata">USERS DATA</button>
    <button class = "optionbutton" id = "rentalrequests">RENTAL REQUESTS</button>
    <button class = "optionbutton" id = "rentalhistory">RENTAL HISTORY</button>
</div>
<script>
    document.getElementById("carsdata").addEventListener("click", function() {
        window.location.href="{{url("/showcars")}}";
});
document.getElementById("usersdata").addEventListener("click", function() {
        window.location.href="{{url("/showusers")}}";
});
document.getElementById("rentalrequests").addEventListener("click", function() {
        window.location.href="{{url("/showallrequests")}}";
});
document.getElementById("rentalhistory").addEventListener("click", function() {
        window.location.href="{{url("/showrentalhistory")}}";
});
</script>
<div>
@yield('data')
</div>
@endsection

@section('script')
<script>
    
      document.getElementById("Logintag").innerHTML = "Admin Logout";
      document.getElementById("Logintag").href = "/adminlogout";
    
    //   document.getElementById("Logintag").innerHTML = "Login";
    //   document.getElementById("Logintag").href = "{{url("/login")}}";
      
</script>
@endsection