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
#
#    $config55 = new DeviceData;
#    $config55->slave_address = $data;
#    $config55->save();
#    return 'success';

    $array = explode("!", $data);
    $arrayCount = count($array);
    for($f=0;$f<$arrayCount;$f++){


    $trim = explode("|", $array[$f]);
    $count = count($trim);
for($x=1;$x<$count;$x++){
   $config2 = new DeviceData;
    $checkRepeat = DeviceData::where('device_id',$trim[0])->first();

   if($count>0){


   for($c=1;$c<2;$c++){


     $sensorData = $trim[$x];
     $slave = explode(",", $sensorData);
      $slaveCount = count($slave);
      $slaveAddress = explode("-", $slave[0]);
      for($e=0;$e<=$slaveCount-1;$e++){
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
    print_r("success");

   }

   else{

      $config1 = new DeviceData;
      $config1->device_id = $trim[0];

      $sensorData1 = $slave[$e];
      $value1 = explode("-", $sensorData1);
//   $slave = explode("-", $sensorData);

  $config1->slave_address = $value1[0];
  $config1->parameter_id = $value1[1];
  $config1->value = $value1[2];
  $config1->device_timestamps = $trim[$count-1];
  $config1->save();
#print_r("success");

   }

      }


 return "success";

   }









}



}
}
   }
}
