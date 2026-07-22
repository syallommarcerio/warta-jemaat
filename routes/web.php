<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\Admin\ScheduleController;

Route::resource('admin/schedules', ScheduleController::class);

use App\Http\Controllers\Admin\ServantController;

Route::resource('admin/servants', ServantController::class)
    ->middleware('auth');

use App\Http\Controllers\Admin\ServiceRoleController;

Route::resource('admin/service-roles', ServiceRoleController::class)
    ->middleware('auth');

use App\Http\Controllers\Admin\AdminController;

Route::get('/dashboard', [AdminController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
