<?php

use App\Models\Barang;
use App\Models\Peminjam;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\UserPinjamController;

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
    return view('auth.dashboard', [
        'totalBarang' => Barang::all(),
        'totalBarangDipinjam' => Peminjam::where('status', 'like', "%Disetujui%")->get(),
        'totalBarangSelesaiDipinjam' => Peminjam::where('status', 'like', "%Dikembalikan%")->get(),
        'totalBarangMenunggu' => Peminjam::where('status', 'like', "%Menunggu%")->get(),
    ]);
})->middleware(['auth', 'verified', 'status'])->name('dashboard');

Route::resource('/dashboard/barang', BarangController::class)->middleware('auth');
Route::put('/dashboard/barang', [BarangController::class, 'store'])->middleware('auth', 'role:ADMIN');
Route::get('/dashboard/barang', [BarangController::class, 'index'])->middleware('auth');
Route::get('/dashboard/barang/create', [BarangController::class, 'create'])->middleware('auth', 'role:ADMIN');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:PEGAWAI', 'status'])->group(function () {
    Route::get('/dashboard/piminjaman-barang-user', [UserPinjamController::class, 'index'])->name('user.index');
});

Route::get('/get-nama-nip/{seksi}', [PeminjamController::class, 'getNamaNip']);

Route::middleware(['auth', 'role:PEGAWAI', 'status'])->group(function () {
    Route::get('/dashboard/piminjaman-barang', [PeminjamController::class, 'index'])->name('pinjam.index');
});

Route::middleware('auth', 'role:PEGAWAI', 'status')->group(function () {
    Route::put('/dashboard/piminjaman-barang', [UserPinjamController::class, 'peminjaman'])->name('user.peminjaman');
});

Route::middleware('auth', 'role:ADMIN')->group(function () {
    Route::get('/dashboard/daftar-peminjam/details/{peminjam}', [PeminjamController::class, 'show'])->name('pinjam.show');
    Route::get('/dashboard/daftar-peminjam/export', [PeminjamController::class, 'export'])->name('pinjam.export');
    Route::get('/dashboard/daftar-peminjam', [PeminjamController::class, 'daftarPeminjam'])->name('pinjam.daftar');
    Route::patch('/dashboard/daftar-peminjam/{id}', [PeminjamController::class, 'konfirmasiPeminjam'])->name('pinjam.confirm');
    Route::patch('/dashboard/daftar-peminjam/tolak/{coba}', [PeminjamController::class, 'tolakPeminjam'])->name('pinjam.tolak');
    Route::patch('/dashboard/daftar-peminjam/selesai/{id}', [PeminjamController::class, 'selesai'])->name('pinjam.selesai');

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::post('/toggle-user-status/{user}', [UserController::class, 'toggleStatus']);
});

Route::get('/dashboard-guest', function () {
    if (!auth()->user()->verified) {
        return view('auth.user.tidak-aktif'); // Ganti ini dengan tampilan yang sesuai
    } else {
        return redirect()->to('/dashboard');
    }
})->name('inactive-user');

require __DIR__ . '/auth.php';