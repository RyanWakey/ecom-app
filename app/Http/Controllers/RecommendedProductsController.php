<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BrowsingHistory;

class RecommendedProductsController extends Controller
{   
    public function index(Request $request)
    {
        // Get the authenticated user
        $user = $request->user();

        // Fetch browsing history of the user
        $browsingHistory = BrowsingHistory::where('user_id', $user->id)
                                        ->pluck('product_id');

        // Get categories of products in the user's browsing history
        $categories = Product::whereIn('id', $browsingHistory)
                            ->pluck('category_id')
                            ->unique();

        // Fetch products from those categories, excluding those already viewed by the user
        $recommendedProducts = Product::whereIn('category_id', $categories)
                                    ->whereNotIn('id', $browsingHistory)
                                    ->take(20) // Limit to 20 recommendations
                                    ->get();

        return response()->json($recommendedProducts);
    }
}
