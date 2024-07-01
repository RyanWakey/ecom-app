<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deal;

class DealController extends Controller
{
    // Get global deals and user tailored deals from a User
    public function index(Request $request)
    {
        $user = $request->user();
        $userId = $user ? $user->id : null;

        // Fetch global deals
        $globalDeals = Deal::with('product')->whereNull('user_id')->get();

        // Fetch user-specific deals if user is authenticated
        $userDeals = collect();
        if ($userId) {
            // Example: Fetch deals based on user's browsing history or preferences
            $browsedProductIds = BrowsingHistory::where('user_id', $userId)->pluck('product_id');
            
            // Fetch deals matching browsing history or directly assigned to the user
            $userDeals = Deal::with('product')
                ->where(function($query) use ($browsedProductIds, $userId) {
                    $query->whereIn('product_id', $browsedProductIds)
                          ->orWhere('user_id', $userId)
                          ->orWhereJsonContains('targeting_criteria->browsing_history', 'electronics') 
                          ->orWhereJsonContains('targeting_criteria->location', 'US'); 
                })
                ->get();
        }

        // Merge both collections
        $deals = $globalDeals->merge($userDeals);

        return response()->json($deals);
    }
}
