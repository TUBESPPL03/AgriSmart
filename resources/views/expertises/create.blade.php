@extends('layouts.app')

@section('content')
    <h2>Tambah Keahlian</h2>

    <form action="{{ route('expertises.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="bidang_keahlian">Bidang Keahlian</label>
            <input type="text" id="bidang_keahlian" name="bidang_keahlian" value="{{ old('bidang_keahlian') }}" required>
        </div>

        <div class="form-group">
            <label for="durasi">Pengalaman (bulan)</label>
            <input type="number" id="durasi" name="durasi" value="{{ old('durasi') }}" required>
        </div>

        <div class="form-group">
            <label for="sertifikat">Unggah Sertifikat (Opsional)</label>
            <input type="file" id="sertifikat" name="sertifikat">
        </div>

        <button type="submit" class="btn-green">Simpan</button>
        <a href="{{ route('expertises.index') }}" class="btn-grey">Batal</a>
    </form>
@endsection
