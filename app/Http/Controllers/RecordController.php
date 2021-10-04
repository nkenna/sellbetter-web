<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;

class RecordController extends Controller
{
    
    public function open(Request $request, $userId)
    {            
        if ($request->session()->exists('user')) {
            //dd(session('user'));
        }
        $userData = session('user');
      
        $response = Http::retry(3, 5)->post('https://sellbetter-server.herokuapp.com/api/v1/sale/user-sales',
            [
                "sellerId" => $userId
            ]);
            
        return view('record', ['user' => $userData,'sales' => $response['sales']]);
    }
}
