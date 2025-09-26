@extends('layouts.app')

@section('title', 'Tambah Foto')

@section('content')
    <h1>Tambah Foto Galeri</h1>

    <form action="{{ route('galeri.store') }}" method="POST">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="judul" required><br><br>

        <label>Link Gambar (URL):</label><br>
        <input type="url" name="gambar" required><br><br>

        <button type="submit">Simpan</button>
    </form>
@endsection
