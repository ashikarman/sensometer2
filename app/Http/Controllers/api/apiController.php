<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\deviceConfig;
class apiController extends Controller
{
//API Fromat
  //1|1001|cms|1-2-3-4|Banani|Gulistan|faisal.com|sakil.com|1069|hi_tech_park|0|0|1|0|8080|faisal|lafizPotato|fahim|10|aq_ltd1|aq_ltd_1|aq_ltd_1|aq_ltd_1|aq_ltd_1|aq_ltd_1
  public function DeviceConfigApi(Request $request)
  {
    $data=$request->data;
    $trim = explode("|", $data);
$count = count($trim);

return $count;
    $config = new deviceConfig;
    $checkRepeat = deviceConfig::where('device_id',$trim[1])->first();
    
   if(!$checkRepeat && $trim[10]=="1"){
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
    $config->wifi1_ssid = $trim[19];
    $config->wifi1_pass = $trim[20];
    $config->wifi1_priority = $trim[21];
    $config->wifi2_ssid = $trim[22];
    $config->wifi2_pass = $trim[23];
    $config->wifi2_priority = $trim[24];
   
   

  
    $config->save();
    return $data;
   }
   //return my db infos 
   else if($checkRepeat && $trim[10]=="1"){

    // $checkRepeat = deviceConfig::where('device_id',$trim[1])->first();
    // // $speak = $checkRepeat->update($request->all());
    // // $config = new deviceConfig;
    $config = $checkRepeat;
    // // // $config = deviceConfig::all();
    $config->status;
    // $config->device_id = $trim[1];
    // $deviceType = $trim[2];
    // $config->device_type = $trim[2];
    // $config->slave_id = $trim[3];
    // $config->address1 = $trim[4];
    // $config->address2 = $trim[5];
    // $config->base_url = $trim[6];
    // $config->sub_url = $trim[7];
    // $config->device_db_id = $trim[8];
    // $config->company = $trim[9];
    // $config->sync_status = $trim[10];
    // $config->gsm_status = $trim[11];
    // $config->wifi_status = $trim[12];
    // $config->mqtt_broker = $trim[13];
    // $config->port = $trim[14];
    // $config->mqtt_user_name = $trim[15];
    // $config->mqtt_pass = $trim[16];
    // $config->device_password = $trim[17];
    // $config->data_interval = $trim[18];
    // $config->wifi1_ssid = $trim[19];
    // $config->wifi1_pass = $trim[20];
    // $config->wifi1_priority = $trim[21];
    // $config->wifi2_ssid = $trim[22];
    // $config->wifi2_pass = $trim[23];
    // $config->wifi2_priority = $trim[24];
   
   

    // // deviceConfig::whereIn('device_id',$trim[1])->update($request->all);
  
    // $config->save();
    return $config->id.'|'.$config->status."|".$config->device_id."|".$config->slave_id."|".$config->address1."|"
    .$config->address2."|".$config->base_url."|".$config->sub_url."|".$config->device_db_id."|".$config->company."|"
    .$config->sync_status."|".$config->gsm_status."|".$config->wifi_status."|".$config->mqtt_broker."|".$config->port."|"
    .$config->mqtt_user_name."|".$config->mqtt_pass."|".$config->device_password."|".$config->data_interval."|".$config->wifi1_ssid."|"
    .$config->wifi1_pass."|".$config->wifi1_priority."|".$config->wifi2_ssid."|".$config->wifi2_pass."|".$config->wifi2_priority;
   }



   //***************update from inventory***********************//
   else if($checkRepeat && $trim[10]=="0"){
    // $speak = $checkRepeat->update($request->all());
    // $config = new deviceConfig;
    $config = $checkRepeat;
    // // $config = deviceConfig::all();
    $config->status = $trim[0];
    $config->device_id = $trim[1];
    $deviceType = $trim[2];
    $config->device_type = $trim[2];
    $config->slave_id = $trim[3];
    $config->address1 = $trim[4];
    $config->address2 = $trim[5];
    $config->base_url = $trim[6];
    $config->sub_url = $trim[7];
    $config->device_db_id = $trim[8];
    $config->company = $trim[9];
    $config->sync_status = 1;
    $config->gsm_status = $trim[11];
    $config->wifi_status = $trim[12];
    $config->mqtt_broker = $trim[13];
    $config->port = $trim[14];
    $config->mqtt_user_name = $trim[15];
    $config->mqtt_pass = $trim[16];
    $config->device_password = $trim[17];
    $config->data_interval = $trim[18];
    $config->wifi1_ssid = $trim[19];
    $config->wifi1_pass = $trim[20];
    $config->wifi1_priority = $trim[21];
    $config->wifi2_ssid = $trim[22];
    $config->wifi2_pass = $trim[23];
    $config->wifi2_priority = $trim[24];
   
   

    // deviceConfig::whereIn('device_id',$trim[1])->update($request->all);
  
    $config->save();
    return "data updated";
   }

   else{
    return "data not inserted";
   }
  }
}
