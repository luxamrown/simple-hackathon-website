<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupData;

class PanelController extends Controller
{
    public function getListTeam(){
        $success = true;
        $responseMessage = "Group List Successfully Fetched"; 
        $devMessage = "All Data Fetch Success";

        $groupData = GroupData::all();

        $data = [];

        foreach($groupData as $group) {
            $groupNewData = Group::findOrFail($group->group_id);
            
            $newData = [
                'group_team' =>$group->team_name,
                'email'=>$groupNewData->email,
                'register_date'=>$group->regist_date,
                'is_verifed'=>$group->payment_file ? true : false
            ];

            array_push($data, $newData);
        }

        return response([
            "success" => $success,
            "devMessage"=> $devMessage,
            "data" => $data,
            "message" =>  $responseMessage
        ]);
    }
}
