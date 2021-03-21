<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{


public function config(){


    return view('pages.config');

}

public function UpdateParameterIndex()
{
    return view('pages.parameterButton');
}

}
