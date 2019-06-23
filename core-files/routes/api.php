<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('locations',function(){
    $locations = \App\Model\Location::pluck('name');
    return $locations;
});

Route::group(['middleware' => 'auth:agency'],function(){
    Route::get('/search/trip',function(Request $request){
        $ta_id = \Illuminate\Support\Facades\Auth::user()->transport_agency_id;
        $line = \App\Model\VehicleReservation\Line::where('departure_station',$request->from)
            ->where('arrival_station',$request->to)
            ->where('ta_id',$ta_id)->get();
        $trips = \App\Model\VehicleReservation\Trip::where('line_id',$line->id)->get();
        return $trips;

    });
});
