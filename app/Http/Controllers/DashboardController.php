<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;


class DashboardController extends Controller
{
    public function open(Request $request, $userId)
    {            
        if ($request->session()->exists('user')) {
            //dd(session('user'));
        }
        $userData = session('user');
        return view('dashboard', ['user' => $userData]);
    }

    public function makeSale(Request $request){
       
        
        $message = "";
        $userData = session('user');
        $content = $request->input('content');
        $sellerId = $userData['id'];
        $amount = $request->input('amount');
        $creditSale = false;
        $balance = $amount;

        try {
            $response = Http::retry(3, 5)->post('https://sellbetter-server.herokuapp.com/api/v1/sale/make-sale',
            [
                "content" => $content,
                "sellerId" => $sellerId,
                "amount" => $amount,
                "creditSale" => $creditSale,
                "balance" => $balance
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
        return redirect('dashboard/'.$userData['id'] );
    }
}
