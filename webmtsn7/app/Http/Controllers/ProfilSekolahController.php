<?php

namespace App\Http\Controllers;
use App\Models\ProfilSekolah;

class ProfilSekolahController extends Controller
{
    //
     public function index() {
        $profil = ProfilSekolah::first();
        return view('profil.index', compact('profil'));
    }
}
