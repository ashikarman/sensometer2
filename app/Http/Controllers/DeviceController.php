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
    $parameters = Http::get('http://testinventoryapi.aqualinkbd.com/api/parameter_list');
    // $para = $parameters->getBody();
    // json_decode($parameters);
    $responseData = json_decode($parameters->getBody(), true);
    if ($responseData != null) {
        foreach ($responseData as $para) {
            $checkParameter = ParameterList::where('parameter_name','=',$para['parameter_name'])->where('parameter_id','=',$para['parameter_id'])->first();
            if ($checkParameter == null) {
                $paralist = new ParameterList;
                $paralist->parameter_name = $para['parameter_name'];
                $paralist->parameter_id = $para['parameter_id'];
                $paralist->unit = $para['units'];
                $paralist->save();
            }

        
         
        }
    }
    

    return redirect()->back()->with("type","success")->with("message","parameter list updated");
    


}



public function SlaveToDb()
{
    // $client = new GuzzleHttp\Client();
    $parameters = Http::get('http://testinventoryapi.aqualinkbd.com/api/sensorList');
    // $para = $parameters->getBody();
    // json_decode($parameters);
    $responseData = json_decode($parameters->getBody(), true);
    if ($responseData != null) {
        foreach ($responseData as $para) {
            $checkSensor = SlaveRange::where('slave_low','=',$para['start_address'])->where('slave_high','=',$para['end_address'])->where('sensor_name','=',$para['name'])->first();
            if ($checkSensor == null) {
                $slv_range = new SlaveRange;
                $slv_range->slave_low = (int)$para['start_address'];
                $slv_range->slave_high = (int)$para['end_address'];
                $slv_range->sensor_name = $para['name'];
                $slv_range->save();
            }
           
    
        
         
        }
    }


    return redirect()->back()->with("type","success")->with("message","Slave map updated");
    


}

}
