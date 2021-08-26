<?php

namespace App\Models;

use App\Models\EmployeeModels\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
    public function examResult()
    {
        return $this->hasMany(ExamResult::class);
    }
    public function studentQuestionExam()
    {
        return $this->hasMany(StudentQuestionExam::class);
    }
}
