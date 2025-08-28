<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ResponsibleController;
use App\Http\Controllers\JustificationController;
use App\Http\Controllers\ReportController;



use App\Models\Responsible;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {



    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });



    //rutas de posts de tipo resource


    Route::resource('/employees', EmployeeController::class);
    Route::resource('/areas', AreaController::class);
    Route::resource('/responsibles', ResponsibleController::class);
    Route::resource('/schedules', ScheduleController::class);
    Route::resource('/attendances', AttendanceController::class);
    Route::resource('/justifications', JustificationController::class);
    Route::resource('/reports', ReportController::class);

    // Route::resource('/animals', AnimalController::class);
});

require __DIR__ . '/auth.php';
