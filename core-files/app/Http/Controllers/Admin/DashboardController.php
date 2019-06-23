<?php

namespace App\Http\Controllers\Admin;

use App\Model\Agent\AgentUser;
use App\Model\Ta\Auth\TaUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $agents = AgentUser::count();
        $users = AgentUser::count();
        $transport_agencies = TaUser::count();
        return view('admin.home')->with([
            'users' => $users,
            'agents'    => $agents,
            'transport_agencies'    => $transport_agencies
        ]);
    }
}
