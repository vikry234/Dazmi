@extends('layouts.layouts')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<style>
  .bg-white {
    background-color: #144171;
  }
</style>

<!-- CAROUSELL -->
<style>
  .carousel-inner {
    margin-top: 90px;
    /* Atur tinggi carousel di sini */
  }
</style>
<section>
  <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
      <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('assets/images/banner1.jpg') }}" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('assets/images/banner2.jpg') }}" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('assets/images/banner3.jpg') }}" alt="Third slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('assets/images/banner4.jpg') }}" alt="Fourth slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
  </div>
  <script>
    $(document).ready(function() {
      // Inisialisasi carousel dengan interval 3 detik
      $('#carouselExampleControls').carousel({
        interval: 3000
      });
    });
  </script>
</section>
<!-- carousel -->

{{-- Program --}}
<style>
  .bg-custom {
    background-color: #144171 !important;
    /* Ubah warna latar belakang */
    color: white;
    /* Ubah warna teks */
  }

  #arab {
    color: #144171;
  }

  @media screen and (min-width: 475px) {
    #arab {
      font-size: 30px;
    }
  }

  @media screen and (min-width: 550px) {
    #arab {
      font-size: 60px;
    }
  }
</style>
<section id="" style="margin-top: 50px">
  <div class="text-center">
    <h1 id="arab" class="fw-bold">معاهد دارالنجاح الإسلامية</h1>
  </div>
  <div class="container col-xxl-9">
    <div class="row">
      <div class="col-lg-3 col-md-6 col mb-2">
        <div class="bg-custom rounded-3 p-3 d-flex justify-content-between align-items-center">
          <div>
            <h3 style="margin-top: 10px;">BAHASA <br> ARAB</h3>
          </div>
          <img src="{{ asset('assets/icons/ic-book.png') }}" height="55" width="55" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col mb-2">
        <div class="bg-custom rounded-3 p-3 d-flex justify-content-between align-items-center">
          <div>
            <h3 style="margin-top: 10px;">KITAB <br>KUNING</h3>
          </div>
          <img src="{{ asset('assets/icons/ic-globe.png') }}" height="55" width="55" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col mb-2">
        <div class="bg-custom rounded-3 p-3 d-flex justify-content-between align-items-center">
          <div>
            <h3 style="margin-top: 10px;">NAHWU SHOROF</h3>
          </div>
          <img src="{{ asset('assets/icons/ic-neraca.png') }}" height="55" width="55" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col mb-2">
        <div class="bg-custom rounded-3 p-3 d-flex justify-content-between align-items-center">
          <div>
            <h3 style="margin-top: 10px;">QUR'AN HADIST</h3>
          </div>
          <img src="{{ asset('assets/icons/ic-komputer.png') }}" height="55" width="55" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Program --}}

{{-- Profile DA --}}
<style>
  #join {
    margin-top: 50px;
    margin-bottom: 50px;
  }
</style>
<section id="join" class="py-2">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-lg-6">
        <img src="{{ asset('assets/images/Talim.jpg') }}" class="img-fluid" alt="" data-aos="fade-left">
      </div>
      <div class="col-lg-6">
        <div class="d-flex align-items-center mb-3">
          <div class="stripe me-2"></div>
          <h1 style="color: #144171;" class=" fw-bold mb-2">PROFILE DAARUL AZMI</h1>
        </div>
        <p class="mb-3 text-justify ">Pondok Pesantren Daarul Azmi adalah Lembaga Pendidikan
          Islam yang memiliki visi dan misi dalam pembentukan akhlak dan mental terhadap generasi
          penerus dengan pembekalan pengajaran yang terpadu, yaitu Pendidikan Islam yang berlandaskan pada
          Ahlussunnah wal Jamaah dengan asas pondasi Al-Qur'an dan Sunnah,
          Ijma dan Qiyas, dan berpedoman kepada nilai-nilai Pancasila Indonesia, dan Undang-Undang Dasar 1945.
        </p>
        <a href="/dazmi" class="btn btn-outline-primary">Selengkapnya</a>
      </div>
    </div>
  </div>
</section>
{{-- Profile DA --}}

{{-- Join --}}
<section id="join" class="py-2">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-lg-6">
        <div class="d-flex align-items-center mb-3">
          <div class="stripe me-2"></div>
          <h5 style="color: #144171;">Daftar Santri</h5>
        </div>
        <h1 style="color: #144171;" class="fw-bold mb-2">Gabung sekarang, wujudkan generasi pintar agama dan teknologi</h1>
        <p class="mb-3 text-justify ">Pesantren Daarul Azmi merupakan pesantren terbaik di Jawa Barat Khususnya
          di Kecamatan Gunungsindur, dengan meluluskan santri dan menjadi ustadz terkemuka mendakwahkan
          di berbagai pelosok nusantara
        </p>
        <a href="https://api.whatsapp.com/send?phone=6288292044237" class="btn btn-outline-primary py-2">Selengkapnya</a>
      </div>
      <div class="col-lg-6">
        <img src="{{ asset('assets/images/join.png') }}" class="img-fluid" alt="" data-aos="fade-left">
      </div>
    </div>
  </div>
</section>

{{-- PIMPINAN --}}
<style>
  .profile-box {
    background-color: #144171;
    color: white;
    padding: 10px;
    display: inline-block;
    border-radius: 20px;
    font-family: arial, sans-serif;
    margin-left: 15px;
  }

  .profil {
    margin-left: 50px;
  }
</style>

<section id="join" class="bg-light">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-lg-6">
        <img src="{{ asset('assets/images/pimpinan.png') }}" class="img-fluid" width="300" height="307" alt="" data-aos="fade-left">
        <div>
          <p class="profile-box">Kiyai Al-Ustadz Ibnu Mubarok,SHI</p>
        </div>
      </div>
      <div id="profil" class="col-md-6">
        <div class="d-flex align-items-center mb-3">
          <div class="stripe"></div>
          <h1 style="color: #144171;" class="fw-bold">Profile Pimpinan Daarul Azmi</h1>
        </div>
        <p class="mb-3 text-justify ">Pesantren Daarul Azmi merupakan pesantren terbaik di Jawa Barat Khususnya
          di Kecamatan Gunungsindur, dengan meluluskan santri dan menjadi ustadz terkemuka mendakwahkan
          di berbagai pelosok nusantara
        </p>
        <a href="/pimpinan" style="margin-top: 30px;" class="btn btn-outline-primary py-2">Selengkapnya</a>
      </div>
    </div>
  </div>
</section>
{{-- PIMPINAN --}}

{{-- BERITA --}}
<section id="berita" data-aos="zoom-in">
  <div class="container">
    <div class="header-berita text-center">
      <h2 style="color: #144171;" class="fw-bold">Berita Kegiatan Pondok Pesantren</h2>
    </div>

    <div class="row py-5">
      <div class="col-lg-4">
        <div class="card border-0">
          <img src="{{ asset('assets/images/il-berita.png') }}" class="img-fluid mb-3" alt="">
          <div class="konten-berita">
            <p class="mb-3 text-secondary">24/01/2024</p>
            <h4 class="fw-bold mb-3">Dzikir Rutin Malam Juma'at Pondok Pesantren Daarul Azmi</h4>
            <p class="text-secondary">#pesantrenmoderen</p>
            <a href="" class="text-decoration-none" style="color: #144171;">Selengkapnya</a>
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
            <a href="" class="text-decoration-none" style="color: #144171;">Selengkapnya</a>
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
            <a href="" class="text-decoration-none" style="color: #144171;">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-berita text-center">
      <a href="/berita" class="btn btn-outline-primary">Berita Lainnya</a>
    </div>
  </div>
</section>
{{-- BERITA --}}

{{-- Foto Kegiatan --}}
<style>
  .gbr {
    color: #144171;
  }

  .img-fluid.card-img-top {
    width: 100%;
    height: 220px;
  }

  .card-img-top {
    width: 100%;
    height: 200px;
    /* Tinggi gambar pada grid */
    object-fit: cover;
    /* Memastikan gambar mempertahankan aspek rasio */
  }

  .zoomable {
    overflow: hidden;
    position: relative;
    display: inline-block;
  }

  .zoomable img {
    transition: transform 0.3s ease;
  }

  .zoomable:hover img {
    transform: scale(1.1);
  }

  @media screen and (min-width: 425) {
    .gbr {
      font-size: 10px;
    }
  }
</style>
<section id="foto" class="section-foto parallax pt-5" data-aos="zoom-out-in">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-5">
      <div class="d-flex align-items-center">
        <div class="stripe-putih me-2"></div>
        <h5 class="gbr fw-bold">Foto Kegiatan</h5>
      </div>
      <div>
        <a href="/gallery" class="btn btn-outline-primary">Foto Lainnya</a>
      </div>
    </div>

    <div class="row">
      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm">
          <a href="{{ asset('assets/images/khataman.jpeg') }}" data-lightbox="gallery" class="zoomable">
            <img src="{{ asset('assets/images/khataman.jpeg') }}" alt="" class="img-fluid card-img-top">
          </a>
          <div class="p-4">
            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
              <h5 class="gbr">Khataman <i class="ri-hand-sanitizer-fill"></i></h5>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->
      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm">
          <a href="{{ asset('assets/images/pentasseni.jpg') }}" data-lightbox="gallery" class="zoomable">
            <img src="{{ asset('assets/images/pentasseni.jpg') }}" alt="" class="img-fluid card-img-top">
          </a>
          <div class="p-4">
            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
              <h5 class="gbr">Pentas seni santri</h5>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->
      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm">
          <a href="{{ asset('assets/images/pentasseni2.jpeg') }}" data-lightbox="gallery" class="zoomable">
            <img src="{{ asset('assets/images/pentasseni2.jpeg') }}" alt="" class="img-fluid card-img-top">
          </a>
          <div class="p-4">
            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
              <h5 class="gbr">Pentas seni santri</h5>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->
      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
        <div class="bg-white rounded shadow-sm">
          <a href="{{ asset('assets/images/muhadastah.jpeg') }}" data-lightbox="gallery" class="zoomable">
            <img src="{{ asset('assets/images/muhadastah.jpeg') }}" alt="" class="img-fluid card-img-top">
          </a>
          <div class="p-4">
            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
              <h5 class="gbr">Muhadastah santri</h5>
            </div>
          </div>
        </div>
      </div>
      <!-- End -->
    </div>
  </div>
</section>

{{-- YOUTUBE --}}
<div class="album">
  <div class="container pt-2">
    <div class="text-center">
      <h3 style="color: #144171;" class="display-7 fw-bold text-primary-custom" style="font-size: 30px">YOUTUBE OFFICIAL</h3>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 g-3">
      <div class="col">
        <div class="card shadow-sm">
          <iframe class="embed-responsive-item ytb" src="https://www.youtube.com/embed/TPzKI0R3Mf4?si=CbUBsv5pPFuCT0HX" title="videdo" style="height: 315px"></iframe>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-sm ytb">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pyHC4Dg4Lgg?si=WyatITyQ8quyg37o" style="height:315px" title="video 2"></iframe>
        </div>
      </div>
    </div>
    <div class="text-center d-flex justify-content-center py-5">
      <a class="btn btn-outline-primary" href="https://www.youtube.com/@NgajiSantriChannel">Selengkapnya</a>
    </div>
  </div>
</div>
{{-- YOUTUBE --}}

{{-- Video Kegiatan --}}
<section id="video_youtube" class="py-2" data-aos="zoom-in-up">
  <div class="container">
    <div class="header-berita text-center">
      <h2 style="color: #144171;" class="fw-bold">Video Kegiatan Pondok Pesantren</h2>
    </div>

    <div class="row py-5">
      <div class="col-lg-4">
        <iframe width="100%" height="300" src="https://www.youtube.com/embed/t7YH7r2i0wk?si=NKD8DXBPXmywWK5K" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <div class="col-lg-4">
        <iframe width="100%" height="300" src="https://www.youtube.com/embed/5orzy-uEedM?si=9Xxd3Y1y1JSw9OmW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                  encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
      <div class="col-lg-4">
        <iframe width="100%" height="300" src="https://www.youtube.com/embed/U1rX_hGg_5s?si=y8JqWRdfuGQtNKDI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
                  encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>

    <div class="footer-video text-center">
      <a href="https://www.youtube.com/@NgajiSantriChannel" class="btn btn-outline-primary">Video Lainnya</a>
    </div>
  </div>
</section>


@endsection