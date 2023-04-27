<?php

namespace App\Http\Controllers;

use App\Models\PurchaseOrderItem;
use App\Http\Requests\StorePurchaseOrderItemRequest;
use App\Http\Requests\UpdatePurchaseOrderItemRequest;

class PurchaseOrderItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return  PurchaseOrderItem::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePurchaseOrderItemRequest $request) : PurchaseOrderItem
    {
        return PurchaseOrderItem::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(PurchaseOrderItem $purchaseOrderItem): PurchaseOrderItem
    {
        return  $purchaseOrderItem;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePurchaseOrderItemRequest $request, PurchaseOrderItem $purchaseOrderItem): bool
    {
        return  $purchaseOrderItem->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PurchaseOrderItem $purchaseOrderItem): ?bool
    {
        return  $purchaseOrderItem->delete();
    }
}
