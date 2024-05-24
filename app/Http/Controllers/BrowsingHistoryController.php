<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrowsingHistory;

class BrowsingHistoryController extends Controller
{
    // Return all Browsing history of a User
    public function index(Request $request)
    {
        $userId = $request->user()->id;
        $history = BrowsingHistory::where('user_id', $userId)->get();
        return response()->json($history);
    }
}
