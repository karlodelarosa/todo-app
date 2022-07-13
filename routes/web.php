<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sign-up', [LoginController::class, 'signUp']);
Route::post('/create-account', [LoginController::class, 'store']);

Route::get('/sign-in', [LoginController::class, 'signIn']);
Route::post('/login', [LoginController::class, 'authenticate']);
