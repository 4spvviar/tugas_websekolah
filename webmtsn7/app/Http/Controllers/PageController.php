<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
    use Illuminate\Http\Request;
use App\Models\ProfilSekolah;

class PageController extends Controller
{
    // Halaman Beranda
    public function beranda()
    {
        return view('beranda.index');
    }

    // Halaman Profil Sekolah
    public function profil()
    {
        $profil = ProfilSekolah::first(); // ambil data profil dari database
        return view('profil.index', compact('profil'));
    }

    // Halaman Ekstrakurikuler
    public function ekstrakurikuler()
    {
        $ekstrakurikuler = Ekstrakurikuler::all();
        return view('ekstrakurikuler.index', compact('ekstrakurikuler'));
    }

    // Halaman Galeri
    public function galeri()
    {
        return view('galeri.index', compact('galeri'));
    }
}

