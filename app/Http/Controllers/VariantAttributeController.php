<?php

namespace App\Http\Controllers;

use App\Models\VariantAttribute;
use App\Http\Requests\StoreVariantAttributeRequest;
use App\Http\Requests\UpdateVariantAttributeRequest;

class VariantAttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return VariantAttribute::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVariantAttributeRequest $request): VariantAttribute
    {
        return VariantAttribute::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(VariantAttribute $variantAttribute): VariantAttribute
    {
        return $variantAttribute;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVariantAttributeRequest $request, VariantAttribute $variantAttribute): bool
    {
        return $variantAttribute->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VariantAttribute $variantAttribute): ?bool
    {
        return $variantAttribute->delete();
    }
}
