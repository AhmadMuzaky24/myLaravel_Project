<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/about', function () {
    return 'Selamat Datang di Barokah Mart!!<br>
            Barokah Mart merupakan sebuah toko kelontong yang sudah berdiri selama 2300 tahun.<br>
            Didirikan oleh Haji Isam(il) bin mail, pada tahun 360-SM Bersama Alexander the Great.<br>
            Pilihan produknya banyak, dari yang receh sampai yang mahal, pilih aja sendiri.';
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');
    
Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login');
 
Route::post('/login', [LoginController::class, 'store'])
    ->middleware('guest')
    ->name('login.store');
 
Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::get('/reports/sales', [ReportController::class, 'sales'])->name('report.sales');

    Route::resource('users', UserController::class);
});
 
Route::middleware(['auth', 'role:admin,kasir'])->group(function () {
    Route::get('/pos', [PosController::class, 'index'])->name('pos.index');
    Route::post('/pos', [PosController::class, 'store'])->name('pos.store');
});


