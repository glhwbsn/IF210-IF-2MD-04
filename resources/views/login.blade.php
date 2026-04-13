<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background-color: #f8f9fa;
        }

        .login-card {
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

        .form-control[type="number"] {
            -moz-appearance: textfield;
            appearance: textfield;
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

        .login-title {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 0.5rem;
        }

        .register-link a {
            color: #4a90e2;
            text-decoration: none;
        }

        .register-link a:hover {
            color: #357abd;
            text-decoration: none;
        }

        .alert-danger {
            border-radius: 8px;
            border: 1px solid #f5c6cb;
            background-color: #f8d7da;
            color: #721c24;
        }

        .input-group .btn-outline-secondary {
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
            border-left: 0;
            background-color: white;
        }
        .input-group .form-control:focus + .btn-outline-secondary {
            border-color: #4a90e2;
            box-shadow: none;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-4">
                <div class="card login-card p-4 p-md-5">
                    <div class="card-body">
                        <h3 class="login-title text-center">Login</h3>
                        <form action="" method="POST">
                            <div class="mb-4">
                                <label class="form-label">No Identitas (NIK)</label>
                                <input type="number" name="no_id" class="form-control" 
                                       placeholder="Masukkan nomor identitas Anda" 
                                       required>
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" 
                                           placeholder="Masukkan password Anda" id="passwordInput" required>
                                    <button type="button" class="btn btn-outline-secondary toggle-password" 
                                            onclick="togglePassword('passwordInput')" aria-label="Tampilkan password">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">Login</button>
                            </div>
                        </form>
                        
                        <div class="text-center mt-4 pt-3 border-top">
                            <small class="register-link">
                                Belum punya akun? 
                                <a href="">Daftar di sini</a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>