<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $success = true;
        $responseMessage = "Sign In Success"; 
        $devMessage = "Authentication Success";
        $responseData = null;

        $authData = Group::where('email', $request->email)->first();

        if($authData){
            if (Hash::check($request->password, $authData->password)) {
                $success = true;
                $responseData = [
                    'isAdmin'=>$authData->is_admin ? true : false,
                    'ok'=>true,
                    "id" => $authData->id,
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

    public function register(Request $request){
        $success = true;
        $responseMessage = "Sign In Success"; 
        $devMessage = "Authentication Success";
        $responseData = null;

        function registerGroup($email, $password){
            $data = Group::create([
                'email' => $email,
                'password' => Hash::make($password),
                'is_admin' => false
            ]);

            if($data){
                return $data->id;
            } else {
                return false;
            }
    
        }

        $newGroup = registerGroup($request->email, $request->password);

        if($newGroup){
            $newGroupData = GroupData::create([
                'group_id'=> $newGroup,
                'team_name' => $request->team_name,
                'fullname' => $request->fullname,
                'birth' => $request->birth,
                'line_id' => $request->line_id,
                'phone_no' => $request->phone_no,
                'competition_type' => $request->competition_type,
                'cv_file' => '',
                'payment_file' => '',
                'regist_date' => date("Y-m-d",time())
            ]);

            if($newGroupData){
                $responseData = [
                    "id" => $newGroup,
                    "group_id"=> $newGroupData->id
                ];
            } else {
                $success = false;
                $responseMessage = "Register Failed";
                $devMessage = "Register Data Failed";
            }

        } else {
            $success = false;
            $responseMessage = "Register Failed";
            $devMessage = "Register Data Failed";
        }
    

        return response([
            "success" => $success,
            "devMessage"=> $devMessage,
            "data" =>  $responseData,
            "message" => $responseMessage
        ]);
    }
}