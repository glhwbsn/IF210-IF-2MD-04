<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEWAMOBIL | Tentang Kami</title>
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
                <a href="/product" class="hover:text-yellow-400">Product</a>
                <a href="/about" class="text-yellow-400 font-bold">About</a>
                <a href="/contact" class="hover:text-yellow-400">Contact</a>
                <a href="/login" class="hover:text-yellow-400">Login</a>
                <a href="/register" class="btn-yellow px-4 py-2 rounded-md">Daftar Sekarang</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto py-16 px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6 text-gray-800">Tentang <span class="text-yellow-500">SEWAMOBIL</span></h2>
            <p class="text-lg text-gray-600 leading-relaxed mb-12">
                Kami adalah penyedia layanan rental mobil terpercaya yang berkomitmen memberikan kenyamanan dan keamanan dalam setiap perjalanan Anda. 
                Dengan armada yang selalu terawat dan pelayanan prima, kami siap menemani perjalanan bisnis maupun liburan keluarga Anda di seluruh wilayah.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            <div class="bg-white p-8 rounded-lg card-shadow text-center">
                <div class="text-yellow-500 text-4xl mb-4">⭐</div>
                <h3 class="text-xl font-bold mb-3">Visi</h3>
                <p class="text-gray-600">Menjadi perusahaan transportasi nomor satu yang mengedepankan teknologi dan kepuasan pelanggan.</p>
            </div>

            <div class="bg-white p-8 rounded-lg card-shadow text-center">
                <div class="text-yellow-500 text-4xl mb-4">🚀</div>
                <h3 class="text-xl font-bold mb-3">Misi</h3>
                <p class="text-gray-600">Memberikan unit kendaraan terbaru, bersih, dan pelayanan yang cepat serta transparan.</p>
            </div>

            <div class="bg-white p-8 rounded-lg card-shadow text-center">
                <div class="text-yellow-500 text-4xl mb-4">👥</div>
                <h3 class="text-xl font-bold mb-3">Tim Kami</h3>
                <p class="text-gray-600">Dikelola oleh tim profesional dan berpengalaman di bidang manajemen armada dan IT.</p>
            </div>
        </div>

        <div class="mt-16 bg-gray-900 text-white p-10 rounded-2xl flex flex-col md:flex-row items-center justify-between">
            <div>
                <h3 class="text-2xl font-bold">Siap memulai perjalanan?</h3>
                <p class="text-gray-400">Cek armada kami sekarang juga.</p>
            </div>
            <a href="/product" class="mt-6 md:mt-0 btn-yellow px-8 py-3 rounded-lg text-lg">Lihat Armada</a>
        </div>
    </div>

</body>
</html>