<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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

Route::get('/', HomeController::class);
Route::post('/add', [TaskController::class, 'create']);
Route::delete('/delete/{id}', [TaskController::class, 'delete']);
Route::get('/task/{id}/edit', [TaskController::class, 'edit']);
Route::put('/update/{id}', [TaskController::class, 'update']);
