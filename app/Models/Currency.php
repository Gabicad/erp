<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Currency extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'symbol', 'is_default'
    ];

    protected $casts = [
        'is_default' => 'boolean',
    ];

}

