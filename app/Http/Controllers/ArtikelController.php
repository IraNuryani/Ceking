<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('artikels', [
            "title" => "Artikel",
            // "artikels" => Artikel::all()
            "artikels" => Artikel::latest()->filter(request(['search']))->get()
        ]);
    }

    public function show(Artikel $artikel)
    {
        return view('artikel', [
            "title" =>"Single Artikel",
            "artikel" => $artikel
        ]);
    }
}
