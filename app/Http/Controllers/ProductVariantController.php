<?php

namespace App\Http\Controllers;

use App\Models\ProductVariant;
use App\Http\Requests\StoreProductVariantRequest;
use App\Http\Requests\UpdateProductVariantRequest;

class ProductVariantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return ProductVariant::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductVariantRequest $request): ProductVariant
    {
        return ProductVariant::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductVariant $productVariant): ProductVariant
    {
        return $productVariant;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductVariantRequest $request, ProductVariant $productVariant): bool
    {
        return $productVariant->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductVariant $productVariant): ?bool
    {
        return $productVariant->delete();
    }
}
