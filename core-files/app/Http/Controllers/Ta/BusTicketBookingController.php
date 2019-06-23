<?php

namespace App\Http\Controllers\Ta;

use App\Model\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BusTicketBookingController extends Controller
{
    public function index(){
        $locations = Location::orderBy('name','asc')->get();
        return view('ta.booking.index')->with([
            'locations'  => $locations
        ]);
    }

    public function create(Request $request){
        return view('ta.booking.confirm-payment')->with($request->except('_token'));
    }
}
