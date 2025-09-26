@extends('layouts.app')

@section('title', 'Edit Ekstrakurikuler')

@section('content')
    <h1>Edit Ekstrakurikuler</h1>

    <form action="{{ route('ekstrakurikuler.update', $ekstrakurikuler->id) }}" method="POST">
        @csrf @method('PUT')
        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $ekstrakurikuler->nama }}" required><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="deskripsi">{{ $ekstrakurikuler->deskripsi }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>
@endsection
