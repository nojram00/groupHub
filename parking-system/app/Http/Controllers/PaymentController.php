<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Curl;

class PaymentController extends Controller
{
    public function pay(){

        $data = [
            'data' => [
                'attributes' => [
                    'line_items' => [
                        [
                            'currency' => 'PHP',
                            'amount' => 1000,
                            'description' => 'text',
                            'name' => 'Test Product',
                            'quantity' => 1,
                        ]
                    ]
                ],
                'payment_method_types' => [
                    'gcash',
                    'paymaya',
                ],
                'success_url' => 'http://localhost:8000/floor-1',
                'cancel_url' => 'http://localhost:8000',
                'description' => 'text',
            ]
        ];
        $response = Curl::to('https://api.paymongo.com/v1/checkout_sessions')
                ->withHeader('Content-type: application/json')
                ->withHeader('accept: application/json')
                ->withHeader('Authorization: Basic '.env('AUTH_PAY'))
                ->withData($data)
                ->asJson()
                ->post();

        // $response = Curl::to('https://gw.dragonpay.ph/api/collect/v1')
        //             ->withData($data)
        //             ->post();
        // session()->put('session_id', $response->data->id);
        // dd($response);


        // if($response != null){
        //     return redirect('/')->with('message', 'Park Successfully!!')
        //                         ->with('header', 'Parking Notice:');
        // }
        // else{
        //     return redirect('/')->with('message', 'Your request is not available this time, please try again later.')
        //                         ->with('header', 'Parking Notice:');
        // }

        dd($response);
        // return redirect('/')->with('message', 'Park Successfully!!')
        //                         ->with('header', 'Parking Notice:');
    }
}
