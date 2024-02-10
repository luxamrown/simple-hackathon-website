<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $success = true;
        $responseMessage = "Sign In Sucess"; 
        $devMessage = "Authentication Sucess";
        $responseData = null;

        $authData = Group::where('email', $request->email)->first();

        if($authData){
            if (Hash::check($request->password, $authData->password)) {
                $success = true;
                $responseData = [
                    'isAdmin'=>$authData->is_admin ? true : false,
                    'ok'=>true
                ];

            } else {
                $success = false;
                $responseMessage = "Wrong email or password";
                $devMessage = "Authentication Failed";
            }
        } else {
            $success = false;
            $responseMessage = "Wrong email or password";
            $devMessage = "Authentication Failed";
        }

        return response([
            "success" => $success,
            "devMessage"=> $devMessage,
            "data" => $responseData,
            "message" => $responseMessage
        ]);
    }
}
