<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Currency;
use App\Http\Requests\StoreCurrencyRequest;
use Illuminate\Http\Response;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return Currency::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCurrencyRequest $request): bool
    {
        $currency = new Currency($request->validated());
        return $currency->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Currency $currency): Currency
    {
        return $currency;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCurrencyRequest $request, Currency $currency): bool
    {
        return $currency->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Currency $currency): ?bool
    {
        return $currency->delete();
    }
}
