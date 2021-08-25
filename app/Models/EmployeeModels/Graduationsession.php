<?php

namespace App\Models\EmployeeModels;

use App\Models\EmployeeModels\Studentacademic;
use Illuminate\Database\Eloquent\Model;

class Graduationsession extends Model
{
    protected $guarded = []; // all columns are editable

    public function studentacademic()
    {
        return $this->hasOne(Studentacademic::class);
    }
}
