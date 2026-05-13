<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan; // Pastikan model di-import
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    // Tampilkan seluruh antrean kendaraan (Read)
    public function index()
    {
        $kendaraans = Kendaraan::all(); 
        return view('kendaraan.index', compact('kendaraans'));
    }

    // Tampilkan halaman form tambah (Create)
    public function create()
    {
        return view('kendaraan.create');
    }

    // Simpan data ke database (POST)
    public function store(Request $request)
    {
        // Menyimpan data (Mass Assignment menggunakan $fillable di model)
        Kendaraan::create($request->all());

        // Redirect kembali ke halaman Daftar Servis sesuai instruksi
        return redirect()->route('kendaraan.index');
    }
}