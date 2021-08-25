<?php

namespace App\Models\EmployeeModels;

use App\Models\EmployeeModels\Mark;
use App\Models\EmployeeModels\Studentfee;
use App\Models\EmployeeModels\Studentrequest;
use App\Models\EmployeeModels\Availablecourse;
use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeModels\Studentexemption;
use App\Models\EmployeeModels\Studentsemesteravg;
use App\Models\EmployeeModels\Studentminimumcharge;

class Semester extends Model
{

    protected $fillable = [
        'semester_period', 'year', 'start_date', 'end_add_date', 'end_remove_date','end_withdrawal_date', 'final_date', 'minimumcharge', 'active'
    ];
    public function mark()
    {
        return $this->hasMany(Mark::class);
    }
    public function studentrequest()
    {
        return $this->hasMany(Studentrequest::class);
    }
    public function availablecourse()
    {
        return $this->hasMany(Availablecourse::class);
    }
    public function studentminimumcharge()
    {
        return $this->hasMany(Studentminimumcharge::class);
    }
    public function studentexemption()
    {
        return $this->hasMany(Studentexemption::class);
    }
    public function studentsemesteravg()
    {
        return $this->hasMany(Studentsemesteravg::class);
    }

    public function studentfee()
    {
        return $this->hasMany(Studentfee::class);
    }
}
