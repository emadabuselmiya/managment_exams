<?php

namespace App\Models\EmployeeModels;

use App\Models\EmployeeModels\Course;
use Illuminate\Database\Eloquent\Model;

class Courseclass extends Model
{
    public function course()
    {
        return $this->hasMany(Course::class);
    }
}
