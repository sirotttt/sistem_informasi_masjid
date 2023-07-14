<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class DashboardPengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengurus = Pengurus::all();
        return view('dashboard.pengurus.index', compact('pengurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        return view('dashboard.pengurus.create', compact('jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'nama_pengurus' => 'required',
            'kode_pengurus' => 'required',
            'jabatan_id' => 'required',
            'kontak' => 'required',
        ]);
        Pengurus::create($valid);
        return redirect('/dashboard/pengurus')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengurus = Pengurus::findOrFail($id);
        $jabatan = Jabatan::all();
        return view('dashboard.pengurus.edit', compact('pengurus', 'jabatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $valid = $request->validate([
            'nama_pengurus' => 'required',
            'kode_pengurus' => 'required',
            'jabatan_id' => 'required',
            'kontak' => 'required',
        ]);
        Pengurus::whereId($id)->update($valid);
        return redirect('/dashboard/pengurus')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pengurus::destroy($id);
        return redirect('/dashboard/pengurus')->with('success', 'Data berhasil dihapus');
    }
}
