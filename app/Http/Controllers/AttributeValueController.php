<?php

namespace App\Http\Controllers;

use App\Models\AttributeValue;
use App\Http\Requests\StoreAttributeValueRequest;
use App\Http\Requests\UpdateAttributeValueRequest;

class AttributeValueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return AttributeValue::with('attribute')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttributeValueRequest $request): AttributeValue
    {
        return AttributeValue::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(AttributeValue $attributeValue): AttributeValue
    {
        return $attributeValue;
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttributeValueRequest $request, AttributeValue $attributeValue): bool
    {
        return $attributeValue->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AttributeValue $attributeValue): ?bool
    {
        return $attributeValue->delete();
    }
}
