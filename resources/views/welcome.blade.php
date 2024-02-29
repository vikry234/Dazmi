@extends('layouts.layouts')
@section('content')

@include('slider.slider')

{{-- Program --}}
<section id="program" style="margin-top: 50px">
  <div class="text-center">
    <h1 id="arab" class="fw-bold">معهد دار العزم الاسلامى</h1>
  </div>
  <div class="container col-xxl-9">
    <div class="row">
      <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
        <div class="bg-custom rounded-3 p-3 d-flex justify-content-between align-items-center">
          <div>
            <h3 style="margin-top: 10px;">BAHASA <br> ARAB</h3>
          </div>
          <img src="{{ asset('assets/icons/ic-book.png') }}" height="55" width="55" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
        <div class="bg-custom rounded-3 p-3 d-flex justify-content-between align-items-center">
          <div>
            <h3 style="margin-top: 10px;">KITAB <br> KUNING</h3>
          </div>
          <img src="{{ asset('assets/icons/ic-globe.png') }}" height="55" width="55" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
        <div class="bg-custom rounded-3 p-3 d-flex justify-content-between align-items-center">
          <div>
            <h3 style="margin-top: 10px;">NAHWU SHOROF</h3>
          </div>
          <img src="{{ asset('assets/icons/ic-neraca.png') }}" height="55" width="55" alt="">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
        <div class="bg-custom rounded-3 p-3 d-flex justify-content-between align-items-center">
          <div>
            <h3 style="margin-top: 10px;">QUR'AN HADIST</h3>
          </div>
          <img src="{{ asset('assets/icons/book.png') }}" height="55" width="55" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
{{-- Program --}}

{{-- Profile DA --}}
<section id="join" class="py-2">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-lg-6">
        <img src="{{ asset('assets/images/Talim.jpg') }}" class="img-fluid" alt="" data-aos="fade-right">
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
        <img src="{{ asset('assets/images/join1.png') }}" class="img-fluid" alt="" data-aos="fade-up">
      </div>
    </div>
  </div>
</section>

{{-- PIMPINAN --}}
<section id="join" class="bg-light">
  <div class="container col-xxl-8  py-5">
    <div class="row d-flex align-items-center">
      <div class="col-lg-6">
        <img src="{{ asset('assets/images/pimpinan.png') }}" class="img-fluid" width="300" height="307" alt="" data-aos="fade-right">
        <div data-aos="fade-right">
          <p class="profile-box">Kiyai Al-Ustadz Ibnu Mubarok,SHI</p>
        </div>
      </div>
      <div id="profil" class="col-md-6">
        <div class="d-flex align-items-center mb-3">
          <div class="stripe"></div>
          <h1 style="color: #144171;" class="fw-bold">Profile Pimpinan Daarul Azmi</h1>
        </div>
        <p class="mb-3 text-justify ">Bernama Lengkap (Al-Ustadz Kiyai) Ibnu Mubarok, lahir pada tanggal 17 Desember 1985 di Kp. Rawalembang, yang mana menjadi tempat berdirinya juga Pondok Pesantren Daarul Azmi yang dipimpinnya.
        </p>
        <a href="/pimpinan" style="margin-top: 30px;" class="btn btn-outline-primary py-2">Selengkapnya</a>
      </div>
    </div>
  </div>
</section>
{{-- PIMPINAN --}}

{{-- BERITA --}}
<section id="berita">
  <div class="container">
    <div class="header-berita text-center">
      <h1 style="color: #144171;" class="fw-bold">INFO TERBARU</h1>
    </div>

    <div class="row pt-3">
      @foreach ($artikels as $item)
      <div class="col-lg-4" data-aos="zoom-in">
        <div class="card-box border-2">
          <a href="/detail/{{ $item->slug }}">
            <img src="{{ asset('storage/artikel/' . $item->image) }}" class="img-fluid card-img-top" alt="">
          </a>
          <div class="konten-berita">
            <a href="/detail/{{ $item->slug }}">
              <h4 class="fw-bold py-3">{{ Str::limit(strip_tags($item->judul), 20) }}</h4>
            </a>
            <p class="mb-3 text-secondary">
              <i class="far fa-calendar-alt"></i> {{ $item->created_at }}
            </p>
            <p class="text-secondary">{{ Str::limit(strip_tags($item->desc), 150) }}</p>
            <a href="/detail/{{ $item->slug }}" class="text-decoration-none" style="color: #144171;">Selengkapnya</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="footer-berita text-center pb-3">
      <a href="/berita" class="btn btn-outline-primary">Berita Lainnya</a>
    </div>
  </div>
</section>
{{-- BERITA --}}

{{-- INSTAGRAM --}}
<div class="album py-5">
  <div class="container">
    <div class="text-center mb-4">
      <h1 style="color: #144171;" class="fw-bold">INSTAGRAM POST</h1>
    </div>
    <div class="row g-3">
      <!-- LightWidget WIDGET -->
      <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
      <iframe src="//lightwidget.com/widgets/20f68b9f80e85cc38813d8859b0eb70a.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;" title="instagram"></iframe>
    </div>
    <div class="text-center mb-4 mt-5">
      <a href="https://www.instagram.com/ponpes_daarulazmi/" target="_blank">
        <button class="btn btn-outline-primary"> Show More </button>
      </a>
    </div>
  </div>
</div>
{{-- INSTAGRAM --}}

{{-- Foto Kegiatan --}}
<div class="container-fluid bg-light py-5">
  <div class="container d-flex justify-content-between align-items-center mb-5">
    <div class="d-flex align-items-center">
      <div class="stripe-putih me-2"></div>
      <h5 class="gbr fw-bold">FOTO KEGIATAN</h5>
    </div>
    <div>
      <a href="/gallery" class="btn btn-outline-primary">Foto Lainnya</a>
    </div>
  </div>
  <div class="px-lg-5">
    <div class="row" style="color: #144171;">
      @foreach ($photos as $photo)
      <!-- Gallery item -->
      <div class="col-xl-3 col-lg-4 col-md-6 mb-4" data-aos="zoom-out-in">
        <div class="bg-white shadow-sm">
          <a href="{{ asset('/storage/photo/' . $photo->image) }}" style="width: 100%;" data-fancybox="gallery" class="zoomable">
            <img src="{{ asset('/storage/photo/' . $photo->image) }}" alt="" class="img-fluid card-img-top">
          </a>
          <div class="p-4">
            <div class="d-flex align-items-center justify-content-center rounded-pill bg-light px-3 py-2 mt-4">
              <h5 style="color: #144171;" class="gbr">{{ $photo->judul }}</h5>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

{{-- YOUTUBE --}}
<div class="album py-5">
  <div class="container">
    <div class="text-center">
      <h2 style="color: #144171;" class="fw-bold" style="font-size: 30px">YOUTUBE OFFICIAL</h2>
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
    <div class="text-center d-flex justify-content-center pt-4">
      <a class="btn btn-outline-primary" href="https://www.youtube.com/@NgajiSantriChannel">Selengkapnya</a>
    </div>
  </div>
</div>
{{-- YOUTUBE --}}

{{-- Video Kegiatan --}}
<section id="video_youtube" class="pt-2">
  <div class="container">
    <div class="text-center">
      <h2 style="color: #144171;" class="fw-bold">VIDEO KEGIATAN PONDOK PESANTREN</h2>
    </div>

    <div class="row pb-5">
      @foreach ($videos as $item)
      <div class="col-lg-4">
        <iframe width="100%" height="300" src="https://www.youtube.com/embed/{{ $item->youtube_code }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <h4 class="fw-bold">{{ $item->judul }}</h4>
        <p class="mb-3 text-secondary">{{ $item->created_at->format('d M Y') }}</p>
        <p class="text-secondary">{{ Str::limit(strip_tags($item->desc), 100) }}</p>
      </div>
      @endforeach
      <div class="footer-video text-center pt-4">
        <a href="/youtube/{{ $item->slug }}" class="btn btn-outline-primary">Video Lainnya</a>
      </div>
    </div>
  </div>
</section>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- JavaScript Fancybox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

@endsection