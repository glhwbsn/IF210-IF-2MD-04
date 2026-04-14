<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEWAMOBIL | Daftar Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #f8f9fa; }
        .nav-dark { background-color: #1a1a1a; }
        .btn-yellow { background-color: #ffc107; color: black; font-weight: bold; }
        .card-shadow { box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); border: 1px solid #e5e7eb; }
    </style>
</head>
<body>

    <nav class="nav-dark text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">SEWA<span class="text-yellow-400">MOBIL</span></h1>
            <div class="space-x-6 flex items-center">
                <a href="/" class="hover:text-yellow-400">Home</a>
                <a href="/login" class="hover:text-yellow-400">Login</a>
                <a href="/register" class="btn-yellow px-4 py-2 rounded-md">Daftar Sekarang</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto py-12 px-4">
        <h2 class="text-3xl font-bold text-center mb-10">Pilihan Armada Kami</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            
            <div class="bg-white p-6 rounded-lg card-shadow">
                <h3 class="text-xl font-bold mb-2">Toyota Avanza</h3>
                <p class="text-gray-500 text-sm mb-4">7 Kursi | Manual | Bensin</p>
                <p class="text-blue-600 font-bold text-lg mb-4">Rp 350.000 / Hari</p>
                <button class="w-full border border-blue-600 text-blue-600 py-2 rounded hover:bg-blue-50 transition">Sewa Sekarang</button>
            </div>

            <div class="bg-white p-6 rounded-lg card-shadow">
                <h3 class="text-xl font-bold mb-2">Honda Brio</h3>
                <p class="text-gray-500 text-sm mb-4">5 Kursi | Matic | Bensin</p>
                <p class="text-blue-600 font-bold text-lg mb-4">Rp 250.000 / Hari</p>
                <button class="w-full border border-blue-600 text-blue-600 py-2 rounded hover:bg-blue-50 transition">Sewa Sekarang</button>
            </div>

            <div class="bg-white p-6 rounded-lg card-shadow">
                <h3 class="text-xl font-bold mb-2">Mitsubishi Pajero</h3>
                <p class="text-gray-500 text-sm mb-4">7 Kursi | Matic | Diesel</p>
                <p class="text-blue-600 font-bold text-lg mb-4">Rp 800.000 / Hari</p>
                <button class="w-full border border-blue-600 text-blue-600 py-2 rounded hover:bg-blue-50 transition">Sewa Sekarang</button>
            </div>

        </div>

        <div class="mt-12 text-center">
            <a href="/" class="text-blue-600 hover:underline">← Kembali ke Beranda</a>
        </div>
    </div>

</body>
</html>