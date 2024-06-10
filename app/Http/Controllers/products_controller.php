<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class products_controller extends Controller
{
    public function index(){


        //search
        $products = Products::all();

        return view('Products.index',['products'=>$products]);

    }

    public function create(){
        return view('Products.create');
    }

    public function store(Request $request){

        // dd($request);

        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required'
        ]);

       

        

        $newProduct = Products::create($data);

        return redirect(route('product.index'));
        

    }

    public function edit(Products  $product){

        return view('products.edit',['product'=>$product]);




        
    }

    public function update(Products $product,Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required'
        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success',"Product Updated Successfullly");

    }

    public function destroy(Products $product){
        $product->delete();
        return redirect(route('product.index'))->with('success',"Product Deleted Successfullly");
    }
    

}
