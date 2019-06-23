<?php

namespace App\Http\Controllers\Ta;

use App\Model\Ta\Bus;
use App\Model\Ta\TransportAgencyPartner;
use App\Model\Ta\VehicleReservation\SeatLayout;
use App\Model\VehicleType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BusController extends Controller
{
    public function index(){
        $buses = Bus::where('ta_id',Auth::user()->transport_agency_id)->get();
        return view('ta.bus.index')->with([
            'buses' => $buses
        ]);
    }

    public function show($id){}

    public function create(){
        $partners = TransportAgencyPartner::where('ta_id',Auth::user()->transport_agency_id)->get();
        $vehicle_types = VehicleType::all();
        $layouts = SeatLayout::where('ta_id',Auth::user()->transport_agency_id)->get();
        return view('ta.bus.create')->with([
            'partners'  => $partners,
            'vehicle_types' => $vehicle_types,
            'layouts'   => $layouts
        ]);
    }

    public function store(Request $request){
        Bus::create($request->all());
        return redirect()->route('ta.buses');
    }
}
