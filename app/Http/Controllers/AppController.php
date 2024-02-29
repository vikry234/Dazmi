<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Photo;
use App\Models\Sarana;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $slider = Slider::where('status', '0')->get();
        $artikels = Blog::Latest('id', 'desc')->limit(3)->get();
        $videos = Video::Latest('id')->limit(3)->get();
        $photos = Photo::Latest('id', 'desc')->limit(4)->get();
        $sarana = Sarana::Latest('id', 'desc')->limit(4)->get();

        return view('welcome', compact('slider', 'artikels', 'videos', 'photos', 'sarana'));
    }


    public function berita()
    {
        $artikels = Blog::orderBy('id', 'desc')->paginate(6); // Ubah 5 menjadi jumlah artikel per halaman yang diinginkan
        return view('berita.berita', [
            'artikels' => $artikels
        ]);
    }


    public function youtube()
    {
        $videos = Video::latest('id')->paginate(6); // Mengambil foto terbaru dan membaginya menjadi halaman dengan 8 foto per halaman
        return view('youtube.youtube', ['videos' => $videos]);
    }

    public function sarana()
    {
        $saranas = Sarana::latest()->paginate(8); // Fetch latest Sarana items and paginate with 8 items per page
        return view('sarana.sarana', ['saranas' => $saranas]); // Pass the variable with correct name to the view
    }



    public function gallery()
    {
        $photos = Photo::latest()->paginate(8); // Mengambil foto terbaru dan membaginya menjadi halaman dengan 8 foto per halaman
        return view('gallery.gallery', ['photos' => $photos]);
    }


    public function detail($slug)
    {
        // Ambil berita yang sedang dilihat
        $artikel = Blog::where('slug', $slug)->first();

        // Ambil berita lainnya, kecuali berita yang sedang dilihat
        $beritaLainnya = Blog::where('slug', '!=', $slug)->latest()->limit(6)->get();

        return view('berita.detail', [
            'artikel' => $artikel,
            'beritaLainnya' => $beritaLainnya
        ]);
    }
}
