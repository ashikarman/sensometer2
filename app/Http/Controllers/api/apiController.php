<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\deviceConfig;
use App\Models\Device;
use App\Models\Sensor;
use App\Models\SlaveRange;

class apiController extends Controller
{
//API Fromat
  //1|1001|cms|1-2-3-4|Banani|Gulistan|faisal.com|sakil.com|1069|hi_tech_park|0|0|1|0|8080|faisal|lafizPotato|fahim|10|aq_ltd1|aq_ltd_1|aq_ltd_1|aq_ltd_1|aq_ltd_1|aq_ltd_1
  public function DeviceConfigApi(Request $request)
  {
    

    //array count 19,23,26
    $data=$request->data;
    $trim = explode("|", $data);
    $count = count($trim);
    $sensor_name = SlaveRange::where('slave_low','<=',(int)$trim[3])->where('slave_high','>=',(int)$trim[3])->first();
    $join='';
    $config = new deviceConfig;
    $checkRepeat = deviceConfig::where('device_id',$trim[1])->first();
   //for array cont 26 first initialize 
   
    $checkDevice = Device::where('device_code',$trim[1])->first();
if($checkDevice==null){
  $device = new Device;
$device->device_code  = $trim[1];
$device->device_name = $trim[2];
$device->save();

$sensoradd = new Sensor;

 $sensoradd->sensor_name = $sensor_name->sensor_name;
 $sensoradd->slave_id = $trim[3];
 $sensoradd->device_id = $device->id;
 $sensoradd->save();


}

if ($checkDevice!=null) {
  $checkSensor = Sensor::where('slave_id',$trim[3])->where('device_id',$checkDevice->id)->get();
if ($checkSensor == null) {

 $sensoradd = new Sensor;
 $sensoradd->sensor_name = $sensor_name->sensor_name;
 $sensoradd->slave_id = $trim[3];
 $sensoradd->device_id = $checkDevice->id;
 $sensoradd->save();
 
}
}






   if(!$checkRepeat && $trim[10]=="1" && $count=='26'){
    $config->status = $trim[0];
    $config->device_id = $trim[1];

    $config->device_type = $trim[2];
    $config->slave_id = $trim[3];
    $config->address1 = $trim[4];
    $config->address2 = $trim[5];
    $config->base_url = $trim[6];
    $config->sub_url = $trim[7];
    $config->device_db_id = $trim[8];
    $config->company = $trim[9];
    $config->sync_status = $trim[10];
    $config->gsm_status = $trim[11];
    $config->wifi_status = $trim[12];
    $config->mqtt_broker = $trim[13];
    $config->port = $trim[14];
    $config->mqtt_user_name = $trim[15];
    $config->mqtt_pass = $trim[16];
    $config->device_password = $trim[17];
    $config->data_interval = $trim[18];
    $config->number_of_wifi = $trim[19];
    $config->wifi1_ssid = $trim[20];
    $config->wifi1_pass = $trim[21];
    $config->wifi1_priority = $trim[22];
    $config->wifi2_ssid = $trim[23];
    $config->wifi2_pass = $trim[24];
    $config->wifi2_priority = $trim[25];
   
   

  
    $config->save();
    for( $c=0;$c<$count;$c++){
      if($c==3){


      }
    
      else{
     
        $join=$join.$trim[$c]."|";

      }


}
// return $join;
$bc=substr($join, 0, -1);
    return $bc;
   }

     //for array cont 23 first initialize 
   else if(!$checkRepeat && $trim[10]=="1" && $count=='23'){
    $config->status = $trim[0];
    $config->device_id = $trim[1];
    $config->device_type = $trim[2];
    $config->slave_id = $trim[3];
    $config->address1 = $trim[4];
    $config->address2 = $trim[5];
    $config->base_url = $trim[6];
    $config->sub_url = $trim[7];
    $config->device_db_id = $trim[8];
    $config->company = $trim[9];
    $config->sync_status = $trim[10];
    $config->gsm_status = $trim[11];
    $config->wifi_status = $trim[12];
    $config->mqtt_broker = $trim[13];
    $config->port = $trim[14];
    $config->mqtt_user_name = $trim[15];
    $config->mqtt_pass = $trim[16];
    $config->device_password = $trim[17];
    $config->data_interval = $trim[18];
    $config->number_of_wifi = $trim[19];
    $config->wifi1_ssid = $trim[20];
    $config->wifi1_pass = $trim[21];
    $config->wifi1_priority = $trim[22];

   
   

  
    $config->save();
    for( $c=0;$c<$count;$c++){
      if($c==3){


      }
    
      else{
     
        $join=$join.$trim[$c]."|";

      }


}
// return $join;
$bc=substr($join, 0, -1);
    return $bc;
   }
  //for array cont 19 first initialize 
   else if(!$checkRepeat && $trim[10]=="1" && $count=='19'){
    $config->status = $trim[0];
    $config->device_id = $trim[1];
    $config->device_type = $trim[2];
    $config->slave_id = $trim[3];
    $config->address1 = $trim[4];
    $config->address2 = $trim[5];
    $config->base_url = $trim[6];
    $config->sub_url = $trim[7];
    $config->device_db_id = $trim[8];
    $config->company = $trim[9];
    $config->sync_status = $trim[10];
    $config->gsm_status = $trim[11];
    $config->wifi_status = $trim[12];
    $config->mqtt_broker = $trim[13];
    $config->port = $trim[14];
    $config->mqtt_user_name = $trim[15];
    $config->mqtt_pass = $trim[16];
    $config->device_password = $trim[17];
    $config->data_interval = $trim[18];
    

   
   

  
    $config->save();
    for( $c=0;$c<$count;$c++){
      if($c==3){


      }
    
      else{
     
        $join=$join.$trim[$c]."|";

      }


}
// return $join;
$bc=substr($join, 0, -1);
    return $bc;
   }

   //return my db infos 
   else if($checkRepeat && $trim[10]=="1" && $count=="26"){

    // $checkRepeat = deviceConfig::where('device_id',$trim[1])->first();
    // // $speak = $checkRepeat->update($request->all());
    // // $config = new deviceConfig;
    $config = $checkRepeat;
    // // // $config = deviceConfig::all();
    $config->status;
  
   
   return $config->status."|".$config->device_id."|".$config->device_type."|".$config->address1."|"
    .$config->address2."|".$config->base_url."|".$config->sub_url."|".$config->device_db_id."|".$config->company."|"
    .$config->sync_status."|".$config->gsm_status."|".$config->wifi_status."|".$config->mqtt_broker."|".$config->port."|"
    .$config->mqtt_user_name."|".$config->mqtt_pass."|".$config->device_password."|".$config->data_interval."|". $config->number_of_wifi."|".$config->wifi1_ssid."|"
    .$config->wifi1_pass."|".$config->wifi1_priority."|".$config->wifi2_ssid."|".$config->wifi2_pass."|".$config->wifi2_priority;

    // // deviceConfig::whereIn('device_id',$trim[1])->update($request->all);
  //sync status 0
       
   }

   else if($checkRepeat && $trim[10]=="1" && $count=="23"){

    $config = $checkRepeat;

    $config->status;

   
   return $config->status."|".$config->device_id."|".$config->device_type."|".$config->address1."|"
    .$config->address2."|".$config->base_url."|".$config->sub_url."|".$config->device_db_id."|".$config->company."|"
    .$config->sync_status."|".$config->gsm_status."|".$config->wifi_status."|".$config->mqtt_broker."|".$config->port."|"
    .$config->mqtt_user_name."|".$config->mqtt_pass."|".$config->device_password."|".$config->data_interval."|".$config->number_of_wifi."|".$config->wifi1_ssid."|"
    .$config->wifi1_pass."|".$config->wifi1_priority;


   
  }

  else if($checkRepeat && $trim[10]=="1" && $count=="19"){

    $config = $checkRepeat;

    $config->status;

   
   return $config->status."|".$config->device_id."|".$config->device_type."|".$config->address1."|"
    .$config->address2."|".$config->base_url."|".$config->sub_url."|".$config->device_db_id."|".$config->company."|"
    .$config->sync_status."|".$config->gsm_status."|".$config->wifi_status."|".$config->mqtt_broker."|".$config->port."|"
    .$config->mqtt_user_name."|".$config->mqtt_pass."|".$config->device_password."|".$config->data_interval;


   
  }


   //***************update from inventory***********************//
   else if($checkRepeat && $trim[10]=="0" && $count=='26'){
    // $speak = $checkRepeat->update($request->all());
    // $config = new deviceConfig;
    $config = $checkRepeat;
    // // $config = deviceConfig::all();
    $config->status = $trim[0];
    $config->device_id = $trim[1];
    $config->device_type = $trim[2];
    $config->slave_id = $trim[3];
    $config->address1 = $trim[4];
    $config->address2 = $trim[5];
    $config->base_url = $trim[6];
    $config->sub_url = $trim[7];
    $config->device_db_id = $trim[8];
    $config->company = $trim[9];
    $config->sync_status = "1";
    $config->gsm_status = $trim[11];
    $config->wifi_status = $trim[12];
    $config->mqtt_broker = $trim[13];
    $config->port = $trim[14];
    $config->mqtt_user_name = $trim[15];
    $config->mqtt_pass = $trim[16];
    $config->device_password = $trim[17];
    $config->data_interval = $trim[18];
    $config->number_of_wifi = $trim[19];
    $config->wifi1_ssid = $trim[20];
    $config->wifi1_pass = $trim[21];
    $config->wifi1_priority = $trim[22];
    $config->wifi2_ssid = $trim[23];
    $config->wifi2_pass = $trim[24];
    $config->wifi2_priority = $trim[25];
   
   

    // deviceConfig::whereIn('device_id',$trim[1])->update($request->all);
  
    $config->save();
    for( $c=0;$c<$count;$c++){
      if($c==3){


      }
     else  if($c==10){

        $join=$join."1"."|";
      }
      else{
     
        $join=$join.$trim[$c]."|";

      }


}
$bc=substr($join, 0, -1);
    return $bc;
   }

   else if($checkRepeat && $trim[10]=="0" && $count=='23'){
    // $speak = $checkRepeat->update($request->all());
    // $config = new deviceConfig;
    $config = $checkRepeat;
    // // $config = deviceConfig::all();
    $config->status = $trim[0];
    $config->device_id = $trim[1];
    $config->device_type = $trim[2];
    $config->slave_id = $trim[3];
    $config->address1 = $trim[4];
    $config->address2 = $trim[5];
    $config->base_url = $trim[6];
    $config->sub_url = $trim[7];
    $config->device_db_id = $trim[8];
    $config->company = $trim[9];
    $config->sync_status = "1";
    $config->gsm_status = $trim[11];
    $config->wifi_status = $trim[12];
    $config->mqtt_broker = $trim[13];
    $config->port = $trim[14];
    $config->mqtt_user_name = $trim[15];
    $config->mqtt_pass = $trim[16];
    $config->device_password = $trim[17];
    $config->data_interval = $trim[18];
    $config->number_of_wifi = $trim[19];
    $config->wifi1_ssid = $trim[20];
    $config->wifi1_pass = $trim[21];
    $config->wifi1_priority = $trim[22];

   
   

    // deviceConfig::whereIn('device_id',$trim[1])->update($request->all);
  
    $config->save();
    for( $c=0;$c<$count;$c++){
      if($c==3){


      }
      else if($c==10){

        $join=$join."1"."|";
      }
      else{
     
        $join=$join.$trim[$c]."|";

      }


}
$bc=substr($join, 0, -1);
    return $bc;
   }

   else if($checkRepeat && $trim[10]=="0" && $count=='19'){
    // $speak = $checkRepeat->update($request->all());
    // $config = new deviceConfig;
    $config = $checkRepeat;
    // // $config = deviceConfig::all();
    $config->status = $trim[0];
    $config->device_id = $trim[1];
    $config->device_type = $trim[2];
    $config->slave_id = $trim[3];
    $config->address1 = $trim[4];
    $config->address2 = $trim[5];
    $config->base_url = $trim[6];
    $config->sub_url = $trim[7];
    $config->device_db_id = $trim[8];
    $config->company = $trim[9];
    $config->sync_status = "1";
    $config->gsm_status = $trim[11];
    $config->wifi_status = $trim[12];
    $config->mqtt_broker = $trim[13];
    $config->port = $trim[14];
    $config->mqtt_user_name = $trim[15];
    $config->mqtt_pass = $trim[16];
    $config->device_password = $trim[17];
    $config->data_interval = $trim[18];
   

   
   

    // deviceConfig::whereIn('device_id',$trim[1])->update($request->all);
  
    $config->save();
    for( $c=0;$c<$count;$c++){
      if($c==3){


      }
      else if($c==10){

        $join=$join."1"."|";
      }
      else{
     
        $join=$join.$trim[$c]."|";

      }


}
$bc=substr($join, 0, -1);
    return $bc;
   }
   else{
    return "data not inserted";
   }
  }
}
