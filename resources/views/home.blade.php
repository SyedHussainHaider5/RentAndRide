@extends('layout')
<head>
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
</head>
@section('content')
<div id = "flex_box">
    <h1 id = "websitename">RENT AND RIDE</h1>
<div id = "searchbar">
    <input type="search" id = "bar" placeholder = "Browse Our Fleet">
    <!-- <div id = "carlist"></div> -->
    <button id = "searchbutton">Hire this Car</button>    
</div>
 
<div id = "welcome">
    <h1>Welcome to Pakistan's biggest Car Hire Company</h1>
    
</div>
<div id = "motto">
    <p>You can choose to pick up your car from our showroom, or you can choose to have your Supercar/ Luxury car delivered to whichever location you want, in Pakistan.  One of our most popular locations for supercar hire is in Islamabad. Hiring a supercar in Islamabad truly lets you experience the city in a different light, as you will notice the appreciation the city has for such prestigious vehicles</p>
</div>
<div id = "browse_cars">
    <h2>Browse Through Our Luxury Car & Supercar Hire Fleet</h2>
</div>
</div>
@endsection
<!-- @section('script')
<script>
    $(document).ready(function(){
        $('#car').keyup(function(){
            var query = $(this).val();
            if(query != '')
            {
                $.ajax({
                    url:"search.blade.php",
                    method:"POST",
                    data:{query:query},
                    success:function(data)
                    {
                        $('#carlist').fadeIn();
                        $('#carlist').html(data);
                    }
                });
            }
            else{
                $('#carlist').fadeOut();
                $('#carlist').html("");
            }
        });
        $(document).on('click' 'li',function(){
            $('#car').val($(this).text());
            $('#carlist').fadeOut();
        });
    });
    
</script>
@endsection -->