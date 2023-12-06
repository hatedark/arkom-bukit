<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    // Tiket.php
    protected $fillable = ['user_id', 'nama', 'email', 'nomor_hp', 'tanggal', 'jumlah_tiket', 'keterangan'];
}
