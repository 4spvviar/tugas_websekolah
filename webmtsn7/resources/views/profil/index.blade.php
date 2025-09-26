@extends('layouts.app')

@section('title', 'Profil Sekolah')

@section('content')
    <h1>Profil Sekolah</h1>
    <p><strong>Nama:</strong> {{ $profil->nama ?? 'Belum ada data profil' }}</p>
    <p><strong>Deskripsi:</strong> {{ $profil->deskripsi ?? 'Belum ada deskripsi sekolah' }}</p>
@endsection
