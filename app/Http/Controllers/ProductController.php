<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request): Product
    {
        return Product::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product): Product
    {
        return $product;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product): bool
    {
        return $product->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product): ?bool
    {
        return $product->delete();
    }
}
