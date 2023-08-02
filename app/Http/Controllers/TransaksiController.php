<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Barang;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();
        $barang = Barang::all();

        return view('transaksi.index', compact('transaksi', 'barang'));
    }

    public function create()
    {
        return view('transaksi.create');
    }

    public function store(Request $request)
    {
        Transaksi::create($request->all());
        return redirect()->route('transaksi.index');
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('transaksi'));
    }

    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->update($request->all());
        return redirect()->route('transaksi.index');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diarsipkan.');
    }

    public function archive()
    {
        $transaksis = Transaksi::onlyTrashed()->get();
        return view('transaksi.archive', compact('transaksis'));
    }

    public function restore($id)
    {
        $transaksi = Transaksi::onlyTrashed()->findOrFail($id);
        $transaksi->restore();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dipulihkan.');
    }

    public function forceDelete($id)
    {
        $transaksi = Transaksi::onlyTrashed()->findOrFail($id);
        $transaksi->forceDelete();
        return redirect()->route('transaksi.archive')->with('success', 'Transaksi berhasil dihapus permanen.');
    }
}
