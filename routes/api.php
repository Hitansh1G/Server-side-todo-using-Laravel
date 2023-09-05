<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/todo',[TodoController::class,'index'])->name('todo.index');
Route::post('/todo1',[TodoController::class,'store'])->name('todo.store');
Route::get('/todo/create',[TodoController::class,'create'])->name('todo.create');
Route::get('/todo/{todo}/edit',[TodoController::class,'edit'])->name('todo.edit');
Route::put('/todo/{todo}/update',[TodoController::class,'update'])->name('todo.update');



