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
            'email' => 'moh.fikryansyah1@gmail.com',
            'password' => 'fiqriansyah2001'
        ]);
        
        Role::create(['name' => 'ADMIN']);
        Role::create(['name' => 'PEGAWAI']);

        $admin = User::find(1);
        $user = User::find(2);
        $admin->assignRole('ADMIN');
        $user->assignRole('PEGAWAI');

        Barang::create([
            'nama' => 'Laptop',
            'stok' => '100',
            'kode_barang' => 'ABC123'
        ]);
        Barang::create([
            'nama' => 'Komputer',
            'stok' => '70',
            'kode_barang' => 'ABC231'
        ]);
        Barang::create([
            'nama' => 'Tablet',
            'stok' => '80',
            'kode_barang' => 'ABC321'
        ]);
    }
}
