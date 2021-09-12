<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentQuestionExam extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function exam()
    {
        return $this->belongsTo(Exam::class)->with('course');
    }
    public function student()
    {
        return $this->belongsTo(\App\Models\GuardModels\Student::class);
    }
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

}
