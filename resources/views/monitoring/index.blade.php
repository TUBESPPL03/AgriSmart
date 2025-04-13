<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monitoring Tanaman</title>

    <!-- Bootstrap 5 & DataTables CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f0fdf4;
        }
        .card {
            border: none;
            border-radius: 1rem;
        }
        .card-header {
            background-color: #198754;
            color: white;
            border-top-left-radius: 1rem;
            border-top-right-radius: 1rem;
        }
        .btn-add {
            background-color: #ffffff;
            color: #198754;
            border: 1px solid #198754;
        }
        .btn-add:hover {
            background-color: #198754;
            color: #ffffff;
        }
        .btn-edit {
            color: #198754;
            border: 1px solid #198754;
        }
        .btn-edit:hover {
            background-color: #198754;
            color: white;
        }
        .btn-delete {
            color: #dc3545;
            border: 1px solid #dc3545;
        }
        .btn-delete:hover {
            background-color: #dc3545;
            color: white;
        }
        table img {
            max-width: 60px;
            border-radius: 0.5rem;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="mb-0"><i class="bi bi-graph-up-arrow me-2"></i>Monitoring Tanaman</h4>
            <a href="{{ route('monitoring.create') }}" class="btn btn-add">
                <i class="bi bi-plus-circle me-1"></i>Tambah Data
            </a>
        </div>
        <div class="card-body">
            <table id="plantTable" class="table table-striped align-middle">
                <thead class="table-success">
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Jenis Tanaman</th>
                        <th>Riwayat Aktivitas</th>
                        <th>Waktu Panen</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($plantGrowths as $index => $plant)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                @if($plant->photo)
                                    <img src="{{ asset('storage/' . $plant->photo) }}" alt="Foto Tanaman" class="img-thumbnail" style="max-height: 70px;">
                                @else
                                    <em>—</em>
                                @endif
                            </td>
                            <td>{{ $plant->plant_type }}</td>
                            <td>{{ $plant->activity_history }}</td>
                            <td>{{ \Carbon\Carbon::parse($plant->harvest_time)->format('d M Y') }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-success btn-edit me-1">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="{{ route('monitoring.destroy', $plant->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">Belum ada data monitoring.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#plantTable').DataTable();
    });
</script>

</body>
</html>
