@extends('sekolah.layout')

@section('content')
<h2>Profil Sekolah</h2>
<div class="card">
    <div class="card-body">
        <h3>{{ $profil->nama_sekolah }}</h3>
        <p><strong>Kepala Sekolah:</strong> {{ $profil->kepala_sekolah }}</p>
        <p><strong>NPSN:</strong> {{ $profil->npsn }}</p>
        <p><strong>Alamat:</strong> {{ $profil->alamat }}</p>
        <p><strong>Kontak:</strong> {{ $profil->kontak }}</p>
        <p><strong>Visi Misi:</strong> {{ $profil->visi_misi }}</p>
    </div>
</div>
@endsection
