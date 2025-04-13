<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Monitoring Tanaman</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        .btn-save {
            background-color: #198754;
            color: white;
        }
        .btn-save:hover {
            background-color: #157347;
        }
        .form-label {
            font-weight: 600;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <div class="card shadow">
        <div class="card-header">
            <h4 class="mb-0"><i class="bi bi-plus-circle me-2"></i>Tambah Data Monitoring Tanaman</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('monitoring.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="plant_type" class="form-label">Jenis Tanaman</label>
                        <input type="text" name="plant_type" id="plant_type" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="harvest_time" class="form-label">Waktu Panen</label>
                        <input type="date" name="harvest_time" id="harvest_time" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <label for="activity_history" class="form-label">Riwayat Aktivitas</label>
                        <textarea name="activity_history" id="activity_history" rows="3" class="form-control" required></textarea>
                    </div>
                    <div class="col-12">
                        <label for="photo" class="form-label">Foto Tanaman</label>
                        <input type="file" name="photo" id="photo" class="form-control">
                    </div>
                    <div class="col-12 mt-3">
                        <button type="submit" class="btn btn-save">
                            <i class="bi bi-save me-1"></i>Simpan
                        </button>
                        <a href="{{ route('monitoring.index') }}" class="btn btn-outline-secondary ms-2">
                            <i class="bi bi-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
