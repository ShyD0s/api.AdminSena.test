<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ApprenticeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Configuracion de prefijo y ruta base para recordar 
// prefix: api/v1
// http://api.adminsena.test/api/v1/"nombreendpoint"


//crud de teachers 
//GET
//index
Route::get('teachers', [TeacherController::class, 'index']);
//show
Route::get('teachers/{id}', [TeacherController::class, 'show']);
//POST
Route::post('teachers', [TeacherController::class, 'store']);
//PUT
Route::put('teachers/{id}', [TeacherController::class, 'update']);
//delete
Route::delete('teachers/{id}', [TeacherController::class, 'destroy']);

//crud de areas
//GET
//index
Route::get('areas', [AreaController::class, 'index']);
//show
Route::get('areas/{id}', [AreaController::class, 'show']);
//POST
Route::post('areas', [AreaController::class, 'store']);
//PUT
Route::put('areas/{id}', [AreaController::class, 'update']);
//delete
Route::delete('areas/{id}', [AreaController::class, 'destroy']);

//crud de computers
//GET
//index
Route::get('computers', [ComputerController::class, 'index']);
//show
Route::get('computers/{id}', [ComputerController::class, 'show']);
//POST
Route::post('computers', [ComputerController::class, 'store']);
//PUT
Route::put('computers/{id}', [ComputerController::class, 'update']);
//delete
Route::delete('computers/{id}', [ComputerController::class, 'destroy']);

//crud de training centers
//GET
//index
Route::get('training_centers', [TrainingCenterController::class, 'index']);
//show
Route::get('training_centers/{id}', [TrainingCenterController::class, 'show']);
//POST
Route::post('training_centers', [TrainingCenterController::class, 'store']);
//PUT
Route::put('training_centers/{id}', [TrainingCenterController::class, 'update']);
//delete
Route::delete('training_centers/{id}', [TrainingCenterController::class, 'destroy']);

//crud de courses
//GET
//index
Route::get('courses', [CourseController::class, 'index']);
//show
Route::get('courses/{id}', [CourseController::class, 'show']);
//POST
Route::post('courses', [CourseController::class, 'store']);
//PUT
Route::put('courses/{id}', [CourseController::class, 'update']);
//delete
Route::delete('courses/{id}', [CourseController::class, 'destroy']);

//crud de apprentices
//GET
//index
Route::get('apprentices', [ApprenticeController::class, 'index']);
//show
Route::get('apprentices/{id}', [ApprenticeController::class, 'show']);
//POST
Route::post('apprentices', [ApprenticeController::class, 'store']);
//PUT
Route::put('apprentices/{id}', [ApprenticeController::class, 'update']);
//delete
Route::delete('apprentices/{id}', [ApprenticeController::class, 'destroy']);