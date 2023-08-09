<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (){
	return view('welcome');
});


Route::get('/todos', [App\Http\Controllers\TodoController::class,'index']);
Route::get('/create-todo', [App\Http\Controllers\TodoController::class,'create']);
Route::post('/store-todo', [App\Http\Controllers\TodoController::class,'store']);
Route::get('/todos/{id}', [App\Http\Controllers\TodoController::class,'show']);
Route::get('/todos/{id}/edit', [App\Http\Controllers\TodoController::class,'edit']);
Route::post('/todos/{id}/update', [App\Http\Controllers\TodoController::class,'update']);
Route::get('/todos/{id}/delete', [App\Http\Controllers\TodoController::class,'destroy']);
Route::get('/todos/{id}/complete', [App\Http\Controllers\TodoController::class,'complete']);