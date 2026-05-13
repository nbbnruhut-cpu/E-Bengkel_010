@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Daftar Antrean Servis</h2>
        <!-- Tombol Tambah Kendaraan (Instruksi Poin 4) -->
        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-lg"></i> Tambah Kendaraan
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-hover table-striped mb-0">
                <thead class="table-dark">
                    <tr>
                        <th class="px-4">ID</th>
                        <th>Plat Nomor</th>
                        <th>Nama Pemilik</th>
                        <th>Merk Kendaraan</th>
                        <th>Keluhan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($kendaraans as $k)
                    <tr>
                        <td class="px-4">{{ $k->id }}</td>
                        <td><span class="badge bg-secondary">{{ $k->plat_nomor }}</span></td>
                        <td>{{ $k->nama_pemilik }}</td>
                        <td>{{ $k->merk_kendaraan }}</td>
                        <td>{{ $k->keluhan }}</td>
                        <td class="text-center">
                            <!-- Fitur Ubah (Instruksi Poin 5) -->
                            <a href="{{ route('kendaraan.edit', $k->id) }}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <!-- Fitur Hapus dengan Form & Konfirmasi JS (Instruksi Poin 5) -->
                            <form action="{{ route('kendaraan.destroy', $k->id) }}" method="POST" class="d-inline" 
                                  onsubmit="return confirm('Hapus kendaraan dari antrean?')">
                                @csrf
                                @method('DELETE') <!-- Method Spoofing -->
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-4 text-muted">
                            Belum ada antrean kendaraan saat ini.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection