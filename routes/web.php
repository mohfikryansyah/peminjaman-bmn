<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserPinjamController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/dashboard/barang', BarangController::class)->middleware('auth');
Route::put('/dashboard/barang', [BarangController::class, 'store'])->middleware('auth', 'role:ADMIN');
Route::get('/dashboard/barang', [BarangController::class, 'index'])->middleware('auth', 'role:ADMIN');
Route::get('/dashboard/barang/create', [BarangController::class, 'create'])->middleware('auth', 'role:ADMIN');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function() {
    Route::get('/dashboard/piminjaman-barang-user', [UserPinjamController::class, 'index'])->name('user.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard/piminjaman-barang', [PeminjamController::class, 'index'])->name('pinjam.index');
    Route::put('/dashboard/piminjaman-barang', [PeminjamController::class, 'peminjaman'])->name('pinjam.peminjaman');
});

Route::middleware('auth', 'role:ADMIN')->group(function () {
    Route::get('/dashboard/daftar-peminjam', [PeminjamController::class, 'daftarPeminjam'])->name('pinjam.daftar');
    Route::put('/dashboard/daftar-peminjam/{id}', [PeminjamController::class, 'konfirmasiPeminjam'])->name('pinjam.confirm');
    Route::get('/dashboard/daftar-peminjam/{id}', [PeminjamController::class, 'selesai'])->name('pinjam.selesai');
});

require __DIR__.'/auth.php';
