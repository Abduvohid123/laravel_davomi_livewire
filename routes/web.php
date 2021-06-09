<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Student2Controller;
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
Route::get('scroll', [\App\Http\Controllers\ScrollPaginationController::class, 'index']);


Route::post('parsley', function () {
    return "Success!!!";
})->name('parsley');
Route::get('myregister', [AuthController::class, 'index']);
Route::get('ajax', [Student2Controller::class, 'index'])->name('yajra');
Route::post('/add_student', [Student2Controller::class, 'addStudent'])->name('add_student');
Route::get('/students/{id}', [Student2Controller::class, 'getStudentById']);
Route::put('updateStudent', [Student2Controller::class, 'updateStudent'])->name('student.update');

Route::delete('deleteStudent/{id}', [Student2Controller::class, 'deleteStudent']);
Route::delete('deleteCheckedStudents', [Student2Controller::class, 'deleteCheckedStudents'])->name('deleteCheckedStudents');


Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


