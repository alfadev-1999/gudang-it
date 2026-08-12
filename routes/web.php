<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Department
    Route::get('/departments', [DepartmentController::class, 'index'])
        ->middleware('permission:department.view')
        ->name('departments.index');

    Route::get('/departments/create', [DepartmentController::class, 'create'])
        ->middleware('permission:department.create')
        ->name('departments.create');

    Route::post('/departments', [DepartmentController::class, 'store'])
        ->middleware('permission:department.create')
        ->name('departments.store');

    Route::get('/departments/{department}/edit', [DepartmentController::class, 'edit'])
        ->middleware('permission:department.edit')
        ->name('departments.edit');

    Route::put('/departments/{department}', [DepartmentController::class, 'update'])
        ->middleware('permission:department.edit')
        ->name('departments.update');

    Route::delete('/departments/{department}', [DepartmentController::class, 'destroy'])
        ->middleware('permission:department.delete')
        ->name('departments.destroy');


    // Vendor
    // Vendor
    Route::get('/vendors', [VendorController::class, 'index'])
        ->middleware('permission:vendor.view')
        ->name('vendors.index');

    Route::get('/vendors/create', [VendorController::class, 'create'])
        ->middleware('permission:vendor.create')
        ->name('vendors.create');

    Route::post('/vendors', [VendorController::class, 'store'])
        ->middleware('permission:vendor.create')
        ->name('vendors.store');

    Route::get('/vendors/{vendor}/edit', [VendorController::class, 'edit'])
        ->middleware('permission:vendor.edit')
        ->name('vendors.edit');

    Route::put('/vendors/{vendor}', [VendorController::class, 'update'])
        ->middleware('permission:vendor.edit')
        ->name('vendors.update');

    Route::delete('/vendors/{vendor}', [VendorController::class, 'destroy'])
        ->middleware('permission:vendor.delete')
        ->name('vendors.destroy');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__ . '/auth.php';
