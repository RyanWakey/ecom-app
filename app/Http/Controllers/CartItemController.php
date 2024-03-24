<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartItemRequest;
use App\Http\Requests\UpdateCartItemRequest;
use App\Models\CartItem;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CartItem::all();
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
    public function store(StoreCartItemRequest $request)
    {
        $cartItem = CartItem::create($request->validated());
        return response()->json($cartItem, 201);   
    }

    /**
     * Display the specified resource.
     */
    public function show(CartItem $cartItem)
    {
        return CartItem::findOrFail($cartItem->id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CartItem $cartItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartItemRequest $request, CartItem $cartItem)
    {
        $cartItem->update($request->validated());
        return response()->json($cartItem, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartItem $cartItem)
    {
        $cartItem->delete();
        return response()->json(null, 204);
    }
}
