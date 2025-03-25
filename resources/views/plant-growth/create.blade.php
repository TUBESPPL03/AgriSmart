@extends('layouts.app')

@section('title', 'Tambah Data Pertumbuhan Tanaman')

@section('content')
<div class="container">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Tambah Data Pertumbuhan Tanaman</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('plant_growth.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                    <label for="plant_type" class="form-label">Jenis Tanaman</label>
                    <select class="form-control" id="plant_type" name="plant_type" required>
                        <option value="" selected disabled>Pilih jenis tanaman</option>
                        <option value="Padi">Padi</option>
                        <option value="Jagung">Jagung</option>
                        <option value="Kedelai">Kedelai</option>
                        <option value="Cabai">Cabai</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="activity_history" class="form-label">History Aktivitas Pertanian</label>
                    <textarea class="form-control" id="activity_history" name="activity_history" rows="3" placeholder="Masukkan riwayat aktivitas pertanian" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="photo" class="form-label">Unggah Foto</label>
                    <input class="form-control" type="file" id="photo" name="photo" required>
                </div>

                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('plant_growth.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
