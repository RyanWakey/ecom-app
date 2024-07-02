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

    /**
     * Fetch the subcategories of "Garden-Essentials" with their names and images.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getGardenEssentialsSubcategories()
    {
        try {
            // Fetch the Garden-Essentials category
            $gardenEssentials = Category::where('name', 'Garden-Essentials')->first();
            
            // Ensure the category exists
            if (!$gardenEssentials) {
                return response()->json([
                    'message' => 'Garden-Essentials category not found',
                    'data' => []
                ], 404);
            }

            // Fetch the subcategories
            $subcategories = $gardenEssentials->subcategories()->get(['name', 'image_path']);

            // Transform the subcategories to include the image URL
            $subcategories = $subcategories->map(function ($subcategory) {
                return [
                    'name' => $subcategory->name,
                    'image_url' => url($subcategory->image_path),
                ];
            });

            return response()->json([
                'message' => 'Garden essentials subcategories fetched successfully',
                'data' => $subcategories
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while fetching garden essentials subcategories',
                'error' => $e->getMessage()
            ], 500);
        }
    }

     /**
     * Increment the view count for a category.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function incrementCategoryView($id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->incrementViews();

            return response()->json([
                'message' => 'Category view count incremented successfully',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while incrementing category view count',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Fetch 4 random popular categories based on view counts.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPopularCategories()
    {
        try {
            // Fetch categories ordered by view counts
            $popularCategories = Category::with('views')
                ->join('category_views', 'categories.id', '=', 'category_views.category_id')
                ->orderBy('category_views.views', 'desc')
                ->select('categories.*')
                ->limit(4)
                ->get();

            // Transform the categories to include the full image URL
            $popularCategories = $popularCategories->map(function ($category) {
                return [
                    'name' => $category->name,
                    'image_url' => $category->image_url,
                ];
            });

            return response()->json([
                'message' => 'Popular categories fetched successfully',
                'data' => $popularCategories
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'An error occurred while fetching popular categories',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
