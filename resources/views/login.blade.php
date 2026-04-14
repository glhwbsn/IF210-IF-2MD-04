<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS Vite -->
    @vite(['resources/css/login.css'])
</head>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-4">
                <div class="card login-card p-4 p-md-5">
                    <div class="card-body">
                        <h3 class="login-title text-center">Login</h3>

                        <form action="" method="POST">
                            @csrf

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
                                           placeholder="Masukkan password Anda"
                                           id="passwordInput" required>

                                    <button type="button" class="btn btn-outline-secondary"
                                            onclick="togglePassword('passwordInput')">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Login
                                </button>
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

    <!-- JS Toggle Password -->
    <script>
        function togglePassword(id) {
            const input = document.getElementById(id);
            input.type = input.type === "password" ? "text" : "password";
        }
    </script>
</body>
</html>