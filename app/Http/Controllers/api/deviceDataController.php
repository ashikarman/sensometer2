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

    $array = explode("!", $data);
    $arrayCount = count($array);
    for($f=0;$f<$arrayCount;$f++){
    $trim = explode("|", $array[$f]);
    $count = count($trim);
    
   //  $config = new DeviceData;
    $checkRepeat = DeviceData::where('device_id',$trim[0])->first();
    
   if($count>0){
   //  $config->device_id = $trim[0];

   for($c=1;$c<$count-1;$c++){
      

     $sensorData = $trim[$c];
     $slave = explode(",", $sensorData);
      $slaveCount = count($slave);
      $slaveAddress = explode("-", $slave[0]);
      for($e=0;$e<$slaveCount;$e++){
         if($e>0){
         $config = new DeviceData;
         $config->device_id = $trim[0];


         $sensorData1 = $slave[$e];
         $value = explode("-", $sensorData1);
   //   $slave = explode("-", $sensorData);

     $config->slave_address = $slaveAddress[0];
     $config->parameter_id = $value[0];
     $config->value = $value[1];
     $config->device_timestamps = $trim[$count-1];
     $config->save();
   }

   else{

      $config = new DeviceData;
      $config->device_id = $trim[0];

      $sensorData1 = $slave[$e];
      $value = explode("-", $sensorData1);
//   $slave = explode("-", $sensorData);

  $config->slave_address = $value[0];
  $config->parameter_id = $value[1];
  $config->value = $value[2];
  $config->device_timestamps = $trim[$count-1];
  $config->save();

      
   }
      }

    
    
   // return $slave;
   }

    
   

   //  $config->device_timestamps = $trim[3];
   
   


   
   }

   else{
      return "data Not Inserted";
   }
}
   }
}
