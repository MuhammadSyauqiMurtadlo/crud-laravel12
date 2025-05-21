@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('judul', 'Tambah Produk')

@section('content')
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <label for="nama_produk">Nama:</label>
        <input type="text" name="nama_produk" id="nama_produk" required>
        <br>
        <label for="stok">Stok:</label>
        <input type="number" name="stok" id="stok" required>
        <br>
        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="{{ route('produk.index') }}">Kembali ke Daftar Produk</a>
