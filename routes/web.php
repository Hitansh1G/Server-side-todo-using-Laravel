<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo',[TodoController::class,'index'])->name('todo.index');
Route::post('/todo1',[TodoController::class,'store'])->name('todo.store');
Route::get('/todo/create',[TodoController::class,'create'])->name('todo.create');
Route::get('/todo/{todo}/edit',[TodoController::class,'edit'])->name('todo.edit');
Route::put('/todo/{todo}', 'App\Http\Controllers\TodoController@update')->name('todo.update');
Route::delete('/todo/{todo}', 'App\Http\Controllers\TodoController@destroy')->name('todo.destroy');
Route::delete('/todo/clear-all', [TodoController::class, 'clearAll'])->name('todo.clearAll');
Route::put('/todo/{todo}', 'App\Http\Controllers\TodoController@updateTodo')->name('todo.updateTodo');




