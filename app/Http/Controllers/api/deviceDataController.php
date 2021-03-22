<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DeviceData;
class deviceDataController extends Controller
{
   public function dataTrim(Request $request)
   {
    $data=$request->data;
    $trim = explode("|", $data);
    $count = count($trim);
    
   //  $config = new DeviceData;
    $checkRepeat = DeviceData::where('device_id',$trim[0])->first();
    
   if($count>0){
   //  $config->device_id = $trim[0];

   for($c=1;$c<3;$c++){
      $config = new DeviceData;
      $config->device_id = $trim[0];
     $sensorData = $trim[$c];
     $slave = explode(",", $sensorData);
   //   $slave = explode("-", $sensorData);
     $d=$c-1;
     $config->slave_address = $slave[0];

     $config->parameter_id = $sensorData;
     $config->device_timestamps = $trim[3];
     $config->save();
    
   // return $slave;
   }

    
   

   //  $config->device_timestamps = $trim[3];
   
   

  
   
   }
   else{
      return "data Not Inserted";
   }
   }
}
