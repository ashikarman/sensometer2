<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\deviceConfig;
class apiController extends Controller
{
//API Fromat
  //1001|cms|1-2-3-4|Banani|Gulistan|faisal.com|sakil.com|8088|1068|AqualinkBD||0|1|0|yes|faisal|lafizBro|fahim|10|2|aq_ltd1|aq_ltd_1|aq_ltd_2|aq_ltd_2
  public function DeviceConfigApi(Request $request)
  {
    $data=$request->data;
    $trim = explode("|", $data);



    $config = new deviceConfig;
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
    return $trim[3];
  }
}
