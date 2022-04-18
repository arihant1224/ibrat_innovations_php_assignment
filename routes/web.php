<?php

use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'details']);
Route::get('/plans', [UserController::class, 'plans']);
Route::get('/classes', [UserController::class, 'classes']);
Route::get('/details/edit/{id}', [UserController::class, 'editDetails']);
Route::post('/details/update', [UserController::class, 'updateDetails']);
Route::get('/details/delete/{id}', [UserController::class, 'deleteDetails']);
