<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Tambah Produk</h1>
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <label for="nama_produk">Nama:</label>
        <input type="text" name="nama_produk" id="nama_produk" required>
        <br>
        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" required>
        <br>
        <label for="stok">Stok:</label>
        <input type="number" name="stok" id="stok" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="{{ route('produk.index') }}">Kembali ke Daftar Produk</a>
</body>

</html>
