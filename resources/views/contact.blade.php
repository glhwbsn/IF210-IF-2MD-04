<div>
    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEWAMOBIL | Hubungi Kami</title>
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
                <a href="/about" class="hover:text-yellow-400">About</a>
                <a href="/login" class="hover:text-yellow-400">Login</a>
                <a href="/register" class="btn-yellow px-4 py-2 rounded-md">Daftar Sekarang</a>
            </div>
        </div>
    </nav>

    <div class="container mx-auto py-12 px-4">
        <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg card-shadow">
            <h2 class="text-3xl font-bold text-center mb-2">Hubungi Kami</h2>
            <p class="text-gray-600 text-center mb-8">Punya pertanyaan? Kirim pesan kepada kami dan tim kami akan segera membalas.</p>

            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" name="name" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-yellow-400 focus:border-yellow-400" placeholder="Masukkan nama Anda">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-yellow-400 focus:border-yellow-400" placeholder="nama@email.com">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Pesan</label>
                    <textarea name="message" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md p-2 focus:ring-yellow-400 focus:border-yellow-400" placeholder="Tulis pesan Anda di sini..."></textarea>
                </div>

                <button type="submit" class="w-full btn-yellow py-3 rounded-md hover:bg-yellow-500 transition duration-300">
                    Kirim Pesan
                </button>
            </form>
        </div>

        <div class="mt-12 text-center text-gray-500">
            <p>Atau hubungi kami melalui:</p>
            <p class="font-bold">WhatsApp: +62 812-3456-7890</p>
        </div>
    </div>

</body>
</html>
</div>
