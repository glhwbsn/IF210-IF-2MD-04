<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\login;
use App\Http\Controllers\GalehController;
use App\Http\Controllers\DashboardController; // Tambahkan ini di atas

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});

// Route untuk Dashboard (Gabungan Baru)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function (){
        return 'Admin Dashboard';
    });
    Route::get('/users', function () {
        return 'Admin Users';
    });
});

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/ListItem', [HomeController::class, 'ListItem']);
Route::get('/galeh', [GalehController::class, 'tampilkan']);
Route::get('/register', [HomeController::class, 'register']);