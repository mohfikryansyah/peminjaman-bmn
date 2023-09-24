<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Peminjam;
use Illuminate\Http\Request;

class UserPinjamController extends Controller
{
    public function index()
    {
        return view('auth.peminjam.daftar-peminjam-user', [
            'peminjams' => Peminjam::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function peminjaman(Request $request)
    {
        $validatedPinjamBarang = $request->validate([
            'nama' => 'required',
            'barang' => 'required',
            'tgl_pengembalian' => 'required',
        ]);
        
        $validatedPinjamBarang['user_id'] = auth()->user()->id;
        $validatedPinjamBarang['status'] = 'Menunggu';
        $validatedPinjamBarang['tgl_pinjam'] = Carbon::today();

        Peminjam::create($validatedPinjamBarang);

        return redirect('dashboard/piminjaman-barang')->with('PINJAM_STORED', 'Menunggu Konfirmasi Peminjaman Barang');
    }
}
