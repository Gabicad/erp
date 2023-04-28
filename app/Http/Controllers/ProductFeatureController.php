<?php

namespace App\Http\Controllers;

use App\Models\ProductFeature;
use App\Http\Requests\StoreProductFeatureRequest;
use App\Http\Requests\UpdateProductFeatureRequest;

class ProductFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return ProductFeature::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductFeatureRequest $request): ProductFeature
    {
        return ProductFeature::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductFeature $productFeature): ProductFeature
    {
        return $productFeature;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductFeatureRequest $request, ProductFeature $productFeature): bool
    {
        return $productFeature->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductFeature $productFeature): ?bool
    {
        return $productFeature->delete();
    }
}
