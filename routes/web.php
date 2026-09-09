<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return 'Selamat Datang di Barokah Mart!!<br>
            Barokah Mart merupakan sebuah toko kelontong yang sudah berdiri selama 2300 tahun.<br>
            Didirikan oleh Haji Isam(il) bin mail, pada tahun 360-SM Bersama Alexander the Great.<br>
            Pilihan produknya banyak, dari yang receh sampai yang mahal, pilih aja sendiri.';
});

use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth'])
    ->name('dashboard');
    