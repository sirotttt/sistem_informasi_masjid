<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('dashboard.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        $valid['password'] = bcrypt($valid['password']);
        User::create($valid);
        return redirect('/dashboard/users')->with('success', 'Data berhasil ditambahkan');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::findOrFail($id);
        return view('dashboard.users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $valid = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'nullable',
        ]);
        if ($valid['password'] != null) {
            $valid['password'] = bcrypt($valid['password']);
        }
        User::whereId($id)->update($valid);
        return redirect('/dashboard/users')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('/dashboard/users')->with('success', 'Data berhasil dihapus');
    }
}
