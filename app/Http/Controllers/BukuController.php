<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        return view('buku.index', [
            'buku' => Buku::all(),
        ]);
    }
    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        try {
            Buku::create($request->only([
                'judul',
                'no_seri',
                'tgl_terbit',
                'penerbit',
                'kategori',
            ]));
        } catch (\Throwable $th) {
            return redirect()->with('error', 'Gagal menambahkan data: ' . $th->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil menambahkan data');
    }

    public function edit(Buku $buku)
    {
        return view('buku.edit', [
            'buku' => $buku,
        ]);
    }

    public function update(Buku $buku, Request $request)
    {
        try {
            $buku->update($request->only([
                'judul',
                'no_seri',
                'tgl_terbit',
                'penerbit',
                'kategori',
            ]));
        } catch (\Throwable $th) {
            return redirect()->with('error', 'Gagal memperbarui data: ' . $th->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil memperbarui data');
    }

    public function destroy(Buku $buku)
    {
        try {
            $buku->delete();
        } catch (\Throwable $th) {
            return redirect()->with('error', 'Gagal menghapus data: ' . $th->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }
}
