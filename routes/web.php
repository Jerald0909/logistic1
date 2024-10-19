<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\ProcurementController;
use App\Http\Controllers\WarehousingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

// Dashboard (requires authentication and email verification)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes that require authentication
Route::middleware('auth')->group(function () {

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Logout Route
    Route::post('/logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');

    // Project Management Routes
    Route::prefix('project')->name('project.')->group(function () {
        Route::get('/budget', [BudgetController::class, 'index'])->name('budget');
        Route::view('/itineraries', 'project.itineraries')->name('itineraries');
        Route::view('/schedule', 'project.schedule')->name('schedule');
    });

    // Asset Management Routes
    Route::prefix('asset')->name('asset.')->group(function () {
        Route::get('/list', [AssetController::class, 'list'])->name('list');
        Route::get('/maintenance', [AssetController::class, 'maintenance'])->name('maintenance');
        Route::get('/depreciation', [AssetController::class, 'depreciation'])->name('depreciation');
        Route::get('/disposal', [AssetController::class, 'disposal'])->name('disposal');
    });

    // Procurement Routes
    Route::prefix('procurement')->name('procurement.')->group(function () {
        Route::get('/requests', [ProcurementController::class, 'requests'])->name('requests');
        Route::get('/orders', [ProcurementController::class, 'orders'])->name('orders');
        Route::get('/suppliers', [ProcurementController::class, 'suppliers'])->name('suppliers');
        Route::get('/invoices', [ProcurementController::class, 'invoices'])->name('invoices');
    });

    // Warehousing Routes
    Route::prefix('warehousing')->name('warehousing.')->group(function () {
        Route::get('/inventory', [WarehousingController::class, 'inventory'])->name('inventory');
        Route::get('/stock', [WarehousingController::class, 'stock'])->name('stock');
        Route::get('/received', [WarehousingController::class, 'received'])->name('received');
        Route::get('/dispatch', [WarehousingController::class, 'dispatch'])->name('dispatch');
    });
});

// Authentication routes (login, register, forgot password, etc.)
require __DIR__.'/auth.php';
