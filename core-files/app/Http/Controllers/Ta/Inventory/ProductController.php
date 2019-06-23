<?php

namespace App\Http\Controllers\Ta\Inventory;

use App\Model\Inventory\Category;
use App\Model\Inventory\Product;
use App\Model\Inventory\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        $categories = Category::all();
        $units = Unit::all();
        return view('inventory.product.index')->with([
            'products'      => $products,
            'categories'    => $categories,
            'units'         => $units
        ]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'  => 'required'
        ]);
        Product::create($request->all());
        return redirect()->back()->withMessage([
            'status'    => true,
            'text'      => 'Successfully created product.'
        ]);
    }

    public function update(Request $request,$id){
        Product::findOrFail($id)->update($request->all());
        return redirect()->back()->withMessage([
            'status'    => true,
            'text'      => 'Successfully updated region.'
        ]);
    }
    public function delete($id){
        Category::findOrFail($id)->delete();
        return redirect()->back()->withMessage([
            'status'    => true,
            'text'      => 'Successfully deleted region.'
        ]);
    }
}
