<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function create(){
        return view('addProduct');
    }

    public function store(Request $request){
        $formFields=$request->validate([
             'name'=>'required',
             'price'=>'required',
             
        ]);


        Product::create($formFields);

        echo 'MRIGLAAAA';
        return redirect('/jh');
        
    }

    public function show(){
        return view('products',['products'=>Product::all()]);
    }

    public function edit(Product $product){
        dd($product);
        return view('editProduct',['product'=>$product]);
    }

    public function update(){

    }
}
