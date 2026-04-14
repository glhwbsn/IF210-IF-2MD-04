<html>
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <link rel="stylesheet" href="{{ asset('styles/style_galeh.css') }}">
    <h1>Ini Judul Merah</h1>
    <img src="{{ asset('images/galeh_laravel1.png')}}" alt="">
    <img src="{{ asset('images/galeh_laravel2.png')}}" alt="">
    <div class="bg-blue-500 p-4 m-4 rounded-lg text-white">
        Ini pakai Tailwind
    </div>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $dataku)
            <tr>
                <td>{{ $dataku['id'] }}</td>
                <td>{{ $dataku['nama'] }}</td>
                <td>{{ $dataku['harga'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</html>