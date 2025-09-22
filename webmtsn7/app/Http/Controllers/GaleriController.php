<?php

namespace App\Http\Controllers;

use App\Models\Galeri;

class GaleriController extends Controller
{
    //
     public function index() {
        $galeri = Galeri::all();
        return view('galeri.index', compact('galeri'));
    }
}
