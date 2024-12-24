<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Difficulty_level extends Model
{
    use HasFactory;
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
