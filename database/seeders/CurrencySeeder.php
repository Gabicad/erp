<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Currency::create([
            'code' => 'HUF',
            'symbol' => 'Ft',
            'is_default' => true,
        ]);
        Currency::create([
            'code' => 'EUR',
            'symbol' => '€',
            'is_default' => false,
        ]);
        Currency::create([
            'code' => 'GBP',
            'symbol' => '£',
            'is_default' => false,
        ]);
    }
}
