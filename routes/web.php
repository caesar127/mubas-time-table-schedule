<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DepartmentmoduleController;

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
// Lecturer Routes
Route::resource('/lecturer', LecturerController::class);
// Department Routes
Route::resource('/department', DepartmentController::class);
// Faculty Routes
Route::resource('/faculty', FacultyController::class);
// Module Routes
Route::resource('/module', ModuleController::class);
// Departments Module Routes
Route::resource('/departmentsmodule', DepartmentmoduleController::class);
// Class Routes
Route::resource('/classes', ClassesController::class);
// Rooms Routes
Route::resource('/room', RoomController::class);