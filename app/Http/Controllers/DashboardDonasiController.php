<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DashboardDonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donasi = Donasi::all();
        return view('dashboard.donasi.index', compact('donasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.donasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'tanggal' => 'required',
            'nominal' => 'required',
            'nama_donatur' => 'required',
        ]);
        Donasi::create($valid);
        return redirect('/dashboard/donasi')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $donasi = Donasi::findOrFail($id);
        return view('dashboard.donasi.edit', compact('donasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $valid = $request->validate([
            'tanggal' => 'required',
            'nominal' => 'required',
            'nama_donatur' => 'required',
        ]);
        Donasi::whereId($id)->update($valid);
        return redirect('/dashboard/donasi')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Donasi::destroy($id);
        return redirect('/dashboard/donasi')->with('success', 'Data berhasil dihapus');
    }
}
