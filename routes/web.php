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


Route::group([
    'prefix' => 'employee',
    'namespace' => 'Employee',
    'as' => 'employee.',
    'middleware' => 'employee.auth:employee',
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

Route::group([
    'prefix' => 'student',
    'namespace' => 'Student',
    'as' => 'student.',
     'middleware' => 'student.auth:student',
], function () {

    Route::get('/subject', 'HomeController@subject')->name('subject');
    Route::get('/{id}/exams', 'ExamsController@showAllExams')->name('exams.index');
    Route::get('/exams/{id}', 'ExamsController@details')->name('exams.details');
    Route::get('/exams/{exam_id}/start', 'ExamsController@start')->name('exams.start');
    Route::get('/exams/question/{id}', 'ExamsController@question')->name('exams.question');
    Route::get('/exams/question/{id}', 'ExamsController@question')->name('exams.question');
    Route::post('/exams/question/{id}', 'ExamsController@saveAnswer')->name('exams.saveAnswer');

    Route::post('/exams/question/{id}/back', 'ExamsController@backQuestion')->name('exams.backQuestion');

    Route::get('/exams/question/{id}/check', 'ExamsController@check_right_answer')->name('exams.check');

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
