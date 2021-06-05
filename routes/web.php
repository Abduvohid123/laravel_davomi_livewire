<?php

use App\Http\Controllers\Student2Controller;
use App\Http\Controllers\YajraController;
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

Route::get('ajax', [Student2Controller::class,'index'])->name('yajra');
Route::post('/add_student', [Student2Controller::class,'addStudent'])->name('add_student');
Route::get('/students/{id}', [Student2Controller::class,'getStudentById']);
Route::put('updateStudent', [Student2Controller::class,'updateStudent'])->name('student.update');



Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



