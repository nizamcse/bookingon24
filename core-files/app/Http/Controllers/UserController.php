<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function profile(){
        $user = Auth::user();
        return view('user.profile.index')->with([
            'user'  => $user
        ]);
    }
}
