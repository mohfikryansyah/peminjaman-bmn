<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Barang;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@bpkhtl15-gorontalo.id',
            'password' => 'bpkhtl!23'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'moh.fikryansyah@gmail.com',
            'password' => 'fiqriansyah2001'
        ]);
        
        Role::create(['name' => 'ADMIN']);
        Role::create(['name' => 'PEGAWAI']);

        $admin = User::find(1);
        $user = User::find(2);
        $admin->assignRole('ADMIN');
        $user->assignRole('PEGAWAI');

        Barang::create([
            'nama' => 'Battery Charge',
            'stok' => '2',
            'kode_barang' => '3030103001',
            'satuan' => 'Buah'
        ]);
        
        Barang::create([
            'nama' => 'Rol Meter',
            'stok' => '9',
            'kode_barang' => '3030211003',
            'satuan' => 'Buah'
        ]);

        Barang::create([
            'nama' => 'Termometer Standar',
            'stok' => '9',
            'kode_barang' => '3030308012',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Alat Pengukur Garis Tengah',
            'stok' => '9',
            'kode_barang' => '3030309004',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Diameter Tape',
            'stok' => '9',
            'kode_barang' => '3030309006',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Alat Ukur Lainnya',
            'stok' => '9',
            'kode_barang' => '3030309999',
            'satuan' => 'Dummy'
        ]);
        Barang::create([
            'nama' => 'Audio Mixing Portable',
            'stok' => '1',
            'kode_barang' => '3060101002',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Intercom Unit',
            'stok' => '6',
            'kode_barang' => '3060101031',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Digital Audio Storage System',
            'stok' => '2',
            'kode_barang' => '3060101075',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Layar Film/Projector',
            'stok' => '1',
            'kode_barang' => '3060102107',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Camera Digital',
            'stok' => '12',
            'kode_barang' => '3060102128',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Video Conference',
            'stok' => '1',
            'kode_barang' => '3060102132',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Theodolite (Peralatan Studio Pemetaan/peralatan Ukur Tanah)',
            'stok' => '0',
            'kode_barang' => '3060105017',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Kompas Geologi',
            'stok' => '3',
            'kode_barang' => '3060105023',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Clinometer',
            'stok' => '14',
            'kode_barang' => '3060105024',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Altimeter (Peralatan Studio Pemetaan/peralatan Ukur Tanah)',
            'stok' => '0',
            'kode_barang' => '3060105025',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Kompas (Peralatan Studio Pemetaan/peralatan Ukur Tanah)',
            'stok' => '22',
            'kode_barang' => '3060105035',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'GPS Receiver',
            'stok' => '14',
            'kode_barang' => '3060105038',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Kamera Udara',
            'stok' => '2',
            'kode_barang' => '3060105047',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Pesawat Telephone',
            'stok' => '1',
            'kode_barang' => '3060201003',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Handy Talky (HT)',
            'stok' => '9',
            'kode_barang' => '3060201006',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Facsimile',
            'stok' => '1',
            'kode_barang' => '3060201010',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'UPS 15 KVA for HUB Station',
            'stok' => '0',
            'kode_barang' => '3060210011',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Solar Cell',
            'stok' => '2',
            'kode_barang' => '3060347003',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Tiang Keseimbangan',
            'stok' => '6',
            'kode_barang' => '3070112007',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Digital Signal Procesor',
            'stok' => '6',
            'kode_barang' => '3070112007',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Mesin Power Station White Emergency Diesel Generating',
            'stok' => '1',
            'kode_barang' => '3080140010',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Sprayer',
            'stok' => '2',
            'kode_barang' => '3080141248',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Spiegel Relascope',
            'stok' => '14',
            'kode_barang' => '3080146014',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Antenna Relay',
            'stok' => '6',
            'kode_barang' => '3080158021',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Serial Scanner/Printer',
            'stok' => '2',
            'kode_barang' => '3080302039',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Refrigerator/Freezer',
            'stok' => '3',
            'kode_barang' => '3080605036',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Kipas Penggerak Air',
            'stok' => '1',
            'kode_barang' => '3090201087',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Kamera Digital',
            'stok' => '1',
            'kode_barang' => '3090402031',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'GPS',
            'stok' => '12',
            'kode_barang' => '3090403004',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Layar Proyektor',
            'stok' => '1',
            'kode_barang' => '3090407022',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'PC Workstation',
            'stok' => '1',
            'kode_barang' => '3100101007',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Komputer Jaringan Lainnya',
            'stok' => '1',
            'kode_barang' => '3100101999',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'P.C Unit',
            'stok' => '38',
            'kode_barang' => '3100102001',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Laptop',
            'stok' => '1',
            'kode_barang' => '3100102002',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Note Book',
            'stok' => '23',
            'kode_barang' => '3100102003',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Tablet PC',
            'stok' => '1',
            'kode_barang' => '3100102009',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Hard Disk',
            'stok' => '1',
            'kode_barang' => '3100201012',
            'satuan' => 'Buah'
        ]);
        Barang::create([
            'nama' => 'Keyboard (Peralatan Mainframe)',
            'stok' => '1',
            'kode_barang' => '3100201013',
            'satuan' => 'Buah'
        ]);
        
    }
}
