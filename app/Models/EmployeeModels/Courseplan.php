<?php

namespace App\Models\EmployeeModels;

use App\Models\EmployeeModels\Plan;
use App\Models\EmployeeModels\Course;
use Illuminate\Database\Eloquent\Model;

class Courseplan extends Model
{
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
