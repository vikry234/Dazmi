<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    public function searchyt(Request $request)
    {
        $query = $request->input('query');

        // Lakukan pencarian artikel berdasarkan judul atau konten
        $videos = Video::where('judul', 'like', "%$query%")
            ->orWhere('id', 'like', "%$query%")
            ->paginate(6);
        return view('youtube/youtube', ['videos' => $videos]);
    }
}
