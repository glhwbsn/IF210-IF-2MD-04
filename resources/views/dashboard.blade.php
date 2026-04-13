<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Dashboard PBL</h4>
                    </div>
                    <div class="card-body">
                        <h5>Selamat Datang, {{ $user }}!</h5>
                        <p>Ini adalah halaman utama proyek PBL tim kami.</p>
                        
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="p-3 bg-white border rounded text-center">
                                    <h6>Status Proyek</h6>
                                    <span class="badge bg-warning text-dark">{{ $status }}</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 bg-white border rounded text-center">
                                    <h6>Tugas Saya</h6>
                                    <p class="mb-0">Dashboard (MVC)</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 bg-white border rounded text-center">
                                    <h6>Praktikum</h6>
                                    <p class="mb-0">Minggu ke-3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>