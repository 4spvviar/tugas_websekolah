<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;

class EkstrakurikulerController extends Controller
{
    //
    public function index() {
        $ekskul = Ekstrakurikuler::all();
        return view('ekskul.index', compact('ekskul'));
    }
}
