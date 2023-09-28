<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $hidden = ['kode_barang'];
    
    public function huh()
    {
        return $this->hasMany(Peminjam::class, 'user_id');
    }
}
