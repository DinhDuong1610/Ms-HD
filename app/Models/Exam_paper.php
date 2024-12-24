<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exam_paper extends Model
{
    use HasFactory;
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }

    public function examAnswers()
    {
        return $this->hasMany(Exam_answer::class);
    }
}
