<?php

namespace App\Models\EmployeeModels;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{


    protected $with=['courseplan'];
    public function studentacademic()
    {
        return $this->hasMany(Studentacademic::class);
    }
    public function studentacademic2()
    {
        return $this->hasMany(Studentacademic::class,'departmentplan');
    }
    public function courseplan()
    {
        return $this->hasMany(Courseplan::class);
    }
    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
