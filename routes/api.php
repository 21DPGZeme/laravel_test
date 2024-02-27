<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\Api\MainController;
Route::get('/get_message', [MainController::class, 'index']);

use App\Http\Controllers\Api\PostController;
Route::post('/posts', [PostController::class, 'store']);

use App\Http\Controllers\Api\CourseController;
Route::get('/get_all_courses', [CourseController::class, 'index']);
Route::post('/add_course', [CourseController::class, 'store']);