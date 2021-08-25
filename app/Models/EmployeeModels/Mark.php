<?php

namespace App\Models\EmployeeModels;

use App\Models\GuardModels\Student;
use App\Models\EmployeeModels\Course;
use App\Models\EmployeeModels\Semester;
use App\Models\EmployeeModels\Studentrequest;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeModels\Semesterinstructor;

class Mark extends Model
{
  
  protected $fillable= [ 'semesterinstructor_id'];  
  
  public function student()
    {
        return $this->belongsTo(Student::class);
    }

	public function semesterinstructor()
    {
        return $this->belongsTo(Semesterinstructor::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

	public function semester()
    {
        return $this->belongsTo(Semester::class);
    }

    public function Studentrequest()
    {
        return $this->hasMany(Studentrequest::class);
    }


    public function getStudentCount(){
        return $this->belongsTo(Course::class)->count();

    }
}
