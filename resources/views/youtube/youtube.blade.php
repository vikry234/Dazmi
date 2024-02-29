@extends('layouts.layouts')

@section('content')
<section id="heroo" style="margin-top: 90px;">
    <div class="container col-xxl-6 text-center text-white">
        <div class="title">
            <div class="hero-text">Video Kegiatan</div>
        </div>
    </div>
</section>

<section id="berita" class="py-5">
    <div class="container">
        <!-- Form pencarian -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('searchyt') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" name="query" placeholder="Cari video...">
                        <button style="background-color: #144171; color: white" class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row pt-4">
            @foreach ($videos as $item)
            <div class="col-lg-4">
                <div class="card-box border-2">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/{{ $item->youtube_code }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <h4 class="fw-bold">{{ $item->judul }}</h4>
                    <p class="mb-3 text-secondary">{{ $item->created_at->format('d M Y') }}</p>
                    <p class="text-secondary">{{ Str::limit(strip_tags($item->desc), 100) }}</p>
                </div>
            </div>
            @endforeach
        </div>
        {{ $videos->links('pagination::bootstrap-4') }}
    </div>
</section>x
@endsection