<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Student2Controller;
use Illuminate\Support\Facades\Route;

Route::get('yajra',[\App\Http\Controllers\YajraController::class,'index'])->name('yajra.index');

Route::delete('yajra/{id}',[\App\Http\Controllers\YajraController::class,'delete'])->name('yajra.delete');

Route::get('yajra/restore/one/{id}',[\App\Http\Controllers\YajraController::class,'restore'])->name('yajra.restore');
Route::get('yajra/restore_all',[\App\Http\Controllers\YajraController::class,'restore_all'])->name('yajra.restore_all');





Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


