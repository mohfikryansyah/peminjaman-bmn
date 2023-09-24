<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Peminjam;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{

    public $percobaan = [
        [
            'id' => 1,
            'nama' => 'Laptop'
        ],
        [
            'id' => 2,
            'nama' => 'Tablet'
        ],
        [
            'id' => 3,
            'nama' => 'Komputer'
        ]
    ];


    public function index()
    {
        return view('auth.peminjam.peminjaman', [
            'barangs' => Barang::all(),
            'percobaan' => $this->percobaan
        ]);
    }

    public function peminjaman(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'barang' => 'required',
            'tgl_pengembalian' => 'required',
        ]);

        $validatedPinjamBarang = [
            'nama' => ucwords($request->input('nama')),
            'barang' => ucwords($request->input('barang')),
            'tgl_pengembalian' => $request->input('tgl_pengembalian')
        ];
        
        $validatedPinjamBarang['user_id'] = auth()->user()->id;
        $validatedPinjamBarang['status'] = 'Menunggu';
        $validatedPinjamBarang['tgl_pinjam'] = Carbon::today();

        Peminjam::create($validatedPinjamBarang);

        return redirect('dashboard/piminjaman-barang')->with('PINJAM_STORED', 'Menunggu Konfirmasi Peminjaman Barang');
    }

    public function daftarPeminjam ()
    {
        return view('auth.daftar-peminjam', [
             'peminjams' => Peminjam::all()
        ]);
    }
    
    public function konfirmasiPeminjam(Request $request, $id)
    {   
        $validatedPinjamBarang = $request->validate([
            'kode_barang' => 'required'
        ]);
        $validatedPinjamBarang['status'] = 'Disetujui';

        $cekKodeBarang = Barang::where('kode_barang', $validatedPinjamBarang['kode_barang'])->first();

        $confirm = Peminjam::findOrFail($id);
        if($cekKodeBarang)
        {
            $confirm->update($validatedPinjamBarang);
        } else {
            return redirect()->back()->with('error', 'Kode barang tidak ditemukan!');
        }



        $stok = Barang::where('kode_barang', $validatedPinjamBarang['kode_barang'])->first();
        $stok->stok -= 1;
        $stok->save();

        return redirect()->back()->with('confirmSuccess', 'Success');
    }

    public function barangBerkurang() {

    }

    public function selesai($id)
    {
        $selesai = Peminjam::findOrFail($id);
        $stok = Barang::where('kode_barang', $selesai->kode_barang)->first();

        // dd($stok->kode_barang);

        $selesai->status = "Dikembalikan";
        $selesai->save();
        
        $stok->stok += 1;
        $stok->save();

        return redirect()->back()->with('selesaiSuccess', 'Barang telah dikembalikan');
    }
}
