<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Imports\QuestionsImport;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $questions = Question::where('exam_id', '=', $id)->get();
        return view('employee.questions.index', [
            'questions' => $questions,
            'exam_id' => $id,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('employee.questions.create', [
            'exam_id' => $id,
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
            'title' => 'required',
            'type' => 'required',
            'category' => 'required',
            'optionA' => 'required',
            'optionB' => 'required',
            'right_answer' => 'required|in:optionA,optionB,optionC,optionD',
        ]);
        $exam_id = $request->input('exam_id');

        Question::create([
            'title' => $request->title,
            'type' => $request->type,
            'category' => $request->category,
            'optionA' => $request->optionA,
            'optionB' => $request->optionB,
            'optionC' => $request->optionC,
            'optionD' => $request->optionD,
            'right_answer' => $request->right_answer,
            'exam_id' => $request->exam_id,
        ]);

        return redirect()->route('employee.questions.index', $exam_id);
    }

    public function importFile(Request $request)
    {
        $exam_id = $request->input('exam_id');
        $import = new QuestionsImport($exam_id);
        $import->import($request->file('import_file'), null, \Maatwebsite\Excel\Excel::XLSX);
        return redirect()->route('employee.questions.index', $exam_id);
    }

    /**
     * Display the specified resource.
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
    public function edit($exam_id, $question_id)
    {
        $question = Question::findOrFail($question_id);
        return view('employee.questions.edit', [
            'question' => $question,
            'exam_id' => $exam_id,
        ]);
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
        $question = Question::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'category' => 'required',
            'optionA' => 'required',
            'optionB' => 'required',
            'right_answer' => 'required|in:optionA,optionB,optionC,optionD',
        ]);
        $exam_id = $request->input('exam_id');

        $question->update([
            'title' => $request->title,
            'type' => $request->type,
            'category' => $request->category,
            'optionA' => $request->optionA,
            'optionB' => $request->optionB,
            'optionC' => $request->optionC,
            'optionD' => $request->optionD,
            'right_answer' => $request->right_answer,
            'exam_id' => $request->exam_id,
        ]);

        return redirect()->route('employee.questions.index', $exam_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
        return back();

    }
}
