<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseTypeController;
use App\Http\Controllers\DetailCourseController;
use App\Http\Controllers\DetailUserController;
use App\Http\Controllers\DiaryController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\CourseType;
use App\Models\DetailCourse;
use App\Models\DetailUser;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getAllCourse', [CourseController::class, 'index']);
Route::get('/getAllCoursetype', [CourseTypeController::class, 'index']);
Route::get('/getAllDetailCourse', [DetailCourseController::class, 'index']);
Route::get('/getAllDetailUser', [DetailUserController::class, 'index']);
Route::get('/getAllDiary', [DiaryController::class, 'index']);
Route::get('/getAllEducation', [EducationController::class, 'index']);
Route::get('/getAllRole', [RoleController::class, 'index']);
Route::get('/getAllUser', [UserController::class, 'index']);
