@extends('sekolah.layout')

@section('content')
<h2>Berita Terbaru</h2>
<div class="row">
    @foreach($berita as $b)
    <div class="col-md-4">
        <div class="card mb-3">
            <img src="{{ asset('storage/'.$b->gambar) }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $b->judul }}</h5>
                <p class="card-text">{{ Str::limit($b->isi, 100) }}</p>
                <small class="text-muted">{{ $b->tanggal }}</small>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
