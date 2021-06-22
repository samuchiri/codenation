<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('/course','App\Http\Controllers\CourseController');
Route::resource('/exam','App\Http\Controllers\ExamController');
Route::resource('/module','App\Http\Controllers\ModuleController');
Route::resource('/page','App\Http\Controllers\PageController');
Route::resource('/payment','App\Http\Controllers\PaymentController');
Route::resource('/question','App\Http\Controllers\QuestionController');
Route::resource('/quiz','App\Http\Controllers\QuizController');
Route::resource('/resource','App\Http\Controllers\ResourceController');
Route::resource('/student','App\Http\Controllers\StudentController');
Route::resource('studentCourse','App\Http\Controllers\StudentCourseController');