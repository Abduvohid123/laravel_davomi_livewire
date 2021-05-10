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

Route::get('addRole', [\App\Http\Controllers\RoleController::class,'addRole']);
Route::get('getRoles/{id}', [\App\Http\Controllers\RoleController::class,'getAllRolesByUser']);
Route::get('getUsers/{id}', [\App\Http\Controllers\RoleController::class,'getAllUsersByRole']);
Route::get('addUser', [\App\Http\Controllers\RoleController::class,'addUser']);




Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
