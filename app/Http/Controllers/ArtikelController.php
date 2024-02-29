<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Lakukan pencarian artikel berdasarkan judul atau konten
        $artikels = Blog::where('judul', 'like', "%$query%")
            ->orWhere('desc', 'like', "%$query%")
            ->paginate(6);
        return view('berita/berita', ['artikels' => $artikels]);
    }
}
