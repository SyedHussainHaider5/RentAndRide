<?php

namespace App\Http\Controllers;

use App\Models\RentalRequest;
use App\Models\CarData;
use Illuminate\Http\Request;

class RentalRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        if(session()->has('user')){
        $addrequest = new RentalRequest;
        $car = CarData::find($id);
        $user = session('user')->id;
        $addrequest->user_id = $user;
        $addrequest->car_id = $car->id;
        $addrequest->carname = $car->name;
        $addrequest->days = $request->get("days");
        $rent = $car->rentperday;
        $days = $request->get("days");
        $totalrent = $rent * $days;
        $addrequest->totalrent = $totalrent;
        $addrequest->save();
        return view('/home');
        }
        else{
            return view('/login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RentalRequest  $rentalRequest
     * @return \Illuminate\Http\Response
     */
    public function showallrequests(RentalRequest $rentalRequest)
    {
        $requests = RentalRequest::all();
        if(session()->has('admin_username')){
            return view('rental_requests_view',['requests'=>$requests]);
        }
        else{
            return view('home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RentalRequest  $rentalRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(RentalRequest $rentalRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RentalRequest  $rentalRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RentalRequest $rentalRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RentalRequest  $rentalRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(RentalRequest $rentalRequest)
    {
        //
    }
}
