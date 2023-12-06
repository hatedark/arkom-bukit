<?php
// TiketController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class TiketController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $tikets = Tiket::where('user_id', $userId)->latest()->paginate(99);
        $reservs = Reservation::where('user_id', $userId)->latest()->paginate(99);

        return view('pages.riwayat')->with('tikets', $tikets)->with('reservs', $reservs);
    }

    public function show(string $id): View
    {
        $tiket = Tiket::findOrFail($id);
        $reserv = Reservation::findOrFail($id);

        return view('pages.struk')->with('tiket', $tiket)->with('reserv', $reserv);
    }

    public function submitTiket(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string',
            'email' => 'required|email',
            'nomor_hp' => 'nullable|regex:/^\d{1,15}$/',
            'tanggal' => 'required|date',
            'jumlah_tiket' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);


        Tiket::create([
            'user_id'       => Auth::id(),
            'nama'          => $request->nama,
            'email'         => $request->email,
            'nomor_hp'      => $request->nomor_hp,
            'tanggal'       => $request->tanggal,
            'jumlah_tiket'  => $request->jumlah_tiket,
            'keterangan'    => $request->keterangan,
        ]);

        return redirect()->back()->with('success', 'Pemesanan tiket berhasil!');
    }
}
