<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
    // $parameters = Http::get('http://127.0.0.1:8000/api/parameterList');
    // return $parameters;
    return 0;
}

}
