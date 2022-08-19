<?php

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

Route::get('/folders/{id}/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks.index');
Route::get('/folders/create', [App\Http\Controllers\FolderController::class, 'showCreateForm'])->name('folders.create');
Route::post('/folders/create', [App\Http\Controllers\FolderController::class, 'create']);
Route::get('/folders/{id}/tasks/create', [App\Http\Controllers\TaskController::class, 'showCreateForm'])->name('tasks.create');
Route::post('/folders/{id}/tasks/create', [App\Http\Controllers\TaskController::class, 'create']);
Route::get('/folders/{id}/tasks/{task_id}/edit', [App\Http\Controllers\TaskController::class, 'showEditForm'])->name('tasks.edit');
Route::post('/folders/{id}/tasks/{task_id}/edit', [App\Http\Controllers\TaskController::class, 'edit']);
