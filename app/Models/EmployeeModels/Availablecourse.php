<?php

namespace App\Models\EmployeeModels;

use App\Models\EmployeeModels\Course;
use App\Models\EmployeeModels\Semester;
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
        return $employee= Employee::find($id)->getEmployeeFullName();
    }

}
