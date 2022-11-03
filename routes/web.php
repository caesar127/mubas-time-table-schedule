<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\TimetableController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DepartmentmoduleController;

Route::get('/dashboard', function(){
    return view('dashboard');
});
Route::get('/view_timetable', function(){
    return view('view_timetable');
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
// Timetable Routes
Route::resource('/timetable', TimetableController::class);
Route::get('/timetable/{timetable}', [UserController::class, 'show']);
Route::get('/download/{timetable}', [UserController::class, 'downloadPDF']);
// User Routes
Route::resource('/', UserController::class);
Route::post('/user/auth', [UserController::class, 'authenticate']);