<?php
// app/Models/Reservation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'nama', 'email', 'nomor_hp', 'tanggal_kunjungan', 'jam_booking', 'meja_id', 'catatan'];

    public function meja()
    {
        return $this->belongsTo(Table::class, 'meja_id');
    }
}
