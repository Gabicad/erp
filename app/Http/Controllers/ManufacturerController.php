<?php

namespace App\Http\Controllers;

use App\Models\Manufacturer;
use App\Http\Requests\StoreAttributeRequest;
use App\Http\Requests\UpdateAttributeRequest;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return Manufacturer::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreManufacturerRequest $request)
    {
        return Manufacturer::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Manufacturer $manufacturer): Manufacturer
    {
        return $manufacturer;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateManufacturerRequest $request, Manufacturer $manufacturer): bool
    {
        return $manufacturer->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Manufacturer $manufacturer)
    {
        return $manufacturer->delete();
    }
}
