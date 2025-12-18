<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'email',
        'whatsapp',
        'passing_year',
        'category',
        'location',
        'profession',
        'testimonial',
        'image',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'passing_year' => 'integer',
    ];
}
