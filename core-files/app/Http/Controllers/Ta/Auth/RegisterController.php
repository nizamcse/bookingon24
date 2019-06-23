<?php

namespace App\Http\Controllers\Ta\Auth;

use App\Model\Ta\Auth\TaUser;
use App\Model\Ta\TransportAgency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function create(){
        return view('ta.auth.register');
    }

    public function store(Request $request){
        $transport_agency = TransportAgency::create($request->all());
        $ta_user_account = $this->createAccount($request,$transport_agency->id);
        return redirect()->route('transport-agencies');
    }

    public function createAccount(Request $request,$transport_agency_id){

        $this->validator($request->all())->validate();

        return TaUser::create([
            'name'  => $request->admin_name,
            'email' => $request->admin_email,
            'contact_no'    => $request->admin_contact_no,
            'password'  => Hash::make($request->password),
            'transport_agency_id'  => $transport_agency_id
        ]);

    }



    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'admin_name' => 'required|string|max:255',
            'admin_email' => 'required|string|email|max:255|unique:ta_users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

}
