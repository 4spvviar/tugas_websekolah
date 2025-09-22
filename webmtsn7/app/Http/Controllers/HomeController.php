<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Guru;
use App\Models\Siswa;

class HomeController extends Controller
{
    //
    public function index() {
        $berita = Berita::latest()->take(3)->get();
        $galeri = Galeri::latest()->take(4)->get();
        $jmlGuru = Guru::count();
        $jmlSiswa = Siswa::count();
        return view('home.index', compact('berita','galeri','jmlGuru','jmlSiswa'));
    }
}
