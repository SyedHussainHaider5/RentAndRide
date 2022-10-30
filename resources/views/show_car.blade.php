@extends('layout')
<head>
<link href="{{ asset('css/show_car.css') }}" rel="stylesheet">
</head>

@section('content')
<div id = "car_details">
    <!-- <img src="{{$car->image}}" width = "400" height = "367"alt=""> -->
    <div id = "credentials">
    
        <em><h1>{{$car->name}}</h1></em>
        <img src="{{$car->image}}" width = "50%" height = "50%"alt="">
        <form action="/storerequest/{{$car->id}}" id = "login" method = "POST">
                @csrf            
                <h2>Car Details</h2>               
                <h4>Category</h4>
                <p>{{$car->category}}</p>
                <h4>Rent/day</h4>
                <p name = "rentperday">Rs.{{$car->rentperday}}</p>
                <input type="number"  name = "days" placeholder="Enter no. of days" required id = "days" onfocusout = "Function();">
                <h4>Total Bill</h4>
                <label for="" id = "Total Bill"></label>
                <h4>Availability</h4> 
                <p id = "available">{{$car->availability}}</p>
                <button type = "" id = "confirm" onclick = "confirmed();">Confirm car</button>
            </form>
    </div>
</div>
<script>
    function Function() {
    let x = document.getElementById("days").value;
    console.log(x*2);
    let y = {{$car->rentperday}};
    console.log(y);
    let z = x * y;
    console.log(z);
    document.getElementById("Total Bill").innerHTML = "Rs."+z;
    }
    if(document.getElementById("available").innerHTML == 'No'){
    document.getElementById("confirm").innerHTML = "Not Available";
    document.getElementById('confirm').disabled = true;
    }
   
</script>
@endsection