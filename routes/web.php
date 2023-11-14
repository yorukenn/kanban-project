<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {

    return view('home'); // Diperbarui

});

use App\Http\Controllers\TaskController; // Ditambahkan



Route::get('/', function () {

    return view('home');

});


Route::get('/tasks/', [TaskController::class, 'index']); // Ditambahkan