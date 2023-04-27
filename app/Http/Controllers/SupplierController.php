<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Http\Requests\StoreSupplierRequest;
use App\Http\Requests\UpdateSupplierRequest;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return Supplier::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSupplierRequest $request): Supplier
    {
        return Supplier::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier): Supplier
    {
        return $supplier;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupplierRequest $request, Supplier $supplier): bool
    {
        return $supplier->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier): ?bool
    {
        return $supplier->delete();
    }
}
