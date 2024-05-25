<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class FirstController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ecommerce.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ecommerce.create_product');

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
            $request->validate([
                'product_name'=>'string',
                'category'=>'string',
                'fournisseur'=>'string',
                'quantity'=>'integer',
                'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

    
            ]
                
            );
    
            $product = new Products();
            $product->product_name = $request->input('product_name');
            $product->category = $request->input('category');
            $product->quantity = $request->input('quantity');
            $product->price = $request->input('price');
            //$product->image_path = $request->input('image_product');
            $product->image_path  = $request->file('image_path')->store('public/images');

            $product->save();
            return redirect()->route('index_page')->with('success', 'Product Created Succefully.');
    
    
        
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
