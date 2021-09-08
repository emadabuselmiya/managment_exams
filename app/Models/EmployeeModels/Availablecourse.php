<?php

namespace App\Models\EmployeeModels;

use App\Models\EmployeeModels\Course;
use App\Models\EmployeeModels\Semester;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeModels\Semesterinstructor;
use App\Models\GuardModels\Employee;

class Availablecourse extends Model
{

    protected $guarded = [];


    // protected $with = ['semesterinstructor', 'course'];

    public function semesterinstructor()
    {
        return $this->hasMany(Semesterinstructor::class)->where('active', '1');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }


    public function addClass($body)
    {
        return $this->semesterinstructor()->create($body);
    }

    /**
     * المساق مدرس اسم
     * @param $id
     * @return mixed
     */
    public function getEmployeeName($id)
    {
        // return   $this->semesterinstructor()->where('availablecourse_id', $id)->first()->employee->getEmployeeFullName();
        // // return "NAME";
        return $employee = Employee::find($id)->getEmployeeFullName();
    }

    public function getDate($type)
    {
        if ($type == "mid") {
            return $this->mid_date;
        }
        return $this->final_date;
    }

    public function getStartTime($type)
    {
        if ($type == "mid") {
            return $this->mid_start_time;
        }
        return $this->final_start_time;
    }

    public function getEndTime($type)
    {
        if ($type == "mid") {
            return $this->mid_end_time;
        }
        return $this->final_end_time;
    }

    protected $casts = [
        'mid_end_time', 'final_end_time', 'mid_start_time', 'final_start_time'
    ];



}
