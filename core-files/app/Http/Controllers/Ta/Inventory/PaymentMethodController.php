<?php

namespace App\Http\Controllers\Ta\Inventory;

use App\Model\Inventory\PaymentMethod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaymentMethodController extends Controller
{
    public function index(){
        $payment_methods = PaymentMethod::orderBy('name','asc')->get();
        return view('inventory.payment-method.index')->with([
            'payment_methods'   => $payment_methods
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'  => 'required',
        ]);
        PaymentMethod::create($request->only('name'));
        return redirect()->back()->withMessage([
            'status'    => true,
            'text'      => 'Successfully created region.'
        ]);
    }

    public function update(Request $request,$id){
        PaymentMethod::findOrFail($id)->update($request->only('name'));
        return redirect()->back()->withMessage([
            'status'    => true,
            'text'      => 'Successfully updated region.'
        ]);
    }
    public function delete($id){
        PaymentMethod::findOrFail($id)->delete();
        return redirect()->back()->withMessage([
            'status'    => true,
            'text'      => 'Successfully deleted region.'
        ]);
    }
}
