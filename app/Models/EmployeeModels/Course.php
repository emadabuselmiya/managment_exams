<?php

namespace App\Models\EmployeeModels;



use App\Models\EmployeeModels\Mark;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeModels\Coursedesc;
use App\Models\EmployeeModels\Courseplan;
use App\Models\EmployeeModels\Coursetype;
use App\Models\EmployeeModels\Externaltr;
use App\Models\EmployeeModels\Courseclass;
use App\Models\EmployeeModels\Availablecourse;


class Course extends Model
{

    protected $guarded = [];
    // protected $fillable = [
    //     'course_code'
    // ];

    //    protected $with = ['availablecourse'];

    public function exams()
    {
        return $this->hasMany(Course::class,);
    }
    public function mark()
    {
        return $this->hasMany(Mark::class)->with('student');
    }
    public function externaltr()
    {
        return $this->hasMany(Externaltr::class);
    }
    public function availablecourse()
    {
        return $this->hasMany(Availablecourse::class);
    }
    public function courseplan()
    {
        return $this->hasMany(Courseplan::class);
    }
    public function courseclass()
    {
        return $this->belongsTo(Courseclass::class);
    }
    public function coursedesc()
    {
        return $this->belongsTo(Coursedesc::class);
    }
    public function coursetype()
    {
        return $this->belongsTo(Coursetype::class);
    }


    /**
     * checks if the studenet registerd in the course
     */

    public function checkRegisterdStudent($id)
    { // add semester as condition
        $marks = $this->mark()->where('course_id', $this->id)->where('student_id', $id)->first();
        if (!is_null($marks)) {
            return true;
        }
        return false;
    }


    public function getStudentsCount()
    {
        $semester = Semester::where('active', 1)->first()->id;

        $registeredCourses = $this->mark;


        $val = $registeredCourses->filter(function($value , $key) use ($semester){

            return $value->semester_id == $semester;
        });


        return $val->count();
    }
}
