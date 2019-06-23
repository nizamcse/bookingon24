<?php

namespace App\Http\Controllers\Ta;

use App\Model\Ta\Bus;
use App\Model\VehicleReservation\Line;
use App\Model\VehicleReservation\Trip;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TripController extends Controller
{
    public function index(){
        $ta_id = Auth::user()->transport_agency_id;
        $trips = Trip::whereHas('line',function($query) use($ta_id){
            $query->where('ta_id',$ta_id);
        })->get();
        return view('ta.trip.index')->with([
            'trips' => $trips
        ]);
    }

    public function show($id){}

    public function create(){
        $lines = Line::where('ta_id',Auth::user()->transport_agency_id)->get();
        $buses = Bus::where('ta_id',Auth::user()->transport_agency_id)->get();
        return view('ta.trip.create')->with([
            'lines' => $lines,
            'buses' => $buses
        ]);
    }

    public function store(Request $request){
        Trip::create($request->all());
        return redirect()->route('ta.trips');
    }
}
