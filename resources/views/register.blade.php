<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background-color: #f8f9fa;
        }

        .register-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid #e9ecef;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #dee2e6;
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
            transition: all 0.2s;
        }

        .form-control:focus {
            border-color: #4a90e2;
            box-shadow: 0 0 0 0.2rem rgba(74, 144, 226, 0.15);
        }

        .form-control[type="number"]::-webkit-inner-spin-button,
        .form-control[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .btn-primary {
            background-color: #4a90e2;
            border-color: #4a90e2;
            border-radius: 8px;
            padding: 0.75rem;
            font-weight: 500;
            transition: all 0.2s;
        }

        .btn-primary:hover {
            background-color: #3a7bc8;
            border-color: #3a7bc8;
            transform: translateY(-1px);
        }

        .register-title {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 0.5rem;
        }

        .alert-danger, .alert-success {
            border-radius: 8px;
            font-size: 0.9rem;
        }

        .alert-danger {
            border: 1px solid #f5c6cb;
            background-color: #f8d7da;
            color: #721c24;
        }

        .alert-success {
            border: 1px solid #c3e6cb;
            background-color: #d4edda;
            color: #155724;
        }

        .register-card .card-body {
            padding: 2.5rem;
        }

        .login-link a {
            color: #4a90e2;
            text-decoration: none;
        }

        .login-link a:hover {
            color: #357abd;
            text-decoration: none;
        }

        .text-success {
            color: #28a745 !important;
            font-weight: 500;
        }

        .text-danger {
            color: #dc3545 !important;
            font-weight: 500;
        }

        .form-control.is-valid {
            border-color: #28a745;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }

        .form-control.is-invalid {
            border-color: #dc3545;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right calc(0.375em + 0.1875rem) center;
            background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
        }
    </style>
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100 py-4">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card register-card p-0">
                    <div class="card-body">
                        <h3 class="register-title text-center">Register</h3>

                        <form id="registerForm" action="register.php" method="POST">
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
                                <a href="../login/login.php">
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