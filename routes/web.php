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

Route::get('auto', [\App\Http\Controllers\ProductController::class,'autocomplete'])->name('autocomplete');
Route::get('search', [\App\Http\Controllers\ProductController::class,'search']);
Route::get('add', [\App\Http\Controllers\ProductController::class,'addProduct']);



Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



