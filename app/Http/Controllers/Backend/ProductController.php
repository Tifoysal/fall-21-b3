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
        $products= Product::all();
        // dd($products);
        return view('admin.layouts.product-list',compact('products'));
    }

    public function productCreate()
    {
        $categories = Category::with('category')->get();
        return view('admin.layouts.product-create',compact('categories'));

    }

    public function store(Request $request){
        // dd($request->all());

        Product::create([
            // field name for DB || field name for form

            'name'=>$request->name,
            'price'=>$request->price,
            'quentity'=>$request->quantity,
            'description'=>$request->description,
            'category_id'=>$request->category
            

        ]);
        return redirect()->back();
    }



}
