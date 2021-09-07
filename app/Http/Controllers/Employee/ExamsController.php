<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\EmployeeModels\Availablecourse;
use App\Models\EmployeeModels\Semesterinstructor;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null)
    {

        if ($id == 0) {
            $exams = Exam::with('questions', 'course')
                ->withCount('questions')/*questions_count*/
                ->get();

        } else {
            $exams = Exam::with('questions')
                ->withCount('questions')/*questions_count*/
                ->where('course_id', $id)
                ->get();
        }
        return view('employee.exams', [
            'exams' => $exams,
            'course_id' => $id,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'number_of_questions' => 'required|numeric',
        ]);

        Exam::create([
            'type' => $request->input('type'),
            'number_of_questions' => $request->input('number_of_questions'),
            'back' => $request->input('back'),
            'review' => $request->input('review'),
            'course_id' => $request->input('course_id'),
        ]);

        return back();

    }

    /**
     * Display the specified
     * resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'type' => 'required',
                'number_of_questions' => 'required|numeric',
            ]);
            $exam = Exam::findOrFail($id);
            $exam->update([
                'type' => $request->input('type'),
                'number_of_questions' => $request->input('number_of_questions'),
                'back' => $request->input('back'),
                'review' => $request->input('review'),
                'course_id' => $request->input('course_id'),
            ]);

        }catch (\Exception $e){
        }

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exam = Exam::findOrFail($id);
        $exam->delete();
        return back();
    }
}
