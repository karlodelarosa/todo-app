<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign-up', [LoginController::class, 'signUp']);
Route::post('/create-account', [LoginController::class, 'store']);

Route::get('/sign-in', [LoginController::class, 'signIn']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/tasks', [TaskController::class, 'show']);
Route::post('/save-task', [TaskController::class, 'saveTask']);
