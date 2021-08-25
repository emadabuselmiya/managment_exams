<?php

namespace App\Models\EmployeeModels;

use App\Models\EmployeeModels\Department;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeModels\Employeepersonal;

class Grade extends Model
{
    public function employeepersonal()
    {
        return $this->hasMany(Employeepersonal::class);
    }

    public function department()
    {
        return $this->hasMany(Department::class);
    }
}
