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

Route::post('image', [\App\Http\Controllers\ImageController::class,'image'])->name('image');
Route::get('image', [\App\Http\Controllers\ImageController::class,'image']);
Route::get('import', [\App\Http\Controllers\EmployeeController::class,'import']);
Route::post('import', [\App\Http\Controllers\EmployeeController::class,'import'])->name('import');
Route::get('emp', [\App\Http\Controllers\EmployeeController::class,'employees']);
Route::get('add', [\App\Http\Controllers\EmployeeController::class,'addEmployee']);
Route::get('excel', [\App\Http\Controllers\EmployeeController::class,'exportToExcel']);
Route::get('csv', [\App\Http\Controllers\EmployeeController::class,'exportIntoCSV']);





Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



