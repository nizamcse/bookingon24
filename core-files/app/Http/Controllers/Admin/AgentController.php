<?php

namespace App\Http\Controllers\Admin;

use App\Model\Agent\AgentUser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgentController extends Controller
{
    public function index(){
        $agents = AgentUser::orderBy('id','desc')->get();
        return view('admin.agents.index')->with([
            'agents'    => $agents
        ]);
    }
}
