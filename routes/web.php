<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoController;

Route::get('/todo', [TodoController::class, 'index'])->name('todo.list');
Route::post('/todo/update', [TodoController::class, 'store'])->name('todo.store');
Route::post('/todo/destroy/{id}', [TodoController::class, 'destroy'])->name('todo.destroy');
Route::post('/todo/new/{id}', [TodoController::class, 'update'])->name('todo.new');
Route::get('/', function () {
    return redirect('/todo');
});