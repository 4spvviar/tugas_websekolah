<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $ekstra = Ekstrakurikuler::all();
        return view('ekstrakurikuler.index', compact('ekstra'));
    }

    public function create()
    {
        return view('ekstrakurikuler.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable'
        ]);

        Ekstrakurikuler::create($request->all());
        return redirect()->route('ekstrakurikuler.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(Ekstrakurikuler $ekstrakurikuler)
    {
        return view('ekstrakurikuler.edit', compact('ekstrakurikuler'));
    }

    public function update(Request $request, Ekstrakurikuler $ekstrakurikuler)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'nullable'
        ]);

        $ekstrakurikuler->update($request->all());
        return redirect()->route('ekstrakurikuler.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(Ekstrakurikuler $ekstrakurikuler)
    {
        $ekstrakurikuler->delete();
        return redirect()->route('ekstrakurikuler.index')->with('success', 'Data berhasil dihapus!');
    }
}
