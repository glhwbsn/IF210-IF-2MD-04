<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SewaMobil | Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar { min-height: 100vh; background: #212529; color: white; }
        .nav-link { color: #ccc; }
        .nav-link:hover { color: #fff; background: #343a40; }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-0 sidebar">
                <div class="p-3 text-center">
                    <h5 class="fw-bold">Panel Rental</h5>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link p-3 active" href="#">🏠 Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link p-3" href="#">🚗 Data Mobil</a></li>
                    <li class="nav-item"><a class="nav-link p-3" href="#">📅 Pesanan Saya</a></li>
                    <li class="nav-item"><a class="nav-link p-3 text-danger" href="/">🚪 Logout</a></li>
                </ul>
            </div>

            <main class="col-md-10 bg-light py-4">
                <div class="container">
                    <h3>Halo, {{ $user }}! 👋</h3>
                    <p class="text-muted">Selamat datang di panel manajemen rental mobil Anda.</p>
                    <hr>

                    <div class="row mt-4">
                        <div class="col-md-4 mb-3">
                            <div class="card border-0 shadow-sm p-3 bg-white">
                                <small class="text-muted">Jumlah Armada</small>
                                <h2 class="fw-bold">{{ $totalMobil }} Mobil</h2>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card border-0 shadow-sm p-3 bg-white border-start border-primary border-4">
                                <small class="text-muted">Sewa Aktif</small>
                                <h2 class="fw-bold text-primary">{{ $pesananAktif }} Pesanan</h2>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card border-0 shadow-sm p-3 bg-success text-white">
                                <small>Total Pendapatan (Demo)</small>
                                <h2 class="fw-bold">Rp 2.400.000</h2>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4 border-0 shadow-sm">
                        <div class="card-body">
                            <h6>Riwayat Penyewaan Terakhir</h6>
                            <table class="table mt-3">
                                <thead>
                                    <tr>
                                        <th>Mobil</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Toyota Avanza</td>
                                        <td>12 April 2026</td>
                                        <td><span class="badge bg-success">Selesai</span></td>
                                    </tr>
                                    <tr>
                                        <td>Honda Brio</td>
                                        <td>14 April 2026</td>
                                        <td><span class="badge bg-warning text-dark">Berjalan</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>