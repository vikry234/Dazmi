@extends('layouts.layouts')

@section('content')

{{-- BERITA --}}
<section id="heroo" style="margin-top: 90px;">
  <div class="container col-xxl-6 text-center text-white">
    <div class="title">
      <div class="hero-text">Berita</div>
    </div>
  </div>
</section>

<section id="berita" class="py-5">
  <div class=" container">
    <!-- Form pencarian -->
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="{{ route('search') }}" method="GET">
          <div class="input-group">
            <input type="text" class="form-control" name="query" placeholder="Cari artikel...">
            <button style="background-color: #144171; color: white" class="btn btn-primary" type="submit">Cari</button>
          </div>
        </form>
      </div>
    </div>
    <div class="row pt-4">
      @foreach ($artikels as $item)
      <div class="col-lg-4">
        <div class="card-box border-2" data-lightbox="gallery" class="zoomable">
          <a href="/detail/{{ $item->slug }}">
            <img src="{{ asset('storage/artikel/' . $item->image) }}" class="img-fluid card-img-top" alt="">
          </a>
          <div class="konten-berita">
            <a href="/detail/{{ $item->slug }}">
              <h4 class="fw-bold mb-3">{{ Str::limit(strip_tags($item->judul), 20) }}</h4>
            </a>
            <p class="mb-3 text-secondary">
              <i class="far fa-calendar-alt"></i> {{ $item->created_at }}
            </p>
            <p class="text-secondary">{{ Str::limit(strip_tags($item->desc), 100) }}</p>
            <a href="/detail/{{ $item->slug }}" class="text-decoration-none" style="color: #144171;">Selengkapnya</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    {{ $artikels->links('pagination::bootstrap-4') }}
  </div>
</section>

{{-- BERITA --}}
@endsection