<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
return view('home'); 
});

Route::get('tasks', [TaskController::class, 'index']);


Route::get('/', function () {

    return view('home');

})->name('home');


Route::get('/tasks/', [TaskController::class, 'index'])->name('tasks.index');
Route::prefix('tasks')

    ->name('tasks.')

    ->controller(TaskController::class)

    ->group(function () {

        Route::get('/', 'index')->name('index');

        Route::get('{id}/edit', 'edit')->name('edit');

    });

// Ditambahkan

Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

(object) [

    'id' => 1, // Id ini digunakan pada path untuk menspesifikasi task mana yang diubah

    'name' => 'Develop Final Project',

    'detail' => 'Kanban project using PHP and Laravel',

    'due_date' => '2023-04-30',

    'status' => 'not_started',

];