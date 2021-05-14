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

Route::post('update', [\App\Http\Controllers\StudentController::class,'update'])->name('update');
Route::get('edit/{id}', [\App\Http\Controllers\StudentController::class,'edit']);
Route::get('delete/{id}', [\App\Http\Controllers\StudentController::class,'delete']);
Route::get('add', [\App\Http\Controllers\StudentController::class,'addStudent']);
Route::post('add', [\App\Http\Controllers\StudentController::class,'storeStudent']);
Route::get('all', [\App\Http\Controllers\StudentController::class,'all_student']);





Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



