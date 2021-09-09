<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\EmployeeModels\Mark;
use App\Models\Exam;
use App\Models\ExamResult;
use App\Models\Question;
use App\Models\StudentQuestionExam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamsController extends Controller
{

    public function showAllExams($id)
    {
        $exam = Exam::with('course')->where('course_id', $id)->get();
        return view('student.exams.index', [
            'exams' => $exam,
        ]);
    }

    public function details($id)
    {
        $student_id = Auth::guard('student')->user()->id;
        $exam = Exam::with('course')->findOrFail($id);

        $result = ExamResult::with('exam', 'student')
            ->when($id, function ($query, $exam_id) {
                $query->where('exam_id', '=', $exam_id);
            })->when($student_id, function ($query, $student_id) {
                $query->where('student_id', '=', $student_id);
            })->first();

        return view('student.exams.details', [
            'exam' => $exam,
            'result' => $result,
        ]);
    }

    public function start($exam_id)
    {
        $student_id = Auth::guard('student')->user()->id;
        $exam = Exam::with('course')->findOrFail($exam_id);
        $questions = Question::where('exam_id', $exam_id)->inRandomOrder()->limit($exam->number_of_questions)->get();

        try {
            $ee = StudentQuestionExam::when($exam_id, function ($query, $exam_id) {
                $query->where('exam_id', '=', $exam_id);
            })->when($student_id, function ($query, $student_id) {
                $query->where('student_id', '=', $student_id);
            })->first();

            if (empty($ee)) {
                foreach ($questions as $question) {
                    $exam_question = StudentQuestionExam::create([
                        'question_id' => $question->id,
                        'student_id' => $student_id,
                        'exam_id' => $exam->id,
                    ]);
                }
            }
        } catch (\Exception $e) {
            dd($e);
        }
        return redirect()->route('student.exams.question', $exam->id);
    }


    public function question($exam_id)
    {

        $exam = Exam::find($exam_id);
        if (checkStartExam($exam) == true) {
            $student_id = Auth::guard('student')->user()->id;
            $questions = StudentQuestionExam::with('question')
                ->when($exam_id, function ($query, $exam_id) {
                    $query->where('exam_id', '=', $exam_id);
                })
                ->when($student_id, function ($query, $student_id) {
                    $query->where('student_id', '=', $student_id);
                })->get();

            foreach ($questions as $item) {
                if ($item->answer == null) {
                    return view('student.exams.question', [
                        'exam_question' => $item,
                        'exam' => $exam,
                    ]);
                }
            }

            return view('student.exams.end_exam', [
                'questions' => $questions,
                'exam' => $exam,
            ]);
        } else {
            return redirect()->route('student.exams.details', $exam_id);
        }


    }

    public function saveAnswer(Request $request, $id)
    {
        $exam_question = StudentQuestionExam::findOrFail($id);
        $exam_question->update([
            'answer' => $request->input('answer') ?? 'z',
        ]);

        return redirect()->route('student.exams.question', $exam_question->exam_id);
    }

    public function backQuestion(Request $request, $id)
    {
        $exam = Exam::findOrFail($id);
        $question = StudentQuestionExam::findOrFail($request->input('question_exam'));

        if ($exam->back != 0) {
            return view('student.exams.question', [
                'exam_question' => $question,
                'exam_id' => $id,
            ]);
        } else {
            return back();
        }

    }

    public function check_right_answer($id)
    {
        $student_id = Auth::guard('student')->user()->id;
        $exam = Exam::findOrFail($id);

        $questions = StudentQuestionExam::with('question')
            ->when($exam->id, function ($query, $exam_id) {
                $query->where('exam_id', '=', $exam_id);
            })
            ->when($student_id, function ($query, $student_id) {
                $query->where('student_id', '=', $student_id);
            })->get();

        $value = 0;

        foreach ($questions as $item) {
            $question = Question::find($item->question_id);
            if ($item->answer == $question->right_answer) {
                $value++;
            }
        }
        ExamResult::create([
            'student_id' => $student_id,
            'exam_id' => $exam->id,
            'result_exam' => $value,
        ]);

        $course_id = $exam->course->id;
        $mark = Mark::when($student_id, function ($query, $student_id) {
            $query->where('student_id', '=', $student_id);
        })
            ->when($course_id, function ($query, $course_id) {
                $query->where('course_id', '=', $course_id);
            })->first();


        if ($exam->type == "mid") {
            $mark->update([
                'mid_mark' => $value,
            ]);

        } elseif ($exam->type == "final") {
            $mark->update([
                'final_mark' => $value,
            ]);
        }

        return redirect()->route('student.exams.details', $exam->id);
    }

}
