<?php

namespace App\Models\EmployeeModels;

use App\Models\EmployeeModels\Mark;
use App\Models\GuardModels\Employee;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeModels\Availablecourse;
use Illuminate\Database\Eloquent\SoftDeletes;

class Semesterinstructor extends Model
{

    // use SoftDeletes;

    protected $guarded = [];

    protected $with = ['employee'];

    public function availablecourse()
    {
        return $this->belongsTo(Availablecourse::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function mark()
    {
        return $this->hasMany(Mark::class);
    }

}
