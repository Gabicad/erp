<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use App\Http\Requests\StoreWarehouseRequest;
use App\Http\Requests\UpdateWarehouseRequest;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return Warehouse::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWarehouseRequest $request): Warehouse
    {
        return Warehouse::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Warehouse $warehouse): Warehouse
    {
        return $warehouse;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWarehouseRequest $request, Warehouse $warehouse): bool
    {
        return $warehouse->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Warehouse $warehouse): ?bool
    {
        return $warehouse->delete();
    }
}
