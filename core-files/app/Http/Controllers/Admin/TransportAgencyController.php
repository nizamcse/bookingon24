<?php

namespace App\Http\Controllers\Admin;

use App\Model\Ta\TransportAgency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransportAgencyController extends Controller
{
    public function index(){
        $transport_agencies = TransportAgency::orderBy('name','acs')->get();
        return view('admin.ta.index')->with([
            'transport_agencies'    => $transport_agencies
        ]);
    }

    public function show($slug){
        $transport_agency = TransportAgency::where('slug',$slug)->first();
        return view('admin.ta.show')->with([
            'transport_agency'  => $transport_agency
        ]);
    }
}
