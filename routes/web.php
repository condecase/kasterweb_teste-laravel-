<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;

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

Route::GET('/', [LogController::class, 'index']);
Route::get('/dashboard', [LogController::class, 'dashboard'])->middleware('auth');
Route::get('/edit/{id}', [LogController::class, 'edit'])->middleware('auth');
Route::delete('/delete/{id}', [LogController::class, 'destroy'])->middleware('auth');
Route::put('/update/{id}', [LogController::class, 'update'])->middleware('auth');
