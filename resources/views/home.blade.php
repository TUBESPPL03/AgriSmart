<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AgriSmart - Beranda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background-color: #f2f4f5;
    }
    .topbar {
        background-color: #1d8348;
        color: white;
        font-size: 0.9rem;
        padding: 5px 20px;
    }
    .navbar {
        background-color: #27ae60;
    }
    .navbar-brand, .nav-link, .btn-login {
        color: white !important;
        font-weight: bold;
    }
    .hero {
        background: linear-gradient(to top, #27ae60, #2ecc71);
        color: white;
        padding: 60px 20px;
        text-align: center;
    }
    .hero h1 {
        font-size: 3rem;
        font-weight: bold;
    }
    .hero p {
        font-size: 1.2rem;
    }
    .card-feature {
        border: none;
        border-radius: 12px;
        box-shadow: 0 0 15px rgba(0,0,0,0.05);
        transition: 0.3s;
    }
    .card-feature:hover {
        transform: translateY(-5px);
    }
  </style>
</head>
<body>

  <!-- Topbar -->
  <div class="topbar d-flex justify-content-between">
    <div>📍 Jl. Pertanian Cerdas No. 1, Bandung</div>
    <div>📞 0812-3456-7890 | ✉️ agrismart@gmail.com</div>
  </div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">🌿 AgriSmart</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('monitoring.index') }}">Monitoring</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('optimasi.pertanian') }}">Optimasi</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('rencana.panen') }}">Panen</a></li>
          <li class="nav-item"><a class="btn btn-light btn-sm ms-3" href="#">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section class="hero">
    <h1>Selamat Datang di AgriSmart</h1>
    <p>Inovasi Pertanian Modern untuk Masa Depan 🌱</p>
  </section>

  <!-- Feature Section -->
  <div class="container mt-5">
    <div class="row text-center g-4">
      <div class="col-md-4">
        <div class="card card-feature p-4">
          <i class="bi bi-bar-chart-line fs-2 text-success"></i>
          <h5 class="mt-3">Monitoring Tanaman</h5>
          <p>Pantau pertumbuhan tanaman secara real-time.</p>
          <a href="{{ route('monitoring.index') }}" class="btn btn-success">Lihat</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-feature p-4">
          <i class="bi bi-cpu fs-2 text-success"></i>
          <h5 class="mt-3">Optimasi Pertanian</h5>
          <p>Gunakan data untuk hasil panen maksimal.</p>
          <a href="{{ route('optimasi.pertanian') }}" class="btn btn-success">Lihat</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-feature p-4">
          <i class="bi bi-calendar-event fs-2 text-success"></i>
          <h5 class="mt-3">Rencana Panen</h5>
          <p>Atur dan prediksi waktu panen dengan presisi.</p>
          <a href="{{ route('rencana.panen') }}" class="btn btn-success">Lihat</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
