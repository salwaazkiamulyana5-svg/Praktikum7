<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
     public function formdata() {
        return view('formdata');
    }

    public function output(Request $request) {
        $judul = $request->input('judul');
        $kategori = $request->input('kategori');
        $deskripsi = $request->input('deskripsi');

        return view('output', compact('judul', 'kategori', 'deskripsi'));
    }
}
