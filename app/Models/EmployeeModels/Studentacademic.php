<?php

namespace App\Models\EmployeeModels;

use App\Models\EmployeeModels\Plan;
use App\Models\GuardModels\Student;
use App\Models\EmployeeModels\Major;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeModels\Department;
use App\Models\EmployeeModels\Graduationsession;

class Studentacademic extends Model
{
    protected $fillable = [
        'department_id', 'major_id', 'plan_id', 'departmentplan','student_id' , 'credit_value', 'graduation_id','balance'
    ];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

	public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
    public function plan2()
    {
        return $this->belongsTo(Plan::class, 'departmentplan');
    }
    public function major()
    {
        return $this->belongsTo(Major::class);
    }
    public function graduationsession()
    {
        return $this->belongsTo(Graduationsession::class);
    }
}
