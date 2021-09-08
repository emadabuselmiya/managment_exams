<?php

namespace App\Http\Middleware;

use App\Models\EmployeeModels\Availablecourse;
use App\Models\Exam;
use Closure;
use Illuminate\Http\Request;

class CreateExam
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $courses = Availablecourse::all();

        foreach ($courses as $item) {
            $exam = Exam::where("course_id", $item->course_id)->get();

            if (empty($exam[0])) {
                Exam::create([
                    'type' => 'mid',
                    'number_of_questions' => 0,
                    'back' => 0,
                    'review' => 0,
                    'course_id' => $item->course_id,
                ]);
                Exam::create([
                    'type' => 'final',
                    'number_of_questions' => 0,
                    'back' => 0,
                    'review' => 0,
                    'course_id' => $item->course_id,
                ]);
            }
        }
        return $next($request);
    }
}
