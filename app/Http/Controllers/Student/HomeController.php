<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\EmployeeModels\Availablecourse;
use App\Models\EmployeeModels\Mark;
use App\Models\EmployeeModels\Semester;
use App\Models\Exam;
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
        $this->middleware('student.auth:student');
    }

    /**
     * Show the student dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('student.dashboard');
    }

    public function subject()
    {
        $courses = [];

        $student_id = Auth::guard('student')->user()->id;
        $current_semester = Semester::where('active', 1)->select('id')->first();
        $marks = Mark::where('student_id', $student_id)
//            ->where('semester_id', $current_semester->id)
//            ->where('study_status', '<>', 'W')
            ->get();

//        $incomplete_marks = Mark::where('student_id', $student_id)
//            ->where('study_status', 'I')
//            ->get();

        foreach ($marks as $mark) {
            if ($mark->study_status == 'I') {
                $courses [] = $mark;
            }

            if ($mark->semester_id == $current_semester->id){
                if ($mark->study_status != 'W') {
                    $courses [] = $mark;
                }
            }
        }

        return view('student.subject', [
            'courses' => $courses,
        ]);
    }

}
