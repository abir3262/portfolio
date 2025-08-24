<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'type',
        'tools',
        'github_url',
        'demo_url',
        'images',
        'keywords',
        'status',
        'user_id'
    ];

    protected $casts = [
        'tools' => 'array',
        'images' => 'array',
        'keywords' => 'array'
    ];
}
