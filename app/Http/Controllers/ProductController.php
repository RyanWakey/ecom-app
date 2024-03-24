<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100', 
            'description' => 'max:250',
            'price' => 'required|numeric|regex:/^\d{1,8}(\.\d{1,2})?$/',
            'stock' => 'required|numeric|max:1000000',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = new Product;
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->stock = $validatedData['stock'];
        $product->category_id = $validatedData['category_id'];
        $product->save();

        return response()->json($product, 201);       
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return Product::findOrFail($product->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    { 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100', 
            'description' => 'max:250',
            'price' => 'required|numeric|regex:/^\d{1,8}(\.\d{1,2})?$/',
            'stock' => 'required|numeric|max:1000000',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::find($product->id);
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->price = $validatedData['price'];
        $product->stock = $validatedData['stock'];
        $product->category_id = $validatedData['category_id'];
        $product->save();
        
        return response()->json($product, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }
}
