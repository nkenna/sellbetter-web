<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Request;

class Signupcontroller extends Controller
{
    public function open()
    {            
        return view('signup');
    }

    public function signup(Request $request){
        $message = "";
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $password = $request->input('password');

        try {
            $response = Http::retry(3, 5)->post('https://sellbetter-server.herokuapp.com/api/v1/user/create-user',
            [
                "name" => $name,
                "email" => $email,
                "phone" => $phone,
                "password" => $password,
            ]);
            
        } catch (RequestException $ex) {
           //echo($ex->getMessage());
           //echo($ex->getCode());

           if($ex->getCode() == 404){
               $message = "This account does not exist";
           }                 
            
        } catch (ClientException $e) {
        }catch (\Exception $e) {
            
        }
        return redirect('signin');
    
    }

    public function verify($code){
        try {
            $response = Http::retry(3, 5)->post('https://sellbetter-server.herokuapp.com/api/v1/user/verify-user',
            [
                "code" => $code
            ]);
            
        } catch (RequestException $ex) {
           //echo($ex->getMessage());
           //echo($ex->getCode());

           if($ex->getCode() == 404){
               $message = "This account does not exist";
           } 
           if($ex->getCode() == 400){
            $message = "invalid verification code";
        }                 
            
        } catch (ClientException $e) {
        }catch (\Exception $e) {            
        }
        return redirect('signin');
    }
}
