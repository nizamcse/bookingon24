<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $users = User::orderBy('id','desc')->get();
        return view('admin.users.index')->with([
            'users' => $users
        ]);
     }
}
