<?php
// app/Models/Table.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = ['nomor_meja', 'status'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'meja_id'); // Sesuaikan dengan nama kunci luar yang digunakan pada tabel reservations
    }
}
