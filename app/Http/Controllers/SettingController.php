<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function open($userId)
    {            
        $userData = session('user');
        return view('setting', ['user' => $userData]);
    }
}
