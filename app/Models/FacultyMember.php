<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacultyMember extends Model
{
    protected $fillable = [
        'name',
        'designation',
        'subject',
        'qualification',
        'image',
        'description',
        'order',
        'is_active',
        'category'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
