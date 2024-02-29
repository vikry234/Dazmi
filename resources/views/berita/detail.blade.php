@extends('layouts.layouts')
@section('content')
<style>
    .sticky-top {
        padding-top: 25%;
        position: sticky;
    }

    #gasi {
        text-decoration: none;
    }

    .berita-lainnya-img {
        width: 100%;
        height: auto;
    }

    .berita-lainnya-menu {
        position: sticky;
        top: 50px;
    }

    .head {
        background-color: #144171;
        color: white;
        padding: 5px;
        border-radius: 20px;
        margin-bottom: 10px;
        font-family: arial, sans-serif;
    }

    .cari {
        position: sticky;
        margin-bottom: 10px;
    }

    .bold:hover {
        color: #144171;
    }
</style>
<section id="detail" style="margin-top: 100px;" class="py-5">
    <div class="container">
        <div class="row">
            <!-- Sisi kiri: Detail berita -->
            <div class="col-md-8">
                <div id="gasi" class="d-flex mb-3">
                    <a href="{{ route('home') }}">Home</a> / <a href="/berita">Berita</a> / {{ Str::limit(strip_tags($artikel->judul), 15) }}
                </div>
                <p class="mb-3 text-secondary">{{ $artikel->created_at->format('d M Y') }}</p>
                <h1 class="mb-3">{{ $artikel->judul }}</h1>
                <img src="{{ asset('storage/artikel/' . $artikel->image) }}" class="img-fluid mb-3" alt="">
                <div class="konten-berita">
                    <p class="text-secondary">{!! $artikel->desc !!}</p>
                </div>
            </div>
            <!-- Sisi kanan: Daftar berita lainnya -->
            <div class="col-md-4 berita-lainnya-menu">
                <div class="sticky-top">
                    <div class="cari">
                        <form action="{{ route('search') }}" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" name="query" placeholder="Cari artikel...">
                                <button style="background-color: #144171; color: white" class="btn btn-primary" type="submit">Cari</button>
                            </div>
                        </form>
                    </div>
                    <div class="head text-center">
                        <h5 class="fst-italic">Berita Lainnya</h5>
                    </div>
                    <ul class="list-group">
                        <div class="position-sticky" style="top: 2rem;">
                            <div>
                                <ul class="list-unstyled">
                                    @foreach ($beritaLainnya as $berita)
                                    <li>
                                        <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="/detail/{{ $berita->slug }}">
                                            <img src="{{ asset('storage/artikel/' . $berita->image) }}" class="berita-lainnya-img img-fluid card-img-top" alt="Image" style="width: 150px; height: auto;">
                                            <div class="col-lg-8">
                                                <h5 class="bold">{{ Str::limit(strip_tags($berita->judul), 30) }}
                                                </h5>
                                                <p style="font-size: 15px;" class="im-fluid text-secondary">{{ Str::limit(strip_tags($berita->desc), 80) }}</p>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="text-center">
                                    <a href="/berita" class="btn btn-outline-primary">Berita Lainnya</a>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection