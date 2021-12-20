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
    //    dd(date('Ymdhms'));
        // dd($request->all());
        $filename = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getclientOriginalExtension();
            $file->storeAs('/uploads',$filename);
        }


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
            'category_id'=>$request->category_id,
            'image'=>$filename

        ]);
        return redirect()->back()->with('msg','Product created successfully.');
    }

    public function productEdit($id){
        // dd($id);
        $product = Product::find($id);
        // dd($product);
        $categories = Category::all();
        if ($product) {
            return view('admin.layouts.product-edit',compact('product','categories'));
        }
    }

    public function productUpdate(Request $request,$id){
        // dd($request->all());
        // dd($id);
        $product = Product::find($id);
        // dd($product);
        if ($product) {
            $product->update([
            // 'name'=>$request->name,
            'price'=>$request->price,
            'quentity'=>$request->quantity,
            'description'=>$request->description,
            'category_id'=>$request->category_id,
            ]);

            return redirect()->route('admin.products')->with('msg','Product updated!');
        }

    }



}
