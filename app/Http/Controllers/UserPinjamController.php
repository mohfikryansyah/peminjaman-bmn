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
        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'pangkat' => 'required',
            'seksi' => 'required',
            'namaKasie' => 'required',
            'nipKasie' => 'required|numeric',
            'noSPT' => 'required|numeric',
            'barang' => 'required',
            'tgl_pengembalian' => 'required',
            'suratImage' => 'required|image|file|max:2048',
        ]);

        $validatedPinjamBarang = [
            'nama' => ucwords($request->input('nama')),
            'nip' => $request->input('nip'),
            'pangkat' => ucwords($request->input('pangkat')),
            'seksi' => ucwords($request->input('seksi')),
            'namaKasie' => ucwords($request->input('namaKasie')),
            'nipKasie' => $request->input('nipKasie'),
            'noSPT' => $request->input('noSPT'),
            'barang' => ucwords($request->input('barang')),
            'tgl_pengembalian' => $request->input('tgl_pengembalian'),
        ];

        $validatedPinjamBarang['suratImage'] = $request->file('suratImage')->store('surat-images');
        $validatedPinjamBarang['user_id'] = auth()->user()->id;
        $validatedPinjamBarang['email'] = auth()->user()->email;
        $validatedPinjamBarang['tgl_pinjam'] = Carbon::today();
        $validatedPinjamBarang['status'] = 'Menunggu';

        // dd($validatedPinjamBarang);
        Peminjam::create($validatedPinjamBarang);

        return redirect('dashboard/piminjaman-barang')->with('PINJAM_STORED', 'Menunggu Konfirmasi Peminjaman Barang');
    }
}