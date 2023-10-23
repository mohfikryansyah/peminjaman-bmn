<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasie extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['nama', 'nip', 'seksi'];
}
