@extends('admin_profile')

@section('data')
<div id = "view">
<div class = "container">
    <table class = "table table-bordered shadow text-center " id = "table">
        <tr>
            <th>Rental ID</th>
            <th>User ID</th>
            <th>Car ID</th>
            <th>Car Name</th>
            <th>Days</th>
            <th>Total Rent</th>
            <th>Accepted at</th>
                   
        </tr>
        @foreach($requests as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->user_id}}</td>
            <td>{{$data->car_id}}</td>
            <td>{{$data->carname}}</td>
            <td>{{$data->days}}</td>
            <td>{{$data->totalrent}}</td>
            <td>{{$data->created_at}}</td>
            
            
        </tr>
        @endforeach
    </table>
</div>
</div>

<style>
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