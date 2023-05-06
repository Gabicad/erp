<?php

namespace App\Http\Controllers;

use App\Models\ProductVariantAttribute;
use App\Http\Requests\StoreProductVariantAttributeRequest;
use App\Http\Requests\UpdateProductVariantAttributeRequest;

class ProductVariantAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return ProductVariantAttribute::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductVariantAttributeRequest $request): ProductVariantAttribute
    {
        return ProductVariantAttribute::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductVariantAttribute $variantAttribute): ProductVariantAttribute
    {
        return $variantAttribute;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductVariantAttributeRequest $request, ProductVariantAttribute $variantAttribute): bool
    {
        return $variantAttribute->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductVariantAttribute $variantAttribute): ?bool
    {
        return $variantAttribute->delete();
    }
}
