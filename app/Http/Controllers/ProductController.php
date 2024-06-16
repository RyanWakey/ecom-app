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
        $products = Product::with('images')->get();
        return response()->json($products, 200);
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
        $product = Product::create($request->validated());
        return response()->json($product, 201);       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::with('images')->findOrFail($id);
        return response()->json($product, 200);
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
        $product->update($request->validated());
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

    public function getGardenEssentials()
    {
        try {
            $gardenProducts = Product::where('category', 'Gardenware')
                                     ->inRandomOrder()
                                     ->limit(4)
                                     ->get();

            // Check if any products were found
            if ($gardenProducts->isEmpty()) {
                return response()->json([
                    'message' => 'No garden essentials found',
                    'data' => []
                ], 404);
            }

            return response()->json([
                'message' => 'Garden essentials fetched successfully',
                'data' => $gardenProducts
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while fetching garden essentials',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
