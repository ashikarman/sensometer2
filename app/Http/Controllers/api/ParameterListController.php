<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ParameterList;

class ParameterListController extends Controller
{
    public function parameterList()
    {
        $parameter = ParameterList::all();
        return $parameter;
    }
}
