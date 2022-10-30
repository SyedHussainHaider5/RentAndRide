@extends('admin_profile')

@section('data')
<div class = "container" id  = "addcar">
    <h1>Add Car Data</h1>
    <form action="/storecar" method = "POST">
    @csrf    
    <div class = "mb-3">
            <label><b>Name</b></label>
            <input type="text" name = "name" class = "form-control" required>
        </div>
        <div class = "mb-3">
            <label><b>Category</b></label>
            <input list = "categorys" name = "category" class = "form-control" required>
        <datalist id = "categorys">
            <option value="Sedan">
            <option value="Suv">
            <option value="HatchBack">
            <option value="Sports">
        </datalist>
        </div>
        <div class = "mb-3">
            <label><b>Image(url)</b></label>
            <input type="text" name = "image" class = "form-control" required>
        </div>
        <div class = "mb-3">
            <label><b>Rent per Day(Rs)</b></label>
            <input type="text" name = "rentperday" class = "form-control" required>
        </div>
        <div class = "mb-3">
            <label><b>Availability</b></label>
            <input list = "option" name = "availability" class = "form-control" required>
        <datalist id = "option">
            <option value="Yes">
            <option value="No">
        </datalist>
        </div>
            <input type="submit" name = "insert" value = "Insert" class = "btn btn-primary">
    </form>
</div>
<style>
#addcar{
    color: white;
}
</style>

@endsection