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
    return view('dashboard.Administration.index');
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
