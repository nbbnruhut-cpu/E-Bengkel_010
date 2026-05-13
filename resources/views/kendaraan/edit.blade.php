@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-warning text-dark fw-bold">Edit Data Kendaraan</div>
                <div class="card-body">
                    <!-- Form Update dengan Method Spoofing sesuai Poin 5 -->
                    <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Wajib ada untuk Update -->

                        <div class="mb-3">
                            <label class="form-label">Plat Nomor</label>
                            <input type="text" name="plat_nomor" class="form-control" value="{{ $kendaraan->plat_nomor }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Pemilik</label>
                            <input type="text" name="nama_pemilik" class="form-control" value="{{ $kendaraan->nama_pemilik }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Merk Kendaraan</label>
                            <input type="text" name="merk_kendaraan" class="form-control" value="{{ $kendaraan->merk_kendaraan }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Keluhan</label>
                            <textarea name="keluhan" class="form-control" rows="3" required>{{ $kendaraan->keluhan }}</textarea>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection