<!-- File: resources/views/create-nama-lengkap.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengisian Nama Lengkap</title>
</head>
<body>

    <h1>Form Pengisian Nama Lengkap</h1>

    @if(session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('store.nama-lengkap') }}" method="post">
        @csrf

        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" name="nama_lengkap" required>

        <button type="submit">Simpan</button>
    </form>

    <h2>Data Nama Lengkap</h2>
    <ul>
        @foreach($namaLengkap as $nama)
            <li>{{ $nama->nama_lengkap }}</li>
        @endforeach
    </ul>

</body>
</html>
