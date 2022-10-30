<?php

namespace App\Http\Controllers;

use App\Models\RentalHistory;
use App\Models\RentalRequest;
use App\Models\CarData;
use Illuminate\Http\Request;

class RentalHistoryController extends Controller
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
    public function acceptrequest(Request $request,$id)
    {
        $rentalHistory = new RentalHistory;
        $req = RentalRequest::find($id);
        $rentalHistory->user_id = $req->user_id;
        $rentalHistory->car_id = $req->car_id;
        $rentalHistory->carname = $req->carname;
        $rentalHistory->days = $req->days;
        $rentalHistory->totalrent = $req->totalrent;
        
        $update_availabilty = CarData::find($req->car_id);
        $update_availabilty->availability = "No";
        $update_availabilty->save();
        $rentalHistory->save();
        $req->delete();
        return redirect('/showallrequests'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RentalHistory  $rentalHistory
     * @return \Illuminate\Http\Response
     */
    public function showall(RentalHistory $rentalHistory)
    {
        $requests = RentalHistory::all();
        if(session()->has('admin_username')){
            return view('rental_history_view',['requests'=>$requests]);
        }
        else{
            return view('home');
        }
    }
    public function userrentalhistory(RentalHistory $rentalHistory)
    {
        $userid = session('user')->id;
        $history = RentalHistory::all()->where('user_id',$userid);  
        return view('user_rental_history_view',['requests'=>$history]);       
    }

    
}
