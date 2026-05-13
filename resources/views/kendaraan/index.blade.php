@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Daftar Antrean Servis</h1>
    <!-- Tombol Tambah Kendaraan sesuai instruksi poin 4 -->
    <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">Tambah Kendaraan</a>
</div>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Plat Nomor</th>
            <th>Nama Pemilik</th>
            <th>Merk</th>
            <th>Keluhan</th>
            <th>Aksi</th>
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
                <!-- Tombol Edit dan Hapus untuk poin 5 -->
                <a href="{{ route('kendaraan.edit', $k->id) }}" class="btn btn-warning btn-sm">Edit</a>
                
                <form action="{{ route('kendaraan.destroy', $k->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Hapus kendaraan dari antrean?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection