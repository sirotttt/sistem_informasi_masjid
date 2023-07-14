<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Donasi;
use App\Models\Kegiatan;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use App\Models\InventarisMasjid;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));
    }

    public function dashboard()
    {
        $totalpengurus = Pengurus::count();
        $totalkegiatan = Kegiatan::count();
        $totaldonasi = Donasi::count();
        $totalinventaris = InventarisMasjid::count();
        return view('dashboard.dashboard', compact('totalpengurus','totalkegiatan', 'totaldonasi', 'totalinventaris'));
    }
}
