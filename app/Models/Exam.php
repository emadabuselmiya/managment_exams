<?php

namespace App\Models;

use App\Models\EmployeeModels\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
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
