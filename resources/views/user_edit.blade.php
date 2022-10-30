@extends('user_profile')

@section('data')
<div class = "container" id  = "updateuser">
    <h1>Update Data</h1>
    <form action="/updateuser/{{$user->id}}" method = "POST">
    @csrf    
    <div class = "mb-3">
            <label><b>First Name</b></label>
            <input type="text" name = "first_name" class = "form-control" required value = {{$user->first_name}}>
        </div>
        <div class = "mb-3">
            <label><b>Last Name</b></label>
            <input type="text" name = "last_name" class = "form-control" required value = {{$user->last_name}}>
        
        </div>
        <div class = "mb-3">
            <label><b>Email</b></label>
            <input type="text" name = "email" class = "form-control" required value = {{$user->email}}>
        </div>
        <div class = "mb-3">
            <label><b>New Password</b></label>
            <input type="text" name = "password" class = "form-control" required value = {{$user->password}}>
        </div>
        
            <input type="submit" name = "update" value = "Update" class = "btn btn-success">
    </form>
</div>
<style>
#updateuser{
    color: white;
}
</style>

@endsection