@extends('admin_profile')

@section('data')
<div id = "view">
<button class = "btn btn-primary" id = "insertbutton">Insert Car</button>
<div class = "container">
    <table class = "table table-bordered shadow text-center " id = "table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Rent Per Day</th>
            <th>Availability</th>       
        </tr>
        @foreach($carsData as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->category}}</td>
            <td>{{$data->rentperday}}</td>
            <td>{{$data->availability}}</td>
            <td><a href="/deletecar/{{$data->id}}"class = "btn btn-danger">Delete</a></td>
            <td><a href="/editcar/{{$data->id}}"class = "btn btn-success">Edit</a></td>
        </tr>
        @endforeach
    </table>
</div>
</div>
<script>
    document.getElementById("insertbutton").addEventListener("click", function() {
        window.location.href="{{url("/cars_data")}}";
});
</script>
<style>
#insertbutton{
    margin-bottom: 1rem;
}
#view{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-top: 5%;   
}
#table{
    color: white;
}
th{
    color: blue;
}
</style>
@endsection