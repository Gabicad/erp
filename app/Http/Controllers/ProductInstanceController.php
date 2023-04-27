<?php

namespace App\Http\Controllers;

use App\Models\ProductInstance;
use App\Http\Requests\StoreProductInstanceRequest;
use App\Http\Requests\UpdateProductInstanceRequest;

class ProductInstanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return ProductInstance::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductInstanceRequest $request): ProductInstance
    {
        return ProductInstance::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductInstance $productInstance): ProductInstance
    {
        return $productInstance;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductInstanceRequest $request, ProductInstance $productInstance): bool
    {
        return $productInstance->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductInstance $productInstance): ?bool
    {
        return $productInstance->delete();
    }
}
