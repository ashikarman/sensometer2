<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DeviceData;
use App\Models\SlaveRange;

class DataController extends Controller
{
    public function dashboard_data()
    {
        $data = DeviceData::with('devices')->get();
        $map = SlaveRange::with('parameters')->get();
        return $data;
        return view('pages.dash_data',compact('data'));
    }
}
