<?php

namespace App\Models\EmployeeModels;

use App\Models\EmployeeModels\Plan;
use App\Models\EmployeeModels\Grade;
use App\Models\EmployeeModels\Major;
use App\Models\GuardModels\Employee;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeModels\Studentacademic;



class Department extends Model
{
    public function studentacademic()
    {
        return $this->hasMany(Studentacademic::class);
    }
    public function plan()
    {
        return $this->hasMany(Plan::class);
    }
    public function major()
    {
        return $this->hasMany(Major::class);
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }


}
