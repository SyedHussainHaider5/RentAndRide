<?php

namespace App\Http\Controllers;

use App\Models\CarData;
use Illuminate\Http\Request;

class CarDataController extends Controller
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
    public function storecar(Request $request)
    {
        $insertcar = new CarData;
        $insertcar->name = $request->get("name");
        $insertcar->category = $request->get("category");
        $insertcar->image = $request->get("image");
        $insertcar->rentperday = $request->get("rentperday");
        $insertcar->availability = $request->get("availability");
        $insertcar->save();
        return view('cars_data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarData  $carData
     * @return \Illuminate\Http\Response
     */
    public function show(CarData $carData)
    {
        $carsData = CarData::all();
        if(session()->has('admin_username')){
            return view('cars_view',['carsData'=>$carsData]);
        }
        else{
            return view('home');
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarData  $carData
     * @return \Illuminate\Http\Response
     */
    public function edit(CarData $carData,$id)
    {
        $car = CarData::find($id);
        if(session()->has('admin_username')){
            return view('car_edit',['car'=>$car]);
        }
        else{
            return view('home');
        }
        
    }
    public function showcar(CarData $carData,$id)
    {
        $car = CarData::find($id);
        return view('show_car',['car'=>$car]);     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarData  $carData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarData $carData, $id)
    {
         $car = CarData::find($id);
         $car->name = $request->get('name');
         $car->category = $request->get('category');
         $car->image = $request->get('image');
         $car->rentperday = $request->get('rentperday');
         $car->availability = $request->get('availability');
         $car->save();
         return redirect('/showcars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarData  $carData
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarData $carData,$id)
    {
        $car = CarData::find($id);
        $car->delete();
        return redirect('/showcars'); 

    }
    public function showallcars(CarData $carData)
    {
        $allcarsData = CarData::all();
        return view('allcars_view',['allcarsData'=>$allcarsData]);
            
    }
    public function showsedan(CarData $carData)
    {
        $allcarsData = CarData::all()->where('category','Sedan');
        return view('sedan_view',['allcarsData'=>$allcarsData]);
            
    }
    public function showsuv(CarData $carData)
    {
        $allcarsData = CarData::all()->where('category','Suv');
        return view('suv_view',['allcarsData'=>$allcarsData]);
            
    }
    public function showhatchback(CarData $carData)
    {
        $allcarsData = CarData::all()->where('category','HatchBack');
        return view('hatchback_view',['allcarsData'=>$allcarsData]);
            
    }
    public function showsports(CarData $carData)
    {
        $allcarsData = CarData::all()->where('category','Sports');
        return view('sports_view',['allcarsData'=>$allcarsData]);
            
    }
}
