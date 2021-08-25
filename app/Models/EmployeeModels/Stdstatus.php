<?php

namespace App\Models\EmployeeModels;

use App\Models\GuardModels\Student;
use Illuminate\Database\Eloquent\Model;

class Stdstatus extends Model
{
    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
