<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'identifier',
        'slug',
        'stripe_id',
        'description'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
