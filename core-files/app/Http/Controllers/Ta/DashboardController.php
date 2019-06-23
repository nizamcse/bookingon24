<?php

namespace App\Http\Controllers\Ta;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index(){
        $transport_agency = Auth::user()->agency;
        return view('ta.home')->with([
            'transport_agency'  => $transport_agency
        ]);
    }
}
