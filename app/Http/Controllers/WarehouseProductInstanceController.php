<?php

namespace App\Http\Controllers;

use App\Models\WarehouseProductInstance;
use App\Http\Requests\StoreWarehouseProductInstanceRequest;
use App\Http\Requests\UpdateWarehouseProductInstanceRequest;

class WarehouseProductInstanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return WarehouseProductInstance::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWarehouseProductInstanceRequest $request): WarehouseProductInstance
    {
        return WarehouseProductInstance::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(WarehouseProductInstance $warehouseProductInstance): WarehouseProductInstance
    {
        return $warehouseProductInstance;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWarehouseProductInstanceRequest $request, WarehouseProductInstance $warehouseProductInstance): bool
    {
        return $warehouseProductInstance->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WarehouseProductInstance $warehouseProductInstance): ?bool
    {
        return $warehouseProductInstance->delete();
    }
}
