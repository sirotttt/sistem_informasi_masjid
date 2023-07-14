<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class DashboardKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatan = Kegiatan::all();
        return view('dashboard.kegiatan.index', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengurus = Pengurus::all();
        return view('dashboard.kegiatan.create', compact('pengurus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'nama_kegiatan' => 'required',
            'tanggal' => 'required',
            'pengurus_id' => 'required',
        ]);
        Kegiatan::create($valid);
        return redirect('/dashboard/kegiatan')->with('success', 'Data berhasil ditambahkan');
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $pengurus = Pengurus::all();
        return view('dashboard.kegiatan.edit', compact('kegiatan', 'pengurus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $valid = $request->validate([
            'nama_kegiatan' => 'required',
            'tanggal' => 'required',
            'pengurus_id' => 'required',
        ]);
        Kegiatan::whereId($id)->update($valid);
        return redirect('/dashboard/kegiatan')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kegiatan::destroy($id);
        return redirect('/dashboard/kegiatan')->with('success', 'Data berhasil dihapus');
    }
}
