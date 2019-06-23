<?php

namespace App\Http\Controllers;

use App\Model\Location;
use App\Model\Ta\TransportAgency;
use App\Model\VehicleReservation\Line;
use App\Model\VehicleReservation\Trip;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(Request $request){
        $data = $request->only('from','to','journey_date','return_date','bus_company_id');

        if(count($data)){

            $from_location = Location::where('name',trim($data['from']))->first();
            $to_location = Location::where('name',trim($data['to']))->first();

            if($data['bus_company_id']){
                $ta = TransportAgency::find($data['bus_company_id']);
                $line = Line::where('departure_station',$from_location ? $from_location->id : '')
                    ->where('arrival_station',$to_location ? $to_location->id : '')
                    ->where('ta_id',$data['bus_company_id'])
                    ->first();
                if(!$line){
                    return view('route-not-found')->with([
                        'message'   => $ta ? 'Sorry! No trip found from '.$data['from']. ' to '. $data['to']. 'for '. $ta->name : 'Transport Agency Not Found'
                    ]);
                }
            }else{

                $line = Line::where('departure_station',$from_location ? $from_location->id : '')
                    ->where('arrival_station',$to_location ? $to_location->id : '')
                    ->first();
                if(!$line){
                    return view('route-not-found')->with([
                        'message'   => 'Sorry! No trip found from '.$data['from']. ' to '. $data['to']
                    ]);
                }
            }

            $trips = Trip::where('line_id',$line->id)->get();
            return view('available-vehicles')->with([
                'trips' => $trips,
                'from'  => $from_location->name,
                'to'    => $to_location->name
            ]);
        }
        $transport_companies = TransportAgency::orderBy('name','asc')->get();
        return view('welcome')->with([
            'transport_companies'   => $transport_companies,
        ]);
    }
}
