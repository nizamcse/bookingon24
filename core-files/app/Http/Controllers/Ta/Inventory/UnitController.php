<?php

namespace App\Http\Controllers\Ta\Inventory;

use App\Model\Inventory\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UnitController extends Controller
{
    public function index(){
        $units = Unit::orderBy('name','asc')->get();
        return view('inventory.unit.index')->with([
            'units'   => $units
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'  => 'required'
        ]);
        Unit::create($request->only('name'));
        return redirect()->back()->withMessage([
            'status'    => true,
            'text'      => 'Successfully created unit.'
        ]);
    }

    public function update(Request $request,$id){
        Unit::findOrFail($id)->update($request->only('name'));
        return redirect()->back()->withMessage([
            'status'    => true,
            'text'      => 'Successfully updated unit.'
        ]);
    }
    public function delete($id){
        Unit::findOrFail($id)->delete();
        return redirect()->back()->withMessage([
            'status'    => true,
            'text'      => 'Successfully deleted unit.'
        ]);
    }
}
