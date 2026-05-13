<?php

use Illuminate\Support\Facades\Route;
// Pastikan memanggil Controller yang sudah dibuat
use App\Http\Controllers\KendaraanController; 

// Mengubah route '/' agar langsung mengarah ke index KendaraanController
Route::get('/', [KendaraanController::class, 'index']);

// Menambahkan route resource untuk fungsi CRUD lainnya (create, store, edit, update, destroy)
Route::resource('kendaraan', KendaraanController::class);