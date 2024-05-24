<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrowsingHistoryController extends Controller
{
    //
    public function index(Request $request)
    {
        $userId = $request->user()->id;
        $history = BrowsingHistory::where('user_id', $userId)->get();
        return response()->json($history);
    }
}
