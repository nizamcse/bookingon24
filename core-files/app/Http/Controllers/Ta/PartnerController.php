<?php

namespace App\Http\Controllers\Ta;

use App\Model\Ta\TransportAgencyPartner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PartnerController extends Controller
{
    public function index(){
        $partners = TransportAgencyPartner::where('ta_id',Auth::user()->transport_agency_id)->get();
        return view('ta.partner.index')->with([
            'partners'  => $partners
        ]);
    }
    public function show($id){
        $partner = TransportAgencyPartner::where('ta_id',Auth::user()->transport_agency_id)
            ->where('id',$id)->first();
        return view('ta.partner.show')->with([
            'partner'  => $partner
        ]);
    }
    public function create(){
        return view('ta.partner.create');
    }
    public function store(Request $request){
        TransportAgencyPartner::create($request->all());
        return redirect()->route('ta.partners');
    }
}
