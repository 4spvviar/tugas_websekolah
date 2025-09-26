@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
    <h1>Galeri Sekolah</h1>

    <a href="{{ route('galeri.create') }}">+ Tambah Foto</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <div style="display:flex; gap:20px; flex-wrap:wrap;">
        @foreach($galeri as $item)
            <div>
                <p>{{ $item->judul }}</p>
                <img src="{{ $item->gambar }}" alt="{{ $item->judul }}" width="200"><br>
                <a href="{{ route('galeri.edit', $item->id) }}">Edit</a>
                <form action="{{ route('galeri.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
