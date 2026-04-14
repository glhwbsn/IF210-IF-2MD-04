<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS Vite -->
    @vite(['resources/css/register.css'])
</head>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100 py-4">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card register-card p-0">
                    <div class="card-body">
                        <h3 class="register-title text-center">Register</h3>

                        <form id="registerForm" action="" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">No Identitas (NIK)</label>
                                <input type="number" name="no_id" class="form-control" required
                                       placeholder="Masukkan nomor identitas">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" required
                                       placeholder="Masukkan nama lengkap">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Alamat Lengkap</label>
                                <input type="text" name="alamat_lengkap" class="form-control" required
                                       placeholder="Masukkan alamat lengkap">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required
                                       placeholder="Masukkan alamat email">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control" required
                                           placeholder="Buat password Anda">
                                    <button type="button" class="btn btn-outline-secondary toggle-password"
                                            data-target="password">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div class="form-text">Minimal 6 karakter</div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Konfirmasi Password</label>
                                <div class="input-group">
                                    <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" required
                                           placeholder="Konfirmasi password Anda">
                                    <button type="button" class="btn btn-outline-secondary toggle-password"
                                            data-target="confirmpassword">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div id="passwordMatchMessage" class="form-text"></div>
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="agree_terms" required>
                                <label class="form-check-label" for="agree_terms">
                                    Saya menyatakan bahwa data yang diisi adalah benar.
                                </label>
                            </div>

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">Daftar</button>
                            </div>
                        </form>

                        <div class="text-center mt-4 pt-3 border-top">
                            <small class="login-link">
                                Sudah punya akun?
                                <a href="">
                                    Masuk di sini
                                </a>
                            </small>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>