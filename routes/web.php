<?php

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
    return view('dashboard.dashboard');
});

Route::get('/subject', function () {
    return view('dashboard.Administration.subject');
});
Route::get('/exams', function () {
    return view('dashboard.Administration.exams');
});
Route::get('/questions', function () {
    return view('dashboard.Administration.questions');
});
Route::get('/createQuestions', function () {
    return view('dashboard.Administration.create_questions');
});
Route::get('/reviewExam', function () {
    return view('dashboard.Review.exams');
});
Route::get('/studentExam', function () {
    return view('dashboard.Review.student_exam');
});
Route::get('/questionsExamStudent', function () {
    return view('dashboard.Review.questions_exam_student');
});
Route::get('/studentSubject', function () {
    return view('dashboard.Student.subject');
});
Route::get('/student_exam', function () {
    return view('dashboard.Student.exams');
});
Route::get('/detailsExam', function () {
    return view('dashboard.Student.details_exam');
});
Route::get('/startExam', function () {
    return view('dashboard.Student.start_exam');
});
Route::get('/examDelivery', function () {
    return view('dashboard.Student.exam_delivery');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
