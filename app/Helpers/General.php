<?php


use App\Models\StudentQuestionExam;
use Illuminate\Support\Facades\Auth;

function getCategoryString($category)
{
    if ($category == 3) {
        $category = "صعب";
    } else if ($category == 2) {
        $category = "متوسط";

    } else if ($category == 1) {
        $category = "سهل";
    }

    return $category;
}

function getTypeQuestionString($type)
{
    if ($type == 1) {
        $type = "صح/خطأ";
    } else if ($type == 2) {
        $type = "اختيار متعدد";
    }

    return $type;
}


function hiddenOption($type)
{
    if ($type == 1) {
        return true;
    }
    return false;
}

function getOption($type)
{
    if ($type == 1) {
        return ['صح', 'خطأ'];
    }
    return [];
}

function calTime($exam)
{
    $timeStart = $exam->course->availablecourse[0]->getStartTime($exam->type);
    $timeEnd = $exam->course->availablecourse[0]->getEndTime($exam->type);

//    $dteStart = new DateTime($timeStart);
//    $dteEnd   = new DateTime($timeEnd);
//    $diff = $dteStart->diff($dteEnd);

    $t1 = Carbon\Carbon::parse($timeStart);
    $t2 = Carbon\Carbon::parse($timeEnd);
    $diff = $t1->diff($t2);

    return $diff->format("%H:%I:%S");
}

function checkStartExam($exam)
{
    $startTime = $exam->start_time->format("h:i:s");
    $endTime = $exam->end_time->format("h:i:s");
    $date = $exam->date->format("Y-m-d");
    $now = Carbon\Carbon::now();


    if ($now->format('Y-m-d') == $date || $now->format('h:i:s') >= $startTime && $now->format('h:i:s') <= $endTime) {
        $result = $exam->examResult;
        if (empty($result[0]) == true) {
            return true;
        }
    }
    return false;
}

function randomOption($optionA, $optionB, $optionC, $optionD)
{
    $options = array(
        'optionA' => $optionA,
        'optionB' => $optionB,
        'optionC' => $optionC,
        'optionD' => $optionD
    );

    $keys = array_keys($options);
    shuffle($keys);
    $random = array();
    foreach ($keys as $key) {
        $random[$key] = $options[$key];
    }
    return $random;
}


function numberQuestions($id)
{
    $student_id = Auth::guard('student')->user()->id;
    $questions = StudentQuestionExam::with('question')
        ->when($id, function ($query, $exam_id) {
            $query->where('exam_id', '=', $exam_id);
        })
        ->when($student_id, function ($query, $student_id) {
            $query->where('student_id', '=', $student_id);
        })->get();

    return $questions;
}

function getEndTime($exam_id)
{
    $exam = \App\Models\Exam::find($exam_id);
    $endTime = $exam->course->availablecourse[0]->getEndTime($exam->type);
//    $datetime = $endTime->format('%H:%I:%S');

    $datetime = Carbon\Carbon::parse($endTime)->format("Y-m-d H:i:s");
    return $datetime;
}

function getMarkStudent($mark, $exam)
{
    if ($exam->type == "mid") {
        $value = $mark->mid_mark ?? 0;
        return $value . "/" . $exam->weight;
    } elseif ($exam->type == "final") {
        $value = $mark->final_mark ?? 0;
        return $value . "/" . $exam->weight;
    } else {
        return null;
    }
}

function getRightAnswer($question)
{
    $question = \App\Models\Question::findOrFail($question->id);

    if ($question->right_answer == 'optionA') {
        return $question->optionA;
    } elseif ($question->right_answer == 'optionB') {
        return $question->optionB;
    } elseif ($question->right_answer == 'optionC') {
        return $question->optionC;
    } else {
        return $question->optionD;
    }
}


