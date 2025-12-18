<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'content',
        'meta_title',
        'meta_description',
        'banner_image',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
