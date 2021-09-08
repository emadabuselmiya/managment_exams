<?php

use App\Models\EmployeeModels\Availablecourse;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
//Route::get('/exams', function () {
//    return view('dashboard.employee.exams');
//});
//Route::get('/questions', function () {
//    return view('dashboard.employee.questions');
//});
//Route::get('/createQuestions', function () {
//    return view('dashboard.employee.create_questions');
//});
//Route::get('/reviewExam', function () {
//    return view('dashboard.Review.exams');
//});
Route::get('/studentExam', function () {
   return view('dashboard.Review.student_exam');
});
Route::get('/questionsExamStudent', function () {
   return view('dashboard.Review.questions_exam_student');
});
Route::get('/studentSubject', function () {
   return view('dashboard.student.subject');
});
Route::get('/student_exam', function () {
   return view('dashboard.student.exams');
});
Route::get('/detailsExam', function () {
   return view('dashboard.student.details_exam');
});
Route::get('/startExam', function () {
   return view('dashboard.student.start_exam');
});
Route::get('/examDelivery', function () {
   return view('dashboard.student.exam_delivery');
});

Route::group([
    'prefix' => 'employee',
    'namespace' => 'Employee',
    'as' => 'employee.',
   // 'middleware' => 'employee.auth:employee',
], function () {

    Route::get('/subject', 'HomeController@subject')->name('subject');
    Route::get('/{id}/exams', 'ExamsController@index')->name('exams.index');
    Route::post('/exams', 'ExamsController@store')->name('exams.store');
    Route::delete('/{id}/exams', 'ExamsController@destroy')->name('exams.destroy');
    Route::put('/exams/{id}', 'ExamsController@update')->name('exams.update');


    Route::get('/{id}/questions', 'QuestionsController@index')->name('questions.index');
    Route::get('/{id}/questions/create', 'QuestionsController@create')->name('questions.create');
    Route::post('/questions', 'QuestionsController@store')->name('questions.store');
    Route::delete('/{id}/questions', 'QuestionsController@destroy')->name('questions.destroy');
    Route::post('/questions/import' , 'QuestionsController@importFile')->name('questions.import');
    Route::get('/{exam_id}/questions/{question_id}/edit', 'QuestionsController@edit')->name('questions.edit');
    Route::put('/questions/{id}', 'QuestionsController@update')->name('questions.update');



});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
