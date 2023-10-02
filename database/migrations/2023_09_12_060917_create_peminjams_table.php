<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama');
            $table->string('email');
            $table->string('nip');
            $table->string('pangkat');
            $table->string('seksi');
            $table->string('namaKasie');
            $table->string('nipKasie');
            $table->string('noSPT');
            $table->string('barang');
            $table->date('tgl_pinjam')->nullable();
            $table->date('tgl_pengembalian');
            $table->string('status');
            $table->string('suratImage');
            $table->string('kode_barang')->nullable();
            $table->string('seriNUP')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjams');
    }
};