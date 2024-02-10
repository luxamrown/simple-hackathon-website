<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupData;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    function parseUriFile($uri, $filename){
        $file = $uri;

        list($type, $file) = explode(';', $file);
        list(, $file)      = explode(',', $file);
        $fileType = explode("/", $type);

        $file = base64_decode($file);

        return array($file, $fileType[1], $filename);
    }

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
        $group = Group::findOrFail($request->group_id);

        $groupDetailData = GroupData::where('group_id', $request->group_id)->first();

        if($group && $groupDetailData){
            $groupDetailData->competition_type = $competitionType[$groupDetailData->competition_type];
            $groupDetailData->email = $group->email;
            $responseData = $groupDetailData;
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

    public function saveFile(Request $request){
        $success = true;
        $responseMessage = "Save File Success"; 
        $devMessage = "All Data Save Success";
        $group = null;

        try {
            $group = GroupData::where('group_id', $request->group_id)->first();
        } catch (\Throwable $th) {
            $success = false;
            $responseMessage = "Team Tidak Ditemukan";
            $devMessage = "Team by Id not found";
        }
        $fileCv = $typeFileCv = $fileNameCv = $filePayment = $typeFilePayment = $fileNamePayment = '';

        if($request->cv_file){
            list($fileCv, $typeFileCv, $fileNameCv) = DashboardController::parseUriFile($request->cv_file, $request->group_id . "cv" . uniqid());
        
            try {
                file_put_contents('uploaded/'. $fileNameCv . "." . $typeFileCv, $fileCv);
            } catch (\Throwable $th) {
                $success = false;
                $responseMessage = "Error when save file";
            }
        }

        if ($request->payment_file){
            list($filePayment, $typeFilePayment, $fileNamePayment) = DashboardController::parseUriFile($request->payment_file, $request->group_id . "payment" . uniqid());
        
            try {
                file_put_contents('uploaded/'. $fileNamePayment . "." . $typeFilePayment, $filePayment);
            } catch (\Throwable $th) {
                $success = false;
                $responseMessage = "Error when save file";
            }
        }

        if($success){
            $group -> update([
                'cv_file'=> $request->cv_file ? $fileNameCv . "." . $typeFileCv : $group->cv_file,
                'payment_file' => $request->payment_file ? $fileNamePayment . "." . $typeFilePayment : $group->payment_file,
            ]);
        }

        return response([
            "success" => $success,
            "devMessage"=> $devMessage,
            "data" => $group,
            "message" => $responseMessage 
        ]);




    }
}
