@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar Antrean Servis</h2>
        <!-- Tombol Tambah Kendaraan di atas tabel sesuai Poin 4 -->
        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">Tambah Kendaraan</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Plat Nomor</th>
                <th>Nama Pemilik</th>
                <th>Merk Kendaraan</th>
                <th>Keluhan</th>
                <th>Aksi</th> <!-- Kolom aksi dibiarkan kosong dulu -->
            </tr>
        </thead>
        <tbody>
            @foreach($kendaraans as $k)
            <tr>
                <td>{{ $k->id }}</td>
                <td>{{ $k->plat_nomor }}</td>
                <td>{{ $k->nama_pemilik }}</td>
                <td>{{ $k->merk_kendaraan }}</td>
                <td>{{ $k->keluhan }}</td>
                <td>
                    <!-- Bagian Aksi (Edit/Hapus) belum ada apa-apa sesuai permintaan -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    @if($kendaraans->isEmpty())
        <div class="alert alert-info text-center">
            Belum ada antrean kendaraan. Klik "Tambah Kendaraan" untuk mengisi.
        </div>
    @endif
</div>
@endsection