<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deal;

class DealController extends Controller
{
    // Get global deals and user tailored deals from a User
    public function index(Request $request)
    {
        $userId = $request->user() ? $request->user()->id : null;
        
        // Fetch global deals
        $globalDeals = Deal::with('product')->whereNull('user_id')->get();

        // Fetch user-specific deals if user is authenticated
        $userDeals = $userId ? Deal::with('product')->where('user_id', $userId)->get() : collect();

        // Merge both collections
        $deals = $globalDeals->merge($userDeals);

        return response()->json($deals);
    }
}
