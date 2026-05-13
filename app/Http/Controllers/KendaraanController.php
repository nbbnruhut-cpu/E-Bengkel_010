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
    // 1. Fungsi untuk menampilkan halaman form edit
public function edit($id)
{
    // Mengambil data kendaraan berdasarkan ID, jika tidak ada muncul error 404
    $kendaraan = \App\Models\Kendaraan::findOrFail($id);
    
    // Mengarahkan ke file view edit.blade.php sambil membawa data kendaraan
    return view('kendaraan.edit', compact('kendaraan'));
}

// 2. Fungsi untuk memproses perubahan data ke database
public function update(Request $request, $id)
{
    $kendaraan = \App\Models\Kendaraan::findOrFail($id);
    
    // Melakukan update data berdasarkan input dari form
    $kendaraan->update($request->all());

    // Kembali ke halaman daftar dengan pesan sukses
    return redirect()->route('kendaraan.index')->with('success', 'Data berhasil diubah!');
}
}