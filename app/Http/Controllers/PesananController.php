<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class PesananController extends Controller
{
    /**
     * Menampilkan form pesanan.*/
    public function index()
    {
        return view('pesanan.index');
    }

    /*** Menyimpan data pesanan ke database.*/
    public function store(Request $request)
    {
        // Simpan data ke database
        $pesanan = new Pesanan();
        $pesanan->order_details = $request->order_details;
        $pesanan->total_price = $request->total_price;
        $pesanan->save();

        // Redirect dengan pesan sukses
        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil disimpan!');
    }
}