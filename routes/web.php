<?php

use App\Http\Controllers\TodoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/', function () {return view('dashboard', ["todos"=>\App\Models\Todo::all()]);})->name('dashboard');
    Route::post('/',[TodoController::class, 'store'])->name('store-todo');
});


Route::post('/todo/todoToDoing',[TodoController::class, 'todoToDoing'])->name('todo.todoToDoing');

Route::post('/todo/doingToDone',[TodoController::class, 'doingToDone'])->name('todo.doingToDone');

//Route::post('/todo/doingToTodo',[TodoController::class, 'doingToTodo'])->name('todo.doingToTodo');
//
//Route::post('/todo/doneToDoing',[TodoController::class, 'doneToDoing'])->name('todo.doneToDoing');

Route::get('/todo/destroy',[TodoController::class, 'destroy'])->name('destroy.todo');



