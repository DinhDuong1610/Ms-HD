<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Correct_answer extends Model
{
    use HasFactory;
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
