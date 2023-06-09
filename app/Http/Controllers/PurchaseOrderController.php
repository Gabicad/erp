<?php

namespace App\Http\Controllers;

use App\Models\PurchaseOrder;
use App\Http\Requests\StorePurchaseOrderRequest;
use App\Http\Requests\UpdatePurchaseOrderRequest;

class PurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return PurchaseOrder::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePurchaseOrderRequest $request): PurchaseOrder
    {
        return PurchaseOrder::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(PurchaseOrder $purchaseOrder): PurchaseOrder
    {
        return $purchaseOrder;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePurchaseOrderRequest $request, PurchaseOrder $purchaseOrder): bool
    {
        return $purchaseOrder->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PurchaseOrder $purchaseOrder): ?bool
    {
        return $purchaseOrder->delete();
    }
}
