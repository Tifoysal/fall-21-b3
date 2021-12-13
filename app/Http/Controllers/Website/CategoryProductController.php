<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function category(){
        $categories = Category::all();
        return view('website.pages.category',compact('categories'));
    }

    public function products($id){
        $products = Product::where('category_id',$id)->get();
        return view('website.pages.product',compact('products'));
    }
}
