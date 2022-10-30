@extends('admin_profile')

@section('data')
<div id = "view">
<div class = "container">
    <table class = "table table-bordered shadow text-center " id = "table">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Created at</th>
            <th>Last Updated</th>       
        </tr>
        @foreach($usersData as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->first_name}}</td>
            <td>{{$data->last_name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->created_at}}</td>
            <td>{{$data->updated_at}}</td>
            <td><a href="/deleteuser/{{$data->id}}"class = "btn btn-danger">Delete User</a></td>
            
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