<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\EmployeeModels\Availablecourse;
use App\Models\EmployeeModels\Mark;
use App\Models\EmployeeModels\Semesterinstructor;
use App\Models\Exam;
use App\Models\GuardModels\Student;
use App\Models\StudentQuestionExam;
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
            'weight' => $request->input('weight'),
            'show_result' => $request->input('show_result'),
            'course_id' => $request->input('course_id'),
            'date' => $request->input('date'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
        ]);

        toastr()->success('تمت عملية الأضافة بنجاح');
        return back();

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
                'weight' => $request->input('weight'),
                'show_result' => $request->input('show_result'),
                'course_id' => $request->input('course_id'),
                'date' => $request->input('date'),
                'start_time' => $request->input('start_time'),
                'end_time' => $request->input('end_time'),
            ]);

        } catch (\Exception $e) {
        }
        toastr()->info('تمت عملية التعديل بنجاح');

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
        toastr()->error('تمت عملية الحذف بنجاح');
        return back();
    }

    public function showAllStudents($exam_id)
    {
        $exam = Exam::with('course')->findOrFail($exam_id);

        return view('employee.review.show-all-students', [
            'exam' => $exam,
        ]);
    }

    public function showStudentQuestions($exam_id, $student_id)
    {
        $exam = Exam::findOrFail($exam_id);
        $course_name = "(" . $exam->getTypeString() . ") " . $exam->course->name_ar;

        $student = Student::findOrFail($student_id);

        $questions = StudentQuestionExam::with('question', 'student', 'exam')
            ->when($exam_id, function ($query, $exam_id) {
                $query->where('exam_id', '=', $exam_id);
            })->when($student_id, function ($query, $student_id) {
                $query->where('student_id', '=', $student_id);
            })->get();

        $mark = Mark::with('course', 'student')
            ->when($exam->course->id, function ($query, $course_id) {
                $query->where('course_id', '=', $course_id);
            })->when($student_id, function ($query, $student_id) {
                $query->where('student_id', '=', $student_id);
            })->first();

//        dd($mark);

        if($exam->type == 'mid'){
            $value = $mark->mid_mark . "/" . $exam->weight;
        }else {
            $value = $mark->final_mark . "/" . $exam->weight;
        }

//        dd($request->input('mark'));
        return view('employee.review.questions', [
            'exam_name' => $course_name,
            'student_name' => $student->getFullname(),
            'questions' => $questions,
            'mark' => $value,
            'exam' => $exam,
        ]);
    }
}
