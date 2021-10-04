<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerformanceController;
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


Route::get('/', function () {
    return "bla";
});

Route::get('/course/{course}', [CourseController::class, 'show']);
Route::get('/performance/{performance}', [PerformanceController::class, 'show']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);



//Protected routes

Route::group(['middleware' => ['auth:sanctum']], function() {
    //Protectes routes go here
    Route::post('/logout', [AuthController::class, 'logout']);
});
