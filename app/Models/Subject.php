<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subject extends Model
{
    use HasFactory;
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

    public function examPapers()
    {
        return $this->hasMany(Exam_paper::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
