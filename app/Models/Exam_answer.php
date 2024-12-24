<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exam_answer extends Model
{
    use HasFactory;
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function examPaper()
    {
        return $this->belongsTo(Exam_paper::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
