<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Barang;
use App\Models\Peminjam;
use Illuminate\Http\Request;
use App\Mail\InfoPengembalian;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Cache;
use App\Exports\PeminjamExport;

class PeminjamController extends Controller
{
    private $seksi = [
        'A',
        'B',
        'C',
    ];
    
    public function index()
    {
        return view('auth.peminjam.peminjaman', [
            'barangs' => Barang::all(),
            'seksi' => $this->seksi
        ]);
    }

    public function show(Peminjam $peminjam)
    {
        return view('auth.peminjam.show-details-peminjam', [
            'peminjam' => $peminjam
        ]);
    }

    public function export()
    {
        return Excel::download(new PeminjamExport(), 'peminjam.xlsx');
    }

    public function hitungSelisihAllData()
    {
        $allPeminjam = Peminjam::all();
        foreach ($allPeminjam as $peminjam) {
            $selisihHari = $peminjam->hitungSelisihTanggal();

            if ($selisihHari <= 3 && $peminjam->status == 'Disetujui') {
                $infoMail = [
                    'title' => 'Halo, ' . $peminjam->nama,
                    'barang' => $peminjam->barang,
                    'selisih' => $selisihHari,
                ];

                $cacheMail = 'Notifikasi terkirim ' . $peminjam->id;

                if (!Cache::has($cacheMail)) {
                    mail::to($peminjam->email)->send(new InfoPengembalian($infoMail));
                    Cache::put($cacheMail, true, now()->endOfDay());
                }
            }
        }
    }

    public function peminjaman(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'required|digits:18',
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

    public function daftarPeminjam()
    {
        // $this->hitungSelisihAllData();

        return view('auth.daftar-peminjam', [
            'peminjams' => Peminjam::all(),
        ]);
    }

    public function konfirmasiPeminjam(Request $request, $id)
    {
        $validatedPinjamBarang = $request->validate([
            'kode_barang' => 'required',
            'seriNUP' => 'required',
        ]);
        $validatedPinjamBarang['status'] = 'Disetujui';

        $cekKodeBarang = Barang::where('kode_barang', $validatedPinjamBarang['kode_barang'])->first();

        $confirm = Peminjam::findOrFail($id);

        if (!$cekKodeBarang) {
            return redirect()
                ->back()
                ->with('error', 'Kode barang tidak ditemukan!');
        } elseif ($cekKodeBarang['stok'] < 1) {
            return redirect()
                ->back()
                ->with('error', 'Stok barang ' . $cekKodeBarang['nama'] . ' dengan kode barang ' . $cekKodeBarang['kode_barang'] . ' habis');
        } else {
            $confirm->update($validatedPinjamBarang);
        }

        $stok = Barang::where('kode_barang', $validatedPinjamBarang['kode_barang'])->first();
        $stok->stok -= 1;
        $stok->save();

        return redirect()
            ->back()
            ->with('confirmSuccess', 'Success');
    }

    public function tolakPeminjam($id)
    {
        $tolak = Peminjam::findOrFail($id);
        $tolak->status = 'Ditolak';
        $tolak->save();
    }

    public function selesai($id)
    {
        $selesai = Peminjam::findOrFail($id);
        $stok = Barang::where('kode_barang', $selesai->kode_barang)->first();

        $selesai->status = 'Dikembalikan';
        $selesai->save();

        $stok->stok += 1;
        $stok->save();

        return redirect()
            ->back()
            ->with('selesaiSuccess', 'Barang telah dikembalikan');
    }
}