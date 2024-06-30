<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories, 201);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create($request->validated());
        return response()->json($category, 201);  
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return Category::findOrFail($category->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        return response()->json($category, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(null, 204);
    }

    public function getGardenEssentialsSubcategories()
    {
        // Fetch the Garden-Essentials category
        $gardenEssentials = Category::where('name', 'Garden-Essentials')->first();

        // Ensure the category exists
        if (!$gardenEssentials) {
            return response()->json(['error' => 'Garden-Essentials category not found'], 404);
        }

        // Fetch the subcategories
        $subcategories = $gardenEssentials->subcategories()->get(['name', 'image_path']);

        // Transform the subcategories to include the image URL
        $subcategories = $subcategories->map(function ($subcategory) {
            return [
                'name' => $subcategory->name,
                'image_url' => $subcategory->image_url,
            ];
        });

        // Return the response
        return response()->json($subcategories);
    }
}
