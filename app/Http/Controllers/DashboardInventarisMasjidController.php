<?php

namespace App\Http\Controllers;

use App\Models\InventarisMasjid;
use Illuminate\Http\Request;

class DashboardInventarisMasjidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventaris = InventarisMasjid::all();
        return view('dashboard.inventaris.index', compact('inventaris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.inventaris.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'nama_barang' => 'required',
            'kode' => 'required',
            'jumlah' => 'required',
            'kondisi_barang' => 'required',
        ]);
        InventarisMasjid::create($valid);
        return redirect('/dashboard/inventaris')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $inventaris = InventarisMasjid::findOrFail($id);
        return view('dashboard.inventaris.edit', compact('inventaris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $valid = $request->validate([
            'nama_barang' => 'required',
            'kode' => 'required',
            'jumlah' => 'required',
            'kondisi_barang' => 'required',
        ]);
        InventarisMasjid::whereId($id)->update($valid);
        return redirect('/dashboard/inventaris')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        InventarisMasjid::destroy($id);
        return redirect('/dashboard/inventaris')->with('success', 'Data berhasil dihapus');
    }
}
