<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'level',
        'percentage',
        'user_id'
    ];

    public function getLevelPercentage()
    {
        return match($this->level) {
            'beginner' => 60,
            'intermediate' => 80,
            'expert' => 95,
            default => 70
        };
    }
}
