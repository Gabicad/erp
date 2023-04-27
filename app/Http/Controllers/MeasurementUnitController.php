<?php

namespace App\Http\Controllers;

use App\Models\MeasurementUnit;
use App\Http\Requests\StoreMeasurementUnitRequest;
use App\Http\Requests\UpdateMeasurementUnitRequest;

class MeasurementUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return MeasurementUnit::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMeasurementUnitRequest $request):MeasurementUnit
    {
        return MeasurementUnit::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(MeasurementUnit $measurementUnit): MeasurementUnit
    {
        return $measurementUnit;
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMeasurementUnitRequest $request, MeasurementUnit $measurementUnit): bool
    {
        return $measurementUnit->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MeasurementUnit $measurementUnit): ?bool
    {
        return $measurementUnit->delete();
    }
}
