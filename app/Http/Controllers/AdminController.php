<?php

namespace App\Http\Controllers;

use App\Models\parkingFloorA;
use App\Models\parkingFloorB;
use App\Models\parkingFloorC;
use DateInterval;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function updateFloor($floorLevel ,$id){
        $plateNo = null;
        $userName = null;

        if($floorLevel == 1){
            DB::update('UPDATE
                        parkingfloora
                    SET
                        isAvailable = 0,
                        plate_number = ?,
                        parked_user = ?
                    WHERE
                        parking_id = ?',
                    [$plateNo, $userName, $id]);
        }
        if($floorLevel == 2){
            DB::update('UPDATE
                        parkingfloorb
                    SET
                        isAvailable = 0,
                        plate_number = ?,
                        parked_user = ?
                    WHERE
                        parking_id = ?',
                    [$plateNo, $userName, $id]);
        }
        if($floorLevel == 3){
            DB::update('UPDATE
                        parkingfloorc
                    SET
                        isAvailable = 0,
                        plate_number = ?,
                        parked_user = ?
                    WHERE
                        parking_id = ?',
                    [$plateNo, $userName, $id]);
        }

        return back();
    }
    public function adminDashboard()
    {
        return view('.admin.admin-dashboard');
    }
    public function adminParkingFloors($level){

        if($level == 1){
            $data = parkingFloorA::all();
        }
        if($level == 2){
            $data = parkingFloorB::all();
        }
        if($level == 3){
            $data = parkingFloorC::all();
        }


        return view('.admin.parking-floors', ["data" => $data], ['floor' => $level]);
    }

    //Display Time:
        // $time = new DateTime('now', new DateTimeZone('Asia/Manila'));
        // $timestamp = $time->format('m-d-y h:m:s');
        // $times = str_replace('-', '/', $timestamp);
        // $addOneHour = date('m-d-y h:m:s', strtotime($times . '+1 hours'));
        // $data = 'current: '.$timestamp.' one hour: '.$addOneHour;
        // dd($data);
}
