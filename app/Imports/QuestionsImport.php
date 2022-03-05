<?php

namespace App\Imports;

use App\Models\Question;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;


class QuestionsImport implements ToModel, WithHeadingRow, SkipsOnError, WithValidation, SkipsOnFailure
{
    use Importable, SkipsErrors, SkipsFailures;

    public $exam_id;

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function __construct($exam = null)
    {
        $this->exam_id = $exam;
    }

    public function model(array $row)
    {
        $answer = "option" . strtoupper($row['answer']);
//        $category = 0;
        $type = 0;
//        if ($row['category'] == 'صعب') {
//            $category = 3;
//        } else if ($row['category'] == 'متوسط') {
//            $category = 2;
//
//        } else if ($row['category'] == 'سهل') {
//            $category = 1;
//        }

        if ($row['type'] == 'صح/خطأ') {
            $type = 1;
        } else if ($row['type'] == 'اختر') {
            $type = 2;
        }
        $option = getOption($type);

        if ($type == 1) {
            $question = new Question([
                'title' => $row['title'],
                'type' => $type,
//                'category' => $category,
                'optionA' => 'صح',
                'optionB' => 'خطأ',
                'optionC' => "",
                'optionD' => "",
                'right_answer' => $answer,
                'exam_id' => $this->exam_id,
            ]);
        }elseif($type == 2){
            $question = new Question([
                'title' => $row['title'],
                'type' => $type,
//                'category' => $category,
                'optionA' => $row['a'],
                'optionB' => $row['b'],
                'optionC' => $row['c'],
                'optionD' => $row['d'],
                'right_answer' => $answer,
                'exam_id' => $this->exam_id,
            ]);
        }
        return $question;

    }

    public function rules(): array
    {
        return [
            'title' => 'required',
            'type' => 'required',
//            'category' => 'required',
            'a' => 'required',
            'b' => 'required',
            'answer' => 'required|in:A,a,B,b,C,c,D,d',
        ];
    }
}
