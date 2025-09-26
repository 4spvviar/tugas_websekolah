@extends('layouts.app')

@section('title', 'Tambah Ekstrakurikuler')

@section('content')
    <h1>Tambah Ekstrakurikuler</h1>

    <form action="{{ route('ekstrakurikuler.store') }}" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi"></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>
@endsection
