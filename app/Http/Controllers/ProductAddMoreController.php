<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductStock;

class ProductAddMoreController extends Controller
{
    public function addMore()
    {
        return view("addMore");
    }

    public function addMorePost(Request $request)
    {
        $request->validate([
            'addmore.*.name' => 'required',
            'addmore.*.qty' => 'required',
            'addmore.*.price' => 'required',
        ]);
    
        foreach ($request->addmore as $key => $value) {
            ProductStock::create($value);
        }
    
        return back()->with('success', 'Record Created Successfully.');
    }
}
