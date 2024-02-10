<?php

namespace App\Http\Controllers;

use App\Models\GroupData;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getGroupData(Request $request){
        $success = true;
        $responseMessage = "Get Data Success"; 
        $devMessage = "All Data Fetch Success";
        $responseData = null;

        $competitionType = [
            'UIX'=> "UI/UX",
            'BUS'=> "Business IT Case",
            'WEB'=> "Web Development",
            'CTF'=> "Capture the Flag"
        ];

        $groupData = GroupData::where('group_id', $request->group_id)->first();

        if($groupData){
            $groupData->competition_type = $competitionType[$groupData->competition_type];
            
            $responseData = $groupData;
        } else {
            $success = false;
            $responseMessage = "Get Data Failed"; 
            $devMessage = "All Data Fetch Failed";
        }

        return response([
            "success" => $success,
            "devMessage"=> $devMessage,
            "data" => $responseData,
            "message" =>  $responseMessage
        ]);
    }
}
