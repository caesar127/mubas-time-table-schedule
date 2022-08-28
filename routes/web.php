<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LecturerController;

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
Route::resource('/lecturer/create', LecturerController::class)->only(['store']);

// Department Routes
Route::resource('/department', DepartmentController::class);
Route::resource('/department/create', DepartmentController::class)->only(['store']);

// Faculty Routes
Route::resource('/faculty', FacultyController::class);
Route::resource('/faculty/create', FacultyController::class)->only(['store']);

// Module Routes
Route::resource('/module', ModuleController::class);
Route::resource('/module/create', ModuleController::class)->only(['store']);