<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\ParameterList;
use App\Models\SlaveRange;
class DeviceController extends Controller
{


public function config(){


    return view('pages.config');

}

public function UpdateParameterIndex()
{
    return view('pages.DeviceDataUpdate');
}

public function ParametersToDb()
{
    // $client = new GuzzleHttp\Client();
    $parameters = Http::get('http://cmsnew.aqualinkbd.com/api/parameterList');
    // $para = $parameters->getBody();
    // json_decode($parameters);
    $responseData = json_decode($parameters->getBody(), true);
    foreach ($responseData as $para) {
        $paralist = new ParameterList;
        $paralist->parameter_name = $para['parameter_name'];
        $paralist->parameter_id = $para['parameter_id'];
        $paralist->save();
    
     
    }

    return redirect()->back()->with("type","success")->with("message","parameter list updated");
    


}



public function SlaveToDb()
{
    // $client = new GuzzleHttp\Client();
    $parameters = Http::get('http://cmsnew.aqualinkbd.com/api/slaveRange');
    // $para = $parameters->getBody();
    // json_decode($parameters);
    $responseData = json_decode($parameters->getBody(), true);
    foreach ($responseData as $para) {
        $slv_range = new SlaveRange;
        $slv_range->slave_low = $para['slave_low'];
        $slv_range->slave_high = $para['slave_high'];
        $slv_range->sensor_name = $para['sensor_name'];
        $slv_range->save();
    
     
    }

    return redirect()->back()->with("type","success")->with("message","Slave map updated");
    


}

}
