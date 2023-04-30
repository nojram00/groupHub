<?php

namespace App\Http\Controllers;

use App\Models\parkingFloorA;
use App\Models\Vehicle;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    public function vehicleTest($parkingID){
        $vehicles = Vehicle::where('user_id', $parkingID)->get();
        foreach($vehicles as $data){
            $parkingPlateNo = $data->plate_no;
        }
        // dd($parkingPlateNo);
        // dd($parkingPlateNo);

        // $parkingFloorA = parkingFloorA::all();
        //     dd($parkingFloorA);
        return view('test', ['vehicles' => $vehicles]);
        // return view('test', $parkingPlateNo);
    }

    public function registerVehicle(Request $request)
    {
        $userName = auth()->user()->name;
        $userID = auth()->user()->id;


        $vehicleModel = $request->input('vehicle_model');
        $plateNo = $request->input('plate_no');

        $currentTime = now();

        $data = array(
            'user' => $userName,
            'user_id' => $userID,
            'vehicle_model' => $vehicleModel,
            'plate_no' => $plateNo,
            'created_at' => $currentTime,
            'updated_at' => $currentTime
        );


            // dd($data);
        DB::table('vehicle')->insert($data);
        return back()->with('message', 'Vehicle added successfully')
                    ->with('header', 'Success!');
        // return view('parkingfloors.floorA', $data);
    }
}
