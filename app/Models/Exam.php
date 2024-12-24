<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exam extends Model
{
    use HasFactory;
    public function examPapers()
    {
        return $this->hasMany(Exam_paper::class);
    }

    public function examDiscussions()
    {
        return $this->hasMany(Exam_discussions::class);
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'exam_details');
    }
}
