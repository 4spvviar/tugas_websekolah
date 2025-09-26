@extends('layouts.app')

@section('title', 'Ekstrakurikuler')

@section('content')
    <h1>Daftar Ekstrakurikuler</h1>

    <a href="{{ route('ekstrakurikuler.create') }}">+ Tambah Data</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach($ekstra as $item)
            <li>
                <strong>{{ $item->nama }}</strong> - {{ $item->deskripsi }}
                <a href="{{ route('ekstrakurikuler.edit', $item->id) }}">Edit</a>
                <form action="{{ route('ekstrakurikuler.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
