<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/check',[AuthController::class,'check']);

Route::get('/logout',[AuthController::class,'logout'])->name('logout');
