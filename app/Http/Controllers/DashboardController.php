<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Barang;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBarang = Barang::count();
        $transaksiKeluar = Transaksi::where('status', 'Keluar')->count();
        $transaksiMasuk = Transaksi::where('status', 'Masuk')->count();

        return view('dashboard', compact('totalBarang', 'transaksiKeluar', 'transaksiMasuk'));
    }
}
