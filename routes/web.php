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

// // Route::get('/', function () {
// //     return view('welcome');

// });




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/answer','App\Http\Controllers\AnswerController');
Route::resource('/course','App\Http\Controllers\CourseController');
Route::resource('/exam','App\Http\Controllers\ExamController');
Route::resource('/question','App\Http\Controllers\QuestionController');
Route::resource('/resource','App\Http\Controllers\ResourceController');
Route::resource('/module','App\Http\Controllers\ModuleController');
Route::resource('/page','App\Http\Controllers\PageController');
Route::resource('/quiz','App\Http\Controllers\QuizController');
Route::resource('/student','App\Http\Controllers\StudentController');
Route::resource('/studentCourse','App\Http\Controllers\StudentCourseController');
Route::resource('/user','App\Http\Controllers\UserController');
Route::get('/dynamic_pdf','DynamicPDFController@index');
// Route::resource('/dynamic_pdf','App\Http\Controllers\DynamicPDFController');
