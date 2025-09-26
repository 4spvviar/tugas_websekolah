@extends('layouts.app')

@section('title', 'Edit Foto')

@section('content')
    <h1>Edit Foto Galeri</h1>

    <form action="{{ route('galeri.update', $galeri->id) }}" method="POST">
        @csrf @method('PUT')
        <label>Judul:</label><br>
        <input type="text" name="judul" value="{{ $galeri->judul }}" required><br><br>

        <label>Link Gambar (URL):</label><br>
        <input type="url" name="gambar" value="{{ $galeri->gambar }}" required><br><br>

        <button type="submit">Update</button>
    </form>
@endsection
