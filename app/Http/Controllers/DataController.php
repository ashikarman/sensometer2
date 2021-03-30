<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DeviceData;

class DataController extends Controller
{
    public function dashboard_data()
    {
        $data = DeviceData::paginate(15);
        return view('pages.dash_data',compact('data'));
    }
}
