<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grade extends Model
{
    use HasFactory;
    public function examPapers()
    {
        return $this->hasMany(Exam_paper::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
