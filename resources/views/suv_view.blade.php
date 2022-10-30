@extends('browse_cars')

@section('cars')

    @foreach($allcarsData as $data)      
    <div class="card">                
        <div class="container">
            <img src='{{$data->image}}' alt="las vegas" class = "image">
        </div>
        <div class="details">
            <h3>{{$data->name}}</h3>
            <a href="/showcar/{{$data->id}}"class = "btn btn-dark">Hire</a>    
        </div>   
    </div>          
    @endforeach
@endsection