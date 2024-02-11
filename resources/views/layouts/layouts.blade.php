<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shurtcut icon" href="{{ asset('assets/icons/logoDA.png') }}">

  <title>Pondok Pesantren Daarul Azmi</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <!-- magnific -->
  <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">

</head>

<body>
  <style>
    .footer-text {
      color: black;
    }
  </style>

  {{-- NAVBAR --}}
  @include('layouts.navbar')

  {{-- CONTENT --}}
  @yield('content')

  {{-- Footer KONTAK --}}
  <section id="kontak" class="bg-footer">
    <div class="container py-4">
      <footer>
        <div class="row">
          {{-- Kolom 1 Navigasi --}}
          <div class="col-12 col-md-3 mb-3">
            <h5 class="fw-bold mb--3">Navigasi</h5>
            <div class="d-flex footer-text">
              <ul class="nav flex-column me-5">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Berita Sekolah</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kegiatan Sekolah</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Gallery Sekolah</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Kegiatan Sosial</a></li>
              </ul>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Alumni</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Info PSB</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Prestasi</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Video Kegiatan</a></li>
              </ul>
            </div>
          </div>


          {{-- Kolom 2 Media Sosl --}}
          <div class="col-12 col-md-3 mb-3">
            <h5 class="fw-bold mb-3">Ikuti Kami</h5>
            <div class="d-flex mb-3">
              <a href="https://www.instagram.com/ponpes_daarulazmi/" target="_blank" class="text-decoration-none text-dark">
                <img src="{{ asset('assets/icons/ig.svg') }}" height="30" width="30" class="me-4" alt="">
              </a>
              <a href="https://www.tiktok.com/@ngajisantrichannel?_t=8a5EjNWrjAf&_r=1" target="_blank" class="text-decoration-none text-dark">
                <img src="{{ asset('assets/icons/tiktok.svg') }}" height="30" width="30" class="me-4" alt="">
              </a>
              <a href="https://www.youtube.com/@NgajiSantriChannel" target="_blank" class="text-decoration-none text-dark">
                <img src="{{ asset('assets/icons/yt.svg') }}" height="30" width="30" class="me-4" alt="">
              </a>
            </div>
          </div>



          {{-- Kolom 3 Alamat --}}
          <div class="col-12 col-md-3 mb-3">
            <h5 class="font-inter fw-bold mb-3">Alamat Pesantren Daarul Azmi</h5>
            <p>Kp. Rawalembang RT 03/11, Desa Cibinong Kecamatan Gunungsindur, Kabupaten Bogor 16340</p>
          </div>

          {{-- Kolom 4 Kontak --}}
          <div class="col-12 col-md-3 mb-3">
            <h5 class="font-inter fw-bold mb-3">Kontak Kami</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <div class="d-flex align-items-center">
                  <img src="{{ asset('assets/icons/gmail.png') }}" width="30" height="30" alt="">
                  <a href="mailto:ponpesdaarulazmiofficial@gmail.com" class="nav-link p-0 text-muted ms-2">Gmail</a>
                </div>
              </li>
              <li class="nav-item mb-2">
                <div class="d-flex align-items-center">
                  <img src="{{ asset('assets/icons/whatsapp.png') }}" width="30" height="30" alt="">
                  <a href="https://api.whatsapp.com/send?phone=6288292044237" class="nav-link p-0 text-muted ms-2">Whatsapp</a>
                </div>
              </li>
            </ul>
          </div>


        </div>
      </footer>
    </div>
  </section>

  {{-- Footer --}}
  <footer class="footer">
    <p class="footer__copy">&#169; Pondok Pesantren DaarulAzmi. All right reserved 2024</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <!-- jquery -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="{{ asset('assets/js/magnific.js') }}"></script>



  </div>
</body>

</html>