@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2>Daftar Keahlian</h2>
        <a href="{{ route('expertises.create') }}" class="btn-green">+ Tambah Keahlian</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Bidang Keahlian</th>
                <th>Pengalaman (bulan)</th>
                <th>Sertifikat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($expertises as $expertise)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $expertise->bidang_keahlian }}</td>
                    <td>{{ $expertise->durasi }}</td>
                    <td>
                        @if ($expertise->sertifikat)
                            <a href="{{ asset('storage/' . $expertise->sertifikat) }}" target="_blank">Lihat</a>
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('expertises.edit', $expertise->id) }}">Edit</a> |
                        <form action="{{ route('expertises.destroy', $expertise->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Yakin hapus?')" style="background: none; border: none; color: #d32f2f; cursor: pointer;">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
