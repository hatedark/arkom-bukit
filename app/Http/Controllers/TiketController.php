<?php
// TiketController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;

class TiketController extends Controller
{
    public function submitTiket(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'nomor_hp' => 'nullable|numeric',
            'tanggal' => 'required|date',
            'jumlah_tiket' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);

        Tiket::create($request->all());

        return redirect()->back()->with('success', 'Pemesanan tiket berhasil!');
    }
}
