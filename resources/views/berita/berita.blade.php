@extends('layouts.layouts')

@section('content')
{{-- BERITA --}}
<section id="berita" class="py-5" data-aos="zoom-in" style="margin-top: 100px;">
  <div class="container">
    <div class="header-berita text-center">
      <h2 class="fw-bold">Berita Kegiatan Pondok Pesantren</h2>
    </div>

    <div class="row py-5">
      <div class="col-lg-4">
        <div class="card border-0">
          <img src="{{ asset('assets/images/il-berita.png') }}" class="img-fluid mb-3" alt="">
          <div class="konten-berita">
            <p class="mb-3 text-secondary">24/01/2024</p>
            <h4 class="fw-bold mb-3">Dzikir Rutin Malam Juma'at Pondok Pesantren Daarul Azmi</h4>
            <p class="text-secondary">#pesantrenmoderen</p>
            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card border-0">
          <img src="{{ asset('assets/images/il-berita.png') }}" class="img-fluid mb-3" alt="">
          <div class="konten-berita">
            <p class="mb-3 text-secondary">24/01/2024</p>
            <h4 class="fw-bold mb-3">Dzikir Rutin Malam Juma'at Pondok Pesantren Daarul Azmi</h4>
            <p class="text-secondary">#pesantrenmoderen</p>
            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card border-0">
          <img src="{{ asset('assets/images/il-berita.png') }}" class="img-fluid mb-3" alt="">
          <div class="konten-berita">
            <p class="mb-3 text-secondary">24/01/2024</p>
            <h4 class="fw-bold mb-3">Dzikir Rutin Malam Juma'at Pondok Pesantren Daarul Azmi</h4>
            <p class="text-secondary">#pesantrenmoderen</p>
            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-berita text-center">
      <a href="" class="btn btn-outline-danger">Berita Lainnya</a>
    </div>
  </div>
</section>
{{-- BERITA --}}
@endsection