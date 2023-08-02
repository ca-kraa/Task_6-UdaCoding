<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        $barang->update($request->all());

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang berhasil diarsipkan.');
    }

    public function archive()
    {
        $barangs = Barang::onlyTrashed()->orderBy('kode_barang', 'desc')->get();
        return view('barang.archive', compact('barangs'));
    }

    public function restore($id)
    {
        $barang = Barang::onlyTrashed()->findOrFail($id);
        $barang->restore();
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dipulihkan.');
    }

    public function forceDelete($id)
    {
        $barang = Barang::onlyTrashed()->findOrFail($id);
        $barang->forceDelete();
        return redirect()->route('barang.archive')->with('success', 'Barang berhasil dihapus permanen.');
    }
}
