<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/deviceConfig', 'api\apiController@DeviceConfigApi');
Route::get('/parameterList', 'api\ParameterListController@parameterList');
Route::get('/slaveRange', 'api\ParameterListController@slaveRange');


Route::post('/deviceConfig', 'api\apiController@DeviceConfigApi');