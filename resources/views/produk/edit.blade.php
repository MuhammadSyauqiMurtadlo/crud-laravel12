@extends('layouts.app')

@section('title', 'Edit Produk')

@section('judul', 'Edit Produk')

@section('content')
    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama_produk">Nama:</label>
        <input type="text" name="nama_produk" id="nama_produk" value="{{ $produk->nama_produk }}" required>
        <br>
        <label for="stok">Stok:</label>
        <input type="number" name="stok" id="stok" value="{{ $produk->stok }}" required>
        <br>
        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" value="{{ $produk->harga }}" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
    <br>
    <a href="{{ route('produk.index') }}">Kembali ke Daftar Produk</a>
