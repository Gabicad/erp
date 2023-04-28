<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(mixed $validated)
 */
class ProductFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'value', 'product_id', 'product_variant_id'
    ];
}
