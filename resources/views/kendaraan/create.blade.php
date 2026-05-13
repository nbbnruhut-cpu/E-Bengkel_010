@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success text-white">Tambah Antrean Kendaraan</div>
                <div class="card-body">
                    <!-- Form metode POST sesuai instruksi -->
                    <form action="{{ route('kendaraan.store') }}" method="POST">
                        @csrf <!-- Proteksi CSRF sesuai instruksi Poin 4 -->

                        <div class="mb-3">
                            <label class="form-label">Plat Nomor</label>
                            <input type="text" name="plat_nomor" class="form-control" placeholder="Contoh: BK 1234 XX" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama Pemilik</label>
                            <input type="text" name="nama_pemilik" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Merk Kendaraan</label>
                            <input type="text" name="merk_kendaraan" class="form-control" placeholder="Contoh: Honda, Yamaha" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Keluhan</label>
                            <textarea name="keluhan" class="form-control" rows="3" placeholder="Penjelasan kerusakan" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Simpan Kendaraan</button>
                        <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary w-100 mt-2">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection