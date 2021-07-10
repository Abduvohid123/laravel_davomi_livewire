<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Student2Controller;
use Illuminate\Support\Facades\Route;






Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


