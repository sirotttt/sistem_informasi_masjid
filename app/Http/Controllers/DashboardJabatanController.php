<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class DashboardJabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jabatan = Jabatan::all();
        return view('dashboard.jabatan.index', compact('jabatan'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'nama_jabatan' => 'required',
        ]);
        Jabatan::create($valid);
        return redirect('/dashboard/jabatan')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('dashboard.jabatan.edit', compact('jabatan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $valid = $request->validate([
            'nama_jabatan' => 'required',
        ]);
        Jabatan::whereId($id)->update($valid);
        return redirect('/dashboard/jabatan')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Jabatan::destroy($id);
        return redirect('/dashboard/jabatan')->with('success', 'Data berhasil dihapus');
    }
}
