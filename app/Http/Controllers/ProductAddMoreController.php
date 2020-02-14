<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductStock;

class ProductAddMoreController extends Controller
{

    public function index()
    {
        $products = ProductStock::all();

        return view('add',compact('products'));
    }

    public function addMore()
    {
        $test = 7;

        return view("addMore", compact("test"));
    }

    public function addMorePost(Request $request)
    {
        $request->validate([
            'addmore.*.name' => 'required',
            'addmore.*.qty' => 'required',
            'addmore.*.price' => 'required',
            'addmore.*.test_id' => 'required'
        ]);
        // dd($request->all());
        foreach ($request->addmore as $key => $value) {
            ProductStock::create($value);
        }
   
        return back()->with('success', 'Record Created Successfully.');
    }

    public function addMoreEdit($id)
    {
        return view("addMoreEdit");
    }

    public function addMoreUpdate(Request $request, $id)
    {
        // return view("addMoreUpdate");
    }

    public function destroy($id)
    {
        // return view("addMoreUpdate");
    }
}
