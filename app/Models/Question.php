<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;
    public function questionType()
    {
        return $this->belongsTo(Question_type::class);
    }

    public function difficultyLevel()
    {
        return $this->belongsTo(Difficulty_level::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function exams()
    {
        return $this->belongsToMany(Exam::class, 'exam_details');
    }

    public function correctAnswer()
    {
        return $this->hasOne(Correct_answer::class);
    }

    public function examAnswers()
    {
        return $this->hasMany(Exam_answer::class);
    }
}
