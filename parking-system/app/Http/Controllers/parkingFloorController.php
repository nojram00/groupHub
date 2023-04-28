<?php

namespace App\Http\Controllers;

use App\Models\parkingFloorA;
use App\Models\parkingFloorB;
use App\Models\parkingFloorC;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateInterval;
use DateTime;
use DateTimeZone;

class parkingFloorController extends Controller
{
    public function floors($floorNo){
        $groundLevel = parkingFloorA::all()->split(2);
        $level2 = parkingFloorB::all()->split(2);
        $level3 = parkingFloorC::all()->split(2);

        if($floorNo == 1){
            $title = 'Parking Floor - Ground Level';
            $header = 'Ground Floor';
            $floorData = [
                'floorLevel_A' => $groundLevel->get(0),
                'floorLevel_B' => $groundLevel->get(1),
                'header' => $header,
                'floor' => $floorNo,
            ];
        }
        if($floorNo == 2){
            $title = 'Parking Floor - Second Level';
            $header = 'Second Floor';
            $floorData = [
                'floorLevel_A' => $level2->get(0),
                'floorLevel_B' => $level2->get(1),
                'header' => $header,
                'floor' => $floorNo,
            ];
        }
        if($floorNo == 3){
            $title = 'Parking Floor - 3rd Level';
            $header = 'Third Floor';
            $floorData = [
                'floorLevel_A' => $level3->get(0),
                'floorLevel_B' => $level3->get(1),
                'header' => $header,
                'floor' => $floorNo,
            ];
        }

        // dd($level3);
        return view('.dashboard.floors', $floorData)
                    ->with('title', $title);
    }


    public function checkParking($floor,$parkingID){
        $userID = auth()->user()->id;

        if($floor == 1){
            $floorData = parkingFloorA::all()->where('parking_id', $parkingID);
        }
        if($floor == 2){
            $floorData = parkingFloorB::all()->where('parking_id', $parkingID);
        }if($floor == 3){
            $floorData = parkingFloorC::all()->where('parking_id', $parkingID);
        }
        $yourVehicle = Vehicle::where('user_id', $userID)->get();


        foreach($floorData as $data){
            $parkingid = $data->parking_id;
            $parkingtime = $data->time_parking;
            $parkingStatus = $data->isAvailable;
            $plateNum = $data->plate_number;
            $parkedUser = $data->parked_user;
            if($parkingStatus == 0){
                $status = 'Available';
            }
            else{
                $status = 'Unavailable';
            }
        }
        $dataToSend = [
            'parkingID' => $parkingid,
            'parkingTime' => $parkingtime, 'status' => $status ,
            'pStatus' => $parkingStatus, 'plate_no' => $plateNum,
            'userID' => $userID, 'parked_user' => $parkedUser,
            'vehicle_list' => $yourVehicle,
            'floor' => $floor
        ];

        return view('parking-confirmation',$dataToSend);
    }

    public function parkHere($floor, $parkingID, $plateNo){
        $userID = auth()->user()->id;
        $vehicleInfo = Vehicle::all()->where('user_id', $userID);
        foreach($vehicleInfo as $data){
            $userName = $data->user;
        }


        $time = new DateTime('now', new DateTimeZone('Asia/Manila'));
        $timestamp = $time->format('Y-m-d H:i:s');
        $times = str_replace('-', '/', $timestamp);
        $addOneHour = date('Y-m-d H:i:s', strtotime($times . '+1 hours'));
        // $data = 'current: '.$timestamp.' one hour: '.$addOneHour;

        if($floor == 1){
            DB::update('UPDATE
                            parkingfloorA
                        SET
                            isAvailable = 1,
                            plate_number = ?,
                            parked_user = ?,
                            time_end = ?
                        WHERE
                            parking_id = ?',
                        [$plateNo, $userName, $addOneHour, $parkingID]);
        }
        if($floor == 2){
            DB::update('UPDATE
                            parkingfloorB
                        SET
                            isAvailable = 1,
                            plate_number = ?,
                            parked_user = ?,
                            time_end = ?
                        WHERE
                            parking_id = ?',
                        [$plateNo, $userName, $addOneHour, $parkingID]);
        }if($floor == 3){
            DB::update('UPDATE
                            parkingfloorC
                        SET
                            isAvailable = 1,
                            plate_number = ?,
                            parked_user = ?,
                            time_end = ?
                        WHERE
                            parking_id = ?',
                        [$plateNo, $userName, $addOneHour, $parkingID]);
        }
        // dd($timestamp);
        return redirect('/')->with('message', 'Park Successfully')
                            ->with('header', 'Parking Notice:');
    }


    public function confirmationPrompt($floor, $parkingID, $parkingVehicle){

        $userID = auth()->user()->id;

        if($floor == 1){
            $floorData = parkingFloorA::all()->where('parking_id', $parkingID);
        }
        if($floor == 2){
            $floorData = parkingFloorB::all()->where('parking_id', $parkingID);
        }
        if($floor == 3){
            $floorData = parkingFloorC::all()->where('parking_id', $parkingID);
        }

        $yourVehicle = Vehicle::all()
                        ->where('vehicle_model', $parkingVehicle)
                        ->where('user_id', $userID);

        foreach($floorData as $data){
            $parkingid = $data->parking_id;
        }
        foreach($yourVehicle as $vehicleData){
            $vehicleModel = $vehicleData->vehicle_model;
            $vehiclePlate = $vehicleData->plate_no;
         }

        return back()->with('message', 'Are you sure you want to park here?')
                    ->with('vehicle', $vehicleModel)
                    ->with('plateNum', $vehiclePlate)
                    ->with('parkingID', $parkingid)
                    ->with('floor', $floor);

    }
    public function backToParking($parkingFloor){
        if($parkingFloor == 1){
            return redirect('/floors/1');
        }
        if($parkingFloor == 2){
            return redirect('/floors/2');
        };
        if($parkingFloor == 3){
            return redirect('/floors/3');
        }
    }
}
