<?php

namespace App\Models\EmployeeModels;


use App\Models\GuardModels\Employee;
use App\Models\EmployeeModels\Plan;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeModels\Department;
use App\Models\EmployeeModels\Studentacademic;

class Major extends Model
{
    public function studentacademic()
    {
        return $this->hasMany(Studentacademic::class);
    }

    public function plan()
    {
        return $this->hasMany(Plan::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
