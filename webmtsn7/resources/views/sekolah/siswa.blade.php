@extends('sekolah.layout')

@section('content')
<h2>Data Siswa</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>NISN</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tahun Masuk</th>
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $s)
        <tr>
            <td>{{ $s->nisn }}</td>
            <td>{{ $s->nama_siswa }}</td>
            <td>{{ $s->jenis_kelamin }}</td>
            <td>{{ $s->tahun_masuk }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
