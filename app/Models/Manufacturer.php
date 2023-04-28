<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(mixed $validated)
 */
class Manufacturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'short'
    ];
}
