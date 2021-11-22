<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function productList()
    {
        $products= Product::with('category')->get();

        return view('admin.layouts.product-list',compact('products'));
    }

    public function productCreate()
    {
        $categories = Category::all();
        return view('admin.layouts.product-create',compact('categories'));

    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'quantity'=>'required|numeric',
            'category_id'=>'required|numeric',
            'description'=>'required'
        ]);


        Product::create([
            // field name for DB || field name for form

            'name'=>$request->name,
            'price'=>$request->price,
            'quentity'=>$request->quantity,
            'description'=>$request->description,
            'category_id'=>$request->category_id

        ]);
        return redirect()->back()->with('msg','Product created successfully.');
    }



}
