@extends('layout')
<head>
<link href="{{ asset('css/browse_cars.css') }}" rel="stylesheet">
</head>
@section('content')
<div id = "flex_box">
    <h1 id = "Label" >Browse Through Our Luxury Car & Supercar Hire Fleet</h1>
    <div id = "categories">
        <button class= "category" id = "allcars">All Cars</button>
        <button class= "category" id = "sedan">Sedan</button>
        <button class= "category" id = "suv">SUV</button>
        <button class= "category" id = "hatchback">HatchBack</button>
        <button class= "category" id = "sports">Sports</button>
    </div>
</div>
<div class = "cards">   
    
    @yield('cars')
    
</div>
<!-- </div> -->
<script>
    document.getElementById("allcars").addEventListener("click", function() {
        window.location.href="{{url("/showallcars")}}";
});
document.getElementById("sedan").addEventListener("click", function() {
        window.location.href="{{url("/showsedan")}}";
});
document.getElementById("suv").addEventListener("click", function() {
        window.location.href="{{url("/showsuv")}}";
});
document.getElementById("hatchback").addEventListener("click", function() {
        window.location.href="{{url("/showhatchback")}}";
});
document.getElementById("sports").addEventListener("click", function() {
        window.location.href="{{url("/showsports")}}";
});
</script>
@endsection