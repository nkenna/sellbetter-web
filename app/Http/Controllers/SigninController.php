<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Http\Client\RequestException;
use App\Exceptions\ApiRequestException;


class SigninController extends Controller
{
    public function open()
    {            
        return view('signin');
    }

    public function login(Request $request){
        $message = "";
        $phone = $request->input('phone');
        $password = $request->input('password');
        try {
            $response = Http::retry(3, 5)->post('https://sellbetter-server.herokuapp.com/api/v1/user/login-user',
            [
                "phone" => $phone,
                "password" => $password,
            ]);

            //echo($response);
            $userData = $response['user'];
            //echo($userData);
            session(['user' => $userData]);

            return redirect('dashboard/'. $userData['id']);//->with('user', $userData);

           // return view('dashboard', ['user' => $userData]);
            
        } catch (RequestException $ex) {
           echo($ex->getMessage());
           echo($ex->getCode());

           if($ex->getCode() == 404){
               $message = "This account does not exist";
           }        
           
            
        } catch (ClientException $e) {
        }catch (\Exception $e) {
            // Do some thing here...
        }

       // if($response->failed()){
       //     echo($response->status());
            //return;
       // }

        

        //dashboard/dummyuserid
        
    
        //return view('dashboard', ['response' => $response]);
    }
}
