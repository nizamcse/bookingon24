<?php

namespace App\Http\Controllers\Ta;

use App\Model\Ta\VehicleReservation\SeatLayout;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SeatLayoutController extends Controller
{
    public function index(){
        $seat_layouts = SeatLayout::where('ta_id',Auth::user()->transport_agency_id)->get();
        return view('ta.seat-layout.index')->with([
            'seat_layouts'  => $seat_layouts
        ]);
    }

    public function create(){
        return view('ta.seat-layout.create');
    }

    public function store(Request $request){
        SeatLayout::create([
            'name'  => $request->name,
            'total_row' => $request->row,
            'total_column'  => $request->column,
            'layout'    => $request->layouts,
            'number_of_seat'    => $request->number_of_seat,

        ]);

        return  redirect()->route('ta.seat-layouts');
    }
}
