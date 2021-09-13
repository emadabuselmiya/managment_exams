<?php

namespace App\Models;

use App\Models\EmployeeModels\Availablecourse;
use App\Models\EmployeeModels\Course;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = ['date', 'start_time', 'end_time'];

    public function course()
    {
        return $this->belongsTo(Course::class)->with('availablecourse', 'mark');
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

    public function getTypeString()
    {
        if ($this->type == "mid") {
            $type = "نصفي";
        } else if ($this->type == "final") {
            $type = "نهائي";
        }

        return $type;
    }


}
