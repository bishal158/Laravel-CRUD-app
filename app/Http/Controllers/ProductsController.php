<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;


class ProductsController extends Controller
{
    public function index(){
        $products = Products::get();
        return view('products.index',['products' => $products]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        //dd($request->all());
        // validation
        $request->validate([
                'product_name' => 'required',
                'product_description' => 'required',
                'product_image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            ]
        );

        //Upload product image
        $imageName = time().'.'.$request->product_image->extension();
        $request->product_image->move(public_path('products'), $imageName);
        $products = new Products;
        //save to database fields
        $products->Product_Image = $imageName;
        $products->Product_Description = $request->product_description;
        $products->Product_Name = $request->product_name;
        $products->save();
        return back()->withSuccess('Product created successfully');
    }
}
