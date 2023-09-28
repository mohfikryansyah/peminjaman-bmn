<?php

namespace App\Exports;

use App\Models\Peminjam;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PeminjamExport implements FromCollection, WithHeadings, WithMapping
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function collection()
    {
        return Peminjam::select('nama', 'email', 'nip', 'pangkat', 'seksi', 'namaKasie', 'nipKasie', 'noSPT', 'barang', 'tgl_pinjam', 'tgl_pengembalian', 'status')->get();
    }

    public function headings(): array
    {
        return ['Nama', 'Email', 'NIP', 'Pangkat', 'Seksi', 'Nama Kasie', 'NIP Kasie', 'No. SPT', 'Barang', 'Tanggal Peminjaman', 'Tanggal Pengembalian', 'Status'];
    }

    public function map($row): array
    {
        $row->nip = "'" . $row->nip;

        return [
            $row->nama,
            $row->email,
            $row->nip,
            $row->pangkat,
            $row->seksi,
            $row->namaKasie,
            $row->nipKasie,
            $row->noSPT,
            $row->barang,
            $row->tgl_pinjam,
            $row->tgl_pengembalian,
            $row->status
        ];
    }
}
