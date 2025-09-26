<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all();
        return view('galeri.index', compact('galeri'));
    }

    public function create()
    {
        return view('galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|url'
        ]);

        Galeri::create($request->all());
        return redirect()->route('galeri.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(Galeri $galeri)
    {
        return view('galeri.edit', compact('galeri'));
    }

    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|url'
        ]);

        $galeri->update($request->all());
        return redirect()->route('galeri.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(Galeri $galeri)
    {
        $galeri->delete();
        return redirect()->route('galeri.index')->with('success', 'Data berhasil dihapus!');
    }
}
