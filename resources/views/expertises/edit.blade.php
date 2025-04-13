@extends('layouts.app')

@section('content')
    <h2>Edit Keahlian</h2>

    <form action="{{ route('expertises.update', $expertise->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="bidang_keahlian">Bidang Keahlian</label>
            <input type="text" id="bidang_keahlian" name="bidang_keahlian" value="{{ old('bidang_keahlian', $expertise->bidang_keahlian) }}" required>
        </div>

        <div class="form-group">
            <label for="durasi">Pengalaman (bulan)</label>
            <input type="number" id="durasi" name="durasi" value="{{ old('durasi', $expertise->durasi) }}" required>
        </div>

        <div class="form-group">
            <label for="sertifikat">Ganti Sertifikat (Opsional)</label>
            <input type="file" id="sertifikat" name="sertifikat">
            @if ($expertise->sertifikat)
                <p>File saat ini: <a href="{{ asset('storage/' . $expertise->sertifikat) }}" target="_blank">Lihat Sertifikat</a></p>
            @endif
        </div>

        <button type="submit" class="btn-green">Perbarui</button>
        <a href="{{ route('expertises.index') }}" class="btn-grey">Batal</a>
    </form>
@endsection
