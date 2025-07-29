<?php

use App\Http\Controllers\DeleteTaskController;
use App\Http\Controllers\MarkTaskCompletedController;
use App\Http\Controllers\StoreTaskController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('task', StoreTaskController::class)->name('task.store');
Route::post('task/{task:number}', MarkTaskCompletedController::class)->name('task.mark');
Route::post('task/{task:number}/delete', DeleteTaskController::class)->name('task.delete');
