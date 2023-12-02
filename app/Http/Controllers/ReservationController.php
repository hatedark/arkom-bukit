<?php
// app/Http/Controllers/ReservationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Table;

class ReservationController extends Controller
{
    public function showForm()
    {
        // Ambil daftar meja yang tersedia
        $availableTables = Table::whereDoesntHave('reservations', function ($query) {
            $query->where('tanggal_kunjungan', '>=', now());
        })->get();

        return view('reservasi.pemesanan_meja', ['availableTables' => $availableTables]);
    }

    public function submitReservation(Request $request)
{
    $request->validate([
        'nama' => 'required|string',
        'email' => 'required|email',
        'nomor_hp' => 'nullable|numeric',
        'tanggal_kunjungan' => 'required|date',
        'jam_booking' => 'required',
        'meja_id' => 'required|exists:tables,id',
        'catatan' => 'required',
    ]);

    Reservation::create($request->all());

    // Update status meja yang telah terpilih
    Table::where('id', $request->meja)->update(['status' => 'booked']);

    return redirect()->route('show_reservation_form')->with('success', 'Reservasi meja berhasil!');
}

}
