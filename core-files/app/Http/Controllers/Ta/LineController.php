<?php

namespace App\Http\Controllers\Ta;

use App\Model\Location;
use App\Model\VehicleReservation\Line;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LineController extends Controller
{
    public function index(){
        $lines = Line::where('ta_id',Auth::user()->transport_agency_id)->get();
        return view('ta.line.index')->with([
            'lines' => $lines
        ]);
    }

    public function create(){
        $locations = Location::all();
        return view('ta.line.create')->with([
            'locations'  => $locations
        ]);
    }

    public function store(Request $request){
        Line::create($request->all());
        return redirect()->route('ta.lines');
    }
}
