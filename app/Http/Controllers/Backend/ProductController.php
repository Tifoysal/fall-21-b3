<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function productList()
    {
        return view('admin.layouts.product-list');
    }

    public function productCreate()
    {
        return view('admin.layouts.product-create');

    }

    public function store(Request $request){
        // dd($request->all());

        Product::create([
            // field name for DB || field name for form

            'name'=>$request->name,
            'price'=>$request->price,
            'quentity'=>$request->quantity,
            'description'=>$request->description,
            

        ]);
        return redirect()->back();
    }



}
