<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\EmployeeModels\Availablecourse;
use App\Models\EmployeeModels\Courseplan;
use App\Models\EmployeeModels\Department;
use App\Models\EmployeeModels\Major;
use App\Models\EmployeeModels\Plan;
use App\Models\EmployeeModels\Semester;
use App\Models\EmployeeModels\Semesterinstructor;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('employee.auth:employee');
    }

    /**
     * Show the Employee dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('employee.dashboard');
    }

    public function subject()
    {
        $employee_id = Auth::guard('employee')->user()->id;
        $course = Semesterinstructor::with('availablecourse')
            ->where('employee_id', $employee_id)
            ->get();

        return view('employee.subject', [
            'availablecourse' => $course,
        ]);
    }
}
