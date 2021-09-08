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

function getTypeExamString($type)
{
    if ($type == "mid") {
        $type = "نصفي";
    } else if ($type == "final") {
        $type = "نهائي";
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

function getFullname($user)
{
    $fullname = $user->first_name . " " . $user->second_name . " " . $user->fourth_name;
    return $fullname;
}

function calTime($exam)
{
    $timeStart = $exam->course->availablecourse[0]->getStartTime($exam->type);
    $timeEnd = $exam->course->availablecourse[0]->getEndTime($exam->type);
    $t1 = Carbon\Carbon::parse($timeStart);
    $t2 = Carbon\Carbon::parse($timeEnd);
    $diff = $t1->diff($t2);
//    dd($diff);
    return $diff->h . ":" . $diff->m . ":" . $diff->s;
}

function checkStartExam($exam)
{
    $startTime = $exam->course->availablecourse[0]->getStartTime($exam->type);
    $endTime = $exam->course->availablecourse[0]->getEndTime($exam->type);
    $date = $exam->course->availablecourse[0]->getDate($exam->type);

    $dateC = Carbon\Carbon::parse($date)->format("Y-m-d");
    $startTimeC = Carbon\Carbon::parse($startTime)->format("h:i:s");
    $endTimeC = Carbon\Carbon::parse($endTime)->format("h:i:s");
    $now = Carbon\Carbon::now();


    if ($now->format('Y-m-d') == $dateC && $now->format('h:i:s') >= $startTimeC && $now->format('h:i:s') <= $endTimeC) {
        $result = $exam->examResult;
        if (empty($result[0])) {
            return true;
        }else{
            return 55;
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


